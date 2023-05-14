// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


function sms(cena, numer, id) {
	document.getElementById("navi" + id).className = "animation sms";
	if(cena == 0) {
		document.getElementById("paypal_form" + id).action = "https://www.bluemc.pl/sklep/content/microsms/kodsms.php";
		document.getElementById("info" + id).innerHTML = "<br><br><b><font style='color: #FF6666'>Opcja płatności SMS nie jest dostępna dla tego przedmiotu.</font></b>";
		document.getElementById("koszt" + id).innerHTML = '';
		document.getElementById("kod" + id).style.display = 'none';
		document.getElementById("nick" + id).style.display = 'none';
		document.getElementById("email" + id).style.display = 'none';
		document.getElementById("mvipp" + id).innerHTML = "";
		document.getElementById("submit" + id).style.display = 'none';
		document.getElementById("timer" + id).innerHTML = "";
		document.getElementById("promocode" + id).style.display = 'none';
	} else {
		document.getElementById("paypal_form" + id).action = "https://www.bluemc.pl/sklep/content/microsms/kodsms.php";
		document.getElementById("info" + id).innerHTML = "<br>SMS o treści <b>MSMS.BMC</b> na numer <b>" + numer;
		document.getElementById("koszt" + id).innerHTML = 'Koszt: <b>' + cena + 'zł</b>';
		document.getElementById("kod" + id).style.display = "inline-block";
		document.getElementById("nick" + id).style.display = "inline-block";
		document.getElementById("email" + id).style.display = 'none';
		document.getElementById("mvipp" + id).innerHTML = "";
		document.getElementById("submit" + id).style.display = "inline-block";
		document.getElementById("timer" + id).innerHTML = '<font style="color: white; font-size: 13px;"><font style="font-size: 10px">Zakup realizowany jest maksymalnie w przeciągu <b>10 minut</b> od momentu płatności.</font>';
		document.getElementById("promocode" + id).style.display = 'none';
	}
}

function przelew(cena, id) {
	if(id==5 || id==6){
		document.getElementById("paypal_form" + id).action = "https://www.bluemc.pl/sklep/content/microsms/przelew.php";
		document.getElementById("navi" + id).className = "animation paypal";
		document.getElementById("info" + id).innerHTML = "<br>Zapłać poprzez <b>Szybki Przelew</b> lub <b>BLIK</b>.";
		document.getElementById("koszt" + id).innerHTML = 'Koszt: <b>' + cena +'zł</b>';
		document.getElementById("kod" + id).style.display = 'none';
		document.getElementById("email" + id).style.display = "inline-block";
		document.getElementById("nick" + id).style.display = "inline-block";
		document.getElementById("mvipp" + id).innerHTML = "<br><font style='color: #FF6666;'><b>Pamiętaj, ranga MegaVIP+ działa jedynie podczas aktywnej rangi MegaVIP.<br>Jeżeli nie posiadasz rangi MegaVIP, ranga MegaVIP+ nie będzie działać.</b></font><br><input type='checkbox' required> <font style='color: white'>Potwierdzam, że posiadam aktywną rangę MegaVIP.</font></input><br>";
		document.getElementById("submit" + id).style.display = "inline-block";
		document.getElementById("timer" + id).innerHTML = '<font style="color: white; font-size: 13px;"><font style="font-size: 10px">Zakup realizowany jest maksymalnie w przeciągu <b>10 minut</b> od momentu płatności.</font>';
		document.getElementById("promocode" + id).style.display = "inline-block";
	} else{
		if(cena >= 1) {
			document.getElementById("paypal_form" + id).action = "https://www.bluemc.pl/sklep/content/microsms/przelew.php";
			document.getElementById("navi" + id).className = "animation paypal";
			document.getElementById("info" + id).innerHTML = "<br>Zapłać poprzez <b>Szybki Przelew</b> lub <b>BLIK</b>.";
			document.getElementById("koszt" + id).innerHTML = 'Koszt: <b>' + cena +'zł</b>';
			document.getElementById("kod" + id).style.display = 'none';
			document.getElementById("email" + id).style.display = "inline-block";
			document.getElementById("nick" + id).style.display = "inline-block";
			document.getElementById("mvipp" + id).innerHTML = "";
			document.getElementById("submit" + id).style.display = "inline-block";
			document.getElementById("timer" + id).innerHTML = '<font style="color: white; font-size: 13px;"><font style="font-size: 10px">Zakup realizowany jest maksymalnie w przeciągu <b>10 minut</b> od momentu płatności.</font>';
			document.getElementById("promocode" + id).style.display = "inline-block";
		} else {
			document.getElementById("paypal_form" + id).action = "https://www.bluemc.pl/sklep.new/content/microsms/przelew.php";
			document.getElementById("navi" + id).className = "animation paypal";
			document.getElementById("info" + id).innerHTML = "<br><br><b><font style='color: #FF6666'>Opcja płatności PayPal nie jest dostępna dla tego przedmiotu.</font></b>";
			document.getElementById("koszt" + id).innerHTML = '';
			document.getElementById("kod" + id).style.display = 'none';
			document.getElementById("email" + id).style.display = "inline-block";
			document.getElementById("nick" + id).style.display = "none";
			document.getElementById("mvipp" + id).innerHTML = "";
			document.getElementById("submit" + id).style.display = "none";
			document.getElementById("timer" + id).innerHTML = "";
		}
	}
}

function paypal(cena, id) {
	if(id==5 || id==6){
		document.getElementById("paypal_form" + id).action = "https://www.bluemc.pl/sklep/content/paypal/index.php";
		document.getElementById("navi" + id).className = "animation paypal";
		document.getElementById("info" + id).innerHTML = "<br>Zapłać poprzez <b>PayPal</b>.";
		document.getElementById("koszt" + id).innerHTML = 'Koszt: <b>' + cena +'zł</b>';
		document.getElementById("kod" + id).style.display = 'none';
		document.getElementById("email" + id).style.display = 'none';
		document.getElementById("nick" + id).style.display = "inline-block";
		document.getElementById("mvipp" + id).innerHTML = "<br><font style='color: #FF6666;'><b>Pamiętaj, ranga MegaVIP+ działa jedynie podczas aktywnej rangi MegaVIP.<br>Jeżeli nie posiadasz rangi MegaVIP, ranga MegaVIP+ nie będzie działać.</b></font><br><input type='checkbox' required> <font style='color: white'>Potwierdzam, że posiadam aktywną rangę MegaVIP.</font></input><br>";
		document.getElementById("submit" + id).style.display = "inline-block";
		document.getElementById("timer" + id).innerHTML = '<font style="color: white; font-size: 13px;"><font style="font-size: 10px">Zakup realizowany jest maksymalnie w przeciągu <b>10 minut</b> od momentu płatności.</font>';
		document.getElementById("promocode" + id).style.display = 'inline-block';
	} else{
		if(cena >= 1) {
			document.getElementById("paypal_form" + id).action = "https://www.bluemc.pl/sklep/content/paypal/index.php";
			document.getElementById("navi" + id).className = "animation paypal";
			document.getElementById("info" + id).innerHTML = "<br>Zapłać poprzez <b>PayPal</b>.";
			document.getElementById("koszt" + id).innerHTML = 'Koszt: <b>' + cena +'zł</b>';
			document.getElementById("kod" + id).style.display = 'none';
			document.getElementById("nick" + id).style.display = "inline-block";
			document.getElementById("email" + id).style.display = 'none';
			document.getElementById("mvipp" + id).innerHTML = "";
			document.getElementById("submit" + id).style.display = "inline-block";
			document.getElementById("timer" + id).innerHTML = '<font style="color: white; font-size: 13px;"><font style="font-size: 10px">Zakup realizowany jest maksymalnie w przeciągu <b>10 minut</b> od momentu płatności.</font>';
			document.getElementById("promocode" + id).style.display = 'inline-block';
		} else {
			document.getElementById("paypal_form" + id).action = "https://www.bluemc.pl/sklep/content/paypal/index.php";
			document.getElementById("navi" + id).className = "animation paypal";
			document.getElementById("info" + id).innerHTML = "<br><br><b><font style='color: #FF6666'>Opcja płatności PayPal nie jest dostępna dla tego przedmiotu.</font></b>";
			document.getElementById("koszt" + id).innerHTML = '';
			document.getElementById("kod" + id).style.display = 'none';
			document.getElementById("email" + id).style.display = 'none';
			document.getElementById("nick" + id).style.display = "none";
			document.getElementById("mvipp" + id).innerHTML = "";
			document.getElementById("submit" + id).style.display = "none";
			document.getElementById("timer" + id).innerHTML = "";
		}
	}
}