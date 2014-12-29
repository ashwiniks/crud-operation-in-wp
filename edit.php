<?php
if(isset($_REQUEST['edit']))
{
global $wpdb;
$id=$_REQUEST['id'];
$wpdb->update(
'ash_crud_exp', //table name
array("fld_name"=>$_REQUEST['name']), //data
array('id'=>$id),
array('%s'),
array('%d')
);
$message="data updates";
}
?>
Add data
<?php if(isset($message)) echo $message; ?>
<?
global $wpdb;
$id=$_REQUEST['id'];
echo $id;
$data=$wpdb->get_results("select fld_name from ash_crud_exp where id=$id");
foreach($data as $data)
{
$name=$data->fld_name;
echo $name;
} ?>
<form action="" method="post" >
<input type="text" name='name' value="<?=$name;?>" />
<input type="submit" name="edit" value="edit" />
</form>


