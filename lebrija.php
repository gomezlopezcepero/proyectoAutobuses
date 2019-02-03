<!DOCTYPE html>
<html>
  <head>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="estilosMapas.css" />
    
    
    <script type="text/javascript">
    var int=self.setInterval("refresh()",60000);
    function refresh()
    {
        location.reload(true);
    }
</script>
    
    
    <script type="text/javascript">

function vibrar(){


//Tan sencillo cómo esto, solo pasamos el parametro la cantidad de milisegundos que necesitemos hacer vibrar el dispositivo
window.navigator.vibrate(1000);




setTimeout('document.location.reload()',6000);

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
  
     <div  class="titulo">
  <h1>Ruta de Autobuses Trebujena - Lebrija, Lebrija - Trebujena</h1>
  </div>
<div class="titulo2">
<a href="/autobuses/index.html"><h1>Volver</h1></a>
</div>
   <hr>
  
  <?php
  
  $hora =date("Hi");
  $result = 0;
  
  if($hora > 2259){
	  $hora = 2300 - $hora; 
  }
  else{
	   $hora = 100 + $hora; 
  }
  

 function HorarioLebrijaTrebujena(){
	  
	  $hora =date("Hi");
	  
	   if($hora > 2259){
	  $hora = 2300 - $hora; 
  }
  else{
	   $hora = 100 + $hora; 
  }
	  
	      if( $hora < 815){
		?>
        <h2>El próximo Autobús desde Lebrija saldrá a las 8:15</h2>
		<?php
	}
	else if( $hora > 815 && $hora < 915){
		?>
        <h2>El próximo Autobús desde Lebrija saldrá a las 9:15</h2>
		<?php
	}
	else if( $hora > 915 && $hora < 1100){
		?>
        <h2>El próximo Autobús desde Lebrija saldrá a las 11:00</h2>
		<?php
	}
	else if( $hora > 1100 && $hora < 1300){
		?>
        <h2>El próximo Autobús desde Lebrija saldrá a las 13:00</h2>
		<?php
	}
	else if( $hora > 1300 && $hora < 1415){
		?>
        <h2>El próximo Autobús desde Lebrija saldrá a las 14:15</h2>
		<?php
	}
	else if( $hora > 1415 && $hora < 1515){
		?>
        <h2>El próximo Autobús desde Lebrija saldrá a las 15:15</h2>
		<?php
	}
	else if( $hora > 1515 && $hora < 1615){
		?>
        <h2>El próximo Autobús desde Lebrija saldrá a las 16:15</h2>
		<?php
	}
	else if( $hora > 1615 && $hora < 1715){
		?>
        <h2>El próximo Autobús desde Lebrija saldrá a las 17:15</h2>
		<?php
	}
	else if( $hora > 1715 && $hora < 1815){
		?>
        <h2>El próximo Autobús desde Lebrija saldrá a las 18:15</h2>
		<?php
	}
	else if( $hora > 1815 && $hora < 1945){
		?>
        <h2>El próximo Autobús desde Lebrija saldrá a las 19:45</h2>
		<?php
	}
	else if( $hora > 1945 && $hora < 2145){
		?>
        <h2>El próximo Autobús desde Lebrija saldrá a las 21:45</h2>
		<?php
	}
	else{
		
	}
	  
	  
  }
  
  function HorarioTrebujenaLebrija(){
	  
	   $hora =date("Hi");
	  
	   if($hora > 2259){
	  $hora = 2300 - $hora; 
  }
  else{
	   $hora = 100 + $hora; 
  }
	

	      if( $hora < 830){
		?>
        <h2>El próximo Autobús desde Trebujena saldrá a las 8:30</h2>
		<?php
	}
	else if( $hora > 830 && $hora < 930){
		?>
        <h2>El próximo Autobús desde Trebujena saldrá a las 9:30</h2>
		<?php
	}
	else if( $hora > 930 && $hora < 1115){
		?>
        <h2>El próximo Autobús desde Trebujena saldrá a las 11:15</h2>
		<?php
	}
	else if( $hora > 1115 && $hora < 1315){
		?>
        <h2>El próximo Autobús desde Trebujena saldrá a las 13:15</h2>
		<?php
	}
	else if( $hora > 1315 && $hora < 1430){
		?>
        <h2>El próximo Autobús desde Trebujena saldrá a las 14:30</h2>
		<?php
	}
	else if( $hora > 1430 && $hora < 1530){
		?>
        <h2>El próximo Autobús desde Trebujena saldrá a las 15:30</h2>
		<?php
	}
	else if( $hora > 1530 && $hora < 1630){
		?>
        <h2>El próximo Autobús desde Trebujena saldrá a las 16:30</h2>
		<?php
	}
	else if( $hora > 1630 && $hora < 1730){
		?>
        <h2>El próximo Autobús desde Trebujena saldrá a las 17:30</h2>
		<?php
	}
	else if( $hora > 1730 && $hora < 1830){
		?>
        <h2>El próximo Autobús desde Trebujena saldrá a las 18:30</h2>
		<?php
	}
	else if( $hora > 1830 && $hora < 2000){
		?>
        <h2>El próximo Autobús desde Trebujena saldrá a las 20:00</h2>
		<?php
	}
	else if( $hora > 2000 && $hora < 2200){
		?>
        <h2>El próximo Autobús desde Trebujena saldrá a las 22:00</h2>
		<?php
	}
	else{
		?>
        <h2>No hay más autobuses por hoy</h2>
		<?php
	}


	  
  }

  
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

$rs=mysqli_query($conn,"select * from lebrijatrebujena") or
  die("Problemas en el select:".mysqli_error($conexion)); 
while ($reg=mysqli_fetch_array($rs))
{
	
	if($hora- $reg['horario'] < 55 && $hora- $reg['horario'] > 15  && substr($reg['horario'], -2) > 30){
	$hora = $hora -40;	
	
	}
	
	if($hora - $reg['horario'] < 16 && $hora - $reg['horario'] > -5){
		$cont++;
		
		$result = $hora - $reg['horario'];
		
		if($result==11 || $result==13 || $result==15 || $result==-1 || $result==-3 || $result==-5){
			$alerta="";
			$mostrar="";
			if($result>0){
			$alerta = "la hora de llegada a Trebujena";
			$mostrar=16-$result;
			}
			else{
			$alerta = "la hora de salida desde Lebrija";
			
			$mostrar= substr($result, 1);
			}
		    
			?>
           
			<h2><span>Faltan <?php echo $mostrar ?> minutos para <?php echo $alerta ?></span></h2>
             <script>
			vibrar();
			</script>
            <?php
		}
		
		if($result < 0){
		$cont=0;	
		}
		
	}
	
		
	

}

if($cont==0){
	
	?>
    
    <?php
	
	
	$cont2=0;
	 $hora =date("Hi");
  
  
  if($hora > 2259){
	  $hora = 2300 - $hora; 
  }
  else{
	   $hora = 100 + $hora; 
  }
	$result2=0;

$rs=mysqli_query($conn,"select * from trebujenalebrija") or
  die("Problemas en el select:".mysqli_error($conexion)); 
while ($reg=mysqli_fetch_array($rs))
{
	
	if($hora- $reg['horario'] < 55 && $hora- $reg['horario'] > 15  && substr($reg['horario'], -2) > 30){
	$hora = $hora -40;	
	
	}
	
	if($hora - $reg['horario'] < 16 && $hora - $reg['horario'] > -5){
		$cont2++;
		
		$result2 = $hora - $reg['horario'];
		
		if($result2==10 || $result2==13 || $result2==15 || $result2==-1 || $result2==-3 || $result2==-5){
			$alerta="";
			$mostrar="";
			if($result2>0){
			$alerta = "la hora de llegada a Lebrija";
			$mostrar=16-$result2;
			}
			else{
			$alerta = "la hora de salida desde Trebujena";
			
			$mostrar= substr($result2, 1);
			}
		    
			?>
           
			<h2><span>Faltan <?php echo $mostrar ?> minutos para <?php echo $alerta ?></span></h2>
             <script>
			
			vibrar();
			</script>
           <?php 
		}
	
	if($result2 < 0){
		$cont2=0;	
		}
	
		
	}

}

if($cont2==0){
	
	
	HorarioLebrijaTrebujena();
	 HorarioTrebujenaLebrija();
	?>
    
     <script type="text/javascript">
    var map;
var marker;
var autobus;

function initMap() {
	
	 var myLatLng = {lat: 36.8683917, lng: -6.1761159};
	 var myLatLng2 = {lat: 36.931198 , lng: -6.066438};
	
	 
	
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
	
	$rs=mysqli_query($conn,"select * from coordenadastrebujenaLebrija where id = $result2") or
  die("Problemas en el select:".mysqli_error($conexion)); 
while ($reg=mysqli_fetch_array($rs))
	{
		?><h2><span>Hay un autobús en marcha a Lebrija en estos momentos</span></h2><?php
	HorarioLebrijaTrebujena();
	?>
    
    <script type="text/javascript">
    var map;
var marker;
var autobus;

function initMap() {
	
	 var myLatLng = {lat: 36.8683917, lng: -6.1761159};
	 var myLatLng2 = {lat: 36.931198  , lng: -6.066438};
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
  
  
  var image = 'icon-bus2.png';
  autobus = new google.maps.Marker({
    position: myLatLngAuto,
    map: map,
    title: 'Hello World!',
	icon: image
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
	
	$rs=mysqli_query($conn,"select * from coordenadaslebrijaTrebujena where id = $result") or
  die("Problemas en el select:".mysqli_error($conexion)); 
while ($reg=mysqli_fetch_array($rs))
	{
		?><h2><span>Hay un autobús en marcha a Trebujena en estos momentos</span></h2><?php
 HorarioTrebujenaLebrija();
	?>
    
    <script type="text/javascript">
    var map;
var marker;
var autobus;

function initMap() {
	
	 var myLatLng = {lat: 36.8683917, lng: -6.1761159};
	 var myLatLng2 = {lat: 36.931198 , lng: -6.066438};
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
  
  
   var image = 'icon-bus2.png';
  autobus = new google.maps.Marker({
    position: myLatLngAuto,
    map: map,
    title: 'Hello World!',
	icon: image
  });
  
  
}
    </script>
    
    <?php
	
	}
	
}
 
    
  ?>
    
    <div class="container">
  <!-- Trigger the modal with a button -->


<button type="button" 
 class="buton2" data-toggle="modal" data-target="#myModal"><p style="font-family:miFuente, miFuenteIE;">Horarios</p></button>






  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog" >
    <div class="modal-dialog modal-md">
    
      <!-- Modal content-->
      <div class="modal-content" style="width:350px; height: 600px; margin-left: 25%;  background-color: rgba(0, 0, 0, 0.5); border: 3px solid white;">
        <div class="modal-header">
          <button type="button" class="close" style="height:30px; top: 400px;" data-dismiss="modal">&times;</button>
          <h3 class="modal-title" style=" text-align:center; color:white;">Horarios</h3>
        </div>
        <div class="modal-body">

		<table cellspacing="5">
        <tr>
        <td>Lebrija - Trebujena</td>
        <td>Trebujena - Lebrija</td>
        </tr>
        <tr>
        <td>8:15</td>
        <td>8:30</td>
        </tr>
        <tr>
        <td>9:15</td>
        <td>9:30</td>
        </tr>
        <tr>
        <td>11:00</td>
        <td>11:15</td>
        </tr>
        <tr>
        <td>13:00</td>
        <td>13:15</td>
        </tr>
        <tr>
        <td>14:15</td>
        <td>14:30</td>
        </tr>
        <tr>
        <td>15:15</td>
        <td>15:30</td>
        </tr>
         <tr>
        <td>16:15</td>
        <td>16:30</td>
        </tr>
         <tr>
        <td>17:15</td>
        <td>17:30</td>
        </tr>
         <tr>
        <td>18:15</td>
        <td>18:30</td>
        </tr>
         <tr>
        <td>19:45</td>
        <td>20:00</td>
        </tr>
         <tr>
        <td>21:45</td>
        <td>22:00</td>
        </tr>
        </table>



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" style="height:30px; background-color:rgba(3,100,191,1.00); font-family: arial; color:white; font-size:18px; border:none;" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>



</div>
    
    <div id="map"></div>
  
    <img src="nevada.jpg" id="video_background" alt=""/>
    
    <div id="logo">
	<a href="/autobuses/index.html"><img src="buse.png" width="200px" height="64px" alt=""/></a>
</div>
    
  </body>
</html>