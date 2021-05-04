
<!DOCTYPE html>
<?php

error_reporting(0);
?>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Página Principal | YouTube</title>
	  <link rel="stylesheet" href="./css/social.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Indie+Flower|Pacifico&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="css/custom.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Zeyada&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/6dcd1e8fc1.js" crossorigin="anonymous"></script>
	<script>
function getCookie2(cname) {
  var name = cname + "=";
  var ca = document.cookie.split(';');
  for(var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

checkcookie= getCookie2("colorT");
var amountNumber=getCookie2("qty");
var pgNum = getCookie2("page");
if(pgNum<1){
    pgNum=1;

}
if(amountNumber <0){
    amountNumber=10;


}

if(checkcookie =="dark")
{
         var head = document.getElementsByTagName('HEAD')[0];

        // Create new link Element
        var link = document.createElement('link');

        // set the attributes for link element
        link.rel = 'stylesheet';

        link.type = 'text/css';

        link.href = './css/estilos_dark.css';

        // Append link element to HTML head
        head.appendChild(link);


}
else
{
         var head = document.getElementsByTagName('HEAD')[0];

        // Create new link Element
        var link = document.createElement('link');

        // set the attributes for link element
        link.rel = 'stylesheet';

        link.type = 'text/css';

     link.href = './css/estilos.css';

        // Append link element to HTML head
        head.appendChild(link);

}







</script>



<script>



</script>


<style>

.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  top:0;
  left:0;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #3e8e41;
}

#myInput {
  box-sizing: border-box;
  background-image: url('searchicon.png');
  background-position: 14px 12px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: none;
  border-bottom: 1px solid #ddd;
}

#myInput:focus {outline: 3px solid #ddd;}

.dropdown {
      top:0;
  left:0;
  position: relative;
  display:block;
}

.dropdown-content {
      top:0;
  left:65px;
  width: 60%;
  height: auto; 
  
  display: none;
  position: absolute;

  min-width: 230px;
  overflow: auto;
  border: 1px solid #ddd;
  z-index: 1;
}

.dropdown-content a {
      top:0;
  left:0;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: inline;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}

    .switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}


.subtitle{
 font-family: 'Pacifico', cursive;
    text-align:center;
  //    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.12), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        padding: 10px;

}
input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
img{
      opacity: 1.5;
         width:80%;height:auto;
         margin-left: auto;
             margin-right: auto;
 

}
img:hover {
      opacity: .5;
   filter: grayscale(100%);
         margin-left: auto;
             margin-right: auto;
  box-shadow: 5px 10px #888888;
 filter: blur(2px);
  -webkit-filter: blur(2px);
}
.menuFinal{
    grid-area: menu;
    display:block;
    justify-content:space-between;
    list-style:none;
    text-transform: capitalize;;
    width:25%;


}
.li2{
    backround-color:#999;
    padding:15px;
    text-align:left;
 border-radius: 15px;

}
.a2{
 font-family: 'Pacifico', cursive;

    text-decoration:none;
    color:#000;
}
a{
    
    color:#00308F;
}
a.hover{


}
.sp2{
overflow:hidden; white-space:nowrap;

}
.hideme{
	display:none;
	
}
</style>
</head>
<body onload="checkcolor3();" id="bdy1">
<!-- <i class="fas fa-download"></i> //-->


<script>
// Set the date we're counting down to
var countDownDate = new Date("June 20, 2021 15:37:25").getTime();
function hideintro(){
	
	document.getElementById("countdown").style.display="none"; 
	document.getElementById("contenedor").style.display="grid"; 
	
}
// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));


  // Display the result in the element with id="demo"

document.getElementById("countdown").innerHTML = "Conteo del Ómer Día #" +(50-days) +" <br> Semana # "+ Math.ceil(((50-days)/7)) +" <br><a onclick='hideintro()' style='font-size:20px' class='button'>Close</a> " ;
  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    
  }
}, 1000);
</script>
<div id='countdown' style="font-size:50px;align-content:center;text-align:center;border-radius: 34px;box-shadow: 10px 10px 8px #888888;background-color:white;align-items:center;  position: absolute;
  top: 50%;left: 50%;transform: translate(-50%, -50%);text-align: center;width:50%;height:40%;background-image:url('wheat.jpg');background-attachment: fixed;background-position:cover;color:white;text-shadow: 2px 2px 4px #000000;  background-repeat: no-repeat, no-repeat; background-position: center;"> </div>

<!--url('wheat.jpg') //-->
	<div class="contenedor active " id="contenedor" style="visible:hidden">
		<header class="header" id="navbar">
			<div class="contenedor-logo" style=" transition: top 0.3s; width:100%; align-items: center;align-content: center;" >
			    	<a href="#" class="logo"></a><span class='logo' id="intros" style="color:red">2021</span>
				<button id="boton-menu" class="boton-menu" onclick="showhide()"><i class="fas fa-bars"></i></button>
			<a style="align:right;" href="#" onclick="hideNail();" ><i   style='color:gold' class="fas fa-adjust"></i></a>
				<label class="switch"> 
				
<div class="theme-switch-wrapper"  >
    <label class="theme-switch" for="checkbox">
        <input type="checkbox" id="checkbox"  onclick="changeMode();"/>
        <div class="slider round"></div>
  </label>

</div>
<script>
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-50px";
  }
  prevScrollpos = currentScrollPos;
}
</script>

<script>

var contenedor = document.querySelector('#contenedor');
	contenedor.classList.remove('active');
var videostuff = document.getElementById("id01");
function changeDisplay(){
		if (document.getElementById("id01").style.display === 'block') { 
 // document.getElementById("id01").style.display ="inline"; 

}
else{
//	document.getElementById("id01").style.display ="block";
}
	
}
function hideNail(){
	// alert("within function");
	


var images = document.getElementsByTagName('img');
for (i = 0; i < images.length;i++ ) {
	if(images[i].style.display=="none"){
		images[i].style.display = "block";
		images[i].style.width="80%";
		images[i].style.height="auto"; 
		
	  // width:80%;height:auto;
		
	}
	else{
	images[i].style.display = "none";	
	
	}
    
}
changeDisplay(); 
	 
 }
 function showhide()
{
   var div = document.getElementById("menu2");



if (div.style.display !== "none") {

div.style.display = "none";
	contenedor.classList.remove('active');

}

else {

div.style.display = "block";

		contenedor.classList.add('active');
videostuff.style.width="auto%"; 
videostuff.style.float="right"; 
videostuff.style.display="none"; 

		}

 }

function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i <ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function changeMode(){
 // window.alert("has been clicked")
   getcookie=getCookie("colorT");
   if(getcookie==="dark"){
       document.cookie = "colorT=white";


     $("body").fadeOut();
       location.reload();
   }
   else
   {
           document.cookie = "colorT=dark";
           $("body").fadeOut();
       location.reload();
   }





}
 function save_pgNum(numes){
     document.cookie = "page" + numes;

     location.reload();


 }

function set_cookie(series){


    document.cookie = "series=" + series ;

   location.reload();
}

</script>


			</div>
	<form method="post" name="search" action="./findme.php" >
	
		<div class="barra-busqueda">
				<input type="text" placeholder="Buscar" name="buscar">
				<button type="submit" onclick='myFunction();'><i class="fas fa-search"></i></button>
			</div>
			</form> 
<!--
			<div class="botones-header">
				<button><i class="fas fa-upload"></i></button>
				<button><i class="fas fa-th"></i></button>
				<button><i class="fas fa-bell"></i></button>

			</div>
		//-->


		</header>

<script>
function myFunction() {
  document.getElementById("search").submit();
}
</script>


		<nav class="menu-lateral" id="menu2" style="overflow:hidden;display:none;font-size:12px;">

	<?php
	include("buttons2.html");
	?>

		</nav>


		<main class="main">

			<div class="grid-videos" id="id01" style="width:100%;height:auto;align-items: center; justify-content: center;left:50%;right:50%">
<?php

function displayList () {
include("data.inc");

$list_mp3 = preg_split("[,]",$mp3_link); 
$list_titles = preg_split("[,]",$titles); 
$list_youtube= preg_split("[,]",$youtube_links);
$list_mega = preg_split("[,]",$mega_links);
$own_server=preg_split("[,]",$my_links);



//echo "<br>Number of titles " . count($list_mega); 
$tempId= $_GET['id']; 
$testTotal = count($list_titles)/12; 
if($tempId>0){
if($tempId<$testTotal){
	
	
}	
else{
	$tempId=0; 
	
}
}
else{
$tempId=0;

}
$ends = ($tempId+1)*12; 
$starts = $ends-12; 

$i=$starts;
while($i <$ends ){
//	echo $i ."= <a href=".$list_mega[$i].">" . $list_titles[$i]. "</a><br>";
	
if($i<count($list_titles)){
	$youid = parse_url($list_youtube[$i]); 
	//echo ($youid['path'	]); 
$secondid= preg_split("[=]" ,$youid["query"]);

$finapart = preg_split("[&]",$secondid[1]);

 echo "<div class='grid-item' ><center>
 <div style='text-size-adjust: 80%; width:auto; height:30px'> ";
 echo " ".$list_titles[$i]. "</font></div>"; 
 
 echo "<br>"; 
 
 echo "<a href=". $list_youtube[$i].">";
 echo "<img src='https://i.ytimg.com/vi/".$finapart[0]."/hqdefault.jpg' style='border-radius: 25px;'></img></a><br>";
 echo "<a class='button' stype='' href=". $list_mp3[$i].">Descarga de Audio </a>";
 echo "<a class='button' href=". $list_mega[$i].">Descarga de Video </a>";


if($own_server[$i] !=""){
	echo " <br><i style='color:green;float:center;font-size:20px;'class='fas fa-arrow-circle-down'></i>";
		echo " <i style='color:green;float:center;font-size:20px;' class='fas fa-share'></i>";
}
 echo "</center></div>";
	}
	else{
	}
	
	// $parsed_url['fragment'] : '';
	$i++; 
}
$qty =12; 
$p=0; 
$id = $_GET['id'];
$pg = count($list_titles)/12; 



echo "</div></div>";

echo "</div></main></div><center><div class='bottomPG'><span></span>";
//echo "<div class='dropdown'><button onMouseOver='myFunction2()'class='dropbtn'>#</button>";
//echo "<div id='myDropdown' class='dropdown-content'>"; 
$pgnumbers= array(1,2,3,4,5,6,7,9,10,11,12);


$s= $_GET['series'];
if(!isset($s)){
$s=-1; 
}  


$saved_id=$_GET['id'];
if(!isset($saved_id)){
$saved_id=-1; 
}
else{

}
while($p < $pg){
if($saved_id==$p){

}else {
if($s ==-1){
	
	$Hname= $_SERVER['SERVER_NAME'];
echo "<a class='button' style='background-color:green;color:white;padding-left:20px;padding-right:20px;' href='";

echo "./index.php?id=". $p ." '>".$pgnumbers[$p]."</a>";
}else {
	

echo "<a class='button' style='background-color:green;color:white;padding-left:20px;padding-right:20px;' href='./index.php?id=". $p ."&series=".$s."'>".$pgnumbers[$p]."</a>";
}
 }

$p++; 
}
//echo "</div></div>"; 
echo "</div></center>";
}
displayList();




?>


	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>


	    <script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("menu2");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>


	</script>


<script>
function myFunction2() {
  document.getElementById("myDropdown").classList.toggle("show");
}
</script>


<?php
echo $_SERVER['SERVER_NAME'];
?> 
	
  </div>
  
  </body>
  
  
  
  
</html>
