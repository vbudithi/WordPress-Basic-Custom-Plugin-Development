<!-- popup code -->
<style type="text/css">

.reserv{
    background: green;
    color: #fff;
        padding: 7px 5px 10px 8px;
    text-decoration: none!important;
    font-size: 16px;
}

.box {
  width: 40%;
  margin: 0 auto;
  background: rgba(255,255,255,0.2);
  padding: 35px;
  border: 2px solid #fff;
  border-radius: 20px/50px;
  background-clip: padding-box;
  text-align: center;
}

.button {
  font-size: 1em;
  padding: 10px;
  color: #fff;
  border: 2px solid #06D85F;
  border-radius: 20px/50px;
  text-decoration: none;
  cursor: pointer;
  transition: all 0.3s ease-out;
}
.button:hover {
  background: #06D85F;
}

.overlay {
  position: fixed;
  top: 69px;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0; overflow: scroll;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 70px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 30%;
  position: relative;
  transition: all 5s ease-in-out;
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: #06D85F;
}
.popup .content {
  max-height: 30%;
  overflow: auto;
}

@media screen and (max-width: 700px){
  .box{
    width: 70%;
  }
  .popup{
    width: 70%;
  }
}

</style>

<?php 
error_reporting(0);
$deatils_id = $_GET['property_details'];

if($deatils_id!=''){
?>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
<?php
    global $wpdb;
   $deatils_id = $_GET['property_details'];
    $result = $wpdb->get_results ( "SELECT * FROM property where prop_id=".$deatils_id);
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
 $prop_file1 = $print->prop_file1;
$prop_file2 = $print->prop_file2;
        $prop_video1 = $print->prop_video1;
        $prop_video2 = $print->prop_video2;
        $prop_video3 = $print->prop_video3;
        $prop_status =$print->prop_status;
        $prop_date =  $print->prop_date;
        $prop_data_details = $print->prop_data_details;
    }
    ?>
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
          <!--<tr>
            <th class="info">Email</th>
            <td><?php echo $email;?></td>
          </tr>-->
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


          <tr>
            <th class="info">Property image</th>
            <td>
              <img src="<?php echo $prop_img1;?>" width="200" height="200"> 
              <img src="<?php echo $prop_img2;?>" width="200" height="200">
              <img src="<?php echo $prop_img3;?>" width="200" height="200">

            </td>
          </tr>

 <tr>
            <th class="info">Property Floor Plan</th>
            <td>
              <img src="<?php echo $prop_file1;?>" width="200" height="200"> 
             

            </td>
          </tr>



     <tr>
          <th class="info">Video1</th>
            <td><table>
              <tr><td><iframe id="ytplayer" type="text/html" width="200" height="100"  src="<?php echo $prop_video1;?>"  frameborder="0"/></iframe></td>
      
        <td><iframe id="ytplayer" type="text/html" width="200" height="100"  src="<?php echo $prop_video2;?>"  frameborder="0"/></iframe></td>

        <td><iframe id="ytplayer" type="text/html" width="200" height="100"  src="<?php echo $prop_video3;?>"  frameborder="0"/></iframe></td></tr>
        </table>
            </td> 
          </tr>
<!--
<th class="info">prop_status</th>
            <td>approv</td> 
          </tr>

          <th class="info">prop_date</th>
            <td>approv</td> 
          </tr>
-->
          <th class="info">Details</th>
            <td><?php echo $prop_data_details;?></td> 
          </tr>

<th class="info">Reserve </th>
            <td><a class="thickbox reserv"
          onclick="keepID(this)" href="#popup1" id="<?php echo $print->prop_id;?>">Reserve </a></td> 
          </tr>


          <tr>
            <th class="info">Lat & Long</th>
            <td>
     <div id="map" style="width: 100%; height: 300px;"></div> 
           </td>
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


<div id="popup1" class="overlay">
  <div class="popup">
    <h2>RESERVE PROPERTY</h2>
    <a class="close" href="#">&times;</a>
    <div class="content">

<?php
if(isset($_POST['send'])){

$emailsid = $_POST['formvar'];

global $wpdb;
   
    $result = $wpdb->get_results ( "SELECT * FROM property where prop_id=".$emailsid);
    $count= 1;
    foreach ( $result as $prints )   { 
  $emails = $prints->email;

}
//$pro_urls = "'.site_url().'/real-unit/?property_details='.$emailsid.'";
         $to = $emails;
         $subject = "Contact for Property!!'.$title.'";
         
         $message = "<b>this is Property url .</b>";
         $message .= site_url()."/".$post_slug."/?property_details=$emailsid";
         $message .="<br/>";
         $message .= "Interested Property:".$_POST['interested_property']."<br/>First Name:".$_POST['fname']."<br/>Last Name:".$_POST['lanme']."<br/>Email:".$_POST['email']."<br/>Subject:".$_POST['subject']."<br/>Address:".$_POST['address']."<br/>Zip:".$_POST['zip']."<br/>Mobile:".$_POST['mobile']."<br/>Country: ".$_POST['country']."<br/>State:".$_POST['state']; 

         $header = "From:abc@somedomain.com \r\n";
         $header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
        ?>
 <script type="text/javascript">
  
window.location='<?php echo site_url()."/".$post_slug;?>';

</script>

<?php

}
      ?>




 <form method="post" name="myform3">
    
 <script type="text/javascript">
    function keepID(element)
   {
   // document.write(element.getAttribute("id"));
var jsvar = element.getAttribute("id");
 //jsvar=10;
    document.myform3.formvar.value = jsvar;
    }
  </script>
    <input type="hidden" name="formvar" value="">
    <input type="hidden" name="proprty_url" value="<?php echo site_url();?>real-unit/?property_details=<?php echo $_POST['formvar'];?>&property-info=real-unit-info">


  <div class="col-md-12">  
      <div class="form-group has-success">
        <label class="control-label">Interested Property* </label>
        <input type="text" name="interested_property" class="form-control" required>
      </div>
    </div>


    <div class="col-md-12">  
      <div class="form-group has-success">
        <label class="control-label">First Name* </label>
        <input type="text" name="fname" class="form-control" required>
      </div>
    </div>

   <div class="col-md-12">  
      <div class="form-group has-success">
        <label class="control-label">Last Name * </label>
        <input type="text" name="lanme" class="form-control" required>
      </div>
    </div>
  <div class="col-md-12">  
      <div class="form-group has-success">
        <label class="control-label">Email* </label>
        <input type="text" name="email" class="form-control" required>
      </div>
    </div>

   <div class="col-md-12">  
      <div class="form-group has-success">
        <label class="control-label">Subject * </label>
        <input type="text" name="subject" class="form-control" required>
      </div>
    </div>
  <div class="col-md-12">  
      <div class="form-group has-success">
        <label class="control-label">Address * </label>
        <input type="text" name="address" class="form-control" required>
      </div>
    </div>

<div class="col-md-12">  
      <div class="form-group has-success">
        <label class="control-label">Zip * </label>
        <input type="text" name="zip" class="form-control" required>
      </div>
    </div>


  <div class="col-md-12">  
      <div class="form-group has-success">
        <label class="control-label">Mobile* </label>
        <input type="text" name="mobile" class="form-control" required>
      </div>
    </div>

  <div class="col-md-12">  
      <div class="form-group has-success">
        <label class="control-label">Country * </label>
        <input type="text" name="country" class="form-control" required>
      </div>
    </div>

  <div class="col-md-12">  
      <div class="form-group has-success">
        <label class="control-label">State* </label>
        <input type="text" name="state" class="form-control" required>
      </div>
    </div>
  
<div class="col-md-12">  
      <div class="form-group has-success">
        <input type="submit" name="send" value="Reserv" class="form-control">
      </div>
    </div>
      </form>
    </div>
  </div>
</div>
<?php
}
else {

?>
<table class="wp-list-table widefat fixed striped pages">
  <thead>
  <tr><th>Photo</th>
      <th>Title</th>
      <th>Price</th>
      <th>Type</th> <th>Address</th>
       <th>Zip code</th>
      <th>Contact </th>
  </tr>
</thead>
<tbody>
 <?php

 global $post;
$post_slug=$post->post_name;
// For display the data we need to echo it
    global $wpdb;
    $result = $wpdb->get_results ( "SELECT * FROM property" );
    $count= 1;
    foreach ( $result as $print )   {
    ?>
  <tr class="iedit author-self level-0">
      <td><img src="<?php echo $print->prop_img1; ?>" width="40" height="40"/>
      </td>
      <td><a href="<?php echo site_url();?>/<?php echo $post_slug;?>/?property_details=<?php echo $print->prop_id; ?>&property-info=real-unit-info"><?php echo $print->prop_title; ?></a></td> 
      <td><?php echo $print->prop_price; ?></td>
     
      <td><?php echo $print->prop_type;?></td>
       <td><?php echo $print->prop_address; ?> </td>
      <td><?php echo $print->prop_zipcode;?></td>
      

      <td><a class="thickbox reserv"
          onclick="keepID(this)" href="#popup1" id="<?php echo $print->prop_id;?>">Reserve </a>

      </td>
  </tr>
    <?php $count++; } ?>
</tbody>
</table>

<div id="popup1" class="overlay">
  <div class="popup">
    <h2>RESERVE THE PROPERTY</h2>
    <a class="close" href="#">&times;</a>
    <div class="content">

<?php
if(isset($_POST['send'])){

$emailsid = $_POST['formvar'];

global $wpdb;
   
    $result = $wpdb->get_results ( "SELECT * FROM property where prop_id=".$emailsid);
    $count= 1;
    foreach ( $result as $prints )   { 
  $emails = $prints->email;

}
//$pro_urls = "'.site_url().'/real-unit/?property_details='.$emailsid.'";
         $to = $emails;
         $subject = "Contact for Property!!'.$title.'";
         
         $message = "<b>this is Property url .</b>";
         $message .= site_url()."/".$post_slug."/?property_details=$emailsid";
         $message .="<br/>";
         $message .= "Interested Property:".$_POST['interested_property']."<br/>First Name:".$_POST['fname']."<br/>Last Name:".$_POST['lanme']."<br/>Email:".$_POST['email']."<br/>Subject:".$_POST['subject']."<br/>Address:".$_POST['address']."<br/>Zip:".$_POST['zip']."<br/>Mobile:".$_POST['mobile']."<br/>Country: ".$_POST['country']."<br/>State:".$_POST['state']; 

         $header = "From:abc@somedomain.com \r\n";
         $header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
        ?>
 <script type="text/javascript">
  
window.location='<?php echo site_url()."/".$post_slug;?>';

</script>

<?php

}
      ?>




 <form method="post" name="myform3">
    
 <script type="text/javascript">
    function keepID(element)
   {
   // document.write(element.getAttribute("id"));
var jsvar = element.getAttribute("id");
 //jsvar=10;
    document.myform3.formvar.value = jsvar;
    }
  </script>
    <input type="hidden" name="formvar" value="">
    <input type="hidden" name="proprty_url" value="<?php echo site_url();?>real-unit/?property_details=<?php echo $_POST['formvar'];?>&property-info=real-unit-info">

<div class="col-md-12">  
      <div class="form-group has-success">
        <label class="control-label">Interested Property* </label>
        <input type="text" name="interested_property" class="form-control" required>
      </div>
    </div>



    <div class="col-md-12">  
      <div class="form-group has-success">
        <label class="control-label">First Name* </label>
        <input type="text" name="fname" class="form-control" required>
      </div>
    </div>

   <div class="col-md-12">  
      <div class="form-group has-success">
        <label class="control-label">Last Name * </label>
        <input type="text" name="lanme" class="form-control" required>
      </div>
    </div>

   <div class="col-md-12">  
      <div class="form-group has-success">
        <label class="control-label">Email* </label>
        <input type="text" name="email" class="form-control" required>
      </div>
    </div>

   <div class="col-md-12">  
      <div class="form-group has-success">
        <label class="control-label">Subject * </label>
        <input type="text" name="subject" class="form-control" required>
      </div>
    </div>

  <div class="col-md-12">  
      <div class="form-group has-success">
        <label class="control-label">Address * </label>
        <input type="text" name="address" class="form-control" required>
      </div>
    </div>

<div class="col-md-12">  
      <div class="form-group has-success">
        <label class="control-label">Zip * </label>
        <input type="text" name="zip" class="form-control" required>
      </div>
    </div>


  <div class="col-md-12">  
      <div class="form-group has-success">
        <label class="control-label">Mobile* </label>
        <input type="text" name="mobile" class="form-control" required>
      </div>
    </div>

  <div class="col-md-12">  
      <div class="form-group has-success">
        <label class="control-label">Country * </label>
        <input type="text" name="country" class="form-control" required>
      </div>
    </div>

  <div class="col-md-12">  
      <div class="form-group has-success">
        <label class="control-label">Satate  * </label>
        <input type="text" name="state" class="form-control" required>
      </div>
    </div>
  
<div class="col-md-12">  
      <div class="form-group has-success">
        <input type="submit" name="send" value="Reserv" class="form-control">
      </div>
    </div>
      </form>
    </div>
  </div>
</div>

<?php } ?>