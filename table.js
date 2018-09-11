
function loadAcc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementsByClassName("pac")[0].innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "mac.php", true);
  xhttp.send();
}



function loadTable() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementsByClassName("table")[0].innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "table.php", true);
  xhttp.send();
}

