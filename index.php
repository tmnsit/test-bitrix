<?
/* @var $APPLICATION */
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Marshal main");
?><main class="main"> <section class="welcome">
<div class="container">
	<h1>MAKING MUSIC <br>
	 WITH MARSHALL</h1>
	<div class="welcome__row">
		<div class="welcome__text">
			<p>
				 <?$APPLICATION->IncludeComponent(
	"bitrix:news.detail",
	"",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_CODE" => "",
		"ELEMENT_ID" => "5",
		"FIELD_CODE" => array("",""),
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "articles",
		"IBLOCK_URL" => "",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Страница",
		"PROPERTY_CODE" => array("",""),
		"SET_BROWSER_TITLE" => "Y",
		"SET_CANONICAL_URL" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_SHARE" => "N"
	)
);?><br>
			</p>
 <a href="#" class="empty-btn">explore</a>
		</div>
		<div class="welcome__img">
 <img src="/local/templates/marshall/img/welcome.jpg" alt="">
		</div>
	</div>
 <a href="#" class="arrow-down"><img alt="Down" src="/local/templates/marshall/img/arrow-down.svg"></a>
</div>
 </section> <section class="mailing">
<div class="container">
	<div class="mailing__wrap">
		<div class="mailing__title">
			 SIGN UP FOR OUR NEWSLETTER
		</div>
		<div class="mailing__desc">
			 Get 10 % off on your first order
		</div>

			 <?$APPLICATION->IncludeComponent("bitrix:form.result.new", "feedbackForm", Array(
	"CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHAIN_ITEM_LINK" => "",	// Ссылка на дополнительном пункте в навигационной цепочке
		"CHAIN_ITEM_TEXT" => "",	// Название дополнительного пункта в навигационной цепочке
		"EDIT_URL" => "",	// Страница редактирования результата
		"IGNORE_CUSTOM_TEMPLATE" => "N",	// Игнорировать свой шаблон
		"LIST_URL" => "",	// Страница со списком результатов
		"SEF_MODE" => "N",	// Включить поддержку ЧПУ
		"SUCCESS_URL" => "",	// Страница с сообщением об успешной отправке
		"USE_EXTENDED_ERRORS" => "N",	// Использовать расширенный вывод сообщений об ошибках
		"VARIABLE_ALIASES" => array(
			"RESULT_ID" => "RESULT_ID",
			"WEB_FORM_ID" => "1",
		),
		"WEB_FORM_ID" => "1",	// ID веб-формы
	),
	false
);?>

	</div>
</div>
 </section> </main><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>