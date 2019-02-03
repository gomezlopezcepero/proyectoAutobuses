<!DOCTYPE html>
<html>
  <head>
    <style type="text/css">
      html, body { height: 100%; margin: 0; padding: 0; }
      #map { height: 70%;
	  width: 70%; }
    </style>
    <script type="text/javascript">

function vibrar(){
	
	if (window.navigator.vibrate) {
    alert('¡Puedes hacerlo vibrar!');
} else {
    alert('No puedes hacerlo vibrar :');
}

//Tan sencillo cómo esto, solo pasamos el parametro la cantidad de milisegundos que necesitemos hacer vibrar el dispositivo
window.navigator.vibrate(1000);


}





/*
function toggleBounce() {
  if (marker.getAnimation() !== null) {
    marker.setAnimation(null);
  } else {
    marker.setAnimation(google.maps.Animation.BOUNCE);
  }
}
*/
    </script>
    
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJjxKxOrKIcQu88s8Qjp6nwmXhtuQnvRU&callback=initMap">
    </script>
  </head>
  <body>
  
  <?php
  
  $hora =date("Hi");
  $result = 0;
  
  if($hora > 2259){
	  $hora = 2300 - $hora; 
  }
  else{
	   $hora = 100 + $hora; 
  }
  
  echo "<p>" . $hora . "</p>";
  
$servername = "127.0.0.1";
$username = "u322935431_paco";
$password = "123amatar";
$dbname = "u322935431_usuar";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}     
     


$cont=0;

$rs=mysqli_query($conn,"select * from jereztrebujena") or
  die("Problemas en el select:".mysqli_error($conexion)); 
while ($reg=mysqli_fetch_array($rs))
{
	echo "<p>" . $reg['horario'] . "</p>";
	if($hora - $reg['horario'] < 21 && $hora - $reg['horario'] > -1){
		$cont++;
		
		$result = $hora - $reg['horario'];
	}

}

if($cont==0){
	
	?>
    
    <?php
	
	
	$cont2=0;
	$result2=0;

$rs=mysqli_query($conn,"select * from trebujenajerez") or
  die("Problemas en el select:".mysqli_error($conexion)); 
while ($reg=mysqli_fetch_array($rs))
{
	if($hora - $reg['horario'] < 21 && $hora - $reg['horario'] > -1){
		$cont2++;
		
		$result2 = $hora - $reg['horario'];
	}

}

if($cont2==0){
	echo "<p>No hay ningún autobús en circulación en este momento</p>";
	?>
    
     <script type="text/javascript">
    var map;
var marker;
var autobus;

function initMap() {
	
	 var myLatLng = {lat: 36.8683917, lng: -6.1761159};
	 var myLatLng2 = {lat: 36.6990578, lng: -6.1467353};
	
	 
	
  map = new google.maps.Map(document.getElementById('map'), {
   
    center: myLatLng,
    zoom: 10
  });
  
  
  marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Hello World!',  /* animation: google.maps.Animation.BOUNCE */
  });
  
  // marker.addListener('click', toggleBounce);
  
  var marker2 = new google.maps.Marker({
    position: myLatLng2,
    map: map,
    title: 'Hello World!'
  });
  
  
  
}
    </script>
    
    <?php
	
	
	
}	
else{
	echo "<p> ha entrado</p>";
	$rs=mysqli_query($conn,"select * from coordenadastrebujenajerez where id = $result2") or
  die("Problemas en el select:".mysqli_error($conexion)); 
while ($reg=mysqli_fetch_array($rs))
	{
	echo "<p> ha entrado2</p>";
	?>
    
    <script type="text/javascript">
    var map;
var marker;
var autobus;

function initMap() {
	
	 var myLatLng = {lat: 36.8683917, lng: -6.1761159};
	 var myLatLng2 = {lat: 36.6990578, lng: -6.1467353};
	 var myLatLngAuto = {lat: <?php echo $reg['latitud'] ?>, lng: <?php echo $reg['longitud'] ?>};
	 
	
  map = new google.maps.Map(document.getElementById('map'), {
   
    center: myLatLng,
    zoom: 10
  });
  
  
  marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Hello World!',  /* animation: google.maps.Animation.BOUNCE */
  });
  
  // marker.addListener('click', toggleBounce);
  
  var marker2 = new google.maps.Marker({
    position: myLatLng2,
    map: map,
    title: 'Hello World!'
  });
  
  
  
  autobus = new google.maps.Marker({
    position: myLatLngAuto,
    map: map,
    title: 'Hello World!'
  });
  
  
}
    </script>
    
    <?php
	
	}
	
}
	?>
    
    <?php
}
else{
	echo "<p> ha entrado</p>";
	$rs=mysqli_query($conn,"select * from coordenadasjereztrebujena where id = $result") or
  die("Problemas en el select:".mysqli_error($conexion)); 
while ($reg=mysqli_fetch_array($rs))
	{
	echo "<p> ha entrado2</p>";
	?>
    
    <script type="text/javascript">
    var map;
var marker;
var autobus;

function initMap() {
	
	 var myLatLng = {lat: 36.8683917, lng: -6.1761159};
	 var myLatLng2 = {lat: 36.6990578, lng: -6.1467353};
	 var myLatLngAuto = {lat: <?php echo $reg['latitud'] ?>, lng: <?php echo $reg['longitud'] ?>};
	 
	
  map = new google.maps.Map(document.getElementById('map'), {
   
    center: myLatLng,
    zoom: 10
  });
  
  
  marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Hello World!',  /* animation: google.maps.Animation.BOUNCE */
  });
  
  // marker.addListener('click', toggleBounce);
  
  var marker2 = new google.maps.Marker({
    position: myLatLng2,
    map: map,
    title: 'Hello World!'
  });
  
  
  
  autobus = new google.maps.Marker({
    position: myLatLngAuto,
    map: map,
    title: 'Hello World!'
  });
  
  
}
    </script>
    
    <?php
	
	}
	
}
 echo "<p>" . $result ."</p>"; 
    
  ?>
  
    <div id="map"></div>
    <input type="button" value="pulsar" onClick="vibrar();" id="boton"/>
    
  </body>
</html>