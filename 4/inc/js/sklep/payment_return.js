function move() {
  var elem = document.getElementById("myBar");   
  var width = 10;
  var id = setInterval(frame, 10);
  function frame() {
    if (width >= 100) {
      clearInterval(id);
	  set();
    } else {
      width++; 
      elem.style.width = width + '%'; 
      elem.innerHTML = width * 1  + '%';
    }
  }
}

function movex() {
  var elem = document.getElementById("myBar");   
  var width = 10;
  var id = setInterval(frame, 10);
  function frame() {
    if (width >= 100) {
      clearInterval(id);
	  setx();
    } else {
      width++; 
      elem.style.width = width + '%'; 
      elem.innerHTML = width * 1  + '%';
    }
  }
}

function set() {
  document.getElementById("return").innerHTML = "<font style='color: green;'>Zakup został pomyślnie zrealizowany.</font><br>Dziękujemy za dokonanie zakupu i życzymy miłej gry.";
  document.getElementById("myBar").style.backgroundColor = "#33CC66";
  document.getElementById("return").style.display = "none";
  document.getElementById("return_cancelled").style.display = "block";
}

function setx() {
  document.getElementById("return").style.display = "none";
  document.getElementById("return_cancelled").style.display = "block";
  document.getElementById("myBar").style.backgroundColor = "#FF3366";
}