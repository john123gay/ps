function loadMission() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("mission").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "mission.txt", true);
  xhttp.send();
}
function loadContact() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("contact").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "contact.txt", true);
  xhttp.send();
}
function loadAbout() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("about").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "about.txt", true);
  xhttp.send();
}
function loadTeam() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("team").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "team.txt", true);
  xhttp.send();
}

function start() {
  loadMission();
  loadAbout();
  loadContact();
  loadTeam();
}
//window.onload = start;
