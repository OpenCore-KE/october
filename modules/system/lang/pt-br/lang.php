<?php return [
  'installer' => [
    'app_config_section' => 'Configuração da aplicaçao',
    'license_section' => 'Chave de licença',
    'dependencies_section' => 'Instalando dependências',
    'demo_section' => 'Conteúdo de demonstração',
    'locale_select_label' => 'Selecionar idioma',
    'locale_select_error' => 'Código do idioma :code é inválido, tente novamente',
    'app_url_label' => 'URL da aplicação',
    'backend_uri_label' => 'URI do painel',
    'backend_uri_comment' => 'Para proteger sua aplicaçao, use um endereço personalizado para acessar o painel de administração.',
    'license_key_label' => 'Chave de licença',
    'license_key_comment' => 'Digite uma chave de licença válida para continuar.',
    'license_thanks_comment' => 'Obrigado por ser cliente do October CMS!',
    'license_expired_comment' => 'A licença não foi paga ou expirou. Visite octobercms.com para obter uma licença.',
    'too_many_failures_label' => 'Muitas tentativas falhadas',
    'non_interactive_label' => 'Modo não interativo detectado',
    'non_interactive_comment' => 'Se você vir este erro imediatamente, use estes comandos não interativos.',
    'install_failed_label' => 'Falha na instalação',
    'install_failed_comment' => 'Por favor, tente executar estes comandos manualmente.',
    'database_engine_label' => 'Motor de Banco de Dados',
    'database_host_label' => 'Host do banco de dados',
    'database_host_comment' => 'Nome do host para a conexão do banco de dados.',
    'database_port_label' => 'Porta do banco de dados',
    'database_port_comment' => '(Opcional) Uma porta para a conexão.',
    'database_name_label' => 'Nome do banco de dados',
    'database_name_comment' => 'Especifique o nome do banco de dados a ser usado.',
    'database_login_label' => 'Login do banco de dados',
    'database_login_comment' => 'Usuário com privilégios de criação de banco de dados.',
    'database_pass_label' => 'Senha do banco de dados',
    'database_pass_comment' => 'Senha para o usuário especificado.',
    'database_path_label' => 'Caminho do banco de dados',
    'database_path_comment' => 'Para armazenamento baseado em arquivo, insira um caminho relativo ao diretório raiz do aplicativo.',
    'migrate_database_comment' => 'Por favor, migre o banco de dados com o seguinte comando',
    'visit_backend_comment' => 'Então, abra a área de administração nesta URL',
    'open_configurator_comment' => 'Abra a aplicação em seu navegador',
    'install_demo_label' => 'Instalar o tema de demonstração e conteúdo? (Recomendado)',
  ],
  'app' => [
    'name' => 'October CMS',
    'tagline' => 'Voltando ao básico',
  ],
  'locale' => [
    'ar' => 'العربية',
    'be' => 'Беларуская',
    'bg' => 'Български',
    'ca' => 'Català',
    'cs' => 'Čeština',
    'da' => 'Dansk',
    'en' => 'English (United States)',
    'en-au' => 'English (Australia)',
    'en-ca' => 'English (Canada)',
    'en-gb' => 'English (United Kingdom)',
    'et' => 'Eesti',
    'de' => 'Deutsch',
    'el' => 'Ελληνικά',
    'es' => 'Español',
    'es-ar' => 'Español (Argentina)',
    'fa' => 'فارسی',
    'fr' => 'Français',
    'fr-ca' => 'Français (Canada)',
    'hu' => 'Magyar',
    'id' => 'Bahasa Indonesia',
    'it' => 'Italiano',
    'ja' => '日本語',
    'kr' => '한국어',
    'lt' => 'Lietuvių',
    'lv' => 'Latviešu',
    'nb-no' => 'Norsk (Bokmål)',
    'nn-no' => 'Norsk (Nynorsk)',
    'nl' => 'Nederlands',
    'pl' => 'Polski',
    'pt-br' => 'Português (Brasil)',
    'pt-pt' => 'Português (Portugal)',
    'ro' => 'Română',
    'rs' => 'Srpski',
    'ru' => 'Русский',
    'fi' => 'Suomi',
    'sv' => 'Svenska',
    'sk' => 'Slovenský',
    'sl' => 'Slovenščina',
    'th' => 'ไทย',
    'tr' => 'Türkçe',
    'uk' => 'Українська мова',
    'zh-cn' => '简体中文',
    'zh-tw' => '繁體中文',
    'vn' => 'Tiếng việt',
  ],
  'directory' => [
    'create_fail' => 'Não é possível criar o diretório: :name',
  ],
  'file' => [
    'create_fail' => 'Não é possível criar o arquivo: :name',
  ],
  'combiner' => [
    'not_found' => 'O arquivo combinador ":name" não foi encontrado.',
  ],
  'resizer' => [
    'not_found' => 'O arquivo \':name\' a ser redimencionado não foi encontrado.',
  ],
  'system' => [
    'name' => 'Sistema',
    'menu_label' => 'Sistema',
    'categories' => [
      'cms' => 'CMS',
      'misc' => 'Diversos',
      'logs' => 'Registros',
      'mail' => 'E-mail',
      'shop' => 'Loja ',
      'team' => 'Equipe',
      'users' => 'Usuários',
      'system' => 'Sistema',
      'social' => 'Social',
      'backend' => 'Backend',
      'events' => 'Eventos',
      'customers' => 'Clientes',
      'my_settings' => 'Configurações',
      'notifications' => 'Notificações',
    ],
  ],
  'theme' => [
    'label' => 'Tema',
    'unnamed' => 'Tema sem nome',
    'name' => [
      'label' => 'Nome do Tema',
      'help' => 'Nome do tema deve ser único. Por exemplo, RainLab.Vanilla',
    ],
  ],
  'themes' => [
    'install' => 'Instalar tema',
    'search' => 'Buscar temas para instalar...',
    'installed' => 'Temas instalados',
    'no_themes' => 'Não há temas instalados.',
    'recommended' => 'Recomendado',
    'remove_confirm' => 'Você tem certeza que deseja remover este tema?',
  ],
  'plugin' => [
    'label' => 'Plugin',
    'unnamed' => 'Plugin sem nome',
    'name' => [
      'label' => 'Nome do Plugin',
      'help' => 'Nomeie o plugin pelo seu código exclusivo. Por exemplo, RainLab.Blog',
    ],
    'by_author' => 'Por :name',
  ],
  'plugins' => [
    'install' => 'Instalar plugins',
    'install_products' => 'Instalar produtos',
    'search' => 'Buscar plugin para instalar...',
    'installed' => 'Plugins instalados',
    'no_plugins' => 'Não há plugins instalados.',
    'recommended' => 'Recomendado',
    'plugin_label' => 'Plugin',
    'unknown_plugin' => 'Plugin removido do sistema de arquivos.',
    'disabled_by_config' => 'Plugin foi desativado pela configuração.',
    'disabled_by_system' => 'Plugin tem dependências ausentes ou desativados pelo sistema.',
    'select_label' => 'Selecionar ação...',
    'bulk_actions_label' => 'Ações em massa',
    'check_yes' => 'Sim',
    'check_no' => 'Não',
    'unfrozen' => 'Atualizações Ativas',
    'enabled' => 'Plugin Ativo',
    'freeze' => 'desativar atualizações para',
    'unfreeze' => 'ativar atualizações para',
    'enable' => 'ativo',
    'disable' => 'inativo',
    'refresh' => 'Atualizar',
    'remove' => 'Remover',
    'freeze_label' => 'Desativar Atualizações',
    'unfreeze_label' => 'Ativar Atualizações',
    'enable_label' => 'Ativar plugins',
    'disable_label' => 'Desativar plugins',
    'refresh_label' => 'Redefinir dados do plugin',
    'action_confirm' => 'Tem certeza de que deseja :action esses plugins?',
    'freeze_success' => 'Plugins selecionados foram desativados com sucesso.',
    'unfreeze_success' => 'Plugins selecionados foram ativados com sucesso.',
    'enable_success' => 'Plugins habilitados com sucesso.',
    'disable_success' => 'Plugins desabilitados com sucesso.',
    'refresh_confirm' => 'Tem certeza de que deseja redefinir os plugins selecionados? Isso redefinirá os dados de cada plugin, restaurando-os para o estado de inicial.',
    'refresh_success' => 'Plugins atualizados com sucesso.',
    'remove_confirm' => 'Tem certeza de que deseja remover os plugins selecionados? Isso também removerá todos os dados associados.',
    'remove_success' => 'Plugins removidos com sucesso do sistema.',
  ],
  'project' => [
    'attach' => 'Anexar Projeto',
    'detach' => 'Desanexar Projeto',
    'none' => 'Nenhum',
    'id' => [
      'label' => 'Identificador do Projeto',
      'help' => 'Como encontrar o identificador do seu projeto',
      'missing' => 'Por favor, forneça um identificador de projeto para usar.',
    ],
    'detach_confirm' => 'Tem certeza que deseja desanexar este projeto?',
    'unbind_success' => 'Projeto desanexado com sucesso.',
  ],
  'mail' => [
    'smtp_ssl' => 'Conexão SSL obrigatória',
    'drivers_hint_header' => 'Drivers não instalados',
    'drivers_hint_content' => 'Este método requer que o plugin ":plugin" esteja instalado.',
  ],
  'mail_templates' => [
    'menu_label' => 'Modelos de E-mail',
    'menu_description' => 'Modificar os modelos dos e-mails que são enviados para usuários e administradores.',
    'new_template' => 'Novo modelo',
    'new_layout' => 'Novo esboço',
    'new_partial' => 'Novo bloco',
    'template' => 'Modelo',
    'templates' => 'Modelos',
    'partial' => 'Bloco',
    'partials' => 'Blocos',
    'menu_layouts_label' => 'Esboços de e-mail',
    'menu_partials_label' => 'Blocos de e-mail',
    'layout' => 'Esboço',
    'layouts' => 'Esboços',
    'no_layout' => '-- Sem esboço --',
    'name' => 'Nome',
    'name_comment' => 'Nome exclusivo usado para se referir a este modelo',
    'code' => 'Código',
    'code_comment' => 'Código exclusivo usado para se referir a este modelo',
    'subject' => 'Assunto',
    'subject_comment' => 'Assunto da mensagem',
    'description' => 'Descrição',
    'content_html' => 'HTML',
    'content_css' => 'CSS',
    'content_text' => 'Texto Simples',
    'test_send' => 'Enviar mensagem de teste',
    'test_success' => 'Mensagem de teste enviada com sucesso.',
    'test_confirm' => 'Enviar uma mensagem de teste para :email. Continuar?',
    'creating' => 'Criando modelo...',
    'creating_layout' => 'Criando esboço...',
    'saving' => 'Salvando modelo...',
    'saving_layout' => 'Salvando esboço...',
    'delete_confirm' => 'Excluir este modelo?',
    'delete_layout_confirm' => 'Excluir este esboço?',
    'deleting' => 'Excluindo modelo...',
    'deleting_layout' => 'Excluindo esboço...',
    'sending' => 'Enviando mensagem de teste...',
    'return' => 'Retornar à lista de modelos',
    'options' => 'Opções',
    'disable_auto_inline_css' => 'Desativar CSS inline automático',
  ],
  'mail_brand' => [
    'menu_label' => 'Personalizar Email',
    'menu_description' => 'Modifique as cores e a aparência dos modelos de email.',
    'page_title' => 'Personalizar aparência de email',
    'sample_template' => [
      'heading' => 'Título',
      'paragraph' => 'Este é um parágrafo preenchido com o Lorem Ipsum e um link. Cumque dicta <a>doloremque eaque</a>, enim error laboriosam pariatur possimus tenetur veritatis voluptas.',
      'table' => [
        'item' => 'Item',
        'description' => 'Descrição',
        'price' => 'Priço',
        'centered' => 'Centralizado',
        'right_aligned' => 'Alinhado à direita',
      ],
      'buttons' => [
        'primary' => 'Botão principal',
        'positive' => 'Botão positivo',
        'negative' => 'Botão negativo',
      ],
      'panel' => 'Esse painel não é incrível?',
      'more' => 'Mais alguns textos',
      'promotion' => 'Código do cupom: OCTOBER',
      'subcopy' => 'Esta é a subcópia do email',
      'thanks' => 'Obrigado',
    ],
    'fields' => [
      '_section_background' => 'Fundo',
      'body_bg' => 'Fundo do corpo',
      'content_bg' => 'Fundo do conteúdo',
      'content_inner_bg' => 'Fundo de conteúdo interno',
      '_section_buttons' => 'Botões',
      'button_text_color' => 'Cor do texto do botão',
      'button_primary_bg' => 'Fundo do botão principal',
      'button_positive_bg' => 'Fundo do botão positivo',
      'button_negative_bg' => 'Fundo do botão negativo',
      '_section_type' => 'Tipografia',
      'header_color' => 'Cor do cabeçalho',
      'heading_color' => 'Cor dos títulos',
      'text_color' => 'Cor do texto',
      'link_color' => 'Cor do link',
      'footer_color' => 'Cor do rodapé',
      '_section_borders' => 'Bordas',
      'body_border_color' => 'Cor da borda do corpo',
      'subcopy_border_color' => 'Cor da borda da subcópia',
      'table_border_color' => 'Cor da borda da tabela',
      '_section_components' => 'Componentes',
      'panel_bg' => 'Fundo do painel',
      'promotion_bg' => 'Fundo do cupom promocional',
      'promotion_border_color' => 'Cor da borda cupom promocional',
    ],
  ],
  'install' => [
    'project_label' => 'Anexar ao projeto',
    'plugin_label' => 'Instalar plugin',
    'theme_label' => 'Instalar tema',
  ],
  'updates' => [
    'title' => 'Gerenciar atualizações',
    'name' => 'Atualização de software',
    'return_link' => 'Voltar às atualizações',
    'retry_label' => 'Tentar novamente',
    'plugin_name' => 'Nome',
    'plugin_code' => 'Código',
    'plugin_description' => 'Descrição',
    'plugin_version' => 'Versão',
    'plugin_latest' => 'Mais recentes',
    'plugin_author' => 'Autor',
    'plugin_not_found' => 'Plugin não encontrado',
    'plugin_version_not_found' => 'Versão do plugin não encontrada',
    'theme_not_found' => 'Tema não encontrado',
    'core_build' => 'Compilação :build',
    'core_build_help' => 'Última versão está disponível.',
    'core_extracting' => 'Desempacotando arquivos do aplicativo',
    'update_warnings_title' => 'Alguns problemas foram detectados e requerem atenção:',
    'update_warnings_plugin_missing' => 'O plugin :parent_code requer que o :code seja instalado antes de funcionar',
    'changelog' => 'Changelog',
    'changelog_view_details' => 'Ver detalhes',
    'themes' => 'Temas',
    'plugin_extracting' => 'Desempacotando o plugin: :name',
    'plugin_version_none' => 'Novo plugin',
    'plugin_current_version' => 'Versão atual',
    'theme_new_install' => 'Instalação do novo tema.',
    'theme_extracting' => 'Desempacotando o tema: :name',
    'update_label' => 'Atualizar',
    'update_loading' => 'Carregando atualizações disponíveis...',
    'update_failed_label' => 'Falha na atualização',
    'force_label' => 'Forçar atualização',
    'found' => [
      'label' => 'Atualizações encontradas!',
      'help' => 'Clique em Atualizar para iniciar o processo de atualização.',
    ],
    'none' => [
      'label' => 'Nenhuma atualização',
      'help' => 'Não há novas atualizações.',
    ],
    'important_action' => [
      'empty' => 'Selecionar ação',
      'confirm' => 'Confirmar atualização',
      'skip' => 'Pular este plugin (apenas uma vez)',
      'ignore' => 'Pular este plugin (sempre)',
    ],
    'important_action_required' => 'Ação requerida',
    'important_view_guide' => 'Exibir guia de atualização',
    'important_view_release_notes' => 'Ver notas de lançamento',
    'important_alert_text' => 'Algumas atualizações precisam de sua atenção.',
    'details_title' => 'Detalhes do plugin',
    'details_title_plugin' => 'Detalhes do plugin',
    'details_title_theme' => 'Detalhes do tema',
    'details_view_homepage' => 'Visualizar página',
    'details_readme' => 'Documentação',
    'details_readme_missing' => 'Não foi fornecida nenhuma documentação.',
    'details_changelog' => 'Registro de mudanças',
    'details_changelog_missing' => 'Não há changelog fornecido.',
    'details_upgrades' => 'Guia de atualização',
    'details_upgrades_missing' => 'Não existem instruções de atualização.',
    'details_license' => 'Licença',
    'details_view_license' => 'Ver licença',
    'details_license_missing' => 'Não há licença fornecida.',
    'details_current_version' => 'Versão atual',
    'details_author' => 'Autor',
  ],
  'market' => [
    'menu_label' => 'Mercado',
    'menu_description' => 'Gerencie e instale plugins e temas.',
    'content_loading' => 'Carregando...',
  ],
  'server' => [
    'connect_error' => 'Erro ao conectar-se com o servidor.',
    'response_not_found' => 'O servidor de atualização não pôde ser encontrado.',
    'response_invalid' => 'Resposta inválida do servidor.',
    'response_empty' => 'Resposta vazia do servidor.',
    'file_error' => 'Servidor não conseguiu entregar o pacote.',
    'file_corrupt' => 'Arquivo do servidor está corrompido.',
  ],
  'behavior' => [
    'missing_property' => 'Classe :class deve definir a propriedade $:property usada pelo comportamento :behavior.',
  ],
  'config' => [
    'not_found' => 'Não foi possível localizar o arquivo de configuração :file definido para :location.',
    'required' => 'Configuração usada em :location deve fornecer um valor :property.',
  ],
  'zip' => [
    'extract_failed' => 'Não foi possível extrair arquivo do núcleo ":file".',
  ],
  'event_log' => [
    'hint' => 'Este registro mostra a lista dos potenciais erros que ocorreram na aplicação, como exceções e informações de depuração.',
    'menu_label' => 'Registro de Eventos',
    'menu_description' => 'Visualize as mensagens do sistema, com horário e detalhes.',
    'empty_link' => 'Esvaziar registro de eventos',
    'empty_loading' => 'Esvaziando registro de eventos...',
    'empty_success' => 'Registro de eventos esvaziado com sucesso.',
    'return_link' => 'Retornar ao registro de eventos',
    'id' => 'ID',
    'id_label' => 'Identificador do Evento',
    'created_at' => 'Data & Hora',
    'message' => 'Mensagem',
    'level' => 'Nível',
    'preview_title' => 'Evento',
  ],
  'request_log' => [
    'hint' => 'Este registro mostra uma lista de requisições que requerem atenção. Por exemplo, se um usuário solicitar uma página não encontrada, será registrado com o status 404.',
    'menu_label' => 'Registro de Requisições',
    'menu_description' => 'Visualize requisições malsucedidas na aplicação, como Página não encontrada (404).',
    'empty_link' => 'Esvaziar registro de requisições.',
    'empty_loading' => 'Esvaziando registro de requisições...',
    'empty_success' => 'Registro de requisições esvaziado com sucesso.',
    'return_link' => 'Retornar ao registro de requisições',
    'id' => 'ID',
    'id_label' => 'ID do registro',
    'count' => 'Contador',
    'referer' => 'Referências',
    'url' => 'URL',
    'status_code' => 'Status',
    'preview_title' => 'Requisição',
  ],
  'permissions' => [
    'name' => 'Sistema',
    'manage_system_settings' => 'Gerenciar configurações do sistema',
    'manage_software_updates' => 'Gerenciar atualizações',
    'access_logs' => 'Exibir registros de sistema',
    'manage_mail_templates' => 'Gerenciar modelos de e-mail',
    'manage_mail_settings' => 'Gerenciar configurações de e-mail',
    'manage_other_administrators' => 'Gerenciar outros administradores',
    'manage_preferences' => 'Gerenciar preferências da área administrativa',
    'manage_editor' => 'Gerenciar preferências do editor de código',
    'manage_branding' => 'Personalizar o painel',
  ],
  'log' => [
    'menu_label' => 'Configurações de registros',
    'menu_description' => 'Especifique quais áreas devem usar o registro.',
    'default_tab' => 'Registros',
    'log_events' => 'Registrar eventos do sistema',
    'log_events_comment' => 'Armazene eventos do sistema no banco de dados, além do registro baseado em arquivo.',
    'log_requests' => 'Registrar requisições inválidas',
    'log_requests_comment' => 'Requisições do navegador que podem exigir atenção, como erros 404.',
    'log_theme' => 'Registrar alterações no tema',
    'log_theme_comment' => 'Quando uma alteração é feita no tema usando o backend.',
  ],
  'media' => [
    'invalid_path' => 'Caminho especificado inválido: \':path\'.',
    'folder_size_items' => 'item(s)',
  ],
  'page' => [
    'not_found' => [
      'label' => 'Página não encontrada',
      'help' => 'A página solicitada não pode ser encontrada.',
    ],
    'custom_error' => [
      'label' => 'Erro de página',
      'help' => 'Desculpe, mas algo deu errado e a página não pode ser exibida.',
    ],
    'invalid_token' => [
      'label' => 'Token de segurança inválido',
    ],
    'maintenance' => [
      'label' => 'Voltamos em breve!',
      'help' => 'No momento, estamos em manutenção, tente novamente mais tarde!',
      'message' => 'Mensagem:',
      'available_at' => 'Tente novamente após after:',
    ],
  ],
  'pagination' => [
    'previous' => 'Anterior',
    'next' => 'Próximo',
  ],
];
