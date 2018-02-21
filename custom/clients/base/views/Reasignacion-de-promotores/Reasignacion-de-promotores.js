/**
 * Created by Jorge on 7/17/2015.
 */
/**
 * Created by Jorge on 6/1/2015.
 */
({

    className: 'Reasignacion-de-promotores tcenter',

    events: {
        'click #btn_Cuentas': 'buscarCuentas',
        'click #btn_ReAsignar': 'reAsignarCuentas',
        'click .selected': 'seleccionarCuentas',
        'click #btn_STodo': 'seleccionarTodo',
        'click #next_offset': 'nextOffset',
        'click #previous_offset': 'previousOffset',
        'change #filtroCliente': '_setOffset',
    },

    initialize: function(options){
        this._super("initialize", [options]);

        this.cuentas = '';
        this.seleccionados = [];
        this.model.on('change:assigned_user_id', this._setOffset, this);

        this.loadView = false;
        app.api.call("read", app.api.buildURL("UserRoles", null, null, {
        }), null, {
            success: _.bind(function (data) {
                var roleReasignacionPromotores = false;
                _.each(data, function (key, value) {

                    if (key == "Reasignacion de Promotores") {
                        roleReasignacionPromotores = true;
                    }
                });

                if(roleReasignacionPromotores == true){
                    this.obtenerProductosUsuario();
                    this.loadView = true;
                    this.render();
                }else{
                    var route = app.router.buildRoute(this.module, null, '');
                    app.router.navigate(route, {trigger: true});
                }

            }, this)
        });

    },

    _setOffset: function (){
        $("#offset_value").attr("from_set", 0);
        $("#crossSeleccionados").val("");
    },

    seleccionarTodo: function(e){
       
        var btnState = $(e.target).attr("btnState");
        if(btnState == "Off"){
            $(e.target).attr("btnState", "On");
        }else{
            $(e.target).attr("btnState", "Off");
        }

        $('.selected').each(function (index, value) {
            if(btnState == "On"){
                $(value).attr("checked", true);
            }else{
                $(value).attr("checked", false);
            }
        });

        var seleccionarTodo = [];
        var crossSeleccionados = $("#crossSeleccionados").val();
        if(!_.isEmpty(crossSeleccionados)) {
            seleccionarTodo = JSON.parse(crossSeleccionados);
        }

        if($('.selected').attr("checked")) {
            $(this.cuentas).each(function (index, value) {
                seleccionarTodo.push(value.id);
            });
        }else{
            seleccionarTodo = [];
        }

        this.seleccionados = seleccionarTodo;
        $("#crossSeleccionados").val(JSON.stringify(this.seleccionados));
    },

    nextOffset: function(){
        var current_set = $("#offset_value").html();
        var from_set = $("#offset_value").attr("from_set");
        var next_from_set = parseInt(from_set) + 20;
        var to_set = $("#offset_value").attr("to_set");
        var next_to_set = parseInt(to_set) + 20;

        if(next_to_set > this.total){
            next_to_set = this.total;

            if(from_set > 0){
                next_from_set = from_set;
            }else{
                next_from_set = next_from_set;
            }
        }

        $("#offset_value").html(current_set);
        $("#offset_value").attr("from_set", next_from_set);
        $("#offset_value").attr("to_set", next_to_set);
        this.buscarCuentas();
    },

    previousOffset: function(){
        var current_set = $("#offset_value").html();
        var from_set = $("#offset_value").attr("from_set");
        var next_from_set = parseInt(from_set) - 20;
        var to_set = $("#offset_value").attr("to_set");
        var next_to_set = parseInt(to_set) - 20;

        if(next_from_set < 0){
            next_from_set = 0;
            next_to_set = 20;
        }

        $("#offset_value").html(current_set);
        $("#offset_value").attr("from_set", next_from_set);
        $("#offset_value").attr("to_set", next_to_set);
        this.buscarCuentas();
    },

    buscarCuentas: function(){

        var assigneUsr = this.model.get('assigned_user_id');
        if(_.isEmpty(assigneUsr) || _.isUndefined(assigneUsr) || assigneUsr == "") {
            var alertOptions = {
                title: "Porfavor, seleccione un Promotor",
                level: "error"
            };
            app.alert.show('validation', alertOptions);
            return;
        }

        var producto_seleccionado = $("#Productos").val();
        var from_set = $("#offset_value").attr("from_set");
        var to_set = $("#offset_value").attr("to_set");
        var current_set = $("#offset_value").html();
        var from_set_num = parseInt(from_set);
        var filtroCliente = $("#filtroCliente").val();

        var crossSeleccionados = $("#crossSeleccionados").val();

        if(isNaN(from_set_num)){
            from_set_num = 0;
        }
        assigneUsr += "?PRODUCTO=" + producto_seleccionado + "?" + from_set_num + "?" + filtroCliente;

        if(!_.isEmpty(assigneUsr) && !_.isUndefined(assigneUsr) && assigneUsr != "") {
            this.seleccionados = [];
            $('#successful').hide();
            $('#processing').show();
            app.api.call("read", app.api.buildURL("ReasignaciondePromotoresBusqueda/" + assigneUsr, null, null, {}), null, {
                success: _.bind(function (data) {
                    console.log(typeof data);
                    console.log(data);
                    if (data.total <= 0) {
                        var alertOptions = {
                            title: "No se encontraron clientes para el usuario seleccionado del producto: " + producto_seleccionado,
                            level: "error"
                        };
                        app.alert.show('validation', alertOptions);
                        $('#processing').hide();
                        return;
                    }
                    $('#processing').hide();
                    this.cuentas = typeof data=="string"?null:data.cuentas;

                    this.total = data.total;
                    this.total_cuentas = data.total_cuentas;
                    this.render();
                    $("#Productos").val(producto_seleccionado);

                    if(to_set > this.total){
                        to_set = this.total;
                    }else{
                        to_set = from_set_num + data.total_cuentas;
                    }

                    current_set = (parseInt(from_set) + 1) + " a " + to_set + " de " + this.total;
                    if(_.isEmpty(from_set)){
                        from_set = 0;
                        to_set = 20;

                        if(to_set > this.total){
                            to_set = this.total;
                        }

                        current_set = (parseInt(from_set) + 1) + " a " + to_set + " de " + this.total;
                    }
                    $("#offset_value").html(current_set);
                    $("#offset_value").attr("from_set", from_set);
                    $("#offset_value").attr("to_set", to_set);
                    $("#filtroCliente").val(filtroCliente);

                    if(!_.isEmpty(crossSeleccionados)) {
                        this.seleccionados = JSON.parse(crossSeleccionados);
                        $("#crossSeleccionados").val(JSON.stringify(this.seleccionados));

                        $(this.seleccionados).each(function (index, selected) {
                            $('.selected').each(function (index, value) {

                                if(selected == value.value){
                                    $(value).attr("checked", true);
                                }

                            });

                        });
                    }
                }, this)
            });
        }else{
            var alertOptions = {
                title: "Porfavor, seleccione un Promotor",
                level: "error"
            };
            app.alert.show('validation', alertOptions);
        }
    },

    seleccionarCuentas: function(e){

        var seleccionarTodo = [];
        var crossSeleccionados = $("#crossSeleccionados").val();
        if(!_.isEmpty(crossSeleccionados)) {
            seleccionarTodo = JSON.parse(crossSeleccionados);
        }

        if($(e.target).attr("checked")){
            seleccionarTodo.push($(e.target).val());
            this.seleccionados = seleccionarTodo;
        }else{
            var itemToRemove = $(e.target).val();
            var seleccionadosClone = seleccionarTodo;
            var seleccionadosCleaned = [];
            this.seleccionados = [];
            $(seleccionadosClone).each(function( index,value ) {
                if(value != itemToRemove){
                    seleccionadosCleaned.push(value);
                }
            });
            this.seleccionados = seleccionadosCleaned;
        }

        $("#crossSeleccionados").val(JSON.stringify(this.seleccionados));
    },

    reAsignarCuentas: function(){
        var reAssignarA = this.model.get('asignar_a_promotor_id');
        if(!_.isEmpty(reAssignarA)) {
            var parametros = this.seleccionados;
            var producto_seleccionado = $("#Productos").val();
            if(!_.isEmpty(parametros)) {
                var Params = {
                    'seleccionados': parametros,
                    'reAssignado': reAssignarA,
                    'producto_seleccionado': producto_seleccionado,
                };
                $('#processing').show();
                var dnbProfileUrl = app.api.buildURL("reAsignarCuentas", '', {}, {});
                app.api.call("create", dnbProfileUrl, {data: Params}, {
                    success: _.bind(function (data) {
                        console.log(typeof data);
                        if(data==true){
                            $('#processing').hide();
                            this.cuentas = [];
                            this.seleccionados = [];
                            this.render();
                            $('#successful').show();
                        }else{
                            $('#processing').hide();
                            var alertOptions = {
                                title: "El tipo de producto entre promotor actual y reasignado debe ser el mismo",
                                level: "error"
                            };
                            app.alert.show('validation', alertOptions);
                        }
                    }, this)
                });
            }else{
                var alertOptions = {
                    title: "No hay clientes seleccionadas para reasignar",
                    level: "error"
                };
                app.alert.show('validation', alertOptions);
            }
        }else{
            var alertOptions = {
                title: "Porfavor, seleccione un Promotor Destino",
                level: "error"
            };
            app.alert.show('validation', alertOptions);
        }
    },

    obtenerProductosUsuario: function (){
        var userId = App.user.id;
        this.productos_list = [];
        var productos_label = app.lang.getAppListStrings('tipo_producto_list');

        app.api.call("read", app.api.buildURL("Users/" + userId, null, null, {}), null, {
            success: _.bind(function (data) {

                var list_html = '';
                _.each(data.productos_c, function(value, key) {
                    list_html += '<option value="' + productos_label[value] + '">' + productos_label[value] + '</option>';
                });

                this.productos_list = list_html;
                this.render();
            }, this)
        });
    },

})
