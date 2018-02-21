<?php
global $current_user, $sugar_config;
$AccountId = $_REQUEST['idPersona'];

/* Vars para URL del servidor de dashlets */
$DASHLET_URL = $sugar_config['uni2_url'];
?>


<!DOCTYPE html>

<html lang="es" class="blue">

<meta http-equiv="X-UA-Compatible" content="IE=11;chrome=1"/>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
<script type="text/javascript" src="<?php echo $DASHLET_URL; ?>./VAADIN/widgetsets/com.unifin.MyAppWidgetset/com.unifin.MyAppWidgetset.nocache.js?1459265572684"></script>
<link rel="stylesheet" href="<?php echo $DASHLET_URL; ?>./VAADIN/widgetsets/com.unifin.MyAppWidgetset/csvalidation/styles.css"/>
<link rel="stylesheet" href="<?php echo $DASHLET_URL; ?>./VAADIN/widgetsets/com.unifin.MyAppWidgetset/grid-util.css?v=1.0.1"/>
<script src="<?php echo $DASHLET_URL; ?>./VAADIN/widgetsets/com.unifin.MyAppWidgetset/7872C2947D404073C9CC917026FE0F16.cache.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $DASHLET_URL; ?>./VAADIN/themes/mytheme/styles.css?v=7.6.0"/>


<style type="text/css">
    section {
        display: none;
    }
    body.tasks section.tasks,
    body.detail section.detail {
        display: block;
    }
    .v-tooltip {
        background-color: #323232;
        background-color: rgba(50, 50, 50, 0.9);
        -webkit-box-shadow: 0 2px 12px rgba(0, 0, 0, 0.2);
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.2);
        color: white;
        padding: 5px 9px;
        border-radius: 3px;
        max-width: 35em;
        overflow: hidden !important;
        font-size: 14px;
    }

    .v-tooltip div[style*="width"] {
        width: auto !important;
    }

    .v-tooltip .v-tooltip-text {
        max-height: 10em;
        overflow: auto;
        margin-top: 10px;
    }

    .v-tooltip .v-errormessage[aria-hidden="true"] + .v-tooltip-text {
        margin-top: 0;
    }

    .v-tooltip h1, .mytheme .v-tooltip h2, .mytheme .v-tooltip h3, .mytheme .v-tooltip h4 {
        color: inherit;
    }


</style>


<body class="tasks">
<!-- Se agregan las credenciales de Vaddin para las peticiones, permitiendo las cookies de sesi�n -->
<script>
    XMLHttpRequest.prototype._originalSend = XMLHttpRequest.prototype.send;
    var sendWithCredentials = function(data) {
        this.withCredentials = true;
        this._originalSend(data);
    };
    XMLHttpRequest.prototype.send = sendWithCredentials;
</script>



<!-- Carga Widgets de Vaadin as� como el archivo bootstrats.js -->

<script type="text/javascript"
        src="<?php echo $DASHLET_URL; ?>VAADIN/vaadinBootstrap.js">
</script>



<!-- First dashlet; Embeddes Vaadin dashlet that shows the user Activiti tasks -->

<section class="tasks">
    <div style="width: 100%; border: 0px solid red; height: 100%;" id="expediente" class="v-app">
        <!-- Optional placeholder for the loading indicator -->
        <div class=" v-app-loading"></div>
        <!-- Alternative fallback text -->
        <noscript>Se requiere habilitar javascript en el browser para visualizar el dashlet.</noscript>
    </div>
</section>


<section>
    <div id="mensaje"></div>
</section>



<script type="text/javascript">
    <!-- Start the Vaadin application from $DASHLET_URL -->
    window.onload = function() {
        if (!window.vaadin) alert("Failed to load the Vaadin bootstrap");
        vaadin.initApplication("expediente", {
            "browserDetailsUrl": "<?php echo $DASHLET_URL; ?>admonLineasCredito/",
            "serviceUrl": "<?php echo $DASHLET_URL; ?>admonLineasCredito/",
            "widgetset": "com.unifin.MyAppWidgetset",
            "theme": "mytheme",
            "versionInfo": {"vaadinVersion": "7.6.0"},
            "vaadinDir": "<?php echo $DASHLET_URL; ?>VAADIN/",
            "heartbeatInterval": 3000,
            "standalone": false,
            "debug": false,
        });

        var text = '{ "idPersona":"<?=$AccountId;?>" , "userName":"<?=$current_user->user_name;?>"}';
        console.log(text);
        var parametros = JSON.parse(text);
        console.log(parametros);
        cargaCompleta = function() {
            obtieneParametros(parametros);
        }
    };

</script>

<style>
    @font-face {
        font-family: Flaticon2;
        font-weight: normal;
        font-style: normal;
        src: url('custom/Levementum/CustomEntryPoints/fonts/miscellaneous-elements/Flaticon.eot');
        src: url('custom/Levementum/CustomEntryPoints/fonts/miscellaneous-elements/Flaticon.eot?#iefix') format('embedded-opentype'), url('custom/Levementum/CustomEntryPoints/fonts/miscellaneous-elements/Flaticon.woff') format('woff'), url('custom/Levementum/CustomEntryPoints/fonts/miscellaneous-elements/Flaticon.ttf') format('truetype'), url('custom/Levementum/CustomEntryPoints/fonts/miscellaneous-elements/Flaticon.svg#Flaticon2') format('svg');
    }
    @font-face {
        font-family: Flaticon;
        font-weight: normal;
        font-style: normal;
        src: url(custom/Levementum/CustomEntryPoints/fonts/interface-icon-assets/Flaticon.eot);
        src: url(custom/Levementum/CustomEntryPoints/fonts/interface-icon-assets/Flaticon.eot?#iefix) format("embedded-opentype"), url(custom/Levementum/CustomEntryPoints/fonts/interface-icon-assets/Flaticon.woff) format("woff"), url(custom/Levementum/CustomEntryPoints/fonts/interface-icon-assets/Flaticon.ttf) format("truetype"), url(custom/Levementum/CustomEntryPoints/fonts/interface-icon-assets/Flaticon.svg#Flaticon) format("svg");
    }
    @font-face {
        font-family: Flaticon3;
        font-weight: normal;
        font-style: normal;
        src: url(custom/Levementum/CustomEntryPoints/fonts/ultimate/Flaticon.eot);
        src: url(custom/Levementum/CustomEntryPoints/fonts/ultimate/Flaticon.eot?#iefix) format("embedded-opentype"), url(custom/Levementum/CustomEntryPoints/fonts/ultimate/Flaticon.woff) format("woff"), url(custom/Levementum/CustomEntryPoints/fonts/ultimate/Flaticon.ttf) format("truetype"), url(custom/Levementum/CustomEntryPoints/fonts/ultimate/Flaticon.svg#Flaticon3) format("svg");
    }
</style>

</body>
</html>

