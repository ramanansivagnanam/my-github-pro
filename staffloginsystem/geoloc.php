<?php
 session_start();
 mysql_connect('localhost','root','');
 mysql_selectdb('ramanan');
include_once 'header.php';
?>
<div class = "in-header1">
<h1 id="heading1">Advanced Staff Management System</h1>
</div>
<div class = "in-header1">
<h1 id="heading1">Register your Attendence using Geolocation</h1>
</div>
<center>
<?php
        echo '<p style="color:red; font-size:40px;">Hi! '.$_SESSION['user_name'].' you are sucecssfully loggedIn </P>';
 ?>
</center>
<center>
  <div class="col-md-12">
  <form action="logoutscript.php" method="post">
      <a href="#" class="btn btn-primary btn-lg active " role="button">Attendence</a>
  <button type="submit" name="submit" class="btn btn-primary btn-lg " id="sub-button" >LogOut</button>
</form>
</div>
</center>
<br>
<br>
<div class="container">
<div class="col-sm-7 col-md-5 col-lg-7" id="geomap">
<script>
function geoFindMe() {
  var output = document.getElementById("out");

  if (!navigator.geolocation){
    output.innerHTML = "<p>Geolocation is not supported by your browser</p>";
    return;
  }

  function success(position) {
    var latitude  = position.coords.latitude;
    var longitude = position.coords.longitude;

    output.innerHTML = '<p>Latitude is ' + latitude + '� <br>Longitude is ' + longitude + '�</p>';
    document.getElementById('user_lat').value=latitude;
    document.getElementById('user_long').value=longitude;
  }
  function error() {
    output.innerHTML = "Unable to retrieve your location";
  }

  output.innerHTML = "<p>Locating....</p>";

  navigator.geolocation.getCurrentPosition(success, error);
}
</script>
<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyDooN-Tt9Eh_7tCow-k0m5uUQWQeLuTM3Q

"></script>
    <article>
      <p>Finding your location: <span id="status">checking...</span></p>
    </article>
<script>
function success(position) {
  var s = document.querySelector('#status');

  if (s.className == 'success') {
    // not sure why we're hitting this twice in FF, I think it's to do with a cached result coming back
    return;
  }
  s.innerHTML = "found you!";
  s.className = 'success';

  var mapcanvas = document.createElement('div');
  mapcanvas.id = 'mapcanvas';
  mapcanvas.style.height = '400px';
  mapcanvas.style.width = '560px';

  document.querySelector('article').appendChild(mapcanvas);

  var latlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
  var myOptions = {
    zoom: 15,
    center: latlng,
    mapTypeControl: true,
    navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  var map = new google.maps.Map(document.getElementById("mapcanvas"), myOptions);

  var marker = new google.maps.Marker({
      position: latlng,
      map: map,
      title:"You are here! (at least within a "+position.coords.accuracy+" meter radius)"
  });
}
function error(msg) {
  var s = document.querySelector('#status');
  s.innerHTML = typeof msg == 'string' ? msg : "failed";
  s.className = 'fail';

  // console.log(arguments);
}

if (navigator.geolocation) {
  navigator.geolocation.getCurrentPosition(success, error);
} else {
  error('not supported');
}

</script>

<div id="out">
<p><button onclick="geoFindMe()" class="btn btn-primary btn-lg btn-block glyphicon glyphicon-map-marker" >Show my location</button></p>
</div>
</div>
<div class="col-sm-5 col-md-5 offset-md-2 col-lg-5 offset-lg-0">
<div id ="second-clmn">
<h3>Current Details:</h3>
       <?php
        echo '<p>NAME:'.$_SESSION['user_name'].'</P>';
          echo '<p>EMAIL:'.$_SESSION['user_email'].'</P>';
            echo '<p>MOBLLE NO:'.$_SESSION['user_mobileno'].'</P>';
            $date = date('Y-m-d H:i:s');
            echo $date;
        ?>
</div>
</div>
</div>
<?php
include_once 'footer.php';
?>
