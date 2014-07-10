
<?php
$field_firstname = $_POST['cf_name'];
$field_topic = $_POST['cf_topic'];
$field_message = $_POST['cf_message'];
$file = 'messages.js';
$data = json_decode(file_get_contents($file),1);
$newdata = array('Message'=>$field_firstname, $field_topic, $field_message);
$put = file_put_contents($file, json_encode($data));
if($put){
?>
<script language="javascript" type="text/javascript">
	window.location = 'index.html';
</script>
<?php
}
?>
 