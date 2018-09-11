function acc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementsByClassName("pac")[0].innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "mac.php", true);
  xhttp.send();
}
