({
    extendsFrom: 'CreateView',
    tipoDePersona: null,
    prospecto: null,
    productoUsuario: null,
    multiProducto: null,
    productos: null,
    initialize: function (options) {
        self = this;
        this._super("initialize", [options]);

        this.model.addValidationTask('check_activos_seleccionados', _.bind(this.validaClientesActivos, this));
        this.model.addValidationTask('check_activos_index', _.bind(this.validaActivoIndex, this));
        this.model.addValidationTask('check_aforo', _.bind(this.valiaAforo, this));
        this.model.addValidationTask('check_factoraje', _.bind(this.validaRequeridosFactoraje, this));
        this.model.addValidationTask('check_condicionesFinancieras', _.bind(this.condicionesFinancierasCheck, this));
        this.model.addValidationTask('check_condicionesFinancierasIncremento', _.bind(this.condicionesFinancierasIncrementoCheck, this));

        //Validación para evitar asociar una Persona que no sea cliente
        this.model.addValidationTask('check_person_type', _.bind(this.personTypeCheck, this));


        this.model.on("change:porciento_ri_c", _.bind(this.calcularRI, this));
        this.model.on("change:ca_importe_enganche_c", _.bind(this.calcularPorcientoRI, this));

        /*@author Carlos Zaragoza Ortiz
         * @version 1
         * @date 12/10/2015
         * Validar la cantidad de operaciones que se pueden generar para un cliente/Prospecto (solo una)
         * @type Event
         * */
        this.model.addValidationTask('check_operaciones_permitidas', _.bind(this.validaOperacionesPermitidasPorCuenta, this));

        /*@author Carlos Zaragoza Ortiz
         * @version 1
         * @date 12/10/2015
         * Validar la cantidad de operaciones que se pueden generar para un cliente/Prospecto (solo una)
         * @type Event
         * */
        //this.model.addValidationTask('check_valida_activo', _.bind(this.validaActivo, this));
        //this.model.addValidationTask('check_valida_subactivo', _.bind(this.validaSubActivo, this));
        //this.model.addValidationTask('check_valida_subactivo2', _.bind(this.validaSubActivo2, this));
        //this.model.addValidationTask('check_valida_subactivo3', _.bind(this.validaSubActivo3, this));

        //this.model.addValidationTask('check_valida_multiactivo', _.bind(this.validaMultiactivo, this));

        this.model.addValidationTask('check_condiciones_financieras', _.bind(this.validaCondicionesFinanceras, this));
        //this.model.addValidationTask('check_requeridos', _.bind(this.validaDatosRequeridos, this));

        /*
         * @author Carlos Zaragoza Ortiz
         * @version 1
         * Ocultar opciones de cotización, contrato y línea de crédito al crear la oportunidad y bloquear el campo. Los cambios posteriores se controlan desde UNICS
         * */
        var new_opctions = app.lang.getAppListStrings('tipo_operacion_list');
        Object.keys(new_opctions).forEach(function(key){
            if(key == 2 || key == 3 || key == 4){
                delete new_opctions[key];
            }
        });
        this.model.fields['tipo_operacion_c'].options = new_opctions;

        /*
         * @author Carlos Zaragoza Ortiz
         * @version 1
         * Quitar de la lista el elemento de crédito automotriz.
         * */
        var opciones_producto = app.lang.getAppListStrings('tipo_producto_list');
        Object.keys(opciones_producto).forEach(function(key){
            if( key == 2 || key == 5 || key == 3){
                delete opciones_producto[key];
            }
        });
        this.model.fields['tipo_producto_c'].options = opciones_producto;

        /*
         * @author Carlos Zaragoza Ortiz
         * @version 1
         * En operaciones de solicitud de crédito quitar opción de pipeline en lista de Forecast
         * */
        /*
         var opciones_forecast = app.lang.getAppListStrings('forecast_list');
         var operacion = this.model.get('tipo_operacion_c');
         Object.keys(opciones_forecast).forEach(function(key){
         if(key == "Pipeline"){
         if(operacion == 1){
         delete opciones_forecast[key];
         }
         }

         });
         this.model.fields['forecast_c'].options = opciones_forecast;
         */

        //Obtiene fecha default para fecha de cierre, debe ser el ultimo día del mes corriente
        /*
         var fecha = new Date();
         var f = new Date(fecha.getFullYear(), fecha.getMonth() + 1, 1) - (24*60*60*1000);
         var FechaCierre = new Date(f);
         this.model.set('date_closed', FechaCierre.getFullYear() + '-' + (FechaCierre.getMonth()+1) + '-' + FechaCierre.getDate());
         */
        this.model.addValidationTask('check_monto_c', _.bind(this._ValidateAmount, this));
        this.model.on('change:tipo_producto_c', this._ActualizaEtiquetas, this);

        var usuario = app.data.createBean('Users',{id:app.user.get('id')});
        usuario.fetch({
            success: _.bind(function(modelo) {
                //console.log("Encontro al usuario");
                //console.log("Producto");
                //console.log(modelo.get('tipodeproducto_c'));
                this.productos = modelo.get('productos_c');
                this.productoUsuario = modelo.get('tipodeproducto_c');
                this.multiProducto = modelo.get('multiproducto_c');


                var op = app.lang.getAppListStrings('tipo_producto_list');
                var op2 = {};
                for (id in this.productos){
                    op2[this.productos[id]] = op[this.productos[id]];
                }
                var lista = this.getField('tipo_producto_c');
                lista.items = op2;
                lista.render();

                if(this.productos[0] == "4"){
                    this.model.set('tipo_producto_c','4');
                    //console.log("FACTORAJE");
                }else if(this.productos[0] == "1"){
                    this.model.set('tipo_producto_c','1');
                    //console.log("LEASING");
                }else if(this.productos[0] == "3"){
                    this.model.set('tipo_producto_c','3');
                    //console.log("AUTMOTRIZ");
                }else if(this.productos[0] == "2"){
                    this.model.set('tipo_producto_c','3');
                    //console.log("3");
                }
                else if(this.productos[0] == "5"){
                    this.model.set('tipo_producto_c','5');
                    //console.log("5");
                }

            },this)
        });
        /*
         * @author Carlos Zaragoza Ortiz
         * @version 1
         * Crear estatus "Oportunidad de prospecto" y validar en la creación de la oportunidad si el estatus con el que debe nacer es "Oportunidad de prospecto" o "Integración de expediente" (\custom\modules\Opportunities\clients\base\views\create-actions\create-actions.js)
         * */
        this.verificaOperacionProspecto();

        this.getCurrentYearMonth("loading");
        this.model.on("change:anio_c", _.bind(this.getCurrentYearMonth, this));
    },

    _render: function() {
        this._super("_render");
        this.obtieneCondicionesFinancieras();
        this.model.on("change:plazo_c", _.bind(function(){
            this.obtieneCondicionesFinancieras();
        },this));
        // CVV - 28/03/2016 - Se reemplaza por control de condiciones financieras
        this.model.on("change:es_multiactivo_c", _.bind(function(){
            if(this.model.get('es_multiactivo_c')==true){
                this.model.set('activo_c','');
            }else{
                this.model.set('multiactivo_c','');
            }
        },this));
        this.$('div[data-name=plazo_ratificado_incremento_c]').hide();
        this.model.on("change:f_tipo_factoraje_c", _.bind(function(){
            if(this.model.get('f_tipo_factoraje_c') == '1'){
                this.model.set('f_aforo_c','10.000000');
            }else if(this.model.get('f_tipo_factoraje_c')=='4'){
                this.model.set('f_aforo_c','0.000000');
            }else{
                this.model.set('f_aforo_c','0.000000');
            }
        },this));

        //* Quitamos los campos Vendedor y Comisión
        this.$('div[data-name=opportunities_ag_vendedores_1_name]').hide();
        this.$('div[data-name=comision_c]').hide();

        this.model.on("change:tipo_producto_c", _.bind(function(){
            if(this.model.get('tipo_producto_c') == '4'){
                if(this.tipoDePersona){
                    app.alert.show("tipoPersonaFisica", {
                        level: "error",
                        title: "No puedes generar factoraje para Personas Fisicas",
                        autoClose: false
                    });
                    this.model.set('tipo_producto_c','1');
                }
                this.obtieneCondicionesFinancieras();
            }
            if(this.model.get('tipo_producto_c') == '4'){
                //Oculta los campos
                this.$('div[data-name=activo_c]').hide();
                this.$('div[data-name=sub_activo_c]').hide();
                this.$('div[data-name=sub_activo_2_c]').hide();
                this.$('div[data-name=sub_activo_3_c]').hide();
            }

            this.obtieneCondicionesFinancieras();
            this.verificaOperacionProspecto();
        },this));

        /*
         * @author Carlos Zaragoza
         * @version 1
         * Validamos que se pueda usar el campo vacío en el forecast. Agregar opción "…" en forecast time para indicar que se cierra este mes (esta opción se selecciona en automático si la fecha de cierre está dentro del mes corriente) Si la fecha de cierre esta fuera del mes corriente calcular si es 30, 60, etc.
         * */
        // CVV - 28/03/2016 - El campo de fecha de cierre se elimino del layout
        /*
         this.model.on("change:date_closed", _.bind(function() {
         var fecha_cierre = this.model.get('date_closed');
         var fecha_actual = new Date();
         fecha_cierre  = new Date(fecha_cierre+"T12:00:00Z");
         var months;
         months = (fecha_cierre.getFullYear() - fecha_actual.getFullYear()) * 12;
         months -= fecha_actual.getMonth();
         months += fecha_cierre.getMonth();

         if(months == 0 ){
         this.model.set('forecast_time_c',"");
         }
         if(months == 1){
         this.model.set('forecast_time_c',"30");
         }
         if(months == 2){
         this.model.set('forecast_time_c',"60");
         }
         if(months == 3){
         this.model.set('forecast_time_c',"90");
         }
         if(months >= 4){
         this.model.set('forecast_time_c',"90mas");
         }
         },this));
         */
        /* END CUSTOMIZATION */

        this.model.on("change:monto_c", _.bind(function() {
            if (this.model.get('amount') == null || this.model.get('amount') == ''){
                this.model.set('amount',this.model.get('monto_c'));
            }else{
                if(parseFloat(this.model.get('amount')) > parseFloat(this.model.get('monto_c'))){
                    app.alert.show("Monto a operar invalido", {
                        level: "error",
                        title: "El monto a operar no puede ser mayor al monto de la linea.",
                        autoClose: false
                    });
                    this.model.set('amount',this.model.get('monto_c'));
                }
            }
        },this));

        this.model.on("change:amount", _.bind(function() {
            if(parseFloat(this.model.get('amount')) > parseFloat(this.model.get('monto_c'))){
                app.alert.show("Moto a operar invalido", {
                    level: "error",
                    title: "El monto a operar no puede ser mayor al monto de la linea.",
                    autoClose: false
                });
                this.model.set('amount',this.model.get('monto_c'));
            }
        },this));

        this.model.on("change:account_id", _.bind(function(){
            this.verificaOperacionProspecto();
        },this));

        // CVV - 28/03/2016 - Los campos de activo se reemplazaron por el control de condiciones financieras
        /*
         this.model.on("change:activo_c", _.bind(function(){
         //console.log("Activo cambió");
         //console.log(this.model.get('sub_activo_c'));
         this.model.set('sub_activo_c','');
         },this));

         this.model.on("change:sub_activo_c", _.bind(function(){
         //console.log("Activo cambió");
         //console.log(this.model.get('sub_activo_c'));
         this.model.set('sub_activo_2_c','');
         },this));

         this.model.on("change:sub_activo_2_c", _.bind(function(){
         //console.log("Activo cambió");
         //console.log(this.model.get('sub_activo_c'));
         this.model.set('sub_activo_3_c','');
         },this));
         */

        //Actualiza las etiquetas de acuerdo al tipo de operacion Solicitud/Cotizacion
        //Si la operacion es Cotización o Contrato cambiar etiqueta de "Monto de línea" a "Monto colocación"
        if (this.model.get('tipo_operacion_c') == '3' || this.model.get('tipo_operacion_c') == '4'){
            this.$("div.record-label[data-name='monto_c']").text("Monto colocaci\u00F3n");
            this.$("div.record-label[data-name='tipo_de_operacion_c']").text("Tipo de operaci\u00F3n");
        }
        else{
            this.$("div.record-label[data-name='monto_c']").text("Monto de l\u00EDnea");
            this.$("div.record-label[data-name='tipo_de_operacion_c']").text("Tipo de solicitud");
        }
        if (this.model.get('tipo_operacion_c') == '1' && this.model.get('tipo_de_operacion_c') == 'RATIFICACION_INCREMENTO'){
            this.$("div.record-label[data-name='monto_c']").text("Monto del incremento");
        }
        if(this.model.get('tipo_producto_c')=='1'){
            this.$("div.record-label[data-name='ca_importe_enganche_c']").text("Renta Inicial");
        }else{
            this.$("div.record-label[data-name='ca_importe_enganche_c']").text("Enganche");

        }
        if(this.model.get('tipo_producto_c')=='4'){
            this.$("div.record-label[data-name='porcentaje_ca_c']").text("Comisi\u00F3n");
        }else{
            this.$("div.record-label[data-name='porcentaje_ca_c']").text("Comisi\u00F3n por apertura");

        }
        if(this.model.get('tipo_producto_c')=='3'){
            this.$("div.record-label[data-name='porcentaje_renta_inicial_c']").text("Porcentaje de Enganche");
        }else{
            this.$("div.record-label[data-name='porcentaje_renta_inicial_c']").text("Porcentaje Renta Inicial");

        }

        //console.log(this.model.get('ratificacion_incremento_c'));
        if(this.model.get('ratificacion_incremento_c')==false){
            //Oculta campos para condiciones financieras
            //this.$('div[data-name=ri_ca_tasa_c]').hide();
            //this.$('div[data-name=ri_deposito_garantia_c]').hide();
            this.$('div[data-name=ri_porcentaje_ca_c]').hide();
            //this.$('div[data-name=ri_porcentaje_renta_inicial_c]').hide();
            //this.$('div[data-name=ri_vrc_c]').hide();
            //this.$('div[data-name=ri_vri_c]').hide();
            this.$('div[data-name=monto_ratificacion_increment_c]').hide();
            this.$('div[data-name=plazo_ratificado_incremento_c]').hide();
            this.$('div[data-name=ri_usuario_bo_c]').hide();
        }else{
            //Prende los campos
            //this.$('div[data-name=ri_ca_tasa_c]').show();
            //this.$('div[data-name=ri_deposito_garantia_c]').show();
            this.$('div[data-name=ri_porcentaje_ca_c]').show();
            //this.$('div[data-name=ri_porcentaje_renta_inicial_c]').show();
            //this.$('div[data-name=ri_vrc_c]').show();
            //this.$('div[data-name=ri_vri_c]').show();
            this.$('div[data-name=monto_ratificacion_increment_c]').show();
            this.$('div[data-name=plazo_ratificado_incremento_c]').show();
            this.$('div[data-name=ri_usuario_bo_c]').show();
        }
    },

    _ValidateAmount: function (fields, errors, callback){
        if (parseFloat(this.model.get('monto_c')) <= 0)
        {
            errors['monto_c'] = errors['monto_c'] || {};
            errors['monto_c'].required = true;
        }

        if (parseFloat(this.model.get('amount')) <= 0)
        {
            errors['amount'] = errors['amount'] || {};
            errors['amount'].required = true;
        }

        if (parseFloat(this.model.get('ca_pago_mensual_c')) <= 0)
        {
            errors['ca_pago_mensual_c'] = errors['ca_pago_mensual_c'] || {};
            errors['ca_pago_mensual_c'].required = true;
        }

        callback(null, fields, errors);
    },

    getCustomSaveOptions: function(options) {
        this.createdModel = this.model;
        // since we are in a drawer
        this.listContext = this.context.parent || this.context;
        this.originalSuccess = options.success;

        var success = _.bind(function(model) {
            this.originalSuccess(model);
        }, this);

        return {
            success: success
        };
    },

    validaActivoIndex: function(fields, errors, callback){
        //CVV - 28/03/2016 - Modulo de condiciones financieras
        /*var activo = this.model.get('activo_c');
         var subactivo = this.model.get('sub_activo_c');
         var subactivo2 = this.model.get('sub_activo_2_c');
         var subactivo3 = this.model.get('sub_activo_3_c');
         var index_c;
         var id_c;
         var field_activo;
         var field_activo_compara;
         if(activo != undefined && subactivo != undefined && subactivo2 != undefined && subactivo3 != undefined){
         field_activo = this.model.get('sub_activo_2_c');
         field_activo_compara = this.model.get('sub_activo_3_c');
         }
         if(activo != undefined && subactivo != undefined && subactivo2 != undefined && subactivo3 == undefined){
         field_activo = this.model.get('sub_activo_c');
         field_activo_compara = this.model.get('sub_activo_2_c');
         }
         if(activo != undefined && subactivo != undefined && subactivo2 == undefined && subactivo3 == undefined){
         field_activo = this.model.get('activo_c');
         field_activo_compara = this.model.get('sub_activo_c');
         }
         if(activo != undefined && subactivo == undefined && subactivo2 == undefined && subactivo3 == undefined){
         field_activo = this.model.get('activo_c');
         field_activo_compara = this.model.get('activo_c');
         }
         if(activo != undefined && subactivo == "" && subactivo2 == undefined && subactivo3 == undefined){
         field_activo = this.model.get('activo_c');
         field_activo_compara = this.model.get('activo_c');
         }
         var activo_subactivo_url = app.api.buildURL('ActivoAPI?activo=' + field_activo,
         null, null, null);

         app.api.call('READ', activo_subactivo_url, {}, {
         success: _.bind(function (data) {
         $.each(data, function( index, value ) {
         if(field_activo_compara == value){
         index_c = value;
         id_c = index;
         }
         });
         this.model.set('id_activo_c', id_c);
         this.model.set('index_activo_c', index_c);
         }, this)
         });*/
        // Obtener el primer activo del control de condiciones financieras
        this.model.set('id_activo_c', "97");
        this.model.set('index_activo_c', "000100030001");
        callback(null,fields,errors)
    },

    validaClientesActivos: function(fields, errors, callback){
        var account = app.data.createBean('Accounts', {id:this.model.get('account_id')});
        account.fetch({
            success: _.bind(function (model) {
                if (model.get('estatus_persona_c') == 'I') {
                    app.error.errorName2Keys['custom_message'] = 'No se puede iniciar operacion en una cuenta inactiva';
                    errors['account_name'] = errors['account_name'] || {};
                    errors['account_name'].custom_message = true;
                }
                callback(null, fields, errors);
            }, this)
        });

    },
    verificaOperacionProspecto: function(){
        var account = app.data.createBean('Accounts', {id:this.model.get('account_id')});
        account.fetch({
            success: _.bind(function (modelo) {
                //Asignamos el promotor del producto para la operación
                var producto = parseInt(this.model.get('tipo_producto_c'));
                switch (producto){
                    case 3:
                        id:promotor = modelo.get('user_id2_c');
                        break;
                    case 4:
                        id:promotor = modelo.get('user_id1_c');
                        break;
                    default:
                        id:promotor = modelo.get('user_id_c');
                        break;
                }
                var usuario = app.data.createBean('Users',{id:promotor});
                usuario.fetch({
                    success: _.bind(function(data) {
                        this.model.set("assigned_user_id", data.get('id'));
                        this.model.set("assigned_user_name", data.get('name'));
                    },this)
                });

                //Verificamos la lista a mostrar:
                this.tipo = modelo.get('tipo_registro_c');
                //console.log("Registro: " + modelo.get('tipo_registro_c'));
                if ( modelo.get('tipo_registro_c') != 'Cliente' ){
                    //Si es prospecto ponemos como primer registro el value 'OP'
                    //console.log(this.model.fields['estatus_c']);
                    this.model.set('estatus_c','OP');
                }
                if ( modelo.get('tipo_registro_c') == 'Cliente' ){
                    //Si es prospecto ponemos como primer registro el value 'OP'
                    //console.log(this.model.fields['estatus_c']);
                    this.model.set('estatus_c','P');
                }
                // 0000080: El sistema permite crear una operación de tipo Factoraje para una PF
                // todo pendiente
                if( modelo.get('tipodepersona_c')=='Persona Fisica' && modelo.get('id') != null){
                    this.tipoDePersona = true;
                    //console.log("Cambiamos a tipo producto leasing");
                    this.model.set('tipo_producto_c','1');
                }else{
                    this.tipoDePersona = false;
                }
                if( modelo.get('tipo_registro_c') =='Prospecto'){
                    this.prospecto = true;
                }else{
                    this.prospecto = false;
                }
            }, this)
        });
    },
    /*@author Carlos Zaragoza Ortiz
     * @version 1
     * @date 12/10/2015
     * Validar la cantidad de operaciones que se pueden generar para un cliente/Prospecto (solo una)
     * @type Function
     * */
    validaOperacionesPermitidasPorCuenta: function(fields, errors, callback){
        //Controlamos la solicitud del servicio:
        var OppParams = {
            'id_c': this.model.get('account_id'),
        };
        var urlOperaciones = app.api.buildURL("Opportunities/Operaciones", '', {}, {});
        app.api.call("create", urlOperaciones, {data: OppParams}, {
            success: _.bind(function (data) {
                if (data != null) {
                    //console.log(data);
                    var cantidad = data['cantidad'];
                    //console.log("Cantidad de operaciones" + cantidad);
                    if (cantidad > 0) {
                        app.alert.show("Cantidad de operaciones", {
                            level: "error",
                            title: "No puedes generar m&aacute;s de una operaci&oacute;n para prospectos.",
                            autoClose: false
                        });
                        app.error.errorName2Keys['custom_message'] = 'Solo puede tener una operacion como prospecto ';
                        errors['account_name'] = errors['account_name'] || {};
                        errors['account_name'].custom_message = true;

                        //this.cancelClicked();
                        callback(null, fields, errors);
                    } else {
                        callback(null, fields, errors);
                    }
                }
            }, this)
        });

    },
    _ActualizaEtiquetas: function(){
        if(this.model.get('tipo_producto_c')=='4'){
            this.$("div.record-label[data-name='plazo_c']").text("Plazo máximo en d\u00EDas");
            this.$("div.record-label[data-name='porcentaje_ca_c']").text("Comisi\u00F3n");
        }else{
            this.$("div.record-label[data-name='plazo_c']").text("Plazo en meses");
            this.$("div.record-label[data-name='porcentaje_ca_c']").text("Comisi\u00F3n por apertura");
        }
        if(this.model.get('tipo_producto_c')=='1'){
            this.$("div.record-label[data-name='ca_importe_enganche_c']").text("Renta Inicial");
        }else if (this.model.get('tipo_producto_c')=='3'){
            this.$("div.record-label[data-name='ca_importe_enganche_c']").text("Enganche");

        }
        // CVV - 28/03/2016 - Se reemplaza por control de condiciones financieras
        /*
         if(this.model.get('tipo_producto_c')=='3'){
         this.$("div.record-label[data-name='porcentaje_renta_inicial_c']").text("Porcentaje de Enganche");
         }else{
         this.$("div.record-label[data-name='porcentaje_renta_inicial_c']").text("Porcentaje Renta Inicial");
         }
         */
    },
    // CVV - 28/03/2016 - Se reemplaza por modulo de condiciones financieras
    /*
     validaActivo: function (fields, errors, callback){
     //console.log(this.model.get('activo_c'));
     if(this.model.get('tipo_producto_c')!='4' && this.model.get('es_multiactivo_c') == false) {
     if (this.model.get('activo_c') == undefined || this.model.get('activo_c') == "") {
     app.alert.show("TodosActivos", {
     level: "error",
     title: "Selecciona el activo",
     autoClose: true
     });
     errors['activo_c'] = errors['activo_c'] || {};
     errors['activo_c'].required = true;
     }
     }
     callback(null, fields, errors);
     },

     validaSubActivo: function (fields, errors, callback){
     //console.log(this.model.get('sub_activo_c'));
     if(this.model.get('tipo_producto_c')!='4' && this.model.get('es_multiactivo_c') == false){
     if( this.model.get('sub_activo_c')==undefined ||  this.model.get('sub_activo_c') == ""){
     app.alert.show("TodosActivos1", {
     level: "error",
     title: "Selecciona el Sub activo",
     autoClose: true
     });
     errors['sub_activo_c'] = errors['sub_activo_c'] || {};
     errors['sub_activo_c'].required = true;
     }
     }
     callback(null, fields, errors);
     },
     validaSubActivo2: function (fields, errors, callback){
     //console.log(this.model.get('sub_activo_2_c'));
     if(this.model.get('tipo_producto_c')!='4' && this.model.get('es_multiactivo_c') == false) {
     if (this.model.get('sub_activo_2_c') == undefined || this.model.get('sub_activo_2_c') == "") {
     app.alert.show("TodosActivos2", {
     level: "error",
     title: "Selecciona el tipo de activo",
     autoClose: true
     });
     errors['sub_activo_2_c'] = errors['sub_activo_2_c'] || {};
     errors['sub_activo_2_c'].required = true;
     }
     }
     callback(null, fields, errors);
     },
     validaSubActivo3: function (fields, errors, callback){
     // console.log(this.model.get('sub_activo_3_c'));
     if(this.model.get('tipo_producto_c')!='4' && this.model.get('es_multiactivo_c') == false) {
     if (this.model.get('sub_activo_3_c') == undefined || this.model.get('sub_activo_3_c') == "") {
     app.alert.show("TodosActivos3", {
     level: "error",
     title: "Selecciona la Marca",
     autoClose: true
     });
     errors['sub_activo_3_c'] = errors['sub_activo_3_c'] || {};
     errors['sub_activo_3_c'].required = true;
     }
     }
     callback(null, fields, errors);
     },
     */
    valiaAforo: function (fields, errors, callback){
        if(this.model.get('tipo_producto_c')=='4'){
            if(Number(this.model.get('f_aforo_c')) >= 0.000000) {

                if (this.model.get('f_tipo_factoraje_c') == '1') {
                    if (Number(this.model.get('f_aforo_c')) < 10.000000) {
                        app.alert.show("aforoMinimo", {
                            level: "error",
                            title: "El aforo para Cobranza Delegada con Recurso debe ser m\u00EDnimo 10 %",
                            autoClose: false
                        });
                        errors['f_aforo_c'] = errors['f_aforo_c'] || {};
                        errors['f_aforo_c'].required = true;
                        // el valor minimo es 10.000000%
                    }
                }
            }else{
                app.alert.show("aforoNegativo", {
                    level: "error",
                    title: "El aforo no puede ser negativo",
                    autoClose: false
                });
                errors['f_aforo_c'] = errors['f_aforo_c'] || {};
                errors['f_aforo_c'].required = true;
            }
        }


        callback(null, fields, errors);
    },
    validaRequeridosFactoraje: function(fields, errors, callback){
        //console.log(this.model.get('f_aforo_c'));
        //console.log(this.model.get('f_tipo_factoraje_c'));
        if(this.model.get('tipo_producto_c')=='4'){
            if(this.model.get('f_tipo_factoraje_c') == undefined || this.model.get('f_tipo_factoraje_c') == ""){
                //error
                errors['f_tipo_factoraje_c'] = errors['f_tipo_factoraje_c'] || {};
                errors['f_tipo_factoraje_c'].required = true;
            }
            if(this.model.get('f_aforo_c') == "" || (Number(this.model.get('f_aforo_c'))<0 || Number(this.model.get('f_aforo_c'))>99.999999)){
                //error
                errors['f_aforo_c'] = errors['f_aforo_c'] || {};
                errors['f_aforo_c'].required = true;
            }
            if(this.model.get('tipo_tasa_ordinario_c') == undefined || this.model.get('tipo_tasa_ordinario_c') == ""){
                //error
                errors['tipo_tasa_ordinario_c'] = errors['tipo_tasa_ordinario_c'] || {};
                errors['tipo_tasa_ordinario_c'].required = true;
            }
            if(this.model.get('instrumento_c') == undefined || this.model.get('instrumento_c') == ""){
                //error
                errors['instrumento_c'] = errors['instrumento_c'] || {};
                errors['instrumento_c'].required = true;
            }
            if(this.model.get('puntos_sobre_tasa_c') == "" || (Number(this.model.get('puntos_sobre_tasa_c'))<0 || Number(this.model.get('puntos_sobre_tasa_c'))>99.999999)){
                //error
                errors['puntos_sobre_tasa_c'] = errors['puntos_sobre_tasa_c'] || {};
                errors['puntos_sobre_tasa_c'].required = true;
            }
            if(this.model.get('tipo_tasa_moratorio_c') == undefined || this.model.get('tipo_tasa_moratorio_c') == ""){
                //error
                errors['tipo_tasa_moratorio_c'] = errors['tipo_tasa_moratorio_c'] || {};
                errors['tipo_tasa_moratorio_c'].required = true;
            }
            if(this.model.get('instrumento_moratorio_c') == undefined || this.model.get('instrumento_moratorio_c') == ""){
                //error
                errors['instrumento_moratorio_c'] = errors['instrumento_moratorio_c'] || {};
                errors['instrumento_moratorio_c'].required = true;
            }
            if(this.model.get('puntos_tasa_moratorio_c') == "" || (Number(this.model.get('puntos_tasa_moratorio_c'))<0 || Number(this.model.get('puntos_tasa_moratorio_c'))>99.999999)){
                //error
                errors['puntos_tasa_moratorio_c'] = errors['puntos_tasa_moratorio_c'] || {};
                errors['puntos_tasa_moratorio_c'].required = true;
            }
            if(this.model.get('factor_moratorio_c') == "" || (Number(this.model.get('factor_moratorio_c'))<0 || Number(this.model.get('factor_moratorio_c'))>99.999999)){
                //error
                errors['factor_moratorio_c'] = errors['factor_moratorio_c'] || {};
                errors['factor_moratorio_c'].required = true;
            }
            if(this.model.get('cartera_descontar_c') == "" ){
                //error
                errors['cartera_descontar_c'] = errors['cartera_descontar_c'] || {};
                errors['cartera_descontar_c'].required = true;
            }
            /*
             console.log(this.model.get('tasa_fija_ordinario_c'));
             console.log('tasa_fija_ordinario_c');
             if(this.model.get('tasa_fija_ordinario_c') == null ||this.model.get('tasa_fija_ordinario_c') == "" || (Number(this.model.get('tasa_fija_ordinario_c'))<0 || Number(this.model.get('tasa_fija_ordinario_c'))>99.999999)){
             //error
             errors['tasa_fija_ordinario_c'] = errors['tasa_fija_ordinario_c'] || {};
             errors['tasa_fija_ordinario_c'].required = true;
             }
             if(this.model.get('tasa_fija_moratorio_c') == null ||this.model.get('tasa_fija_moratorio_c') == "" || (Number(this.model.get('tasa_fija_moratorio_c'))<0 || Number(this.model.get('tasa_fija_moratorio_c'))>99.999999)){
             //error
             errors['tasa_fija_moratorio_c'] = errors['tasa_fija_moratorio_c'] || {};
             errors['tasa_fija_moratorio_c'].required = true;
             }
             */
        }
        callback(null, fields, errors);
    },
    // CVV - 28/03/2016 - Se sustituye por modulo de condiciones financieras
    /************/
    validaMultiactivo: function(fields, errors, callback){
        // console.log("Valida MultiActivo");
        if(this.model.get('es_multiactivo_c')==true){
            this.model.set('activo_c','');
            var activos = new String(this.model.get('multiactivo_c'));
            // console.log(activos);
            //  console.log(typeof activos);
            var arrActivos = activos.split(",");
            // console.log(arrActivos);
            //  console.log(typeof arrActivos);
            //  console.log(arrActivos.length);

            if(arrActivos.length<=1){
                errors['multiactivo_c'] = errors['multiactivo_c'] || {};
                errors['multiactivo_c'].required = true;
            }
        }
        callback(null, fields, errors);
    },/**/
    obtieneCondicionesFinancieras: function(){
        /*
         * Obtiene las condidionces financieras
         * */
        if(this.model.get('tipo_producto_c')=='4') {
            var OppParams = {
                'plazo_c': this.model.get('plazo_c'),
                'tipo_producto_c': this.model.get('tipo_producto_c'),
            };
            //console.log(OppParams);
            var dnbProfileUrl = app.api.buildURL("Opportunities/CondicionesFinancieras", '', {}, {});
            app.api.call("create", dnbProfileUrl, {data: OppParams}, {
                success: _.bind(function (data) {
                    if (data != null) {
                        //CVV - 28/03/2016 - Se reemplaza por control de condiciones financieras
                        /*
                         if(this.model.get('tipo_producto_c')=='1'){
                         this.model.set('porcentaje_ca_c',data.porcentaje_ca_c);
                         this.model.set('vrc_c',data.vrc_c);
                         this.model.set('vri_c',data.vri_c);
                         this.model.set('ca_tasa_c',data.ca_tasa_c);
                         this.model.set('porcentaje_renta_inicial_c',data.porcentaje_renta_inicial_c);
                         }else if(this.model.get('tipo_producto_c')=='3'){
                         this.model.set('ca_tasa_c',data.ca_tasa_c);
                         this.model.set('porcentaje_ca_c',data.porcentaje_ca_c);
                         this.model.set('porcentaje_renta_inicial_c',data.porcentaje_renta_inicial_c);
                         this.model.set('vrc_c','0.0');
                         this.model.set('vri_c','0.0');
                         }else */
                        if (this.model.get('tipo_producto_c') == '4') {
                            //this.model.set('ca_tasa_c',data.ca_tasa_c);
                            this.model.set('puntos_sobre_tasa_c', data.ca_tasa_c);
                            this.model.set('porcentaje_ca_c', data.porcentaje_ca_c);
                            //this.model.set('porcentaje_renta_inicial_c','0.0');
                            //this.model.set('vrc_c','0.0');
                            //this.model.set('vri_c','0.0');
                        }

                    }
                }, this)
            });
        }
    },

    validaCondicionesFinanceras: function(fields, errors, callback){
        // CVV - 28/03/2016 - Se reemplaza por control de condiciones financieras
        /*if(this.model.get('tipo_producto_c')=='1'){ //Leasing
         if(Number(this.model.get('ca_tasa_c'))>=100 || Number(this.model.get('ca_tasa_c')<0) || this.model.get('ca_tasa_c')==''){
         errors['ca_tasa_c'] = errors['ca_tasa_c'] || {};
         errors['ca_tasa_c'].required = true;
         }
         if(Number(this.model.get('porcentaje_ca_c'))>=100 || Number(this.model.get('porcentaje_ca_c')<0 || this.model.get('porcentaje_ca_c')=='')){
         errors['porcentaje_ca_c'] = errors['porcentaje_ca_c'] || {};
         errors['porcentaje_ca_c'].required = true;
         }
         if(Number(this.model.get('vrc_c'))>=100 || Number(this.model.get('vrc_c')<0) || this.model.get('vrc_c') == ''){
         errors['vrc_c'] = errors['vrc_c'] || {};
         errors['vrc_c'].required = true;
         }
         if(Number(this.model.get('porcentaje_renta_inicial_c'))>=100 || Number(this.model.get('porcentaje_renta_inicial_c')<0) || this.model.get('porcentaje_renta_inicial_c') == ''){
         errors['porcentaje_renta_inicial_c'] = errors['porcentaje_renta_inicial_c'] || {};
         errors['porcentaje_renta_inicial_c'].required = true;
         }
         if(Number(this.model.get('vri_c'))>=100 || Number(this.model.get('vri_c')<0) || this.model.get('vri_c') == ''){
         errors['vri_c'] = errors['vri_c'] || {};
         errors['vri_c'].required = true;
         }
         }
         if(this.model.get('tipo_producto_c')=='3'){ //CA
         if(Number(this.model.get('ca_tasa_c'))>=100 || Number(this.model.get('ca_tasa_c')<0) || this.model.get('ca_tasa_c')==''){
         errors['ca_tasa_c'] = errors['ca_tasa_c'] || {};
         errors['ca_tasa_c'].required = true;
         }
         if(Number(this.model.get('porcentaje_ca_c'))>=100 || Number(this.model.get('porcentaje_ca_c')<0) || this.model.get('porcentaje_ca_c') == ''){
         errors['porcentaje_ca_c'] = errors['porcentaje_ca_c'] || {};
         errors['porcentaje_ca_c'].required = true;
         }
         if(Number(this.model.get('porcentaje_renta_inicial_c'))>=100 || Number(this.model.get('porcentaje_renta_inicial_c')<0) || this.model.get('porcentaje_renta_inicial_c') == ''){
         errors['porcentaje_renta_inicial_c'] = errors['porcentaje_renta_inicial_c'] || {};
         errors['porcentaje_renta_inicial_c'].required = true;
         }

         }*/
        if(this.model.get('tipo_producto_c')=='4'){ //Factoraje
            if(Number(this.model.get('puntos_sobre_tasa_c'))>=100 || Number(this.model.get('puntos_sobre_tasa_c')<0) || this.model.get('puntos_sobre_tasa_c') == ''){
                errors['puntos_sobre_tasa_c'] = errors['puntos_sobre_tasa_c'] || {};
                errors['puntos_sobre_tasa_c'].required = true;
            }
            if(Number(this.model.get('porcentaje_ca_c'))>=100 || Number(this.model.get('porcentaje_ca_c')<0) || this.model.get('porcentaje_ca_c') == ''){
                errors['porcentaje_ca_c'] = errors['porcentaje_ca_c'] || {};
                errors['porcentaje_ca_c'].required = true;
            }
        }
        callback(null, fields, errors);
    },

    getCurrentYearMonth: function(stage){

        var currentYear = (new Date).getFullYear();
        var currentMonth = (new Date).getMonth();
        var currentDay = (new Date).getDate();
        //currentMonth += 1;

        if(currentDay < 10){
            currentMonth += 1;
        }
        if(currentDay >= 10){
            currentMonth += 2;
        }

        var opciones_year = app.lang.getAppListStrings('anio_list');
        Object.keys(opciones_year).forEach(function(key){
            if(key < currentYear){
                delete opciones_year[key];
            }
        });
        this.model.fields['anio_c'].options = opciones_year;

        var opciones_mes = app.lang.getAppListStrings('mes_list');
        if(this.model.get("anio_c") <= currentYear){
            Object.keys(opciones_mes).forEach(function(key){
                if(key < currentMonth){
                    delete opciones_mes[key];
                }
            });
        }

        this.model.fields['mes_c'].options = opciones_mes;

        if(stage != "loading"){
            this.render();
        }
    },

    condicionesFinancierasCheck: function(fields, errors, callback){

        if(this.model.get("tipo_operacion_c") == 1 && this.model.get("tipo_producto_c")!=4) {
            if (_.isEmpty(this.model.get('condiciones_financieras'))) {
                errors[$(".addCondicionFinanciera")] = errors['condiciones_financieras'] || {};
                errors[$(".addCondicionFinanciera")].required = true;

                $('.condiciones_financieras').css('border-color', 'red');
                app.alert.show("CondicionFinanciera requerida", {
                    level: "error",
                    title: "Al menos una Condicion Financiera es requerida.",
                    autoClose: false
                });
            }
        }
        callback(null, fields, errors);
    },

    condicionesFinancierasIncrementoCheck: function(fields, errors, callback){

        if(this.model.get("ratificacion_incremento_c") == 1 && this.model.get("tipo_operacion_c") == 2 && this.model.get("tipo_producto_c")!=4) {
            if (_.isEmpty(this.model.get('condiciones_financieras_incremento_ratificacion'))) {
                errors[$(".add_incremento_CondicionFinanciera")] = errors['condiciones_financieras_incremento_ratificacion'] || {};
                errors[$(".add_incremento_CondicionFinanciera")].required = true;

                $('.condiciones_financieras_incremento_ratificacion').css('border-color', 'red');
                app.alert.show("CondicionFinanciera requerida", {
                    level: "error",
                    title: "Al menos una Condicion Financiera de Incremento/Ratificacion es requerida.",
                    autoClose: false
                });
            }
        }
        callback(null, fields, errors);
    },

    personTypeCheck:function(fields, errors, callback) {
        var self=this;
        var tipo_registro;
        //id de la Persona asociada
        var id_person=this.model.get('account_id');


        app.api.call('GET', app.api.buildURL('Accounts/' + id_person ), null, {
            success: _.bind(function(data){
                if(data!=null){

                    if(data.tipo_registro_c!=='Cliente') {

                        app.alert.show("Cliente no v\u00E1lido", {
                            level: "error",
                            title: "No se puede asociar la operaci\u00F3n a una Persona que no sea de tipo Cliente",
                            autoClose: false
                        });

                        app.error.errorName2Keys['custom_message1'] = 'La persona asociada debe ser tipo Cliente';
                        errors['account_name'] = errors['account_name'] || {};
                        errors['account_name'].custom_message1 = true;
                        //this.cancelClicked();
                        callback(null, fields, errors);
                    } else {
                        callback(null, fields, errors);
                    }

                }
            },this),
        });

        //Obtener tipo de registro de la Persona

        /*
         var personBean = app.data.createBean('Accounts', {id:id_person});

         personBean.fetch({'success':function () {

         tipo_registro = personBean.get('tipo_registro_c');
         if (tipo_registro!=='Cliente')
         {
         //errors['account_id'] = errors['account_name'] || {};
         //errors['account_name'].required = true;

         //errors['account_name'] = errors['account_name'] || {};

         app.alert.show("Cliente no v\u00E1lido", {
         level: "error",
         title: "La persona asociada debe ser tipo Cliente",
         autoClose: false
         });
         self.model.set('account_name','');
         self.model.set('account_id','');
         }

         self.render();

         }});


         callback(null, fields, errors);

         */
    },



    calcularRI: function(){

        if(!_.isEmpty(this.model.get("amount")) && !_.isEmpty(this.model.get("porciento_ri_c")) && this.model.get("porciento_ri_c") != 0){
            var percent = (this.model.get("amount") * this.model.get("porciento_ri_c") ) / 100;
            this.model.set("ca_importe_enganche_c", percent);
        }
    },

    calcularPorcientoRI: function(){

        if(!_.isEmpty(this.model.get("amount")) && !_.isEmpty(this.model.get("ca_importe_enganche_c")) && this.model.get("ca_importe_enganche_c") != 0){
            var percent = ((this.model.get("ca_importe_enganche_c") * 100) / this.model.get("amount")).toFixed(2);
            this.model.set("porciento_ri_c", percent);
        }
    },

    /*
     validaDatosRequeridos: function(fields, errors, callback){
     console.log("Entro a validacion de mes");
     console.log(this.model.get('mes_c'));
     if(this.model.get('mes_c') == null || this.model.get('mes_c') == ''){
     errors['mes_c'] = errors['mes_c'] || {};
     errors['mes_c'].required = true;
     }
     callback(null, fields, errors);
     },
     */

    _dispose: function() {
        this._super('_dispose', []);
    }
})