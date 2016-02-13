<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
<!doctype html>
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="ru"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="ru"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="ru"> <!--<![endif]-->
<head>
	<meta charset="<?=SITE_CHARSET?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="initial-scale=1.0,width=device-width">
	<script src="<?=SITE_TEMPLATE_PATH?>/js/libs/modernizr.custom.23595.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?=SITE_TEMPLATE_PATH?>/js/libs/jquery-1.7.1.min.js"><\/script>')</script>
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/js/fancybox2/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <title><?$APPLICATION->ShowTitle()?></title>
	<?$APPLICATION->ShowHead()?>
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
</head>
<body>
	<?$APPLICATION->ShowPanel();?>
    <? preg_match_all('/([A-Za-z0-9_\-]+)/', $APPLICATION->GetCurDir(), $mat);?>
<div id="body">
	<div class="container">
		<section id="header">
			<div class="ww-bg_top"></div>
				<div class="ww-header_area">
					<a href="/" class="logo"></a>
                    <div class="text_top">
                        <?$APPLICATION->IncludeFile(SITE_DIR . "inc/text_top.php", array(), Array(
                            "MODE"      => "html",
                            "TEMPLATE"  => "standart_new.php"
                        ));?>
                    </div>
					<div id="phone_top">
                        <?$APPLICATION->IncludeFile(SITE_DIR . "inc/phone_top.php", array(), Array(
					    "MODE"      => "html",
					    "TEMPLATE"  => "standart_new.php"
					    ));?>
                        <div id="phone" style="display: none;">
                            <div class="ww-ok">
                                <div class="y-ok"></div>
                                <div id="ww-phone_res">
                                    <?if (isset($_REQUEST["ajax_phone"])) {
                                        $APPLICATION->RestartBuffer();
                                    }?>

                                    <?$APPLICATION->IncludeComponent(
                                "bitrix:iblock.element.add.form",
                                "phone",
                                Array(
                                    "ONLY" => "4",
                                    "COMPONENT_TEMPLATE" => "phone",
                                    "IBLOCK_TYPE" => "content",
                                    "IBLOCK_ID" => "4",
                                    "STATUS_NEW" => "N",
                                    "LIST_URL" => "",
                                    "USE_CAPTCHA" => "N",
                                    "USER_MESSAGE_EDIT" => "",
                                    "USER_MESSAGE_ADD" => "",
                                    "DEFAULT_INPUT_SIZE" => "30",
                                    "RESIZE_IMAGES" => "N",
                                    "PROPERTY_CODES" => array("3", "NAME"),
                                    "PROPERTY_CODES_REQUIRED" => array("3", "NAME"),
                                    "GROUPS" => array("2"),
                                    "STATUS" => "ANY",
                                    "ELEMENT_ASSOC" => "CREATED_BY",
                                    "MAX_USER_ENTRIES" => "100000",
                                    "MAX_LEVELS" => "100000",
                                    "LEVEL_LAST" => "Y",
                                    "MAX_FILE_SIZE" => "0",
                                    "PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
                                    "DETAIL_TEXT_USE_HTML_EDITOR" => "N",
                                    "SEF_MODE" => "N",
                                    "CUSTOM_TITLE_NAME" => "Ваше Имя",
                                    "CUSTOM_TITLE_TAGS" => "",
                                    "CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
                                    "CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
                                    "CUSTOM_TITLE_IBLOCK_SECTION" => "",
                                    "CUSTOM_TITLE_PREVIEW_TEXT" => "",
                                    "CUSTOM_TITLE_PREVIEW_PICTURE" => "",
                                    "CUSTOM_TITLE_DETAIL_TEXT" => "",
                                    "CUSTOM_TITLE_DETAIL_PICTURE" => ""
                                )
                            );?>

                                    <?
                                    if (isset($_REQUEST["ajax_phone"])) {
                                        die();
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
    				</div>
				</div>
		</section>
		<section id="ww-work-area">
			<?$APPLICATION->IncludeComponent("bitrix:menu", "top", Array(
	"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
		"MAX_LEVEL" => "2",	// Уровень вложенности меню
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
            <?if ($APPLICATION->GetCurPage(true) == SITE_DIR . "index.php"):?>
            <section id="main-slider">
                <?$APPLICATION->IncludeComponent("bitrix:news.list", "banners", Array(
	"DISPLAY_DATE" => "N",	// Выводить дату элемента
		"DISPLAY_NAME" => "N",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"IBLOCK_TYPE" => "content",	// Тип информационного блока (используется только для проверки)
		"IBLOCK_ID" => "2",	// Код информационного блока
		"NEWS_COUNT" => "10",	// Количество новостей на странице
		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		"FILTER_NAME" => "",	// Фильтр
		"FIELD_CODE" => array(	// Поля
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(	// Свойства
			0 => "HREF",
			1 => "",
		),
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_FILTER" => "Y",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "N",	// Учитывать права доступа
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
		"PAGER_TITLE" => "Новости",	// Название категорий
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "N",	// Включить подгрузку стилей
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"COMPONENT_TEMPLATE" => ".default",
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
		"SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
		"SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"SHOW_404" => "N",	// Показ специальной страницы
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
	),
	false
);?>
            </section>
            <?endif;?>
            <section id="left-column">
                <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"left", 
	array(
		"ROOT_MENU_TYPE" => "left",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "1",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "N",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N",
		"COMPONENT_TEMPLATE" => "left"
	),
	false
);?>
                <?//r($mat[0][0]);?>
                <?if ($APPLICATION->GetCurPage(true) == SITE_DIR . "index.php" || $mat[0][0] == 'blog'):?>
                <?$APPLICATION->IncludeComponent("bitrix:news.list", "last-blog", array(
	"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"AJAX_MODE" => "N",
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "1",
		"NEWS_COUNT" => "3",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"AJAX_OPTION_HISTORY" => "N",
		"COMPONENT_TEMPLATE" => ".default",
		"AJAX_OPTION_ADDITIONAL" => "",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false,
	array(
	"ACTIVE_COMPONENT" => "Y"
	)
);?>
                <?endif;?>
            </section><section id="center-column">
                <section class="bg">
				<?if ($APPLICATION->GetCurPage(true) != SITE_DIR . "index.php"):?>
					<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "bredcrumb", Array(
	
	),
	false
);?>
					<h1><?$APPLICATION->ShowTitle(false)?></h1>
				<?endif?>	