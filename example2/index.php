<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Наша супер страница");
var_dump(\Bitrix\Main\Config\Configuration::getValue('exception_handling'));
echo "<br /><br />Проверка отслеживания GIT<br /><br />";


$a = array('che', 123);
dump($a);


?>
Hello World 2!
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>