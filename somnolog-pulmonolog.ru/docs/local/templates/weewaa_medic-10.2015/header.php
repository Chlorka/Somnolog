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
                                    "CUSTOM_TITLE_NAME" => "���� ���",
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
	"ROOT_MENU_TYPE" => "top",	// ��� ���� ��� ������� ������
		"MENU_CACHE_TYPE" => "N",	// ��� �����������
		"MENU_CACHE_TIME" => "3600",	// ����� ����������� (���.)
		"MENU_CACHE_USE_GROUPS" => "Y",	// ��������� ����� �������
		"MENU_CACHE_GET_VARS" => "",	// �������� ���������� �������
		"MAX_LEVEL" => "2",	// ������� ����������� ����
		"CHILD_MENU_TYPE" => "left",	// ��� ���� ��� ��������� �������
		"USE_EXT" => "N",	// ���������� ����� � ������� ���� .���_����.menu_ext.php
		"DELAY" => "N",	// ����������� ���������� ������� ����
		"ALLOW_MULTI_SELECT" => "N",	// ��������� ��������� �������� ������� ������������
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
            <?if ($APPLICATION->GetCurPage(true) == SITE_DIR . "index.php"):?>
            <section id="main-slider">
                <?$APPLICATION->IncludeComponent("bitrix:news.list", "banners", Array(
	"DISPLAY_DATE" => "N",	// �������� ���� ��������
		"DISPLAY_NAME" => "N",	// �������� �������� ��������
		"DISPLAY_PICTURE" => "Y",	// �������� ����������� ��� ������
		"DISPLAY_PREVIEW_TEXT" => "Y",	// �������� ����� ������
		"AJAX_MODE" => "N",	// �������� ����� AJAX
		"IBLOCK_TYPE" => "content",	// ��� ��������������� ����� (������������ ������ ��� ��������)
		"IBLOCK_ID" => "2",	// ��� ��������������� �����
		"NEWS_COUNT" => "10",	// ���������� �������� �� ��������
		"SORT_BY1" => "ACTIVE_FROM",	// ���� ��� ������ ���������� ��������
		"SORT_ORDER1" => "DESC",	// ����������� ��� ������ ���������� ��������
		"SORT_BY2" => "SORT",	// ���� ��� ������ ���������� ��������
		"SORT_ORDER2" => "ASC",	// ����������� ��� ������ ���������� ��������
		"FILTER_NAME" => "",	// ������
		"FIELD_CODE" => array(	// ����
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(	// ��������
			0 => "HREF",
			1 => "",
		),
		"CHECK_DATES" => "Y",	// ���������� ������ �������� �� ������ ������ ��������
		"DETAIL_URL" => "",	// URL �������� ���������� ��������� (�� ��������� - �� �������� ���������)
		"PREVIEW_TRUNCATE_LEN" => "",	// ������������ ����� ������ ��� ������ (������ ��� ���� �����)
		"ACTIVE_DATE_FORMAT" => "d.m.Y",	// ������ ������ ����
		"SET_TITLE" => "N",	// ������������� ��������� ��������
		"SET_STATUS_404" => "N",	// ������������� ������ 404
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// �������� �������� � ������� ���������
		"ADD_SECTIONS_CHAIN" => "N",	// �������� ������ � ������� ���������
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// �������� ������, ���� ��� ���������� ��������
		"PARENT_SECTION" => "",	// ID �������
		"PARENT_SECTION_CODE" => "",	// ��� �������
		"INCLUDE_SUBSECTIONS" => "N",	// ���������� �������� ����������� �������
		"CACHE_TYPE" => "A",	// ��� �����������
		"CACHE_TIME" => "36000000",	// ����� ����������� (���.)
		"CACHE_FILTER" => "Y",	// ���������� ��� ������������� �������
		"CACHE_GROUPS" => "N",	// ��������� ����� �������
		"PAGER_TEMPLATE" => ".default",	// ������ ������������ ���������
		"DISPLAY_TOP_PAGER" => "N",	// �������� ��� �������
		"DISPLAY_BOTTOM_PAGER" => "N",	// �������� ��� �������
		"PAGER_TITLE" => "�������",	// �������� ���������
		"PAGER_SHOW_ALWAYS" => "N",	// �������� ������
		"PAGER_DESC_NUMBERING" => "N",	// ������������ �������� ���������
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// ����� ����������� ������� ��� �������� ���������
		"PAGER_SHOW_ALL" => "N",	// ���������� ������ "���"
		"AJAX_OPTION_JUMP" => "N",	// �������� ��������� � ������ ����������
		"AJAX_OPTION_STYLE" => "N",	// �������� ��������� ������
		"AJAX_OPTION_HISTORY" => "N",	// �������� �������� ��������� ��������
		"COMPONENT_TEMPLATE" => ".default",
		"AJAX_OPTION_ADDITIONAL" => "",	// �������������� �������������
		"SET_BROWSER_TITLE" => "Y",	// ������������� ��������� ���� ��������
		"SET_META_KEYWORDS" => "Y",	// ������������� �������� ����� ��������
		"SET_META_DESCRIPTION" => "Y",	// ������������� �������� ��������
		"SET_LAST_MODIFIED" => "N",	// ������������� � ���������� ������ ����� ����������� ��������
		"PAGER_BASE_LINK_ENABLE" => "N",	// �������� ��������� ������
		"SHOW_404" => "N",	// ����� ����������� ��������
		"MESSAGE_404" => "",	// ��������� ��� ������ (�� ��������� �� ����������)
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
		"PAGER_TITLE" => "�������",
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