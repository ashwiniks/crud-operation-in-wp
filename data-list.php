<?php
global $wpdb;
$result=$wpdb->get_results('select * from ash_crud_exp');
?>
<a href="<?=admin_url('admin.php?page=crud_operation_create');?>"  >Add data</a>
<table width='100%'>
<tr><td>ID</td><td>Name</td></tr>
<? foreach($result as $result)
{?>
<tr><td><?=$result->id;?></td><td><?=$result->fld_name; ?></td><td><a href="admin.php?page=crud_operation_update&id=<?=$result->id;?>" >Edit</a></td><td><a href="admin.php?page=crud_operation_delete&id=<?=$result->id;?>" >Delete</td></tr>
<? } ?>

</table>




