<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile($_SERVER["DOCUMENT_ROOT"]."/bitrix/templates/".SITE_TEMPLATE_ID."/header.php");
CJSCore::Init(array("fx"));

// \Bitrix\Main\UI\Extension::load("ui.bootstrap4");

// if (isset($_GET["theme"]) && in_array($_GET["theme"], array("blue", "green", "yellow", "red")))
// {
// 	COption::SetOptionString("main", "wizard_eshop_bootstrap_theme_id", $_GET["theme"], false, SITE_ID);
// }
// $theme = COption::GetOptionString("main", "wizard_eshop_bootstrap_theme_id", "green", SITE_ID);

$curPage = $APPLICATION->GetCurPage(true);

?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title><?$APPLICATION->ShowTitle()?></title>
    <meta name="description" content="Главная страница">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<link rel="shortcut icon" type="image/x-icon" href="<?=SITE_DIR?>favicon.ico" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700;900&amp;family=Montserrat:wght@400;700&amp;display=swap">
		<?$APPLICATION->ShowHead();?>
		<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/libs.min.css');?>
		<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/style.css');?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/libs.min.js');?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/scripts.js');?>
  </head>
	<? if(CSite::InDir('/index.php')): ?>
		<body>
	<? else: ?>
		<body class="inner">
	<? endif; ?>
		<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
    <header class="header">
      <div class="header__top">
        <div class="container">
          <div class="header__top-inner row">
            <div class="logo">
							<?$APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => SITE_DIR."include/logo.php"),
								false
							);?>
						</div>
            <div class="header__text">
              <div class="tagline">
								<?$APPLICATION->IncludeComponent(
									"bitrix:main.include",
									"",
									array(
										"AREA_FILE_SHOW" => "file",
										"PATH" => SITE_DIR."include/tagline.php"),
									false
								);?>
							</div>
							<?$APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => SITE_DIR."include/header_addresses.php"),
								false
							);?>
            </div>
						<?$APPLICATION->IncludeComponent(
							"bitrix:sale.basket.basket.line", 
							"cart", 
							array(
								"PATH_TO_BASKET" => SITE_DIR."personal/cart/",
								"PATH_TO_PERSONAL" => SITE_DIR."personal/",
								"SHOW_PERSONAL_LINK" => "N",
								"SHOW_NUM_PRODUCTS" => "Y",
								"SHOW_TOTAL_PRICE" => "N",
								"SHOW_PRODUCTS" => "N",
								"POSITION_FIXED" => "N",
								"SHOW_AUTHOR" => "N",
								"PATH_TO_REGISTER" => SITE_DIR."login/",
								"PATH_TO_PROFILE" => SITE_DIR."personal/",
								"COMPONENT_TEMPLATE" => "cart",
								"PATH_TO_ORDER" => SITE_DIR."personal/order/make/",
								"SHOW_EMPTY_VALUES" => "Y",
								"PATH_TO_AUTHORIZE" => "",
								"SHOW_REGISTRATION" => "Y",
								"HIDE_ON_BASKET_PAGES" => "N"
							),
							false
						);?>
            <div class="header__contacts">
							<?$APPLICATION->IncludeComponent(
									"bitrix:main.include",
									"",
									array(
										"AREA_FILE_SHOW" => "file",
										"PATH" => SITE_DIR."include/header_phone.php"),
									false
								);?>
              <div class="header__contacts-whours">
								<?$APPLICATION->IncludeComponent(
										"bitrix:main.include",
										"",
										array(
											"AREA_FILE_SHOW" => "file",
											"PATH" => SITE_DIR."include/header_whours.php"),
										false
									);?>
							</div>
            </div>
            <div class="header__button">
							<a class="header__callback btn btn_stroke" href="#">Заказать звонок</a>
						</div>
          </div>
        </div>
      </div>
      <div class="header__bottom">
        <div class="container">
					<?$APPLICATION->IncludeComponent(
						"bitrix:menu", 
						"top_menu", 
						array(
							"ROOT_MENU_TYPE" => "top",
							"MENU_CACHE_TYPE" => "A",
							"MENU_CACHE_TIME" => "36000000",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"MENU_THEME" => "site",
							"CACHE_SELECTED_ITEMS" => "N",
							"MENU_CACHE_GET_VARS" => array(
							),
							"MAX_LEVEL" => "1",
							"CHILD_MENU_TYPE" => "left",
							"USE_EXT" => "Y",
							"DELAY" => "N",
							"ALLOW_MULTI_SELECT" => "N",
							"COMPONENT_TEMPLATE" => "top_menu"
						),
						false
					);?>
        </div>
      </div>
			<? if(CSite::InDir('/index.php')): ?>
      <div class="intro" id="intro">
        <div class="container">
          <div class="intro__inner row">
            <div class="intro__left col-lg-9">
							<?$APPLICATION->IncludeComponent(
								"bitrix:news.list", 
								"intro_slider", 
								array(
									"ACTIVE_DATE_FORMAT" => "d.m.Y",
									"ADD_SECTIONS_CHAIN" => "N",
									"AJAX_MODE" => "N",
									"AJAX_OPTION_ADDITIONAL" => "",
									"AJAX_OPTION_HISTORY" => "N",
									"AJAX_OPTION_JUMP" => "N",
									"AJAX_OPTION_STYLE" => "Y",
									"CACHE_FILTER" => "N",
									"CACHE_GROUPS" => "Y",
									"CACHE_TIME" => "36000000",
									"CACHE_TYPE" => "A",
									"CHECK_DATES" => "Y",
									"COMPONENT_TEMPLATE" => "intro_slider",
									"DETAIL_URL" => "",
									"DISPLAY_BOTTOM_PAGER" => "N",
									"DISPLAY_DATE" => "Y",
									"DISPLAY_NAME" => "Y",
									"DISPLAY_PICTURE" => "Y",
									"DISPLAY_PREVIEW_TEXT" => "Y",
									"DISPLAY_TOP_PAGER" => "N",
									"FIELD_CODE" => array(
										0 => "NAME",
										1 => "PREVIEW_TEXT",
										2 => "PREVIEW_PICTURE",
										3 => "",
									),
									"FILTER_NAME" => "",
									"HIDE_LINK_WHEN_NO_DETAIL" => "N",
									"IBLOCK_ID" => "4",
									"IBLOCK_TYPE" => "content",
									"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
									"INCLUDE_SUBSECTIONS" => "Y",
									"MESSAGE_404" => "",
									"NEWS_COUNT" => "20",
									"PAGER_BASE_LINK_ENABLE" => "N",
									"PAGER_DESC_NUMBERING" => "N",
									"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
									"PAGER_SHOW_ALL" => "N",
									"PAGER_SHOW_ALWAYS" => "N",
									"PAGER_TEMPLATE" => ".default",
									"PAGER_TITLE" => "Новости",
									"PARENT_SECTION" => "",
									"PARENT_SECTION_CODE" => "",
									"PREVIEW_TRUNCATE_LEN" => "",
									"PROPERTY_CODE" => array(
										0 => "",
										1 => "",
									),
									"SET_BROWSER_TITLE" => "N",
									"SET_LAST_MODIFIED" => "N",
									"SET_META_DESCRIPTION" => "N",
									"SET_META_KEYWORDS" => "N",
									"SET_STATUS_404" => "N",
									"SET_TITLE" => "N",
									"SHOW_404" => "N",
									"SORT_BY1" => "ACTIVE_FROM",
									"SORT_BY2" => "SORT",
									"SORT_ORDER1" => "DESC",
									"SORT_ORDER2" => "ASC",
									"STRICT_SECTION_CHECK" => "N"
								),
								false
							);?>
            </div>
            <div class="intro__right col-lg-3">
							<?$APPLICATION->IncludeComponent(
									"bitrix:main.include",
									"",
									array(
										"AREA_FILE_SHOW" => "file",
										"PATH" => SITE_DIR."include/intro_order.php"),
									false
								);?>
            </div>
          </div>
        </div>
      </div>
			<? endif; ?>
    </header>

		<main class="content">
