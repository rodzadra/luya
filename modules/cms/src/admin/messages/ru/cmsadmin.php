<?php

return [
    
    'view_index_add_type' => 'Тип страницы',
    'view_index_type_page' => 'Страница',
    'view_index_type_module' => 'Модуль',
    'view_index_type_redirect' => 'Переадресация',
    'view_index_as_draft' => 'Как в шаблоне',
    'view_index_as_draft_help' => 'Вы хотитеопределить новую страницу в качестве шаблона?',
    'view_index_no' => 'Нет',
    'view_index_yes' => 'Да',
    'view_index_page_title' => 'Название страницы',
    'view_index_page_alias' => 'Алиас',
    'view_index_page_meta_description' => 'Описание (Описание для поисковиков)',
    'view_index_page_nav_container' => 'Раздел навигации',
    'view_index_page_parent_page' => 'Родительская страница',
    'view_index_page_success' => 'Страница успешно создана!',
    'view_index_page_parent_root' => '[Основной уровень]',
    'view_index_page_use_draft' => 'Использовать шаблон?',
    'view_index_page_select_draft' => 'Хотите выбрать шаблон?',
    'view_index_page_layout' => 'Выбор шаблона',
    'view_index_page_btn_save' => 'Сохранить новую страницу',
    'view_index_module_select' => 'Название модуля',
    'view_index_sidebar_new_page' => 'Создать новую страницу',
    'view_index_sidebar_drafts' => 'Шаблоны',
    'view_index_sidebar_move' => 'Переместить',
    'view_update_drop_blocks' => 'Перетащите блок контента сюда',
    'view_update_blockcontent' => 'Блок контента',
    'view_update_configs' => 'Дополнительные настройки',
    'view_update_settings' => 'Настройки',
    'view_update_btn_save' => 'Сохранить',
    'view_update_btn_cancel' => 'Прервать',
    'view_update_holder_state_on' => 'Скрыть',
    'view_update_holder_state_off' => 'Раскрыть',
    'view_update_is_draft_mode' => 'Редактировать как черновик',
    'view_update_is_homepage' => 'Главная страница',
    'view_update_properties_title' => 'Свойства страницы',
    'view_update_no_properties_exists' => 'Не все свойства были сохранены для этой страницы.',
    'view_update_draft_no_lang_error' => 'Черновики не имеют языковых харектиристик.',
    'view_update_no_translations' => 'Эта страница еще не переведена.',
    'view_update_page_is_module' => 'Страница является <b>модулем</b>.',
    'view_update_page_is_redirect_internal' => 'Эта страница имеет <b>внутреннюю переадресацию</b> на <show-internal-redirection nav-id="typeData.value" />.',
    'view_update_page_is_redirect_external' => 'Эта страница имеет <b>внешнюю переадресацию</b> на <a ng-href="{{typeData.value}}">{{typeData.value}}</a>',
    'menu_node_cms' => 'Контент страницы',
    'menu_node_cmssettings' => 'CMS Настройки',
    'menu_group_env' => 'Окружающая среда',
    'menu_group_item_env_container' => 'Контейнеры',
    'menu_group_item_env_layouts' => 'Шаблоны',
    'menu_group_elements' => 'Элементы контента',
    'menu_group_item_elements_blocks' => 'Управлять', // @todo: translate to: manage Blocks
    'menu_group_item_elements_group' => 'Группы', // @todo: translate to: manage Groups
    'btn_abort' => 'Отмена',
    'btn_refresh' => 'Обновить',
    'btn_save' => 'Сохранить',

// added translation in 1.0.0-beta3:

    'model_navitemmodule_module_name_label' => 'Название модуля',
    'model_navitem_title_label' => 'Название страницы',
    'model_navitem_alias_label' => 'URL путь',
    'model_navitempage_layout_label' => 'Шаблон',
    'model_navitemredirect_type_label' => 'Тип редиректа',
    'model_navitemredirect_value_label' => 'Цель редиректа',
    
    'view_index_add_title' => 'Доавить новую страницу',
    'view_index_add_page_from_language' => 'Добавить перевод для страницы',
    'view_index_add_page_from_language_info' => 'Хотите скопировать контент другого языка для создания записи?',
    'view_index_add_page_empty' => 'Добавить пустую страницу',
    'view_index_language_loading' => 'Загрузка страницы',
    'draft_title' => 'Черновики',
    'draft_text' => 'Здесь вы можете просматривать и редактировать существующие черновики. Черновики могут быть применены при создании новой страницы.',
    'draft_column_id' => 'ID',
    'draft_column_title' => 'Название',
    'draft_column_action' => 'Действие',
    'draft_edit_button' => 'Редактировать',
    'js_added_translation_ok' => 'Перевод этой страницы был успешно создан.',
    'js_added_translation_error' => 'Произошла ошибка при создании перевода',
    'js_page_add_exists' => 'Уже существует страница "%title" с таким же URL в этой группе (id=%id%).',
    'js_page_property_refresh' => 'Свойства были обновлены.',
    'js_page_confirm_delete' => 'Вы действительно хотите удалить эту страницу?',
    'js_page_delete_error_cause_redirects' => 'Эта страница не может быть удалена. Вы должны сначала удалить все зависимости этой страницы.',
    'js_state_online' => '%title% в сети',
    'js_state_offline' => '%title% не в сети',
    'js_state_hidden' => '%title% скрыт',
    'js_state_visible' => '%title% виден',
    'js_state_is_home' => '%title% корневая страница',
    'js_state_is_not_home' => '%title% не корневая страница',
    'js_page_item_update_ok' => 'Страница «%title%» была обновлена!',
    'js_page_block_update_ok' => 'Блок «%name%» был обновлен!',
    'js_page_block_remove_ok' => 'Блок «%name%» был удален!',
    'js_page_block_visbility_change' => 'Видимость «%name%» была успешно изменена.',

// added translation in 1.0.0-beta4:

// added translation in 1.0.0-beta5:

    
    'view_update_blockholder_clipboard' => 'Буфер обмена',

// added translation in 1.0.0-beta6:

    
    'js_page_block_delete_confirm' => 'Удалить блок «%name%»?',
    'view_index_page_meta_keywords' => 'Ключевые слова для SEO аналитики (пример: ресторан, пицца, италия)',
    'current_version' => 'Рабочая версия',
    'Initial' => 'Первая версия',
    'view_index_page_version_chooser' => 'Опубликованная версия',
    'versions_selector' => 'Версии',
    'page_has_no_version' => 'Эта страница еще не имеет версий и шаблонов. Создайте новую версию кликнув на иконку <i class="material-icons green-text">add</i> справа.',
    'version_edit_title' => 'Редактировать версию',
    'version_input_name' => 'Имя',
    'version_input_layout' => 'Шаблон',
    'version_create_title' => 'Добавить новую версию',
    'version_create_info' => 'Вы можете создать несколько версия с разным контентом. Опубликуйте версию чтоб она была видна на сайте.',
    'version_input_copy_chooser' => 'Скопировать версию',
    'version_create_copy' => 'Создать копию из существующих версий.',
    'version_create_new' => 'Создать новую версию.',
    'js_version_update_success' => 'Версия была успешно обновлена.',
    'js_version_error_empty_fields' => 'Имеются пустые или невалидные поля.',
    'js_version_create_success' => 'Новая версия успешно сохранена.',

// added translation in 1.0.0-beta7:

    
    'view_index_create_page_please_choose' => 'Пожалуйста, выберите',
    'view_index_sidebar_autopreview' => 'Автоматический предпросмотр',

// added translation in 1.0.0-beta8

    'module_permission_add_new_page' => 'Создать новую страницу',
    'module_permission_update_pages' => 'редактировать страницу ',
    'module_permission_edit_drafts' => 'Редактировать черновик',
    'module_permission_page_blocks' => 'Страница Контент-блоков',
    'js_version_delete_confirm' => 'Вы уверены, что хотите удалить версию страницы «%alias%»?',
    'js_version_delete_confirm_success' => 'Версия траницы %alias% была успешно удалена.',
    'log_action_insert_cms_nav_item' => 'Добавить новый язык <b>{info}</b>',
    'log_action_insert_cms_nav' => 'Добавить новую страницу <b>{info}</b>',
    'log_action_insert_cms_nav_item_page_block_item' => 'Вставить новый блок <b>{info}</b>',
    'log_action_insert_unkown' => 'Добавить строку',
    'log_action_update_cms_nav_item' => 'Обновлен язык страницы <b>{info}</b>',
    'log_action_update_cms_nav' => 'Обновлен статус страницы <b>{info}</b>',
    'log_action_update_cms_nav_item_page_block_item' => 'Обновлен контент или конфигурация блока <b>{info}</b>',
    'log_action_update_unkown' => 'Обновлена существующая строка',
    'log_action_delete_cms_nav_item' => 'Удалена версия языка <b>{info}</b>',
    'log_action_delete_cms_nav' => 'Удалена страницу <b>{info}</b>',
    'log_action_delete_cms_nav_item_page_block_item' => 'Удален блок <b>{info}</b>',
    'log_action_delete_unkown' => 'Удалена строка',
    'block_group_favorites' => 'Избранные',
    'button_create_version' => 'Создать версию',
    'button_update_version' => 'Обновить версию',
    'menu_group_item_env_permission' => 'Страница прав',

// rc1
    'page_update_actions_deepcopy_text' => 'Создать копию текущей страницы вместе с контентом. Все языки будут скопированы, но только опубликованные версии.',
    'page_update_actions_deepcopy_btn' => 'Создать копию',

// rc2
    'model_navitem_title_tag_label' => 'Название тегов (SEO)',
    
// 1.0.0
    'model_navitempage_empty_draft_id' => 'Unable to create page from empty draft template.',
    'view_update_variation_select' => 'No block variation selected',
    'menu_group_item_env_config' => 'Config',
    'js_config_update_success' => 'Configuration successfull saved.',
    'config_index_httpexceptionnavid' => 'Define the page which 404 Erros will redirect to.<br /><small>Tip: Create a 404 Page and mark the page on the root als hidden, display your error message',
    'module_permission_update_config' => 'CMS Configurations',
    'module_permission_delete_pages' => 'Delete Page',
	'page_update_actions_deepcopy_title' => 'Copy Page',
	'page_update_actions_layout_title' => 'Layout File',
	'page_update_actions_layout_text' => 'You can define another layout file which should be rendered instead of the main layout file. If empty the `main.php` layout will be used by default. You can also use alias paths. Layout file defintion does not require the php file extension.',
	'page_update_actions_layout_file_field' => 'Layout File',
	'page_update_actions_modal_title' => 'Page Settings',
	'js_page_update_layout_save_success' => 'The layout file has been updated',
	'js_page_create_copy_success' => 'The page copy has been created.',
		'view_update_offline_info' => 'Change offline/online mode for this page, if a page is only its not accessable by url.',
		'view_update_hidden_info' => 'Change the visbility of the page, page is acceessable by url but hidden in navigations.',
		'view_update_homepage_info' => 'Set this page as Homepage.',
];
