function loadTokenShop() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("changediv").innerHTML =
    this.responseText;
  }
  xhttp.open("GET", "content/tokeny.php", true);
  xhttp.send();
}

function loadRankShop() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("changediv").innerHTML =
    this.responseText;
  }
  xhttp.open("GET", "content/rangi.php", true);
  xhttp.send();
}

$(document).ready(function(){
	$("#vouchery").click(function(){
		$("#changediv").load("content/vouchery.php");
	});
});
