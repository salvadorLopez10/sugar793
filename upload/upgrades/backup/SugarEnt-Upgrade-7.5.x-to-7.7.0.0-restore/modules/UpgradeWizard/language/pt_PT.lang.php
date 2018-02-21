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
  'DESC_MODULES_INSTALLED' => 'Os seguintes Módulos foram instalados:',
  'DESC_MODULES_QUEUED' => 'Os seguintes Módulos estão prontos para serem instalados:',
  'ERROR_FLAVOR_INCOMPATIBLE' => 'O ficheiro carregado não é compatível com esta versão (Community Edition, Professional ou Enterprise) do Sugar:',
  'ERROR_HT_NO_WRITE' => 'Não é possível escrever para o ficheiro: %s',
  'ERROR_MANIFEST_TYPE' => 'Ficheiro manifesto deve especificar o tipo de pacote.',
  'ERROR_PACKAGE_TYPE' => 'Ficheiro manifesto especifica um tipo de pacote não reconhecido: %s',
  'ERROR_UW_CONFIG_DB' => 'Erro ao gravar %s a variável de configuração para a base de dados (chave %s, valor%s).',
  'ERROR_VERSION_INCOMPATIBLE' => 'O ficheiro carregado não é compatível com esta versão do Sugar:',
  'ERR_CHECKSYS_PHP_INVALID_VER' => 'A sua versão de PHP não é suportada pelo Sugar. Necessita de instalar uma versão que seja compatível com a aplicação Sugar. Por favor consulte a Matriz de Compatibilidade nas Notas de Lançamento para Versões de PHP suportadas. A sua versão é',
  'ERR_NOT_ADMIN' => 'Acesso não autorizado para administração.',
  'ERR_NO_VIEW_ACCESS_REASON' => 'Não tem permissões para aceder a esta página.',
  'ERR_UW_CANNOT_DETERMINE_GROUP' => 'Não pode determinar o Grupo',
  'ERR_UW_CANNOT_DETERMINE_USER' => 'Não pode determinar o proprietário (Owner)',
  'ERR_UW_CONFIG' => 'Por favor certifique-se que o seu ficheiro config.php pode ser escrito e recarregue esta página.',
  'ERR_UW_CONFIG_WRITE' => 'Erro ao actualizar o ficheiro config.php com a nova informação da versão.',
  'ERR_UW_DIR_NOT_WRITABLE' => 'Directoria sem permissões de escrita.',
  'ERR_UW_FILE_NOT_COPIED' => 'Ficheiro não foi copiado',
  'ERR_UW_FILE_NOT_DELETED' => 'Problema ao remover o pacote',
  'ERR_UW_FILE_NOT_READABLE' => 'Ficheiro não pode ser lido.',
  'ERR_UW_FILE_NOT_WRITABLE' => 'Arquivo não pode ser movido ou escrito para',
  'ERR_UW_FLAVOR' => 'SugarCRM System Flavor:',
  'ERR_UW_FLAVOR_2' => 'Upgrade Flavor:',
  'ERR_UW_LOG_FILE_UNWRITABLE' => './upgradeWizard.log não pode ser criado ou escrito. Por favor corrija as permissões da sua directoria do SugarCRM.',
  'ERR_UW_MBSTRING_FUNC_OVERLOAD' => 'mbstring.func_overload configurado para um valor maior que 1. Por favor modifique isto no seu php.ini e reinicie o servidor web.',
  'ERR_UW_MYSQL_VERSION' => 'SugarCRM precisa do MySQL 4.1.2 ou uma versão mais recente. Foi encontrada a versão:',
  'ERR_UW_NOT_VALID_UPLOAD' => 'Carregamento não valido',
  'ERR_UW_NO_CREATE_TMP_DIR' => 'Não pode criar a directoria temp. Verifique as permissões do ficheiro.',
  'ERR_UW_NO_FILES' => 'Ocorreu um erro, nenhum ficheiro foi encontrado para a verificação.',
  'ERR_UW_NO_FILE_UPLOADED' => 'Por favor especifique um ficheiro e tente novamente!',
  'ERR_UW_NO_MANIFEST' => 'No ficheiro zip está em falta o ficheiro manifest.php. Não podemos prosseguir.',
  'ERR_UW_NO_VIEW' => 'Visualização especificada inválida.',
  'ERR_UW_NO_VIEW2' => 'Visualização não definida. Por favor aceda à página de administração para navegar até esta página.',
  'ERR_UW_OCI8_VERSION' => 'A sua versão do Oracle não é suportada pelo Sugar. Precisa de instalar uma versão que seja compatível com a aplicação Sugar. Por favor consulte a Matriz de Compatibilidade nas Notas de Lançamento para ver as versões de Oracle suportadas. Versão actual:',
  'ERR_UW_ONLY_PATCHES' => 'Apenas pode carregar patches nesta página.',
  'ERR_UW_PHP_FILE_ERRORS' => 
  array (
    1 => 'O ficheiro carregado excede a directiva upload_max_filesize no php.ini',
    2 => 'O ficheiro carregado excede a directiva MAX_FILE_SIZE que foi especificada no formulário HTML.',
    3 => 'O ficheiro carregado foi apenas parcialmente carregado.',
    4 => 'Nenhum ficheiro foi carregado.',
    5 => 'Erro desconhecido.',
    6 => 'Pasta temporária em falta.',
    7 => 'Falha ao escrever o ficheiro para o disco.',
    8 => 'Carregamento do ficheiro interrompido por extensão.',
  ),
  'ERR_UW_PREFLIGHT_ERRORS' => 'Erros encontrados durante a verificação Preflight',
  'ERR_UW_UPLOAD_ERR' => 'Ocorreu um erro ao carregar o ficheiro, por favor tente novamente!',
  'ERR_UW_VERSION' => 'Versão do sistema SugarCRM',
  'ERR_UW_WRONG_TYPE' => 'Esta página não é para ser executada',
  'LBL_BACKWARD_COMPATIBILITY_ON' => 'O modo Php Backward Compatibility está ligado. Configure o zend.ze1_compatibility_mode para Desligado para prosseguir',
  'LBL_BUTTON_BACK' => 'Voltar',
  'LBL_BUTTON_CANCEL' => 'Cancelar',
  'LBL_BUTTON_DELETE' => 'Eliminar o Pacote',
  'LBL_BUTTON_DONE' => 'Concluído',
  'LBL_BUTTON_EXIT' => 'Sair',
  'LBL_BUTTON_INSTALL' => 'Actualização Preflight',
  'LBL_BUTTON_NEXT' => 'Próximo >',
  'LBL_BUTTON_RECHECK' => 'Verificar novamente',
  'LBL_BUTTON_RESTART' => 'Reiniciar',
  'LBL_COMMIT_UPGRADE_IN_PROGRESS' => 'Commit Upgrade em progresso',
  'LBL_CURRENT_PHP_VERSION' => '(A sua versão PHP actual é',
  'LBL_GLOBAL_TEAM_DESC' => 'Globalmente visíveis',
  'LBL_HOME_PAGE_4_NAME' => 'Tracker',
  'LBL_INCOMPATIBLE_PHP_VERSION' => 'É necessário PHP versão 5 ou acima',
  'LBL_LANGPACKS' => 'Pacotes de Idiomas',
  'LBL_LAYOUT_MERGE_DESC' => 'Há novos campos disponíveis, que foram adicionados como parte desta actualização e podem ser adicionados automaticamente aos layouts dos módulos. Para saber mais sobre os novos campos, consulte as Notas de Lançamento da versão para qual está a actualizar.',
  'LBL_LAYOUT_MERGE_TITLE' => 'Clique em Avançar para confirmar as alterações e finalizar a actualização.',
  'LBL_LAYOUT_MERGE_TITLE2' => 'Clique em Avançar para concluir a actualização.',
  'LBL_LAYOUT_MODULE_TITLE' => 'Layouts',
  'LBL_LICENSE_CHECK_IN_PROGRESS' => 'Verificação de Licença em progresso',
  'LBL_ML_ACTION' => 'Acção',
  'LBL_ML_CANCEL' => 'Cancelar',
  'LBL_ML_COMMIT' => 'Submeter',
  'LBL_ML_DESCRIPTION' => 'Descrição',
  'LBL_ML_INSTALL' => 'Instalar',
  'LBL_ML_INSTALLED' => 'Data de Instalação',
  'LBL_ML_NAME' => 'Nome',
  'LBL_ML_PUBLISHED' => 'Data de Publicação',
  'LBL_ML_TYPE' => 'Tipo',
  'LBL_ML_UNINSTALLABLE' => 'Não-instalável',
  'LBL_ML_VERSION' => 'Versão',
  'LBL_MODULELOADER' => 'Carregador de Módulo',
  'LBL_MODULE_NAME' => 'Assistente de Actualização',
  'LBL_MODULE_NAME_SINGULAR' => 'Assistente de Actualização',
  'LBL_PATCHUPGRADES' => 'Patch Upgrades',
  'LBL_PREFLIGHT_CHECK_IN_PROGRESS' => 'Verificação Preflight em progresso',
  'LBL_PREFLIGHT_FILE_COPYING_PROGRESS' => 'Cópia de ficheiros em andamento',
  'LBL_PROCESSING' => 'Processando',
  'LBL_RECOMMENDED_PHP_VERSION' => '. A versão PHP recomendada é a 5.2.1 ou acima)',
  'LBL_SELECT_FILE' => 'Seleccione um ficheiro:',
  'LBL_START_UPGRADE_IN_PROGRESS' => 'Iniciar em progresso',
  'LBL_SYSTEM_CHECKS_IN_PROGRESS' => 'Verificações de Sistema em progresso',
  'LBL_THEMES' => 'Tema',
  'LBL_UPGRADE' => 'Actualização',
  'LBL_UPGRADE_CANCEL_IN_PROGRESS' => 'Actualização de Cancelar e Limpar em progresso',
  'LBL_UPGRADE_IN_PROGRESS' => 'em progresso',
  'LBL_UPGRADE_SCRIPTS_IN_PROGRESS' => 'Actualização de Scripts em execução',
  'LBL_UPGRADE_SUMMARY_IN_PROGRESS' => 'Sumário de Actualização em progresso',
  'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE' => 'Actualização pode demorar algum tempo',
  'LBL_UPGRADE_TIME_ELAPSED' => 'Tempo decorrido',
  'LBL_UPLOADE_UPGRADE_IN_PROGRESS' => 'Verificações de carregamento em progresso',
  'LBL_UPLOADING_UPGRADE_PACKAGE' => 'Carregando pacote de actualização...',
  'LBL_UPLOAD_FILE_NOT_FOUND' => 'Ficheiro de carregamento não encontrado',
  'LBL_UPLOAD_SUCCESS' => 'O pacote de actualização foi carregado com sucesso. Clique em Avançar para executar uma verificação final.',
  'LBL_UPLOAD_UPGRADE' => 'Carregar uma actualização:',
  'LBL_UW_ACCEPT_THE_LICENSE' => 'Aceitar Licença',
  'LBL_UW_BACKUP' => 'Ficheiro de Backup',
  'LBL_UW_BACKUP_FILES_EXIST' => 'Ficheiros de Backup desta actualização não podem ser encontrados em',
  'LBL_UW_BACKUP_FILES_EXIST_TITLE' => 'Ficheiro de Backup',
  'LBL_UW_CANCEL_DESC' => 'O Assistente de Actualização foi cancelado. Todos os ficheiros temporários e ficheiros zip enviados foram apagados. Pressione "Próximo" para reiniciar o Assistente de Actualização.',
  'LBL_UW_CHARSET_SCHEMA_CHANGE' => 'Alterações de Character Set Schema',
  'LBL_UW_CHECKLIST' => 'Passos da Actualização',
  'LBL_UW_CHECK_ALL' => 'Verificar todos',
  'LBL_UW_COMMIT_ADD_TASK_DESC_1' => 'Backups dos ficheiros sobrescritos estão na seguinte directoria:',
  'LBL_UW_COMMIT_ADD_TASK_DESC_2' => 'Fundir manualmente os seguintes ficheiros:',
  'LBL_UW_COMMIT_ADD_TASK_NAME' => 'Processo de Actualização: Fundir Manualmente os Ficheiros',
  'LBL_UW_COMMIT_ADD_TASK_OVERVIEW' => 'Por favor utilize o seu método preferido de diff para juntar os ficheiros. Até então a sua instalação do SugarCRM estará incompleta.',
  'LBL_UW_COMMIT_DESC' => 'Clique em Avançar para executar scripts de actualização adicionais.',
  'LBL_UW_COMPLETE' => 'Completo',
  'LBL_UW_COMPLIANCE_ALL_OK' => 'Todas as exigências de configurações do sistema foram satisfeitas',
  'LBL_UW_COMPLIANCE_CALLTIME' => 'Configurações do PHP: Passagem de Tempo da chamada por Referência',
  'LBL_UW_COMPLIANCE_CURL' => 'Módulo de cURL',
  'LBL_UW_COMPLIANCE_DB' => 'Versão mínima da base de dados',
  'LBL_UW_COMPLIANCE_IMAP' => 'Módulo IMAP',
  'LBL_UW_COMPLIANCE_MBSTRING' => 'Módulo MBStrings',
  'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD' => 'Parâmetro MBStrings mbstring.func_overload',
  'LBL_UW_COMPLIANCE_MEMORY' => 'Configurações PHP: Limite de Memória',
  'LBL_UW_COMPLIANCE_MSSQL_MAGIC_QUOTES' => 'MS SQL Server & PHP Magic Quotes GPC',
  'LBL_UW_COMPLIANCE_MYSQL' => 'Versão mínima do MySQL',
  'LBL_UW_COMPLIANCE_PHP_INI' => 'Localização do php.ini',
  'LBL_UW_COMPLIANCE_PHP_VERSION' => 'Versão mínima do PHP',
  'LBL_UW_COMPLIANCE_SAFEMODE' => 'Definições do PHP: Modo Seguro',
  'LBL_UW_COMPLIANCE_STREAM' => 'Configurações PHP: Stream',
  'LBL_UW_COMPLIANCE_TITLE' => 'Verificar Definições do Servidor',
  'LBL_UW_COMPLIANCE_TITLE2' => 'Definições Detectadas',
  'LBL_UW_COMPLIANCE_XML' => 'XML Parsing',
  'LBL_UW_COMPLIANCE_ZIPARCHIVE' => 'Suporta Zip',
  'LBL_UW_CONFIRM_LAYOUTS' => 'Confirme Layouts',
  'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Resultados da confirmação de Layouts',
  'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'Os layouts foram fundidos com êxito:',
  'LBL_UW_CONTINUE_CONFIRMATION' => 'Esta nova versão do Sugar contém um novo acordo de licença. Pretende continuar?',
  'LBL_UW_CONVERT_THE_LICENSE' => 'Converter Licença',
  'LBL_UW_COPIED_FILES_TITLE' => 'Ficheiros copiados com sucesso',
  'LBL_UW_CUSTOMIZED_OR_UPGRADED_MODULES' => 'Módulos Actualizados/Personalizados',
  'LBL_UW_CUSTOM_TABLE_SCHEMA_CHANGE' => 'Custom Table Schema Changes',
  'LBL_UW_DB_CHOICE1' => 'Assistente de Actualização Executa SQL',
  'LBL_UW_DB_CHOICE2' => 'Queries SQL Manuais',
  'LBL_UW_DB_INSERT_FAILED' => 'INSERT falhou - resultados comparados diferem',
  'LBL_UW_DB_ISSUES' => 'Edições da base de dados',
  'LBL_UW_DB_ISSUES_PERMS' => 'Privilégios da base de dados',
  'LBL_UW_DB_METHOD' => 'Método de Actualização da base de dados',
  'LBL_UW_DB_NO_ERRORS' => 'Todos os privilégios disponíveis',
  'LBL_UW_DB_PERMS' => 'Privilégio necessário',
  'LBL_UW_DESC_MODULES_INSTALLED' => 'As seguintes actualizações foram instaladas:',
  'LBL_UW_DORP_THE_OLD_SCHMEA' => 'Pretende que o Sugar remova o obsoleto 451 Schema?',
  'LBL_UW_DROP_SCHEMA_MANUAL' => 'Pós-Actualização de Remoção Manual de Schema',
  'LBL_UW_DROP_SCHEMA_METHOD' => 'Método Antigo de Remoção de Schema',
  'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD' => 'Wizard de Actualização Remove antigo 451 schema',
  'LBL_UW_END_DESC' => 'Parabéns, o seu sistema está agora actualizado.',
  'LBL_UW_END_DESC2' => 'Se escolheu executar manualmente qualquer passo tal como juntar um ficheiro ou SQL queries, por favor faça isso agora. O seu sistema não estará estável enquanto estes passos não forem concluídos.',
  'LBL_UW_END_LOGOUT' => 'Por favor saia da sua conta se planeia uma actualização de nível superior ao desta correcção/actualização',
  'LBL_UW_END_LOGOUT2' => 'Sair',
  'LBL_UW_END_LOGOUT_PRE' => 'A actualização está completa.',
  'LBL_UW_END_LOGOUT_PRE2' => 'Clique em "Concluído" para sair do Wizard de Actualizações.',
  'LBL_UW_FILE' => 'Nome do ficheiro',
  'LBL_UW_FILES_QUEUED' => 'As seguintes actualizações estão prontas para serem instaladas:',
  'LBL_UW_FILES_REMOVED' => 'Os seguintes ficheiros serão removidos do sistema:',
  'LBL_UW_FILE_DELETED' => 'foi removido.',
  'LBL_UW_FILE_GROUP' => 'Grupo',
  'LBL_UW_FILE_ISSUES' => 'Edições do ficheiro',
  'LBL_UW_FILE_ISSUES_PERMS' => 'Permissões do ficheiro',
  'LBL_UW_FILE_NEEDS_DIFF' => 'Ficheiro requer manual Diff',
  'LBL_UW_FILE_NO_ERRORS' => 'Todos os ficheiros podem ser escritos',
  'LBL_UW_FILE_OWNER' => 'Proprietário',
  'LBL_UW_FILE_PERMS' => 'Permissões',
  'LBL_UW_FILE_UPLOADED' => 'foi carregado',
  'LBL_UW_FOLLOWING_MODULES_CUSTOMIZED' => 'Os módulos seguintes estão detectados como personalizados e preservados',
  'LBL_UW_FOLLOWING_MODULES_UPGRADED' => 'Os módulos seguintes estão detectados como personalizados em Studio e têm sido actualizados',
  'LBL_UW_FROZEN' => 'As etapas requeridas devem ser terminadas antes de continuar.',
  'LBL_UW_HIDE_DETAILS' => 'Esconder Detalhes',
  'LBL_UW_INCLUDING' => 'Incluindo',
  'LBL_UW_INCOMPLETE' => 'Incompleto',
  'LBL_UW_INSTALL' => 'Ficheiro INSTALL',
  'LBL_UW_IN_PROGRESS' => 'Em processamento',
  'LBL_UW_MANUAL_MERGE' => 'Fundir Ficheiros',
  'LBL_UW_MODULE_READY' => 'O Módulo está pronto para ser instalado. Clique em "Commit" para continuar com a instalação.',
  'LBL_UW_MODULE_READY_UNINSTALL' => 'O Módulo está pronto para ser desinstalado. Clique em "Commit" para continuar com a instalação.',
  'LBL_UW_NEXT_TO_UPLOAD' => 'Clique em Avançar para carregar pacotes de actualização.',
  'LBL_UW_NONE' => 'Nenhum',
  'LBL_UW_NOT_AVAILABLE' => 'Não disponível',
  'LBL_UW_NO_INSTALLED_UPGRADES' => 'Nenhuma Actualização gravada detectada.',
  'LBL_UW_OVERWRITE_DESC' => 'Todos os ficheiros alterados serão sobrescritos - incluindo qualquer codificação à medida e alterações feitas no modelo. Você tem certeza que deseja continuar?',
  'LBL_UW_OVERWRITE_FILES' => 'Método de Fusão',
  'LBL_UW_OVERWRITE_FILES_CHOICE1' => 'Sobrescrever todos os ficheiros',
  'LBL_UW_OVERWRITE_FILES_CHOICE2' => 'Fundir Manualmente - Preservar todos',
  'LBL_UW_PATCH_READY' => 'O patch está pronto para prosseguir. Clique no botão &quot;Instalar&quot; abaixo para completar o processo de actualização.',
  'LBL_UW_PATCH_READY2' => '<b>Observação: Layout à medida encontrado</b><BR><BR>O(s) seguinte(s) ficheiro(s) têm um novo(s) campo(s) ou tela de layout modificada(s) via o Studio. O patch que está a preparar para instalar contém mudanças no(s) ficheiro(s). Para <u>cada ficheiro</u> deverá:<BR><BR><li><b>[Default]</b>Reter sua versão deixando o checkbox vazio. As modificações no patch serão ignorados. ou.</li><BR><li>Aceite os ficheiros de actualização selecionando o checkbox. Os seus layouts deverão ser aplicados novamente via o Studio</li>',
  'LBL_UW_PREFLIGHT_ADD_TASK' => 'Criar um item da tarefa para fundir manualmente?',
  'LBL_UW_PREFLIGHT_COMPLETE' => 'Verificar Preflight',
  'LBL_UW_PREFLIGHT_DIFF' => 'Diferenciado',
  'LBL_UW_PREFLIGHT_EMAIL_REMINDER' => 'Deseja receber um e-mail de aviso sobre a Fusão Manual?',
  'LBL_UW_PREFLIGHT_FILES_DESC' => 'Os ficheiros listados abaixo foram modificados. Itens não marcados que exigem uma junção manual. Qualquer mudança detectada no layout será automaticamente desmarcada; marque qualquer uma que possa ser sobrescrita.',
  'LBL_UW_PREFLIGHT_NOT_NEEDED' => 'Sem necessidade.',
  'LBL_UW_PREFLIGHT_NO_DIFFS' => 'Não é necessário fundir ficheiros manualmente.',
  'LBL_UW_PREFLIGHT_PRESERVE_FILES' => 'Ficheiros preservados automaticamente',
  'LBL_UW_PREFLIGHT_TESTS_PASSED' => 'Todos os testes Preflight aprovados. Pressione "Próximo" para submeter estas modificações.',
  'LBL_UW_PREFLIGHT_TESTS_PASSED2' => 'Clique em Avançar copiar os arquivos actualizados para o sistema.',
  'LBL_UW_PREFLIGHT_TESTS_PASSED3' => 'Por favor, repare que o resto do processo de actualização é obrigatório, e clicando em Seguinte, terá que concluir o processo. Se não deseja prosseguir, clique no botão cancelar.',
  'LBL_UW_PREFLIGHT_TOGGLE_ALL' => 'Substituir todos os ficheiros',
  'LBL_UW_REBUILD_TITLE' => 'Resultado da reconstrução',
  'LBL_UW_REPAIR_INDEX' => 'Para melhorar a performance da sua base de dados, por favor execute o <a href="http://dev.lampadacrm.com.br/apache/sugar45/Translation/index.php?module=Administration&action=RepairIndex">Reparar Índices</> script.',
  'LBL_UW_SCHEMA_CHANGE' => 'Alterar Schema',
  'LBL_UW_SHOW' => 'Mostrar',
  'LBL_UW_SHOW_COMPLIANCE' => 'Mostrar Definições detectadas.',
  'LBL_UW_SHOW_DB_PERMS' => 'Mostrar permissões da Base de Dados em falta.',
  'LBL_UW_SHOW_DETAILS' => 'Mostrar Detalhes',
  'LBL_UW_SHOW_DIFFS' => 'Mostrar ficheiros que requerem fusão manual',
  'LBL_UW_SHOW_NW_FILES' => 'Mostrar ficheiros com Más Permissões',
  'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP' => 'Mostrar Schema Antigo que pode ser removido',
  'LBL_UW_SHOW_SCHEMA' => 'Mostrar Schema Change Script',
  'LBL_UW_SHOW_SQL_ERRORS' => 'Mostrar Más Queries',
  'LBL_UW_SKIPPED_FILES_TITLE' => 'Ficheiros Ignorados',
  'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST' => 'Queries Ignoradas',
  'LBL_UW_SKIPPING_FILE_OVERWRITE' => 'A ignorar ficheiros sobrescritos -  Fundir manualmente os seleccionados.',
  'LBL_UW_SQL_RUN' => 'Verificar quando o SQL foi executado manualmente',
  'LBL_UW_START_DESC' => 'Bem-vindo ao Assistente de Actualização SugarCRM. Este ambiente é projectado para ajudar os administradores quando forem fazer a actualização do SugarCRM. Por favor siga as instruções dadas cuidadosamente.',
  'LBL_UW_START_DESC2' => 'Recomendamos que realize a actualização num servidor clone antes de realizar no servidor de produção. Por favor faça o backup da sua base de dados e ficheiros do sistema (todos os ficheiros na sua pasta SugarCRM) antes de realizar a operação - prevenir sempre é melhor do que remediar.',
  'LBL_UW_START_DESC3' => 'Clique em Avançar para executar uma verificação de sistema para se certificar de que o sistema está pronto para o actualização. A verificações inclui permissões de ficheiros e privilégios de base de dados, bem como configurações do servidor.',
  'LBL_UW_START_UPGRADED_UW_DESC' => 'O novo Assistente de Actualização irá agora retomar o processo de actualização. Por favor continue a sua actualização.',
  'LBL_UW_START_UPGRADED_UW_TITLE' => 'Bem-Vindo ao Novo Assistente de Actualização',
  'LBL_UW_SYSTEM_CHECK_CHECKING' => 'A verificar, por favor espere. Isto pode levar mais do que 30 segundos.',
  'LBL_UW_SYSTEM_CHECK_FILES' => 'Ficheiros',
  'LBL_UW_SYSTEM_CHECK_FILE_CHECK_START' => 'Procurando todos os arquivos pertinentes para a verificação',
  'LBL_UW_SYSTEM_CHECK_FOUND' => 'Encontrado',
  'LBL_UW_TITLE' => 'Assistente de Actualização',
  'LBL_UW_TITLE_CANCEL' => 'Cancelar',
  'LBL_UW_TITLE_COMMIT' => 'Commit Upgrade',
  'LBL_UW_TITLE_END' => 'Debrief',
  'LBL_UW_TITLE_LAYOUTS' => 'Confirme Layouts',
  'LBL_UW_TITLE_PREFLIGHT' => 'Verificação Preflight',
  'LBL_UW_TITLE_START' => 'Iniciar',
  'LBL_UW_TITLE_SYSTEM_CHECK' => 'Verificações do Sistema',
  'LBL_UW_TITLE_UPLOAD' => 'Carregamento da Pacote',
  'LBL_UW_UNINSTALL' => 'Desinstalar',
  'LBL_WORKFLOW' => 'Workflow',
);

