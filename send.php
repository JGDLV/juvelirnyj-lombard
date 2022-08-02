<?
require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");


if (isset($_POST['act'])) {
	$name = htmlspecialcharsbx(trim($_POST["name"]));
  $phone = htmlspecialcharsbx(trim($_POST["phone"]));

  $reply = '<img src="/local/templates/1PS/img/check.svg" alt=""><h2 class="modal__header">Заявка отправлена</h2><p class="modal__text">Специалист мастерской свяжется с&nbsp;вами в&nbsp;течение дня</p>';
  $error_reply = '<h2 class="modal__header">Ошибка!</h2><p class="modal__text">Попробуйте еще раз!</p>';

	$arEventFields = array(
        "NAME" => $name,
        "PHONE" => $phone,
	);
	
	CModule::IncludeModule('iblock');
    $arFields = array();
    $eventType = "";

	if ($_POST['act']=='callback') {
		$arFields = array(
            "IBLOCK_ID" => 13,
            "NAME" => $phone,
            "ACTIVE" => "Y",
            "PROPERTY_VALUES" => array(
                "NAME" => $name,
                "PHONE" => $phone
            ),
        );
        $eventType = "CALLBACK";
    }
    
    if ($_POST['act']=='consult') {
      $arFields = array(
        "IBLOCK_ID" => 14,
        "NAME" => $phone,
        "ACTIVE" => "Y",
        "PROPERTY_VALUES" => array(
            "NAME" => $name,
            "PHONE" => $phone
        ),
    );
    $eventType = "CONSULT";
}
    
	$nElement = new CIBlockElement;
    $idElement = $nElement->Add($arFields, false, false, true);
    if ($arEventFields['ID'] = $idElement) {
        if (!empty($idElement) && CEvent::Send($eventType, "s1", $arEventFields))
            echo $reply;
        else
            echo $error_reply;
    }

}
