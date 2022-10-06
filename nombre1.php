<!DOCTYPE html>
<html>
<head>
	<link REL="SHORTCUT ICON" HREF="http://proyecto/imagenes/logo.ico">
	<title>Happy New Year</title>
</head>

<link rel="stylesheet" type="text/css" href="css/estilo.css">
<link rel="stylesheet" type="text/css" href="css/new.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<body >

<marquee class="m1" behavior="scroll" direction="down" scrolldelay="5"> <br>
<img src="123.png" height="129px" width="35px"><br>
<img src="123.png" height="129px" width="35px"><br>
<img src="123.png" height="129px" width="35px"><br>
<img src="123.png" height="129px" width="35px"><br>
<img src="123.png" height="129px" width="35px"><br>
<img src="123.png" height="129px" width="35px"><br>
<img src="123.png" height="129px" width="35px"><br>
<img src="123.png" height="129px" width="35px"><br>
<img src="123.png" height="129px" width="35px"><br>
<img src="123.png" height="129px" width="35px"><br>
<img src="123.png" height="129px" width="35px"><br>
<img src="123.png" height="129px" width="35px"><br>
<img src="123.png" height="129px" width="35px"><br>
<img src="123.png" height="129px" width="35px"><br>
<img src="123.png" height="129px" width="35px"><br>
<img src="123.png" height="129px" width="35px"><br>
<img src="123.png" height="129px" width="35px"><br>
<img src="123.png" height="129px" width="35px"><br>
<img src="123.png" height="129px" width="35px"><br>
</marquee>
<marquee class="m2" behavior="scroll" direction="down" scrolldelay="5"><br>
<img src="123.png" height="129px" width="35px"><br>
<img src="123.png" height="129px" width="35px"><br>
<img src="123.png" height="129px" width="35px"><br>
<img src="123.png" height="129px" width="35px"><br>
<img src="123.png" height="129px" width="35px"><br>
<img src="123.png" height="129px" width="35px"><br>
<img src="123.png" height="129px" width="35px"><br>
<img src="123.png" height="129px" width="35px"><br>
<img src="123.png" height="129px" width="35px"><br>
<img src="123.png" height="129px" width="35px"><br>
<img src="123.png" height="129px" width="35px"><br>
<img src="123.png" height="129px" width="35px"><br>
<img src="123.png" height="129px" width="35px"><br>
<img src="123.png" height="129px" width="35px"><br>
<img src="123.png" height="129px" width="35px"><br>
<img src="123.png" height="129px" width="35px"><br>
<img src="123.png" height="129px" width="35px"><br>
<img src="123.png" height="129px" width="35px"><br>
<img src="123.png" height="129px" width="35px"><br>
</marquee>
<table width="1000px" height="650px" border="0" class="borde_tabla_1" align="center" background="back2.jpg" style="background-size: 1000px 650px;">
<tr><td align="center" valign="top" height="10px" colspan="2"><center><p id="demo" style="color:white; text-shadow:#e25517 1px 4px 3px; font-size:16px;"><i> </i>  <i></i> <i></i> <i>  </i></p></center></td></tr>
<tr valign="middle" height="60px"><td colspan="2"><center>
 <h2> <img class="img-responsive" src="logo.webp" width="500px"/></h2>
</center></td>

</tr>
<tr><td colspan="2" valign="top" align="center">env&iacute;a sus mejores deseos a ti, <?php echo $_POST["n"]; ?> , para que este nuevo a&ntilde;o <br><br>
<img class="center swing" src="2.png" width="50px" height="80px" alt="Happy New Year greating wishes">
<img class="center swing1" src="0.png" width="50px" height="80px" alt="Happy New Year greating wishes">
<img class="center swing2" src="1.png" width="50px" height="80px" alt="Happy New Year greating wishes">
<img class="center swing3" src="8.png" width="50px" height="80px" alt="Happy New Year greating wishes"> 
<br><br>est&eacute; lleno de felicidad, prosperidad y alegr&iacute;a para ti y toda tu familia.
</td></tr>
<tr><td colspan="2" align="center"  >
<span class="derechos">Cordialmente, Margarita Mart&iacute;nez</span></td></tr>

</table>
</body>
<audio src="audio.mp3" loop autoplay>
<script>
// Set the date we're counting down to
var countDownDate = new Date("Jan 01, 2018 00:00:00").getTime();

// Update the count down every 01 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "<i> Dias,</i> " + hours + " <i>Hrs,</i> "
  + minutes + "<i> Mins,</i> " + seconds + "<i> Segs</i> para A&#241;o Nuevo  ";

  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
</html>
