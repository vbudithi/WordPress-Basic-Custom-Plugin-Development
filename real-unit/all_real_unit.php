<!DOCTYPE html>
<html>
<head>
  <title>Property listing </title>
</head>
<body>
<table class="wp-list-table widefat fixed striped pages">
  <thead>
  <tr>
      <th>S.no.</th>
      <th>Photo</th>
      <th>Title</th>
      <th>Price</th>
      <th>Owner Email</th>
      <th>Address</th>
      <th>Type</th>
      <th>Action</th>
  </tr>
</thead>
<tbody>
 <?php
    global $wpdb;
    $result = $wpdb->get_results ( "SELECT * FROM property" );
    $count= 1;
    foreach ( $result as $print )   {
    ?>
  <tr class="iedit author-self level-0">
      <td><?php echo $count;?></td>
      <td><img src="<?php echo $print->prop_img1; ?>" width="40" height="40"/>
      </td>
      <td><a href="<?php echo site_url();?>/wp-admin/admin.php?page=info-real-unit&val=<?php echo $print->prop_id; ?>"><?php echo $print->prop_title; ?></a></td> 
      <td><?php echo $print->prop_price; ?></td>
      <td><?php echo $print->email; ?></td>
      <td><?php echo $print->prop_address; ?> </td>
      <td><?php echo $print->prop_type;?></td>
      <td><a href="<?php echo site_url();?>/wp-admin/admin.php?page=edit-real-unit&data=<?php echo $print->prop_id; ?>">Update</a>&nbsp;<a href="<?php echo site_url();?>/wp-admin/admin.php?page=delete-real-unit&del=<?php echo $print->prop_id; ?>" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a></td>
  </tr>
    <?php $count++; } ?>
</tbody>
</table>
</body>
</html>