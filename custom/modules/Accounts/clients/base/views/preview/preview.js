/**
 * Created by jlopezb on 11/12/2017.
 */
({
    extendsFrom: 'PreviewView',


    initialize: function(options){
        this._super('initialize', [options]);

        app.events.on("preview:render", this._hide_fields, this);
        this.model.on('data:sync:complete', this._hide_fields, this);
    },

    /**
     * Se llama cuando se completa el sincronización de los datos
     *
     * Se evalúa el valor del campo do_not_call para mostrar en la etiquetes
     * si la persona es contactable o no contactable
     * @param model
     * @param collection
     * @param fetch
     * @param previewId
     */
    _hide_fields : function(model, collection, fetch, previewId){

        console.log("DESDE HIDE FIELDS PREVIEW SYNC");


    },

    /**
     * Called when rendering the field
     * @private
     */
    _render: function () {
        this._super('_render');

        //Se oculta segundo apellido
        console.log("DESDE RENDER PREVIEW");
    }

})