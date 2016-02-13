<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
</section>
<?if ($APPLICATION->GetCurPage(true) == SITE_DIR . "index.php"):?>
    <a name="form"></a>
<div id="main-form">
    <div class="ww-ok">
    <div id="form_res">
        <?if (isset($_REQUEST["ajax_form"])) {
            $APPLICATION->RestartBuffer();
        }?>
        <?$APPLICATION->IncludeComponent(
	"bitrix:iblock.element.add.form", 
	"main-form", 
	array(
		"ONLY" => "3",
		"COMPONENT_TEMPLATE" => "main-form",
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "3",
		"STATUS_NEW" => "N",
		"LIST_URL" => "",
		"USE_CAPTCHA" => "N",
		"USER_MESSAGE_EDIT" => "",
		"USER_MESSAGE_ADD" => "",
		"DEFAULT_INPUT_SIZE" => "30",
		"RESIZE_IMAGES" => "N",
		"PROPERTY_CODES" => array(
			0 => "2",
			1 => "NAME",
			2 => "PREVIEW_TEXT",
		),
		"PROPERTY_CODES_REQUIRED" => array(
			0 => "2",
			1 => "NAME",
			2 => "PREVIEW_TEXT",
		),
		"GROUPS" => array(
			0 => "2",
		),
		"STATUS" => "ANY",
		"ELEMENT_ASSOC" => "CREATED_BY",
		"MAX_USER_ENTRIES" => "100000",
		"MAX_LEVELS" => "100000",
		"LEVEL_LAST" => "Y",
		"MAX_FILE_SIZE" => "0",
		"PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
		"DETAIL_TEXT_USE_HTML_EDITOR" => "N",
		"SEF_MODE" => "N",
		"CUSTOM_TITLE_NAME" => "Ваше имя",
		"CUSTOM_TITLE_TAGS" => "",
		"CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
		"CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
		"CUSTOM_TITLE_IBLOCK_SECTION" => "",
		"CUSTOM_TITLE_PREVIEW_TEXT" => "Ваш вопрос",
		"CUSTOM_TITLE_PREVIEW_PICTURE" => "",
		"CUSTOM_TITLE_DETAIL_TEXT" => "",
		"CUSTOM_TITLE_DETAIL_PICTURE" => ""
	),
	false
);?>
        <?
        if (isset($_REQUEST["ajax_form"])) {
            die();
        }
        ?>
        </div>
    </div>
</div>

<?elseif($APPLICATION->GetCurPage() == '/otzyvy/'):?>
    <div id="main-form" class="rew-form">
        <div class="rew-ok">
            <div id="form_rew">
                <?if (isset($_REQUEST["ajax_rew"])) {
                    $APPLICATION->RestartBuffer();
                }?>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:iblock.element.add.form",
                    "rew-form",
                    array(
                        "ONLY" => "5",
                        "COMPONENT_TEMPLATE" => "rew-form",
                        "IBLOCK_TYPE" => "content",
                        "IBLOCK_ID" => "5",
                        "STATUS_NEW" => "N",
                        "LIST_URL" => "",
                        "USE_CAPTCHA" => "N",
                        "USER_MESSAGE_EDIT" => "",
                        "USER_MESSAGE_ADD" => "",
                        "DEFAULT_INPUT_SIZE" => "30",
                        "RESIZE_IMAGES" => "N",
                        "PROPERTY_CODES" => array(
                            0 => "4",
                            1 => "NAME",
                            2 => "PREVIEW_TEXT",
                        ),
                        "PROPERTY_CODES_REQUIRED" => array(
                            0 => "PREVIEW_TEXT",
                        ),
                        "GROUPS" => array(
                            0 => "2",
                        ),
                        "STATUS" => "ANY",
                        "ELEMENT_ASSOC" => "CREATED_BY",
                        "MAX_USER_ENTRIES" => "100000",
                        "MAX_LEVELS" => "100000",
                        "LEVEL_LAST" => "Y",
                        "MAX_FILE_SIZE" => "0",
                        "PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
                        "DETAIL_TEXT_USE_HTML_EDITOR" => "N",
                        "SEF_MODE" => "N",
                        "CUSTOM_TITLE_NAME" => "Ваше имя",
                        "CUSTOM_TITLE_TAGS" => "",
                        "CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
                        "CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
                        "CUSTOM_TITLE_IBLOCK_SECTION" => "",
                        "CUSTOM_TITLE_PREVIEW_TEXT" => "Ваш отзыв",
                        "CUSTOM_TITLE_PREVIEW_PICTURE" => "",
                        "CUSTOM_TITLE_DETAIL_TEXT" => "",
                        "CUSTOM_TITLE_DETAIL_PICTURE" => ""
                    ),
                    false
                );?>
                <?
                if (isset($_REQUEST["ajax_rew"])) {
                    die();
                }
                ?>
            </div>
        </div>
    </div>

<?endif;?>
<div class="inc-area">
    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
            "COMPONENT_TEMPLATE" => ".default",
            "AREA_FILE_SHOW" => "page",
            "AREA_FILE_SUFFIX" => "txt",
            "EDIT_TEMPLATE" => "standard.php"
        )
    );?>
</div>
</section><section id="right-column">
    <? preg_match_all('/([A-Za-z]+)/', $APPLICATION->GetCurDir(), $mat);?>
    <?if ($mat[0][0] == "blog"
        || $APPLICATION->GetCurPage(true) == SITE_DIR . "index.php"):?>
        <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
                "COMPONENT_TEMPLATE" => ".default",
                "AREA_FILE_SHOW" => "page",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "standard.php"
            )
        );?>
    <?else:?>
        <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            ".default",
            array(
                "COMPONENT_TEMPLATE" => ".default",
                "AREA_FILE_SHOW" => "sect",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "standard.php",
                "AREA_FILE_RECURSIVE" => "Y"
            ),
            false
        );?>
    <?endif;?>
</section>
<div class="ww-clear"></div>
	</section>
	</div>
	<footer id="footer">
        <div class="top-footer">
            <div class="left-td">
                <div class="area">
                    <a href="/" class="logo"></a>
                    <div class="text_top">
                        <?$APPLICATION->IncludeFile(SITE_DIR . "inc/text_top.php", array(), Array(
                            "MODE"      => "html",
                            "TEMPLATE"  => "standart_new.php"
                        ));?>
                    </div>
                </div>
            </div>
            <div class="right-td">
                <div class="area">
                    <div id="bottom-menu">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "bottom",
                        array(
                            "ROOT_MENU_TYPE" => "top",
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
                            "COMPONENT_TEMPLATE" => "bottom"
                        ),
                        false
                    );?>
                    </div>
                    <div id="footer-text">
                        <?$APPLICATION->IncludeFile(SITE_DIR . "inc/text_bottom.php", array(), Array(
                            "MODE"      => "html",
                            "TEMPLATE"  => "standart_new.php"
                        ));?>
                    </div>
                </div>
            </div>
        </div>
        <?/*?>
        <div class="container">
            <div class="ww-footer_area">
                <div class="ww-bottom_menu">
                    <?$APPLICATION->IncludeFile(SITE_DIR . "inc/menu_bottom.php", array(), array("MODE"=>"html", "TEMPLATE"  => "standart_new.php"));?>
                </div>
                <div class="ww-clear"></div>
                <div id="weewaa" class="ww-link__reverse"><?=GetMessage("WEEWAA_DESC")?> <a title="<?=GetMessage("WEEWAA")?>" href="http://www.weewaa.ru/"><?=GetMessage("WEEWAA")?></a></div>
            </div>
        </div>
        <?*/?>
        <div class="bottom-footer">
            <div class="left-td"><div class="area"><?$APPLICATION->IncludeFile(SITE_DIR . "inc/copyright.php", array(), array("MODE"=>"html", "TEMPLATE"  => "standart_new.php"));?></div></div>
            <div class="right-td"><div class="area"><?$APPLICATION->IncludeFile(SITE_DIR . "inc/copyright_2.php", array(), array("MODE"=>"html", "TEMPLATE"  => "standart_new.php"));?></div></div>
        </div>
	</footer>
</div>

<!-- Add fancyBox -->
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/fancybox2/source/jquery.fancybox.pack.js?v=2.1.5"></script>

<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.jcarousel.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/common.js"></script>
<a id="top"> </a>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter30468617 = new Ya.Metrika({id:30468617,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/30468617" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-63305701-1', 'auto');
  ga('send', 'pageview');
</script>
<!-- /Google Analytics -->
</body>
</html>