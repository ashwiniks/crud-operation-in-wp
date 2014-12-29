<?php
if(isset($_REQUEST['id']))
{
global $wpdb;
$id=$_REQUEST['id'];
$wpdb->delete(
'ash_crud_exp', //table name 
array('id'=>$id),//data
array('%d')
);
$message="data deleted";
}
?>
Add data
<?php if(isset($message)) 
header('Location:admin.php?page=crud_operation_wp');
?>



