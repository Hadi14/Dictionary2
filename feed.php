<?
// echo "Your Word: " . $_POST['key'];
// $out = array();
// $out['content'] = "Your Word: " . $_POST['key'];
// $out['status'] = 1;
// echo json_encode($out);
$word = $_POST['key'];
require_once('main.php');
$db = Db::getInstance();
$sql = "select * from dic_word where word like '%$word%'";
$records = $db->query($sql);

$out['content'] = "";
foreach ($records as $record) {
    $out['content'] .=  $record['word'] . "<br>";
}
echo json_encode($out);
