<?php
/**
 * Elgg community plugin repository language pack
 */

return array(
	/**
	 * Administration area
	 */

	'admin:community_plugins' => 'Репозиторий плагинов',
	'admin:community_plugins:statistics' => 'Статистика',
	'admin:community_plugins:upgrade' => 'Обновить',
	'admin:community_plugins:utilities' => 'Утилиты',
	'admin:settings:community_plugins' => 'Репозиторий плагинов',
	'plugins:admin:trends:title' => 'Plugin download trends',
	'plugins:admin:trends:help' => "This displays the downloads for the past 30 days. To see the downloads for a particular plugin, enter the GUID of the plugin project below.",
	'plugins:admin:trends:single' => "Stats for %s",
	'plugins:admin:trends:all' => "Stats for all plugins",
	'plugins:admin:upgrade:required' => "An upgrade is required for this plugin.",
	'plugins:admin:upgrade:ok' => "No upgrades required.",
	'plugins:admin:utilities:combine' => 'Combine plugin projects',
	'plugins:admin:combine:old_guid' => 'GUID of plugin project that is be replaced in the combination',
	'plugins:admin:combine:new_guid' => 'GUID of plugin project that remains in the combination',
	'plugins:admin:normalize:help' => 'Remove inflated download counts for the currently graphed plugin',
	'plugins:admin:transfer:title' => "Transfer ownership of the plugin to another user.",
	'plugins:admin:transfer:help' => 'Begin typing the name of the user you wish to tranfer the plugin to and select them from the list.
	  Select only one user, if more than one is selected, only the first user selected will receive ownership.',
	'plugins:admin:contributors:title' => "List users as contributors to this plugin",
	'plugins:admin:contributors:help' => "Adding users as contributors <b>does not</b> give them any special privileges with regard to the plugin page, it does however list them as contributing members.
		It is a way of recognizing community members for their collaborative work of reporting bugs, and submitting patches for bugfixes and enhancements.
		Begin typing the name of the user who has contributed to the plugin.  You can select as many users as necessary.",


	/**
	 *	Object views
	 */
	'plugins:uploadtime' => "Uploaded %s (%s)",
	'plugins:updatedtime' => "Updated %s (%s)",
	'plugins:release:version_warning' => 'Warning: The author recommends using a different release of this plugin! Do you still want to download this release?',
	'plugins:download:version' => "Download %s",
	'plugins:project:title:version' => "%s for Elgg %s",
	'plugins:author:byline' => "by %s",
	'plugins:last:updated' => "Last updated %s",

	'plugins:project:outdated_warning' => "<strong>Warning:</strong> This plugin has't been updated in over %s years. It may no longer be maintained.",
	'plugins:project:help' => "What <i>you</i> can do to help:",

	'plugins:project:pull_request' => 'pull request',
	'plugins:project:repo' => 'plugin code',
	'plugins:project:collaborate' => "Submit a %s to update the %s", // Submit a <pull request> to update the <plugin code>

	'plugins:project:request' => 'become the new maintainer',
	'plugins:project:request_ownership' => "Request to %s of the plugin",
	'plugins:latest:releases' => "Latest Releases",
	'plugins:releases:all' => "All releases",
	'plugins:recommended:releases' => "Recommended Releases",
	'plugins:releases:show:recent' => 'Show recent releases',
	'plugins:releases:show:all' => "Show all releases",
	'plugins:releases:show:recommended' => "Show recommended releases",
	'plugin:release:version:unknown' => "?",

	/**
	 * Menu items and titles
	 */

	'plugins' => "Администрирование плагинов",
	'pluginss' => "Администрирование плагинов",

	'plugins:new' => "Новый плагин",

	'plugins:types:' => "плагины, темы и языковые пакеты",
	'plugins:types:plugin' => "плагины",
	'plugins:types:theme' => "темы",
	'plugins:types:languagepack' => "языковые пакеты",

	'plugins:yours' => "Ваш %s",
	'plugins:user' => "%s's %s",

	'plugins:admin' => "Администратор репозитория плагинов",
	'plugins:admin:menu' => "Админ репозитория плагинов",

	'plugins:yours:friends' => "Your friends' plugins, themes and language packs",
	'plugins:friends' => "%s's friends' plugins, themes and language packs",
	'plugins:all' => "All site plugins, themes and language packs",
	'plugins:category:title' => "Plugins for category: %s",
	'plugins:search:title' => "Plugin search for \"%s\" in category: %s",


	'plugins:cat:all' => 'Все',

	'plugins:listing:newest' => 'Новые',
	'plugins:listing:popular' => 'Наиболее загружаемые',
	'plugins:listing:dugg' => 'Наиболее рекомендуемые',


	'plugins:upload:new' => "Загрузить новый плагин",


	'plugins:search:instruct' => 'искать плагин',
	'plugins:search:choose' => 'выберите категорию',


	'plugins:front:welcome' => "Добро пожаловать в директорию плагинов Elgg",
	'plugins:front:intro:title' => "Что такое плагины?",
	'plugins:front:intro:text' => "Plugins extend your Elgg site by adding additional functionality, languages and themes. They are contributed by members of the Elgg community.

		To get started you could browse the available plugins, search for a specific one, upload one of your own, or rate & comment on others.",




	'plugins:more' => "больше плагинов, тем и языковых пакетов",
	'plugins:list' => "в виде списка",
	'plugins:group' => "Group plugins, themes and language packs",
	'plugins:gallery' => "в виде галереи",
	'plugins:gallery_list' => "В виде галереи или списка",
	'plugins:num_files' => "Number of plugins, themes and language packs to display",
	'plugins:yes' => 'Да',
	'plugins:no' => 'Нет',
	'plugins:num_plugins and themes' => "Number of plugins, themes and language packs to display",

	'plugins:new:project' => "Загрузить новый плагин",
	'plugins:new:release' => "Загрузить новый релиз",

	'plugins:edit' => "Изменить",
	'plugins:edit:project' => "Изменить описание проекта",
	'plugins:edit:release' => "Редактировать релиз плагина",
	'plugins:contributors:add' => "Add contributors",
	'plugins:delete:project' => "Delete Project",
	'plugins:requests:ownership' => "Pending ownership requests",
	'plugins:transfer:ownership' => "Transfer Ownership",
	'plugins:author:homepage' => "Author homepage",
	'plugins:author:recommended' => "Author Recommended",
	'plugins:project:page:view' => "Project Page",

	'plugins:elggversion' => "Версии Elgg на которых плагин был протестирован",
	'plugins:elgg_version' => "Версия Elgg",
	'plugins:version' => "Версия плагина",
	'plugins:updated' => "Обновлен",
	'plugins:repo' => "Репозиторий",
	'plugins:homepage' => "Страница плагина/проекта",
	'plugins:category' => "Категория",
	'plugins:categories' => "Категории",
	'plugins:myplugins' => "Ваши плагины",
	'plugins:All' => "Все",
	'plugins:file' => 'Файл для загрузки',
	'plugins:donate' => 'Пожертвования',
	'plugins:file:uploadagain' => 'Загрузить новую версию',
	'plugins:version' => 'Версия плагина',
	'plugins:downloads' => "Загрузки",
	'plugins:recommendations' => "Рекомендации",
	'plugins:upload' => "Upload a new plugin, theme or language pack",
	'plugins:changelog' => "Changelog",
	'plugins:noproject' => "I am afraid the system was not able to find the plugin project you tried to update",
	'plugins:plugin or theme' => "Файл",
	'plugins:updated' => "Обновлен",
	'plugins:update' => "Upload a new version of this plugin",
	'plugins:title' => "Название",
	'plugins:desc' => "Описание",
	'plugins:tags' => "Интересы",
	'plugins:notfound' => "The requested plugin cannot be found, please try a search",

	'plugins:plugin_type' => 'Тип плагина?',
	'plugins:plugin' => 'Плаги',
	'plugins:theme' => 'Тема',
	'plugins:languagepack' => 'Языковой пакет',

	'plugins:user:plugin' => "Плагины пользователя %s",
	'plugins:user:theme' => "Темы пользователя %s",
	'plugins:user:languagepack' => "Языковые пакеты пользователя %s",

	'plugins:types' => "Загруженные плагины, темы или языковые пакеты",

	'plugins:type:all' => "Плагины Elgg",
	'plugins:type:plugin' => 'Администрирование плагинов',
	'plugins:type:theme' => 'Темы',
	'plugins:type:languagepack' => 'Language packs',
	'plugins:user:type:languagepack' => "%s's language packs",
	'plugins:user:type:general' => "%s's general plugins and themes",
	'plugins:widget' => "Виджет плагина",
	'plugins:widget:description' => "Showcase your latest plugins, themes and language packs",

	'plugins:download' => "Загрузить",

	'plugins:delete_release:confirm' => "Are you sure you want to delete this release?",
	'plugins:delete_project:confirm' => 'This project and all releases will be deleted.  Are you sure you want to delete this project?',
	'plugins:delete_project_image:confirm' => 'Удалить изображение?',
	'plugins:tagcloud' => "Облако тегов",
	'plugins:diggit' => "Вы рекомендовали этот плагин.",
	'plugins:display:number' => "Number of plugins, themes and language packs to display",

	'plugins:files:acceptable' => 'Distribution packages must be .zip or .tar.zip only.',

	'item:object:plugin_project' => 'Проект плагина',
	'item:object:plugin_release' => 'Релизы плагина',
	'item:object:file' => 'Скриншоты плагина',

	'plugins:tabs:stats' => 'Статистика',
	'plugins:tabs:upgrade' => 'Обновления',
	'plugins:tabs:utilities' => 'Утилиты',
	'plugins:tabs:search' => 'Настройки поиска',
	'plugins:matching' => 'Plugins matching',
	'plugins:add:contributor' => "Add Contributors: %s",
	'plugins:title:transfer_plugin' => "Transfer Plugin: %s",
	'plugins:title:request_ownership' => "Request ownership of the plugin: %s",
	'plugins:project:request_ownership:desc' => "<p>This form allows you to request ownership of the plugin project.</p>
<p>Please tell us a bit about yourself so we'll know that the plugin will be in good hands. You can tell for example:</p>
<ul>
	<li>Why do you want to become the author?</li>
	<li>What kind of experience do you have in plugin development?</li>
	<li>What would make you a good author or the plugin?</li>
	<li>What kind of changes would you do to the plugin?</li>
</ul>",
	
	'projects:new:release' => "New Release",
	'plugins:new:plugin' => "New Plugin",

	/**
	 * Notifications
	 */
	'plugins:plugin_project:notify:subject' => '%s has uploaded a new plugin called %s',
	'plugins:plugin_release:notify:subject' => '%s has released a new version of the plugin %s',
	'plugins:plugin_project:notify:body' => "%s has uploaded a new plugin called %s \n\n %s \n\n %s",
	'plugins:plugin_release:notify:body' => "%s has released a new version of the plugin %s \n\n %s \n\n %s",
	'plugins:plugin_project:notify:summary' => 'New plugin project called %s',
	'plugins:plugin_release:notify:summary' => 'New release of the plugin %s',

	'plugins:ownership_request:notify:subject' => 'A new plugin ownership request',
	'plugins:ownership_request:notify:body' => "There's a new plugin ownership request:
%s",

	/**
	 * Licenses
	 */
	'license' => 'Лицензия',
	'license:none' => 'Лицензия не указана',
	'license:blurb' => 'Your plugin or theme must be released under a GPL version 2 compatible license. Please select from the list below, or click here for more details.',
	'license:gpl2' => 'GNU General Public License (GPL) version 2',
	'license:gpl3' => 'GNU General Public License (GPL) version 3',
	'license:lgpl3' => 'GNU Lesser General Public License (LGPL) version 3',
	'license:lgpl2.1' => 'GNU Lesser General Public License (LGPL) version 2.1',
	'license:agpl3' => 'GNU Affero General Public License (AGPL) version 3',
	'license:apache' => 'Apache License, Version 2.0',
	'license:artistic' => 'Artistic License 2.0',
	'license:artistic' => 'Artistic License 2.0',
	'license:berkeleydb' => 'Berkeley Database License (aka the Sleepycat Software Product License)',
	'license:boost' => 'Boost Software License',
	'license:mbsd' => 'Modified BSD license',
	'license:cbsd' => 'The Clear BSD License',
	'license:cecill' => 'CeCILL version 2',
	'license:cryptix' => 'Cryptix General License',
	'license:ecos' => 'eCos license version 2.0',
	'license:edu' => 'Educational Community License 2.0',
	'license:eiffel' => 'Eiffel Forum License, version 2',
	'license:eudatagrid' => 'EU DataGrid Software License',
	'license:expat' => 'Expat (MIT) License',
	'license:freebsd' => 'FreeBSD license',
	'license:freetype' => 'Freetype Project License',
	'license:jpeg' => 'Independent JPEG Group License',
	'license:intel' => 'Intel Open Source License',
	'license:openbsd' => 'ISC (OpenBSD) License',
	'license:ncsa' => 'NCSA/University of Illinois Open Source License',
	'license:public' => 'Public Domain',
	'license:sgi' => 'SGI Free Software License B, version 2.0',
	'license:w3c' => 'W3C Software Notice and License',
	'license:x11' => 'X11 License',
	'license:zope' => 'Zope Public License, versions 2.0 and 2.1',

	/**
	 * Status messages
	 */

	'plugins:project:saved' => "Плагин сохранен.",
	'plugins:release:saved' => "Релиз плагина сохранен.",
	'plugins:project:deleted' => "Плагин удален.",
	'plugins:release:deleted' => "Релиз плагина удален.",
	'plugins:ownership_request:success' => "Ownership request has been sent",

	/**
	 * Error messages
	 */

	'plugins:none' => "Мы не можем найти плагин, тему или языковой пакет.",
	'plugins:error:deletefailed' => "Ваш плагин или тема не могут быть удалены.",
	'plugins:error:permissions' => 'Возникла ошибка доступа.',
	'plugins:error:downloadfailed' => "Ошибка загрузки.",
	'plugins:error:uploadfailed' => "Извините, мы не можем сохранить ваш плагин, тему или языковой пакет.",
	'plugins:error:badformat' => 'Мы поддерживаем только .zip и .tar.gz пакеты.',
	'plugins:error:badlicense' => 'Выберите лицензию совместимую с GPL.',
	'plugins:error:notitle' => 'Укажите название.',
	'plugins:error:no_version' => 'Укажите версию.',
	'plugins:error:no_elgg_version' => 'An Elgg version is required',
	'plugins:error:duplicate_version' => 'This version is already in use for this project',
	'plugins:error:not_found' => 'The plugin project was not found',
	'plugins:error:invalid_ownership_request' => 'The description is a required field',
	'plugins:error:ownership_request_failed' => 'The ownership request failed',
	'plugins:error:ownership_request_exists' => 'You already have a pending ownership request',

	/**
	 * New frontpage
	 **/

	'plugins:search' => "Искать плагины",
	'plugins:stats' => "Загрузить статистику",
	'plugins:popular' => "Наиболее популярные",
	'plugins:popular:more' => "Еще популярных плагинов...",
	'plugins:counter' => "%s plugins with %s total downloads",


	'replace' => 'Заменить',
	"unknown:version" => 'Неизвестная версия',

	'plugins:prevversions' => "Предыдущая версия",
	'plugins:nextversions' => "Внимание! Новая версия доступна",

	'plugins:browse_more:newest' => "Просмотреть наиболее свежие плагины",
	'plugins:browse_more:popular' => "Просмотреть наиболее загружаемые плагины",
	'plugins:browse_more:dugg' => "Просмотреть наиболее рекомендуемые плагины",


	/**
	 * Sort field labels
	 */

	'plugins:sort:info' => 'Сортировать по:',
	'plugins:sort:title' => 'Название',
	'plugins:sort:author' => 'Автор',
	'plugins:sort:downloads' => 'Загрузки',
	'plugins:sort:recommendations' => 'Рекомендации',
	'plugins:sort:created' => 'Создан',
	'plugins:sort:updated' => 'Обновлен',


	/**
	 * Filters
	 */

	'plugins:filters:title' => 'Искать плагины основываясь на...',
	'plugins:filters:category' => 'Категория',
	'plugins:filters:version' => 'Версия движка',
	'plugins:filters:licence' => 'Тип лицензии',
	'plugins:filters:text' => 'Любой текст',
	'plugins:filters:screenshot:label' => 'Скриншот',
	'plugins:filters:screenshot' => 'Только со скриншотами',

	/**
	 * Search labels
	 */

	'plugins:search:title' => 'Plugin search for \"%s\" in category: %s',
	'plugins:search:results' => 'Found %d plugins, displaying %d to %d',
	'plugins:search:noresults' => 'Не найдено плагинов',
	'plugins:search:noresults:info' => 'Your search did not match any plugins in our repository. Please try again with less specific search terms.',

	/**
	 * What's new
	 */

	'plugins:front:intro:whatsnew' => 'Что нового?',
	'plugins:front:intro:whatsnew:text' => 'You can now search and browse plugins more effectively than ever before. Use the right column block to filter plugins based on categories, Elgg version compatibility and more. Sort results by download counts, recommendations, authors and other properties.',

	/**
	 * Search settings
	 */

	'plugins:settings:sort:label'	=> "Enable plugin list sorting",
	'plugins:settings:filter:multiple:label'	=> "Allow using multiple filters in a single search",
	'plugins:settings:filter:category:label'	=> "Enable filtering based on plugin category",
	'plugins:settings:filter:category:multiple'	=> "Allow multiple category selection",
	'plugins:settings:filter:version:label'	=> "Enable filtering based on Elgg version compatibility",
	'plugins:settings:filter:version:multiple'	=> "Allow multiple version selection",
	'plugins:settings:filter:licence:label'	=> "Enable filtering based on licence type",
	'plugins:settings:filter:licence:multiple'	=> "Allow multiple licence type selection",
	'plugins:settings:filter:text:label'	=> "Enable filtering based on any text (match title and description by default)",
	'plugins:settings:filter:text:author:name'	=> "Also match author's display name",
	'plugins:settings:filter:text:author:username'	=> "Also match author's username",
	'plugins:settings:filter:text:summary'	=> "Also match plugin's summary",
	'plugins:settings:filter:text:tags'	=> "Also match plugin's tags",
	'plugins:settings:filter:screenshot:label'	=> "Enable filtering based on screenshot availability",


	'plugins:settings:save:success'	=> "Plugin search settings were successfully updated",
	'plugins:settings:save:failure'	=> "Could not save plugin search settings: unrecognized parameters received.",

	'plugins:filters:or' => '...или ',
	
	'plugins:placeholder:categories' => "Choose categories",
	'plugins:placeholder:versions' => "Choose Elgg versions",
	'plugins:placeholder:licences' => "Choose licenses",
	'plugins:placeholder:keyword' => "Filter by keyword",


	'river:comment:object:plugin_release' => '%s commented on the plugin %s',
	'river:comment:object:plugin_project' => '%s commented on the plugin %s',
	'river:create:object:plugin_project' => "%s uploaded a new plugin: %s",
	'river:create:object:plugin_release' => "%s released a new version of the plugin %s",

	/* Edit Form */
	'plugins:edit:helptext' => "You are editing the plugin project information for %s.  To upload a new release click %s.",
	'plugins:add:helptext' => "You are creating a new plugin project. If you want to release a new
	version of an existing plugin, go to the edit section of that plugin's project page. You can view all of your plugins %s",
	'plugins:edit:label:name' => "Project Name",
	'plugins:edit:label:project_summary' => 'Project Summary',
	'plugins:edit:help:project_summary' => "A one- or two-sentence (250 characters) summary of your project's main features.",
	'plugins:edit:label:description' => "Project Description",
	'plugins:edit:help:description' => "A full description of your project's features. (As per %s, images and links will be removed.)",
	'plugins:edit:label:plugin_type' => "Type of Project",
	'plugins:edit:label:project_homepage' => "Project Homepage",
	'plugins:edit:label:donate' => "Donations URL",
	'plugins:edit:help:donate' => "If you accept donations, enter the URL to the donations section of your website.",
	'plugins:edit:help:tags' => "A comma-separated list of tags relevant to your project.",
	'plugins:edit:help:access' => "The access level of the project. Note that individual releases can have their own access settings.",
	'plugins:edit:recommended:none' => 'No recommended release',
	'plugins:edit:label:project_images' => "Project Images",
	'plugins:edit:help:project_images' => "Show off your project by uploading images!",
	'plugins:edit:image' => "Image",
	'plugins:edit:help:release' => "This information is specific to the release you are uploading right now.  To edit the
general project details, visit the edit section of the project page.",
	'plugins:edit:help:file' => 'This information is specific to the release you are uploading right now.  To edit the
general project details, visit the edit section of the project page.',
	'plugins:edit:label:release_version' => "Release version",
	'plugins:edit:label:release_notes' => "Release Notes",
	'plugins:edit:help:release_notes' => "A list of changes, bugfixes, bugs, todos, and general release notes for this release. (As per %s, images and links will be removed.)",
	'plugins:edit:label:elgg_version' => "Elgg compatibility",
	'plugins:edit:help:elgg_version' => "The version of Elgg this plugin was developed and tested on",
	'plugins:edit:label:comments' => "Allow comments",
	'plugins:edit:help:access' => "The access level of the project. Note that individual releases can have their own access settings.",
	'plugins:edit:label:recommended' => "Set as the recommended release",
	'plugins:edit:help:recommended' => "Recommend all users of this plugin use this release?",
	'plugins:link:here' => 'here',

	/**
	 * Misc
	 */
	 'plugins:warning:page:all:bookmark' => 'Please update your bookmark or report this link to the site owner as this page has moved.',
	 'plugins:error:invalid_release' => "We could not find the release you specified.",
	 'plugins:forward:recommended_release' => "Forwarded to recommended release.",
	 'plugins:error:unrecognized_plugin' => "We did not recognize that plugin",

	/**
	 *	Actions
	 */
	'plugins:action:combine:invalid_guids' => 'The GUIDs must be for 2 plugin projects',
	'plugins:action:combine:success' => "%s has been combined into the project %s",
	'plugins:action:normalize:invalid_guid' => "No GUID specified",
	'plugins:action:normalize:notpreview' => "Normalized downloads removing %s annotations",
	'plugins:action:normalize:preview' => "Would have removed %s annotations using a max of %s",
	'plugins:action:invalid_project' => 'Invalid Project',
	'plugins:action:transfer:invalid_recipient' => 'Invalid Recipient',
	'plugins:action:transfer:success' => 'Plugin ownership has been transferred.',
	'plugins:action:upgrade:not_required' => 'No upgrade required',
	'plugins:action:upgrade:success' => "The community plugin repository has been upgraded",
	'plugins:action:invalid_contributors' => 'Invalid Contributors',
	'plugins:action:add_contributors:success' => 'Contributors have been added.',
	'plugins:action:invalid_user' => "Ошибочный пользователь",
	'plugins:action:delete_contributor:success' => 'User has been removed from the contributors list',
	'plugins:action:invalid_access' => 'Unknown or insufficient access to release',
	'plugins:action:transfer:not_moved' => "Release ID: %s - the file could not be moved on the file system",
);
