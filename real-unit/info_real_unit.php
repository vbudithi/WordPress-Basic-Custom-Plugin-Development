<?php
    global $wpdb;
    $getproid = $_GET['val'];
    $result = $wpdb->get_results ( "SELECT * FROM property where prop_id=".$getproid);
    $count= 1;
    foreach ( $result as $print )   {  
		$title = $print->prop_title;
        $prop_desc = $print->prop_desc; 
        $prop_price = $print->prop_price;
        $prop_lat_long = $print->prop_lat_long;
        $prop_type = $print->prop_type;
        $prop_area = $print->prop_area;
        $prop_address = $print->prop_address;
        $email = $print->email;
        $prop_state = $print->prop_state;
        $prop_zipcode = $print->prop_zipcode;
        $prop_country = $print->prop_country;
        $prop_img1 = $print->prop_img1;
        $prop_img2 = $print->prop_img2;
        $prop_img3 = $print->prop_img3;
        $prop_file1= $print->prop_file1;
        $prop_file2= $print->prop_file2;
        $prop_video1 = $print->prop_video1;
        $prop_video2 = $print->prop_video2;
        $prop_video3 = $print->prop_video3;
        $prop_status =$print->prop_status;
        $prop_date =  $print->prop_date;
        $prop_data_details = $print->prop_data_details;
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
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>

<!--end -->
</head>
<body>
<div style="height: 20px;"></div>
<div class="container-fluid">
	<div class="row">
		<h2 class="text-success">Info Details </h2>
		 <table class="table table-bordered success">
        <thead>
          <tr >
            <th class="info">Title</th>
            <td><?php echo $title;?></td>
          </tr>
          <tr>
            <th class="info">Description</th>
            <td><?php echo $prop_desc;?></td>
          </tr>
          <tr>
            <th class="info">Price</th>
            <td><?php echo $prop_price;?></td>
          </tr>
         <tr>
            <th class="info">Lat & Long</th>
            <td>
     <div id="map" style="width: 100%; height: 300px;"></div> 
           </td>
          </tr>
          
          <tr>
            <th class="info">Property Type</th>
            <td><?php echo $prop_type;?></td>
          </tr>
          <tr>
            <th class="info">Area</th>
            <td><?php echo $prop_area;?></td>
          </tr>
          <tr >
            <th  class="info">Address</th>
            <td><?php echo $prop_address;?></td>
          </tr>
       <tr>
            <th class="info">Owner Email</th>
            <td><?php echo $email;?></td>
          </tr>
          <tr>
            <th class="info">State</th>
            <td><?php echo $prop_state;?></td>
          </tr>
        
          <tr>
            <th class="info">Country</th>
            <td><?php echo $prop_country;?></td>
          </tr>
         <tr>
            <th class="info">Zip Code</th>
            <td><?php echo $prop_zipcode;?></td>
          </tr>
         
<?php if($prop_file2!=''){ ?>
<tr>
            <th class="info">Document file </th>
            <td><a href="<?php echo $prop_file2;?>" download>Click & Download Document file</a></td>
          </tr>


 <tr> <?php } ?>

            <th class="info">Property image</th>
            <td>
<img src="<?php echo $prop_img1;?>" width="200" height="200"> 
              <img src="<?php echo $prop_img2;?>" width="200" height="200">
              <img src="<?php echo $prop_img3;?>" width="200" height="200">
             </td>
          </tr>


 <tr>
            <th class="info">Floor Property Plan</th>
            <td>
              <img src="<?php echo $prop_file1;?>" width="200" height="200">
             </td>
          </tr>





          <tr>
          <th class="info">Video1</th>
            <td><table>
            	<tr><td><iframe id="ytplayer" type="text/html" width="200" height="200"  src="<?php echo $prop_video1;?>"  frameborder="0"/></iframe></td>
			
				<td><iframe id="ytplayer" type="text/html" width="200" height="200"  src="<?php echo $prop_video2;?>"  frameborder="0"/></iframe></td>

				<td><iframe id="ytplayer" type="text/html" width="200" height="200"  src="<?php echo $prop_video3;?>"  frameborder="0"/></iframe></td></tr>
        </table>
            </td> 
          </tr>
<!--
<th class="info">prop_status</th>
            <td>approv</td> 
          </tr>
-->
          <th class="info">Date</th>
            <td><?php echo $prop_date;?></td> 
          </tr>

          <th class="info">Details</th>
            <td><?php echo $prop_data_details;?></td> 
          </tr>
</thead>
      </table>
	</div>
</div>   


<!-- google map -->

<script type="text/javascript">
function initialize() {
   var latlng = new google.maps.LatLng(<?php echo $prop_lat_long;?>);
    var map = new google.maps.Map(document.getElementById('map'), {
      center: latlng,
      zoom: 13
    });
    var marker = new google.maps.Marker({
      map: map,
      position: latlng,
      draggable: false,
      anchorPoint: new google.maps.Point(0, -29)
   });
    var infowindow = new google.maps.InfoWindow();   
    google.maps.event.addListener(marker, 'click', function() {
      var iwContent = '<div id="iw_container">' +
      '<div class="iw_title"><?php echo $prop_address;?></div></div>';
      // including content to the infowindow
      infowindow.setContent(iwContent);
      // opening the infowindow in the current map and at the current marker location
      infowindow.open(map, marker);
    });
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
<!-- end -->




    
<!-- jQuery library -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
</body>
</html>