<?
// echo "Your Word: " . $_POST['key'];
$out = array();
$out['content'] = "Your Word: " . $_POST['key'];
$out['status'] = 1;
echo json_encode($out);
