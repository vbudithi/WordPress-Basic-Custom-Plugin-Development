<?php
$delete = $_GET['del'];
global $wpdb;
    $wpdb->delete( 'property', array( 'prop_id' => $delete ) );
?>
<script type="text/javascript">
  window.location="<?php echo site_url();?>/wp-admin/admin.php?page=All-Real-Unit";
</script>