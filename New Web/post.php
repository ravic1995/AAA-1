
<?php
$field_firstname = $_POST['cf_name1'];
$field_topic = $_POST['cf_topic'];
$field_message = $_POST['cf_message'];
$file = 'messages.js';
$data = json_decode(file_get_contents($file),1);
$newdata = array('Name'=>$field_firstname, 'Topic' => $field_topic, 'Message'=>$field_message);
$data[] = $newdata;
$put = file_put_contents($file, json_encode($data));
if($put){
    $updates = 'updates.js';
    $parserfeed = fopen("feed.js", "r");
    $codeer = fread($parserfeed, filesize("feed.js"));
    $send = file_put_contents($updates, "var a = []; a = ".json_encode($data).$codeer);
    fclose($parserfeed);
?>
<script language="javascript" type="text/javascript">
	window.location = 'index.html';
</script>
<?php
}
?>
 