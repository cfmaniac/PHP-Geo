// Geolocation detection with JavaScript, HTML5 and PHP
// Author: J Harvey


// this is called when the browser has shown support of navigator.geolocation
function NearByGEOprocess(position) {
	// update the page to show we have the lat and long and explain what we do next
  //document.getElementById('geo').innerHTML = '';
	// now we send this data to the php script behind the scenes with the NearByGEOajax function
	NearByGEOajax("geo/getnearby.php?lat=" + position.coords.latitude + "&long=" + position.coords.longitude +"");
}

// this is used when the visitor bottles it and hits the "Don't Share" option
function NearByGEOdeclined(error) {
  document.getElementById('city_change').innerHTML = '<option>Error: ' + error.message + '</option>';
}

if (navigator.geolocation) {
	navigator.geolocation.getCurrentPosition(NearByGEOprocess, NearByGEOdeclined);
}else{
  document.getElementById('city_change').innerHTML = '<option value="">No Results</option>';
}

// this checks if the browser supports XML HTTP Requests and if so which method
if (window.XMLHttpRequest) {
 xmlHttp2 = new XMLHttpRequest();
}else if(window.ActiveXObject){
 xmlHttp2 = new ActiveXObject("Microsoft.XMLHTTP");
}

// this calls the php script with the data we have collected from the geolocation lookup
function NearByGEOajax(url) {
 xmlHttp2.open("GET", url, true);
 xmlHttp2.onreadystatechange = NearByupdatePage;
 xmlHttp2.send(null);
}

// this reads the response from the php script and updates the page with it's output
function NearByupdatePage() {
 if (xmlHttp2.readyState == 4) {
  var response = xmlHttp2.responseText;
  document.getElementById("city_change").innerHTML = response;
 }
}
