<?php
if(isset($_POST['submit'])){
 
 // image -1 
 $uploadedfile = $_FILES['prop_gallery_img1'];
    $upload_overrides = array( 'test_form' => false );
    $movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
    $imageurl = "";
    if ( $movefile && ! isset( $movefile['error'] ) ) {
       $imageurl = $movefile['url'];
       //echo "url : ".$imageurl;
    }
// end 
// image -2 
 $uploadedfile2 = $_FILES['prop_gallery_img2'];
    $upload_overrides2 = array( 'test_form' => false );
    $movefile2 = wp_handle_upload( $uploadedfile2, $upload_overrides2 );
    $imageurl2 = "";
    if ( $movefile2 && ! isset( $movefile2['error'] ) ) {
       $imageurl2 = $movefile2['url'];
       //echo "url : ".$imageurl;
    }
//end 
// image -3 
 $uploadedfile3 = $_FILES['prop_gallery_img3'];
    $upload_overrides3 = array( 'test_form' => false );
    $movefile3 = wp_handle_upload( $uploadedfile3, $upload_overrides3 );
    $imageurl3 = "";
    if ( $movefile3 && ! isset( $movefile3['error'] ) ) {
       $imageurl3 = $movefile3['url'];
       //echo "url : ".$imageurl;
    }
//end 



// image -f
 $uploadedfilef = $_FILES['prop_file1'];
    $upload_overridesf = array( 'test_form' => false );
    $movefilef = wp_handle_upload( $uploadedfilef, $upload_overridesf);
    $imageurlf = "";
    if ( $movefilef && ! isset( $movefilef['error'] ) ) {
       $imageurlf = $movefilef['url'];
       //echo "url : ".$imageurl;
    }
//end 

// image -pdf1
 $uploadedfilepdf1 = $_FILES['prop_file2'];
    $upload_overridespdf1 = array( 'test_form' => false );
    $movefilepdf1 = wp_handle_upload( $uploadedfilepdf1, $upload_overridespdf1);
    $imageurlpdf1 = "";
    if ( $movefilepdf1 && ! isset( $movefilepdf1['error'] ) ) {
       $imageurlpdf1 = $movefilepdf1['url'];
  
    }
//end 


global $wpdb;
  $wpdb->insert( 
    'property', 
    array( 
        'prop_title' => $_POST['prop_title'], 
        'prop_desc' => $_POST['prop_desc'], 
        'prop_price' => $_POST['prop_price'], 
        'prop_lat_long' => $_POST['prop_lat_long'], 
        'prop_type' => $_POST['prop_type'], 
        'prop_area' => $_POST['prop_area'], 
        'prop_address' => $_POST['prop_address'], 
        'email' => $_POST['email'], 
        'prop_state' => $_POST['prop_state'], 
        'prop_zipcode' => $_POST['prop_zipcode'], 
        'prop_country' => $_POST['prop_country'], 
        'prop_img1' => $imageurl,
        'prop_img2' => $imageurl2,
        'prop_img3' => $imageurl3,
        'prop_file1'=>   $imageurlf,
        'prop_file2'=>   $imageurlpdf1,
        'prop_video1' => $_POST['prop_video1'],
        'prop_video2' => $_POST['prop_video2'],
        'prop_video3' => $_POST['prop_video3'],
        'prop_status' => 0,
        'prop_date' => current_time( 'mysql' ),
        'prop_data_details' => $_POST['prop_data_details']
    ), 
    array( 
        '%s', '%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s',
        '%s','%s','%s','%s','%s','%s','%s',
        '%d','%s','%s' 
    ) 
 );
 ?>
  <script type="text/javascript">
  
window.location="<?php echo site_url();?>/wp-admin/admin.php?page=All-Real-Unit";

</script>
<?php 
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Add Real Units </title>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- code -->


<!--end -->
</head>
<body>
<div class="container-fluid">
    <h2>Register Real Unit..</h2>
  <div style="height: 20px;"></div>
   <div class="col-md-12">  
    <!--form list -->
    <form method="post" enctype="multipart/form-data">   
    <div class="col-md-6">  
      <div class="form-group has-success">
        <label class="control-label">Title* </label>
        <input type="text" name="prop_title" class="form-control" required>
      </div>
    </div>
<div class="col-md-6">  
      <div class="form-group has-success">
        <label class="control-label">Property Description* </label>
  <textarea name="prop_desc" class="form-control" required></textarea>
      </div>
    </div>

    <div class="col-md-6">  
      <div class="form-group has-success">
        <label class="control-label">Price* </label>
        <input type="text" name="prop_price" class="form-control" required>
      </div>
    </div>


  <div class="col-md-6">  
      <div class="form-group has-success">
        <label class="control-label">lat & long </label>
        <input type="text" name="prop_lat_long" class="form-control">
      </div>
  </div>

    <div class="col-md-6">  
      <div class="form-group has-success">
        <label class="control-label">Property Type* </label>
        <input type="text" name="prop_type" class="form-control" required>
      </div>
    </div>

    <div class="col-md-6">  
      <div class="form-group has-success">
        <label class="control-label">Property Area </label>
        <input type="text" name="prop_area" class="form-control">
      </div>
    </div>


    <div class="col-md-6">  
      <div class="form-group has-success">
        <label class="control-label">Property Address </label>
        <input type="text" name="prop_address" class="form-control">
      </div>
    </div>


    <div class="col-md-6">  
      <div class="form-group has-success">
        <label class="control-label">Email* </label>
        <input type="text" name="email" class="form-control" required>
      </div>
    </div>

    <div class="col-md-6">  
      <div class="form-group has-success">
        <label class="control-label">Property State </label>
        <input type="text" name="prop_state" class="form-control">
      </div>
    </div>


  <div class="col-md-6">  
      <div class="form-group has-success">
        <label class="control-label">Property Zipcode </label>
        <input type="text" name="prop_zipcode" class="form-control">
      </div>
    </div>


  <div class="col-md-6">  
      <div class="form-group has-success">
        <label class="control-label">Property Country </label>
        <input type="text" name="prop_country" class="form-control">
      </div>
    </div>
 

<div class="col-md-6">  
    <div class="form-group has-success">
      <label class="control-label">Upload PDF or DOC file   </label>
     <input type="file" class="form-control" name="prop_file2">
    </div>
  </div>


<div class="col-md-6">  
    <div class="form-group has-success">
      <label class="control-label">Floor Plan  </label>
     <input type="file" class="form-control" name="prop_file1">
    </div>
  </div>


  <div class="col-md-6">  
    <div class="form-group has-success">
      <label class="control-label">Gllery Image  </label>
     <input type="file" class="form-control" name="prop_gallery_img1">
    </div>
  </div>


 <div class="col-md-6">  
    <div class="form-group has-success">
      <label class="control-label">Gllery Image  </label>
     <input type="file" class="form-control" name="prop_gallery_img2">
    </div>
  </div>
 <div class="col-md-6">  
    <div class="form-group has-success">
      <label class="control-label">Gllery Image  </label>
     <input type="file" class="form-control" name="prop_gallery_img3">
    </div>
  </div>

 <div class="col-md-6">  
    <div class="form-group has-success">
      <label class="control-label"> Video Link 1  </label>
      <span style="color:grey">
        Please use embed YouTube video link
      </span>
     <input type="text" class="form-control" name="prop_video1">
    </div>
  </div>

<div class="col-md-6">  
    <div class="form-group has-success">
      <label class="control-label"> Video Link 2 </label>
      <span style="color:grey">
        Please use embed YouTube video link
      </span>
     <input type="text" class="form-control" name="prop_video2">
    </div>
  </div>


<div class="col-md-6">  
    <div class="form-group has-success">
      <label class="control-label"> Video link 3 </label>
      <span style="color:grey">
        Please use embed YouTube video link
      </span>
     <input type="text" class="form-control" name="prop_video3">
    </div>
  </div>





<div class="col-md-12">  
      <div class="form-group has-success">
        <label class="control-label">Property Details*  </label>
        <textarea id="editor1" name="prop_data_details" class="form-control" required> </textarea>
      </div>
    </div>
      <script src="https://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>
      <script>
             CKEDITOR.replace( 'editor1' );
      </script>
      <script src="https://cdn.ckeditor.com/[version.number]/[distribution]/ckeditor.js"></script>




<div class="col-md-2">  
    <div class="form-group has-success">
      <input type="submit" name="submit" value="Submit" class="form-control">
    </div>
  </div>

</form>
<!-- list style -->


  </div>
</div>
        
<!-- jQuery library -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
</body>
</html>