<!doctype html>
<html>
<head>
<script src="j_query.js"></script> 
  <script src="html2canvas.js"></script>
 <link href="https://fonts.googleapis.com/css?family=Nixie+One" rel="stylesheet">
</head>
<style>
 body
 {
  padding: 0px;
  margin: 0px;
  overflow: hidden;
  background-color: white;
 }
 table
 {
  width: 100%;
  padding: 0px;
  margin: 0px;
  border-collapse: collapse;
 }
 table td
 {
  width: 50%;
  height: 1080px;
  position: relative;
  border: 5px solid yellow;
  overflow: hidden;
 }
 table td img
	{
		width: 100%;
	}
 #t2
 {
  position: relative;
  overflow: hidden;
 }
 #t1
 {
/*  width:500px;*/
  position: relative;
  overflow: hidden;
 }
 img
 {
  transform: scale(1);
 }
 #pic1
 {
/*  filter: blur(10px) brightness(30%);*/
 }
 #pic2
 {
/*  filter: blur(2px) brightness(60%);*/
 }
 #label
 {
  position: absolute;
  color: white;
  top: 100px;
  left: -5px;
  padding: 20px;
  width: 99%;
  text-align: center;
  font-family: Mali Light;
  letter-spacing: 20px;
  font-size: 100px;
/*  border: 1px solid red;*/
  display: inline-block;
  text-shadow: 5px 5px 10px black;
  background-color: rgba(0,0,0,0.5);
  filter: sepia(200%);
 }
 #text
 {
  position: absolute;
  color: rgba(255,255,255,0.9);
  filter: brightness(150%) sepia(200%);
  font-size: 65px;
  top: 300px;
  left: 5%;
  letter-spacing: 15px;
  padding: 20px 20px 20px 50px;
/*  border: 1px solid red;*/
  border-left: 1px solid #ef4848;
  width: 85%;
  font-family: Mali Light;
/*  font-family: Bad Script;*/
  text-shadow: 5px 5px 10px black;
/*  font-family: 'Nixie One', cursive;*/
/*  text-align: center;*/
  display: inline-block;
  text-transform: capitalize;
 }
 #author
 {
  top: 600px;
  left: 5%;
  letter-spacing: 15px;
  padding: 20px 20px 20px 50px;
  width: 85%;
  font-family: Mali Light;
  text-shadow: 5px 5px 10px black;
  display: inline-block;
  text-transform: capitalize; 
  font-size: 30px;
  color: #EF4848; 
  filter: brightness(150%) sepia(200%);
  position: absolute;
  border-left: 1px solid #ef4848;
 }
 #text2
 {
  position: absolute;
  z-index: 1;
  color: white;
  font-family: 'Nixie One', cursive;
  right: 0px;
  bottom: 0px;
  font-size: 80px;
/*  border: 1px solid red;*/
  width: 30%;
  margin: 20px 10px;
  padding: 30px;
  text-shadow: 5px 5px 10px black;
  text-align: right;
  letter-spacing: 5px;
 }
 #text3
 {
  position: absolute;
  z-index: 1;
  color: white;
  font-family: poiret one;
  font-size: 35px;
  letter-spacing: 5px;
  bottom: 0px;
  margin: 5px;
  left: 0px;
 }
  #sliders
 {
  position: absolute;
  z-index: 100;
  top: 0px;
  z-index: 100;
  font-size: 30px;
  color: white;
  font-family: poiret one;
  padding: 20px;
  border: 1px solid red;
  right: 0px;
  background-color: rgba(0,0,0,0.5);
  text-shadow: 5px 5px 10px black;
 }
 </style> 
 
 <body>
  <div id="sliders">
   Quote: <textarea row='50' col='100' id="quote" onfocusout="set_quote(this)"></textarea> 
   Adjust: <input type="range" min="1" max="2000" value="25"  oninput="adjust_text(this)">
   Font Size: <input type="range" min="1" max="120" value="65" oninput="adjust_textfont(this)" width="200px">
   <br><br><br>
   
   HEDAER: <textarea row='50' col='100' id="header" onfocusout="set_header(this)"></textarea> 
   Adjust: <input type="range" min="1" max="2000" value="5" oninput="adjust_header(this)">
   Font Size: <input type="range" min="1" max="100" value="80" oninput="adjust_headerfontsize(this)">
   <br><br><br>
   Side Text: <textarea row='50' col='100' id="side_text" onfocusout="set_sidetext(this)"></textarea>
   Side Text Y: <input type="range" min="0" max="50" value="0"  oninput="adjust_sidetextX(this)">   
   Side Text X: <input type="range" min="0" max="500" value="0" oninput="adjust_sidetextY(this)">   
   Side Font Size: <input type="range" min="1" max="120" value="80" oninput="adjust_sidefont(this)">
   <br><br><br>
   AUTHOR: <textarea row='50' col='100' id="side_text" onfocusout="set_author(this)"></textarea>
   Adjust: <input type="range" min="1" max="2000" value="60" oninput="adjust_author(this)">
   <br><br> 
   File: <input type="file" id="choose_img" onchange="set_image(this)"> <br><br>
   Adjust Image X <input type="range" min="-500" max="500" value="0" oninput="adjust_image(this)">
   Adjust Image X <input type="range" min="-500" max="500" value="0" oninput="adjust_image_Y(this)">
   Zoom Image <input type="range" min="1" max="4" value="1" oninput="zoom_image(this)" step="0.1">
   <button onclick='reset_image()'>RESET</button><br><br>
   Side by Side <input type="range" min="0" max="100" value="50" oninput="sidebyside(this)">
   
   
   
   <button id="done" onclick="done()">Done</button>
  </div>
  
  <table onClick="show()">
   <tr>
    <td id="t1">
     <img id="pic1" src="pic1.jpg">
     <h1 id='label'>LIFESTYLE</h1>
     <p id='text'>TRAIN YOURSELF TO TAKE NOTHING PERSONALLY</p>
     <p id="author">Author</p>
    </td>
    <td id="t2"><img id='pic2' src="pic1.jpg"></td>
    <h1 id="text2">BE YOUR OWN BOSS</h1>
    <p id="text3">@ArsalaKhan</p>
   </tr>
  </table>
  
<script>
window.onload = load_from_cache();
function show()
	{
		getId("sliders").style.display = "block";
	}
function sidebyside(text)
	{
		document.getElementsByTagName("td")[0].style.width = text.value+"%";
		document.getElementsByTagName("td")[1].style.width = text.value+"%";
	}
function load_from_cache()
	{
	var ajax = ajaxObj("POST", "save.php");		
    ajax.onreadystatechange = function()
		{
			if(ajaxReturn(ajax) == true)
				{
				 var data = ajax.responseText.split("|");
				 getId("author").style.top = data[0];
				 getId("author").style.fontSize = data[1];
				 getId("text2").style.fontSize = data[2];
				 getId("text2").style.right = data[3];
				 getId("text2").style.bottom = data[4];
				 getId("label").style.fontSize = data[5];
				 getId("text").style.fontSize = data[6];
				 getId("label").style.top = data[7];
				 getId("text").style.top = data[8];
				 getId("author").innerHTML = data[9];
				 getId("text").innerHTML = data[10];
				 getId("label").innerHTML = data[11];
				 getId("text2").innerHTML = data[12];
//				 getId("pic1").style.transform = data[13];
//				 getId("pic2").style.transform = data[13];
				}
		}
	ajax.send("load=null");	
	}
 function done()
 {
  var auth_top = window.getComputedStyle(getId("author")).top;
  var auth_font = window.getComputedStyle(getId("author")).fontSize;
  var sidefont = window.getComputedStyle(getId("text2")).fontSize;
  var sidetextY = window.getComputedStyle(getId("text2")).right;
  var sidetextX = window.getComputedStyle(getId("text2")).bottom;
  var header_font = window.getComputedStyle(getId("label")).fontSize;
  var text_font = window.getComputedStyle(getId("text")).fontSize;
  var header_Y = window.getComputedStyle(getId("label")).top;
  var text_Y = window.getComputedStyle(getId("text")).top;
  var set_auth = getId("author").innerHTML;
  var set_quote = getId("text").innerHTML;
  var set_header = getId("label").innerHTML;
  var set_side_text = getId("text2").innerHTML;
  var img = window.getComputedStyle(getId("pic1")).transform;
 	save(auth_top, auth_font, sidefont, sidetextY, sidetextX, header_font, text_font, header_Y, text_Y, set_auth, set_quote, set_header, set_side_text, img);
 }
 function save(auth_top, auth_font,sidefont, sidetextY, sidetextX, header_font, text_font, header_Y, text_Y, set_auth, set_quote, set_header, set_side_text, img)
 {
  var ajax = ajaxObj("POST", "save.php");		
    ajax.onreadystatechange = function()
		{
			if(ajaxReturn(ajax) == true)
				{
					getId("sliders").style.display = "none";
				}
		}
	ajax.send("auth_t="+auth_top+"&auth_f="+auth_font+"&sidefont="+sidefont+"&sideY="+sidetextY+"&sideX="+sidetextX+"&head_f="+header_font+"&text_f="+text_font+"&header_Y="+header_Y+"&text_Y="+text_Y+"&set_auth="+set_auth+"&set_quote="+set_quote+"&set_header="+set_header+"&set_sidetext="+set_side_text+"&image="+img);		
  
 }
  function adjust_author(text)
 {
  document.getElementById("author").style.top = text.value+"px";
 }
 function adjust_sidefont(text)
 {
  document.getElementById("text2").style.fontSize = text.value+"px";
 }
 function adjust_sidetextY(text)
 {
  document.getElementById("text2").style.right = text.value+"px";
 }
 function adjust_sidetextX(text)
 {
  document.getElementById("text2").style.bottom = text.value+"%";
 }

 function adjust_headerfontsize(text)
 {
  document.getElementById("label").style.fontSize = text.value+"px";
 }
 function adjust_textfont(text)
 {
  document.getElementById("text").style.fontSize = text.value+"px";
 }
 
 function adjust_header(text)
 {
  document.getElementById("label").style.top = text.value+"px";
 }
 function adjust_text(text)
 {
  document.getElementById("text").style.top = text.value+"px";
 }
  function set_author(text)
 {
  document.getElementById("author").innerHTML = text.value;
 }
 function set_quote(text)
 {
  document.getElementById("text").innerHTML = text.value;
 }
 function set_header(text)
 {
  document.getElementById("label").innerHTML = text.value;
 }
 function set_sidetext(text)
 {
  document.getElementById("text2").innerHTML = text.value;
 }
 function set_image(text)
 {
  var file = document.getElementById('choose_img').files[0];
  var reader = new FileReader();
  reader.onload = function(e)
  {
   document.getElementById("pic1").src = e.target.result;
   document.getElementById("pic2").src = e.target.result;
  }
  reader.readAsDataURL(file);  
	 
// alert(getId("pic1").src);
 }
 function reset_image()
 {
  document.getElementById("pic1").style.transform = "matrix(1,0,0,1,0,0)";
  document.getElementById("pic2").style.transform = "matrix(1,0,0,1,0,0)";
 }
function adjust_image_Y(text)
	{
		getId("pic1").style.marginTop = text.value + "px";
		getId("pic2").style.marginTop = text.value + "px";
  
	}
 function adjust_image(text)
 {
	 	getId("pic1").style.marginLeft = text.value + "px";
		getId("pic2").style.marginLeft = text.value + "px";
}
 function zoom_image(text)
 {
	getId("pic1").style.transform = "scale("+text.value+")";
	getId("pic2").style.transform = "scale("+text.value+")";
//  var t1 = document.getElementById('pic1');
//  var t2 = document.getElementById('pic2');
//  var zoom1 = window.getComputedStyle(t1).transform;
//  var zoom2 = window.getComputedStyle(t2).transform;
//
//  var translatex = zoom1.split(",");
//  x = translatex[4];
//  t1.style.transform = "matrix("+text.value+",0,0,"+text.value+","+x+",0)";
//
//  var translatex = zoom2.split(",");
//  x = translatex[4];
//  t2.style.transform = "matrix("+text.value+",0,0,"+text.value+","+x+",0)";
 }

 function ajaxObj( meth, url ) {
	var x = new XMLHttpRequest();
	x.open( meth, url, true );
	x.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	return x;
}
function ajaxReturn(x){
	if(x.readyState == 4 && x.status == 200){
	    return true;	
	}
}

function getId(thisId)
{
 return document.getElementById(thisId);
}

</script>
 </body>
</html>


















