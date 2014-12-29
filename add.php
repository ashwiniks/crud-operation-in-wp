<?php
if(isset($_REQUEST['submit']))
{
global $wpdb;
$wpdb->insert(
'ash_crud_exp', //table name
array("fld_name"=>$_REQUEST['name']),
array('%s')
);
$message="data inserted";
}
?>
Add data
<?php if(isset($message)) echo $message; ?>
<form action="" method="post" >
<input type="text" name='name' value="<?=$_REQUEST['name'];?>" />
<input type="submit" name="submit" value="submit" />
</form>


