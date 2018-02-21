<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */


$mod_strings = array (
  'ADVANCED' => 'Avançado',
  'CURRENT_LOGO' => 'Logótipo actual',
  'CURRENT_LOGO_HELP' => 'Este logótipo é exibido no canto superior esquerdo da aplicação Sugar.',
  'DEFAULT_CURRENCY' => 'Moeda Padrão',
  'DEFAULT_CURRENCY_ISO4217' => 'Código da moeda em formato ISO 4217',
  'DEFAULT_CURRENCY_NAME' => 'Nome da moeda',
  'DEFAULT_CURRENCY_SYMBOL' => 'Sí­mbolo da moeda',
  'DEFAULT_DATE_FORMAT' => 'Formato de data padrão',
  'DEFAULT_DECIMAL_SEP' => 'Símbolo decimal',
  'DEFAULT_LANGUAGE' => 'Idioma padrão',
  'DEFAULT_NUMBER_GROUPING_SEP' => 'Separador dos milhares (1000)',
  'DEFAULT_OC_STATUS' => 'Habilitar o Cliente Off-line por defeito',
  'DEFAULT_SYSTEM_SETTINGS' => 'Interface do Utilizador',
  'DEFAULT_THEME' => 'Tema padrão',
  'DEFAULT_TIME_FORMAT' => 'Formato de horário padrão',
  'DEVELOPER_MODE' => 'Modo de Programador',
  'DISPLAY_RESPONSE_TIME' => 'Mostrar o tempo de resposta do servidor',
  'ERR_ALERT_FILE_UPLOAD' => 'Erro durante o carregamento da imagem.',
  'ERR_DELETE_CORE_FILE' => 'ERRO: Não é possível eliminar uma fonte nuclear.',
  'ERR_EZPDF_DISABLE' => 'Aviso: A classe EZPDF está desactivada na tabela de configuração e foi definida como a classe PDF. Por favor "Grave" este formulário para definir TCPDF como a Classe PDF e retornar num estado estável.',
  'ERR_FONT_ALREADY_EXIST' => 'ERRO : Esta fonte já existe. Retroceder...',
  'ERR_FONT_EMPTYFILE' => 'ERRO: Nome de ficheiro vazio!',
  'ERR_FONT_FILE_DO_NOT_EXIST' => 'não existe ou não é uma directoria.',
  'ERR_FONT_MAKEFONT' => 'ERRO: Erro MakeFont',
  'ERR_FONT_NOT_WRITABLE' => 'não é editável.',
  'ERR_FONT_UNKNOW_TYPE' => 'ERRO: Tipo de fonte desconhecido:',
  'ERR_LOADFONTFILE' => 'ERRO: Erro LoadFontFile!',
  'ERR_MISSING_CIDINFO' => 'O campo Informação CID não pode estar em branco.',
  'ERR_NO_CUSTOM_FONT_PATH' => 'ERRO: Nenhum path de fonte personalizado disponível!',
  'ERR_NO_FONT_PATH' => 'ERRO: Nenhum path de fonte disponível!',
  'ERR_PDF_NO_UPLOAD' => 'Erro durante o carregamento da fonte ou ficheiro métrico.',
  'HEAD_MAGNIFICATION' => 'Ampliação do Cabeçalho',
  'HEAD_MAGNIFICATION_INFO' => 'Factor de ampliação para títulos.',
  'IMAGES' => 'Logótipos',
  'JS_ALERT_PDF_WRONG_EXTENSION' => 'Este ficheiro não tem uma boa extensão de ficheiro.',
  'K_CELL_HEIGHT_RATIO' => 'Proporção da Altura da Célula',
  'K_CELL_HEIGHT_RATIO_INFO' => 'Se a altura de uma célula é menor que (Proporção Altura da Fonte x Altura da Célula), então (Proporção Altura da Fonte x Altura da Célula) é usada como a altura da célula.<br>(Proporção Altura da Fonte x Altura da Célula) é também usada como altura da célula quando não está definida nenhuma altura.',
  'K_SMALL_RATIO' => 'Factor Fonte Pequena',
  'K_SMALL_RATIO_INFO' => 'Factor de redução para fonte pequena.',
  'K_TITLE_MAGNIFICATION' => 'Ampliação do Título',
  'K_TITLE_MAGNIFICATION_INFO' => 'Ampliação do título respeita o tamanho principal da fonte.',
  'LBL_ADDFONTRESULT_TITLE' => 'Resultado do processo de adicionamento de fonte',
  'LBL_ADDFONT_TITLE' => 'Adicionar uma Fonte PDF',
  'LBL_ADD_FONT' => 'Adicionar uma fonte',
  'LBL_ADD_FONT_BUTTON' => 'Adicionar',
  'LBL_ADMIN_WIZARD' => 'Assistente de Administração',
  'LBL_ALERT_JPG_IMAGE' => 'O formato do ficheiro da imagem deve ser JPEG. Carregue um novo ficheiro com a extensão .jpg.',
  'LBL_ALERT_SIZE_RATIO' => 'A proporção do aspecto da imagem deve estar entre 1:1 e 10:1. A imagem será redimensionada.',
  'LBL_ALERT_SIZE_RATIO_QUOTES' => 'A proporção do aspecto da imagem deve estar entre 3:1 e 20:1. Carregue um novo ficheiro com esta proporção.',
  'LBL_ALERT_TYPE_IMAGE' => 'O formato do ficheiro da imagem deve ser JPEG ou PNG. Carregue um novo ficheiro com a extensão .jpg ou .png.',
  'LBL_ALL' => 'Todos',
  'LBL_ALLOW_DEFAULT_SELECTION' => 'Permitir que utilizadores usem esta conta para enviar e-mail:',
  'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Quando esta opção for seleccionada, todos os utilizadores serão capazes de enviar e-mails usando a mesma conta que o sistema usa para enviar notificações e alertas. Se a opção não for seleccionada, os utilizadores podem ainda utilizar o servidor de correio de saída, se assim o configurarem nas suas definições.',
  'LBL_ALLOW_USER_TABS' => 'Permitir aos utilizadores configurar tabuladores',
  'LBL_BACK' => 'Voltar',
  'LBL_CHOOSE_EMAIL_PROVIDER' => 'Escolha o seu fornecedor de e-mail',
  'LBL_CONFIGURE_SETTINGS_TITLE' => 'Configuração do Sistema',
  'LBL_DELETE' => 'Eliminar',
  'LBL_DISALBE_CONVERT_LEAD' => 'Desactivar a acção de converter a lead para leads convertidas',
  'LBL_DISALBE_CONVERT_LEAD_DESC' => 'Se uma lead já foi convertida, activando esta opção irá remover a acção de conversão da lead.',
  'LBL_DISPLAYING_LOG' => 'Exibindo Registo',
  'LBL_ENABLE_ACTION_MENU' => 'Mostrar acções dentro dos menus',
  'LBL_ENABLE_ACTION_MENU_DESC' => 'Seleccione para mostrar as acções da DetailView e subpainel dentro de um menu. Se não estiver seleccionado, as acções serão apresentadas como botões separados.',
  'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'Permitir/Inabilitar que apareçam emails de contactos relacionados (ou ligados) no Sub-painel E-mail.',
  'LBL_ENABLE_MAILMERGE' => 'Activar o Mail Merge?',
  'LBL_EXCHANGE_LOGO' => 'Exchange',
  'LBL_EXCHANGE_SMTPPASS' => 'Palavra-passe Exchange',
  'LBL_EXCHANGE_SMTPPORT' => 'Porta Servidor Exchange',
  'LBL_EXCHANGE_SMTPSERVER' => 'Servidor Exchange',
  'LBL_EXCHANGE_SMTPUSER' => 'Utilizador Exchange',
  'LBL_FONTMANAGER_BUTTON' => 'Gestor de Fonte PDF',
  'LBL_FONTMANAGER_TITLE' => 'Gestor de Fonte PDF',
  'LBL_FONT_BOLD' => 'Negrito',
  'LBL_FONT_BOLDITALIC' => 'Negrito/Itálico',
  'LBL_FONT_ITALIC' => 'Itálico',
  'LBL_FONT_LIST_CIDINFO' => 'Informação CID',
  'LBL_FONT_LIST_CIDINFO_INFO' => 'Exemplos :<ul><li>Chinese Traditional :<br><pre>$enc=\\&#39;UniCNS-UTF16-H\\&#39;;<br>$cidinfo=array(\\&#39;Registry\\&#39;=>\\&#39;Adobe\\&#39;, \\&#39;Ordering\\&#39;=>\\&#39;CNS1\\&#39;,\\&#39;Supplement\\&#39;=>0);<br>include(\\&#39;include/tcpdf/fonts/uni2cid_ac15.php\\&#39;);</pre></li><li>Chinese Simplified :<br><pre>$enc=\\&#39;UniGB-UTF16-H\\&#39;;<br>$cidinfo=array(\\&#39;Registry\\&#39;=>\\&#39;Adobe\\&#39;, \\&#39;Ordering\\&#39;=>\\&#39;GB1\\&#39;,\\&#39;Supplement\\&#39;=>2);<br>include(\\&#39;include/tcpdf/fonts/uni2cid_ag15.php\\&#39;);</pre></li><li>Korean :<br><pre>$enc=\\&#39;UniKS-UTF16-H\\&#39;;<br>$cidinfo=array(\\&#39;Registry\\&#39;=>\\&#39;Adobe\\&#39;, \\&#39;Ordering\\&#39;=>\\&#39;Korea1\\&#39;,\\&#39;Supplement\\&#39;=>0);<br>include(\\&#39;include/tcpdf/fonts/uni2cid_ak12.php\\&#39;);</pre></li><li>Japanese :<br><pre>$enc=\\&#39;UniJIS-UTF16-H\\&#39;;<br>$cidinfo=array(\\&#39;Registry\\&#39;=>\\&#39;Adobe\\&#39;, \\&#39;Ordering\\&#39;=>\\&#39;Japan1\\&#39;,\\&#39;Supplement\\&#39;=>5);<br>include(\\&#39;include/tcpdf/fonts/uni2cid_aj16.php\\&#39;);</pre></li></ul>More help : www.tcpdf.org',
  'LBL_FONT_LIST_EMBEDDED' => 'Embutido',
  'LBL_FONT_LIST_EMBEDDED_INFO' => 'Verificar para embutir a fonte no ficheiro PDF',
  'LBL_FONT_LIST_ENC' => 'Codificação',
  'LBL_FONT_LIST_FILENAME' => 'Nome do Ficheiro',
  'LBL_FONT_LIST_FILESIZE' => 'Tamanho da Fonte (KB)',
  'LBL_FONT_LIST_NAME' => 'Nome',
  'LBL_FONT_LIST_STYLE' => 'Estilo',
  'LBL_FONT_LIST_STYLE_INFO' => 'Estilo da fonte',
  'LBL_FONT_LIST_TYPE' => 'Tipo',
  'LBL_FONT_MOVE_DEFFILE' => 'Ficheiro de definição de fonte movido para :',
  'LBL_FONT_MOVE_FILE' => 'Ficheiro de definição movido para :',
  'LBL_FONT_REGULAR' => 'Regular',
  'LBL_FONT_TYPE_CID0' => 'CID-0',
  'LBL_FONT_TYPE_CORE' => 'Nuclear',
  'LBL_FONT_TYPE_TRUETYPE' => 'TrueType',
  'LBL_FONT_TYPE_TRUETYPEU' => 'TrueTypeUnicode',
  'LBL_FONT_TYPE_TYPE1' => 'Type1',
  'LBL_GMAIL_LOGO' => 'Logo do Gmail',
  'LBL_GMAIL_SMTPPASS' => 'Palavra-passe Gmail',
  'LBL_GMAIL_SMTPUSER' => 'Endereço de e-mail Gmail',
  'LBL_IGNORE_SELF' => 'Ignorar-se:',
  'LBL_IMG_RESIZED' => '(redimensionado para exibição)',
  'LBL_IMPORT_MAX_RECORDS' => 'Importação - Numero Máximo de Linhas',
  'LBL_IMPORT_MAX_RECORDS_HELP' => 'Especificar quantas linhas são permitidas dentro dos ficheiros de importação. Se o número de linhas <br>num ficheiro de importação exceder este número, o utilizador será alertado. Se nenhum número <br> é inserido, é permitido um número infinito de linhas.',
  'LBL_IT_WILL_BE_IGNORED' => 'será ignorado',
  'LBL_JS_CONFIRM_DELETE_FONT' => 'Tem a certeza que pretende eliminar esta fonte?',
  'LBL_LDAP_ADMIN_PASSWORD' => 'Autenticação de Palavra-chave:',
  'LBL_LDAP_ADMIN_USER' => 'Autenticar Utilizador:',
  'LBL_LDAP_ADMIN_USER_DESC' => 'Utilizado para procurar por Utilizadores do Sugar. [Pode precisar de ser completamente qualificado] Irá ligar-se anonimamente caso não seja fornecido.',
  'LBL_LDAP_AUTHENTICATION' => 'Autenticação:',
  'LBL_LDAP_AUTHENTICATION_DESC' => 'Ligar-se ao servidor LDAP usando credenciais específicas dos utilizadores',
  'LBL_LDAP_AUTO_CREATE_USERS' => 'Criar Utilizadores automaticamente',
  'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'Caso um utilizador autenticado não exista será criado no Sugar.',
  'LBL_LDAP_BIND_ATTRIBUTE' => 'Atributo de Ligação:',
  'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'Para ligação de Utilizadores LDAP Exemplos:[<b>AD</b>: userPrincipalName] [<b>openLDAP</b>: userPrincipalName] [<b>Mac OS X:</b> uid]',
  'LBL_LDAP_ENABLE' => 'Activar LDAP',
  'LBL_LDAP_ENC_KEY' => 'Chave de Encriptação',
  'LBL_LDAP_ENC_KEY_DESC' => 'Para autenticação SOAP quando utilizar LDAP',
  'LBL_LDAP_GROUP_ATTR' => 'Atributo de Grupo:',
  'LBL_LDAP_GROUP_ATTR_DESC' => 'O atributo de Grupo que será usado para filtrar face ao Atributo de Utilizador Exemplo: <em>memberUid</em>',
  'LBL_LDAP_GROUP_DN' => 'DN do Grupo',
  'LBL_LDAP_GROUP_DN_DESC' => 'Exemplo: <em>ou=groups,dc=example,dc=com</em>',
  'LBL_LDAP_GROUP_MEMBERSHIP' => 'Adesão ao Grupo:',
  'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'Utilizadores devem ser membros de um grupo específico',
  'LBL_LDAP_GROUP_NAME' => 'Nome do Grupo:',
  'LBL_LDAP_GROUP_NAME_DESC' => 'Exemplo <em>cn=sugarcrm</em>',
  'LBL_LDAP_GROUP_USER_ATTR' => 'Atributo de Utilizador:',
  'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'O identificador exclusivo que será usado para verificar se eles são um membro do grupo Exemplo: <em>uid</em>',
  'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Atributo de Login:',
  'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'Para pesquisar por Utilizadores LDAP Exemplos: [<b>AD</b>: userPrincipalName] [<b>openLDAP</b>: dn] [<b>Mac OS X:</b>: dn]',
  'LBL_LDAP_SERVER_HOSTNAME' => 'Servidor:',
  'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Exemplo: ldap.example.com',
  'LBL_LDAP_SERVER_PORT' => 'Número da Porta',
  'LBL_LDAP_SERVER_PORT_DESC' => 'Exemplo: 389',
  'LBL_LDAP_TITLE' => 'Suporte para Autenticação LDAP',
  'LBL_LDAP_USER_DN' => 'DN do Utilizador',
  'LBL_LDAP_USER_DN_DESC' => 'Exemplo: <em>ou=people,dc=example,dc=com</em>',
  'LBL_LDAP_USER_FILTER' => 'Filtro de Utilizador:',
  'LBL_LDAP_USER_FILTER_DESC' => 'Quaisquer parâmetros de filtro adicionais a aplicar aquando da autenticação de utilizadores ex:<em>is_sugar_user=1 ou (is_sugar_user=1)(is_sales=1)</em>;',
  'LBL_LEAD_CONV_OPTION' => 'Opções de Conversão da Lead',
  'LBL_LOADING' => 'A carregar...',
  'LBL_LOCK_SUBPANELS_DESC' => 'Esta definição aplica-se aos módulos em modo legacy.',
  'LBL_LOGGER' => 'Configurações de Logger',
  'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Formato padrão da data',
  'LBL_LOGGER_FILENAME' => 'Nome do Ficheiro Log',
  'LBL_LOGGER_FILENAME_SUFFIX' => 'Anexar após o nome do ficheiro',
  'LBL_LOGGER_FILE_EXTENSION' => 'Extensão',
  'LBL_LOGGER_LOG_LEVEL' => 'Nível do Log',
  'LBL_LOGGER_MAX_LOGS' => 'Número máximo de logs (antes do rolling)',
  'LBL_LOGGER_MAX_LOG_SIZE' => 'Tamanho máximo do log',
  'LBL_LOGO' => 'Logótipo',
  'LBL_LOGVIEW' => 'Configurar as definições do Log',
  'LBL_LOG_NOT_CHANGED' => 'Registo não se alterou',
  'LBL_MAILMERGE' => 'Mail Merge',
  'LBL_MAILMERGE_DESC' => 'Esta opção deverá ser seleccionada apenas se o Sugar Plug-in para Microsoft Word foi comprado e licenciado',
  'LBL_MAIL_SMTPAUTH_REQ' => 'Utilizar Autenticação SMTP?',
  'LBL_MAIL_SMTPPASS' => 'Palavra-passe SMTP:',
  'LBL_MAIL_SMTPPORT' => 'Porta SMTP:',
  'LBL_MAIL_SMTPSERVER' => 'Servidor SMTP:',
  'LBL_MAIL_SMTPTYPE' => 'Tipo de servidor SMTP:',
  'LBL_MAIL_SMTPUSER' => 'Utilizador SMTP:',
  'LBL_MAIL_SMTP_SETTINGS' => 'Especificação servidor SMTP',
  'LBL_MARKING_WHERE_START_LOGGING' => 'Marcação Inicial do Logging',
  'LBL_MARK_POINT' => 'Marcar Ponto',
  'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Intervalo Minimo do Auto-Refresh da Dashlet',
  'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'Este é o valor mínimo que pode ser escolhido para o auto-refresh das dashlets. Definir para &#39;Nunca&#39; desabilita o auto-refresh das dashlets completamente.',
  'LBL_MOBILE_MOD_REPORTS_RESTRICTION' => '* O módulo de Relatórios apenas está disponível para o cliente Sugar Mobile iPhone.',
  'LBL_MOBILE_MOD_REPORTS_RESTRICTION2' => '* O módulo de Relatórios não está disponível para a visualização móvel baseada num navegador.',
  'LBL_MODULE_FAVICON' => 'Exibir ícone de módulo como favicon',
  'LBL_MODULE_FAVICON_HELP' => 'Se está num módulo com um ícone, utilize o ícone do módulo como favicon, em vez do favicon do tema, no tabulador do browser.',
  'LBL_MODULE_ID' => 'Configurador',
  'LBL_MODULE_NAME' => 'Configurações do Sistema',
  'LBL_MODULE_NAME_SINGULAR' => 'Configuração de Sistema',
  'LBL_MODULE_TITLE' => 'Interface do Utilizador',
  'LBL_NEXT_' => 'Próximo >>',
  'LBL_NOTIFY_FROMADDRESS' => 'Endereço"De":',
  'LBL_NOTIFY_SUBJECT' => 'Assunto do E-mail:',
  'LBL_OC_STATUS' => 'Estado do Cliente Off-line por defeito',
  'LBL_OC_STATUS_DESC' => 'Seleccione esta opção se pretender que qualquer Utilizador tenha acesso ao Cliente Off-line. Caso contrário poderá configurar isto ao nível de cada Utilizador.',
  'LBL_PDFMODULE_NAME' => 'Definições de PDF',
  'LBL_PDF_ENCODING_TABLE' => 'Tabela de Codificação',
  'LBL_PDF_ENCODING_TABLE_INFO' => 'Nome da tabela de codificação.<br>Esta opção é ignorada para TrueType Unicode, Unicode OpenType e fontes simbólicas.<br>A codificação define a associação entre um código (de 0 a 255) e um caractere contido na fonte.<br>Os primeiros 128 são fixos e correspondem ao ASCII.',
  'LBL_PDF_FONT_FILE' => 'Ficheiro da Fonte',
  'LBL_PDF_FONT_FILE_INFO' => 'Ficheiro .ttf ou .otf ou .pfb',
  'LBL_PDF_INSTRUCTIONS' => 'Instruções',
  'LBL_PDF_METRIC_FILE' => 'Ficheiro Métrico',
  'LBL_PDF_METRIC_FILE_INFO' => 'ficheiro .afm ou .ufm',
  'LBL_PDF_PATCH' => 'Patch',
  'LBL_PDF_PATCH_INFO' => 'Modificação personalizada da codificação. Escrever um array PHP. <br>Exemplo :<br>ISO-8859-1 não contém o símbolo do euro. Para adicioná-lo na posição 164, escreva "array(164=>\\&#39;Euro\\&#39;)".',
  'LBL_PORTAL_ON' => 'Activar a Integração com o Portal de Gestão do Utilizador',
  'LBL_PORTAL_ON_DESC' => 'Activa o acesso externo pelo Portal de Self-Service a Ocorrências, Notas e outros dados.',
  'LBL_PORTAL_TITLE' => 'Portal de Self-Service do Cliente',
  'LBL_PROXY_AUTH' => 'Autenticação?',
  'LBL_PROXY_HOST' => 'Host do Proxy',
  'LBL_PROXY_ON' => 'Utilizar um host do proxy?',
  'LBL_PROXY_ON_DESC' => 'Configurar o endereço do Host do Proxy e autenticação',
  'LBL_PROXY_PASSWORD' => 'Palavra-passe',
  'LBL_PROXY_PORT' => 'Porta',
  'LBL_PROXY_TITLE' => 'Configuração do Proxy',
  'LBL_PROXY_USERNAME' => 'Nome de Utilizador',
  'LBL_REFRESH_FROM_MARK' => 'Actualizar a Partir da Marca',
  'LBL_REG_EXP' => 'Reg Exp:',
  'LBL_REMOVE' => 'rem',
  'LBL_RESTORE_BUTTON_LABEL' => 'Restaurar',
  'LBL_SEARCH' => 'Pesquisar:',
  'LBL_SESSION_TIMEOUT_TOOLTIP' => 'O Limite de Sessão do Portal é para versões existentes do Portal Sugar disponível na versão 6.5 e anteriores.',
  'LBL_SKYPEOUT_ON' => 'Activar a Integração com SkypeOut®?',
  'LBL_SKYPEOUT_ON_DESC' => 'Activar o SkypeOut®. Os números de telefone devem ser formatados correctamente para utilizar este recurso. Formato: "+" "Código Pais" "Telefone", por exemplo +1 (555) 555-1234. Mais informações em: http://www.skype.com/help/faq/skypeout.html#calling',
  'LBL_SKYPEOUT_TITLE' => 'SkypeOut®',
  'LBL_STATUS_FONT_ERROR' => 'ERRO: A fonte não foi adicionada. Consulte o registo abaixo.',
  'LBL_STATUS_FONT_SUCCESS' => 'SUCESSO: A fonte foi adicionada ao SugarCRM.',
  'LBL_SYSTEM_SETTINGS' => 'Definições de Sistema',
  'LBL_TWEETTOCASE_ON' => 'Habilitar a integração de Tweets com Ocorrências',
  'LBL_TWEETTOCASE_ON_DESC' => 'Permite que os utilizadores criem Ocorrências a partir de Tweets',
  'LBL_TWEETTOCASE_TITLE' => 'Ocorrências com base em Tweets',
  'LBL_USE_REAL_NAMES' => 'Mostrar o Nome Completo (não login)',
  'LBL_USE_REAL_NAMES_DESC' => 'Mostrar o nome completo dos Utilizadores ao invés do nome de utilizador',
  'LBL_VCAL_PERIOD' => 'Período de Tempo das Actualizações vCal',
  'LBL_WELCOME' => 'Bem-vindo',
  'LBL_WIRELESS_LIST_ENTRIES' => 'Número de registos por página nas Listagens (Wireless)',
  'LBL_WIRELESS_SERVER_URL' => 'Servidor Sugar Mobile Edge',
  'LBL_WIRELESS_SUBPANEL_LIST_ENTRIES' => 'Número de registos por página nos Sub-painéis (Wireless)',
  'LBL_WIZARD_BACK_BUTTON' => '< Anterior',
  'LBL_WIZARD_CONTINUE_BUTTON' => 'Continuar',
  'LBL_WIZARD_FINISH' => 'Clique em Continue para configurar as definições de utilizador.<br /><br />Para configurar definições adicionais do sistema, clique <a href="index.php?module=Administration&amp;action=index" target="_blank">aqui</a>.',
  'LBL_WIZARD_FINISH_BUTTON' => 'Concluir',
  'LBL_WIZARD_FINISH_TAB' => 'Concluir',
  'LBL_WIZARD_FINISH_TITLE' => 'Você está pronto para usar o Sugar!',
  'LBL_WIZARD_LOCALE_DESC' => 'Especifique o fuso horário e a forma como deseja que datas, moedas e nomes apareçam no Sugar. Estas serão as definições padrão. Cada utilizador poderá definir suas próprias preferências.',
  'LBL_WIZARD_NEXT_BUTTON' => 'Próximo >',
  'LBL_WIZARD_SKIP_BUTTON' => 'Saltar',
  'LBL_WIZARD_SMTP_DESC' => 'Forneça dados da sua conta de e-mail e palavra-passe para o servidor de e-mail de saída padrão. Os utilizadores vão receber e-mails do Sugar vindos desta conta de e-mail.',
  'LBL_WIZARD_SYSTEM_DESC' => 'Insira o nome de sua organização e logo para a marca do seu Sugar.',
  'LBL_WIZARD_SYSTEM_TITLE' => 'Marca',
  'LBL_WIZARD_TITLE' => 'Wizard de Administração',
  'LBL_WIZARD_WELCOME' => 'Clique em <b>Próximo</b> para configurar algumas configurações básicas para o uso do Sugar.',
  'LBL_WIZARD_WELCOME_TAB' => 'Bem-vindo',
  'LBL_WIZARD_WELCOME_TITLE' => 'Bem-vindo ao Sugar!',
  'LBL_YAHOOMAIL_SMTPPASS' => 'Palavra-passe Yahoo! Mail',
  'LBL_YAHOOMAIL_SMTPUSER' => 'ID Yahoo! Mail',
  'LBL_YAHOO_MAIL' => 'Yahoo Mail',
  'LBL_YOUR_IP_ADDRESS' => 'O seu Endereço de IP é',
  'LBL_YOUR_PROCESS_ID' => 'O seu ID do processo',
  'LDAP_ENC_KEY_NO_FUNC_DESC' => 'A extensão php_mcrypt deve ser activada no seu ficheiro php.ini',
  'LEAD_CONV_OPT_HELP' => '<b>Copia</b> - Cria e relaciona copias de todas as actividades da Lead para novos registos que são seleccionados pelo utilizador durante a conversão. Copias são criadas para cada um dos registos seleccionados.<br><br><b>Mover</b> - Move todas as actividades da Lead para um novo registo que é seleccionado pelo utilizador durante a conversão.<br><br><b>Fazer nada</b> - Não faz nada com as actividades da Lead durante a conversão. As actividades mantêm-se relacionadas apenas com a Leas.',
  'LIST_ENTRIES_PER_LISTVIEW' => 'Número de registos por página nas Listagens',
  'LIST_ENTRIES_PER_SUBPANEL' => 'Número de registos por página nos Sub-painéis',
  'LOCK_HOMEPAGE' => 'Inibir o Utilizador de alterar o Layout da página principal',
  'LOCK_HOMEPAGE_HELP' => 'Esta configuração destina-se a prever<BR> 1) a adição de novas páginas principais e dashlets no módulo Página Principal, <BR>2) customização do posicionamento do dashlet nas páginas principais através de arrastar e soltar.',
  'LOCK_SUBPANELS' => 'Inibir o Utilizador de alterar os Subpainéis',
  'LOG_MEMORY_USAGE' => 'Registar a utilização da memória no log',
  'LOG_SLOW_QUERIES' => 'Registar as consultas mais lentas no log',
  'MAX_DASHLETS' => 'Número máximo de Dashlets na Página Principal',
  'NEW_LOGO' => 'Seleccionar um novo logótipo (212x40)',
  'NEW_LOGO_HELP' => 'O formato do ficheiro de imagem pode ser em .png ou .jpg. <BR> O tamanho recomendado é 212x40 px.',
  'NEW_LOGO_HELP_NO_SPACE' => 'O formato do ficheiro da imagem pode ser .png ou .jpg. A altura máxima é 17px e a largura máxima é 450px. Qualquer imagem introduzida que seja maior em qual uma das dimensões será redimensionada para as medidas indicadas. O nome dos ficheiros não deverão conter espaços.',
  'NEW_QUOTE_LOGO' => 'Carregar um novo logótipo para o módulo de Cotações (867x74)',
  'NEW_QUOTE_LOGO_HELP' => 'O formato do ficheiro de imagem necessário é em .jpg. <BR> O tamanho recomendado é 867x74 px.',
  'PDF_ACL_ACCESS' => 'Controlo de Acesso',
  'PDF_ACL_ACCESS_INFO' => 'Controlo de Acesso Padrão para a geração de PDF.',
  'PDF_AUTHOR' => 'Autor',
  'PDF_AUTHOR_INFO' => 'O Autor aparece nas propriedades do documento.',
  'PDF_COMPRESSION' => 'Compressão',
  'PDF_COMPRESSION_INFO' => 'Activa ou desactiva a compressão da página. <br>Quando activada, a representação interna de cada página é comprimida, o que leva a uma taxa de compressão de aproximadamente 2 para o documento resultante.',
  'PDF_CREATOR' => 'Criador de PDF',
  'PDF_CREATOR_INFO' => 'Define o criador do documento. <br>Este é tipicamente o nome da aplicação que gera o PDF.',
  'PDF_FILENAME' => 'Nome de Ficheiro Padrão',
  'PDF_FILENAME_INFO' => 'Nome de ficheiro padrão para os ficheiros PDF gerados',
  'PDF_GD_WARNING' => 'Não tem a biblioteca GD instalada para PHP. Sem a biblioteca GD instalada, apenas os logótipos JPEG podem ser exibidos em documentos PDF.',
  'PDF_HEADER_LOGO' => 'Para Documentos PDF Cotações',
  'PDF_HEADER_LOGO_INFO' => 'Esta imagem aparece no Cabeçalho padrão em Documentos PDF Cotações',
  'PDF_HEADER_LOGO_WIDTH' => 'Largura da Imagem de Cotações',
  'PDF_HEADER_LOGO_WIDTH_INFO' => 'Modificar a escala da imagem carregada que aparece nos Documentos PDF Cotações. (Apenas TCPDF)',
  'PDF_HEADER_STRING' => 'String do Cabeçalho',
  'PDF_HEADER_STRING_INFO' => 'String da descrição do Cabeçalho',
  'PDF_HEADER_TITLE' => 'Título do Cabeçalho',
  'PDF_HEADER_TITLE_INFO' => 'String para imprimir como título no cabeçalho do documento',
  'PDF_IMAGE_SCALE_RATIO' => 'Proporção da escala da imagem',
  'PDF_IMAGE_SCALE_RATIO_INFO' => 'Proporção usada para escalar as imagens',
  'PDF_INSTRUCTIONS_ADD_FONT' => 'Fontes suportadas pelo SugarPDF : <ul> <li>TrueTypeUnicode (UTF-8 Unicode)</li> <li>OpenTypeUnicode</li> <li>TrueType</li> <li>OpenType</li> <li>Type1</li> <li>CID-0</li> </ul> <br> Se optar por não embutir a sua fonte no PDF, o ficheiro PDF gerado será mais leve, mas será usada uma substituição se a fonte não estiver disponível no sistema do seu leitor. <br><br> Adicionar uma fonte PDF ao SugarCRM requer seguir os passos 1 e 2 da documentação Fontes TCPDF disponível na secção "DOCS" do <a href = "http://www.tcpdf.org" target="_blank">site TCPDF</a>.<br> Os pfm2afm e ttf2ufm estão disponíveis em fontes/utils no pacote TCPDF que pode ser descarregado na secção "Descarregar" do <a href = "http://www.tcpdf.org" target = "_blank">site TCPDF</a>.<br>Carregar o ficheiro métrico gerado na etapa 2 e o seu ficheiro de fonte abaixo.',
  'PDF_JPEG_QUALITY' => 'Qualidade JPEG (1-100)',
  'PDF_JPEG_QUALITY_INFO' => 'Definir a qualidade de compressão JPEG padrão (1-100)',
  'PDF_KEYWORDS' => 'Palavra(s)-chave',
  'PDF_KEYWORDS_INFO' => 'Associar Palavras-chave ao documento, geralmente no formato "palavra-chave1 palavra-chave2..."',
  'PDF_NEW_HEADER_LOGO' => 'Seleccionar Nova Imagem para Cotações',
  'PDF_NEW_HEADER_LOGO_INFO' => 'O formato do ficheiro pode ser .jpg ou .png. (Apenas .jpg para EZPDF)<BR>O tamanho recomendado é 867x74 px.',
  'PDF_NEW_SMALL_HEADER_LOGO' => 'Seleccionar Nova Imagem para Relatórios',
  'PDF_NEW_SMALL_HEADER_LOGO_INFO' => 'O formato do ficheiro pode ser .jpg ou .png. (Apenas .jpg para EZPDF)<BR>O tamanho recomendado é 212x40 px.',
  'PDF_OWNER_PASSWORD' => 'Palavra-passe do Proprietário',
  'PDF_OWNER_PASSWORD_INFO' => 'Se não definir nenhuma palavra-passe, o documento abrirá como habitual. <br>Se definir uma palavra-passe de utilizador, o visualizador de PDF irá pedi-la antes de exibir o documento. <br>A palavra-passe principal, se for diferente da do utilizador, pode ser usada para obter acesso total.',
  'PDF_PDF_VERSION' => 'Versão PDF',
  'PDF_PDF_VERSION_INFO' => 'Definir a versão PDF (verificar a referência PDF para valores válidos).',
  'PDF_PROTECTION' => 'Protecção do Documento',
  'PDF_PROTECTION_INFO' => 'Definir a protecção do documento<br>- copiar: copiar texto e imagens para o clipboard<br>- imprimir: imprimir o documento <br>- modificar: modificá-lo (excepto para anotações e formulários)<br>- anotar-formulários: adicionar anotações e formulários<br>Nota: a protecção contra a modificação é para as pessoas que têm o produto Acrobat completo.',
  'PDF_SMALL_HEADER_LOGO' => 'Para Documentos PDF Relatórios',
  'PDF_SMALL_HEADER_LOGO_INFO' => 'Esta imagem aparece no Cabeçalho padrão em Documentos PDF Relatórios.<br> Esta imagem também aparece no canto superior esquerdo da aplicação Sugar.',
  'PDF_SMALL_HEADER_LOGO_WIDTH' => 'Largura da Imagem de Relatórios',
  'PDF_SMALL_HEADER_LOGO_WIDTH_INFO' => 'Modificar a escala da imagem carregada que aparece nos Documentos PDF Relatórios. (Apenas TCPDF)',
  'PDF_SUBJECT' => 'Assunto',
  'PDF_SUBJECT_INFO' => 'O Assunto aparece nas propriedades do documento.',
  'PDF_TITLE' => 'Título',
  'PDF_TITLE_INFO' => 'O Título aparece nas propriedades do documento.',
  'PDF_UNIT' => 'Unidade',
  'PDF_UNIT_INFO' => 'Unidade de medição do documento',
  'PDF_USER_PASSWORD' => 'Palavra-passe do Utilizador',
  'PDF_USER_PASSWORD_INFO' => 'Se não definir nenhuma palavra-passe, o documento abrirá como habitual. <br>Se definir uma palavra-passe de utilizador, o visualizador de PDF irá pedi-la antes de exibir o documento. <br>A palavra-passe principal, se for diferente da do utilizador, pode ser usada para obter acesso total.',
  'QUOTES_CURRENT_LOGO' => 'Logótipo utilizado nas Cotações',
  'SESSION_TIMEOUT' => 'Tempo de Expiração da Sessão',
  'SESSION_TIMEOUT_UNITS' => 'segundos',
  'SHOW_DOWNLOADS_TAB' => 'Mostrar o Separador de Downloads',
  'SHOW_DOWNLOADS_TAB_HELP' => 'Quando seleccionado, o separador de Downloads irá aparecer na definições do Utilizador e fornece aos utilizadores acesso a plug-ins e outro ficheiros disponíveis do Sugar.',
  'SLOW_QUERY_TIME_MSEC' => 'Limite em milissegundos das consultas mais lentas',
  'STACK_TRACE_ERRORS' => 'Mostrar o stack trace de erros',
  'SUGARPDF_ADVANCED_SETTINGS' => 'Definições Avançadas',
  'SUGARPDF_BASIC_SETTINGS' => 'Propriedades do Documento',
  'SUGARPDF_LOGO_SETTINGS' => 'Imagens',
  'SYSTEM_NAME' => 'Nome do Sistema',
  'SYSTEM_NAME_HELP' => 'Nome que aparece na barra de título do seu navegador.',
  'SYSTEM_NAME_WIZARD' => 'Nome:',
  'TPL_LIST_ENTRIES_PER_LISTVIEW_HELP' => 'A definição recomendada de {{listEntriesNum}} está abaixo do nível aceitável para uma boa performance. À medida que são adicionados mais campo à listagem, o seu número deverá ser sempre inferior ao recomendado.',
  'TPL_LIST_ENTRIES_PER_SUBPANEL_HELP' => 'A definição recomendada de {{subpanelEntriesNum}} está abaixo do nível aceitável para uma boa performance. À medida que são adicionados mais campo à listagem, o seu número deverá ser sempre inferior ao recomendado.',
  'UPLOAD_MAX_SIZE' => 'Tamanho máximo de ficheiros a carregar',
  'VERIFY_CLIENT_IP' => 'Validar o IP do Utilizador',
  'vCAL_HELP' => 'Utilize esta configuração para determinar o número de meses em antecedência à actual data em que a informação Free/Busy para chamadas telefónicas e reuniões é publicada.</BR>Para desligar a publicação Free/Busy, introduza "0". O mínimo é 1 mês; o máximo são 12 meses.',
);

