var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        myFunction(this);
        myFunction1(this);
        myFunction2(this);
        myFunction3(this);
    }
};
xhttp.open("POST", "home.xml", true);
xhttp.send();

function myFunction(xml) {
    var xmlDoc = xml.responseXML;
    var x = xmlDoc.getElementsByTagName("about");
    document.getElementById("about").innerHTML =
    x[0].childNodes[0].nodeValue;
}
function myFunction1(xml) {
    var xmlDoc = xml.responseXML;
    var y = xmlDoc.getElementsByTagName("mission");
    document.getElementById("mission").innerHTML =
    y[0].childNodes[0].nodeValue;
}
function myFunction2(xml) {
    var xmlDoc = xml.responseXML;
    var z = xmlDoc.getElementsByTagName("contact");
    document.getElementById("contact").innerHTML =
    z[0].childNodes[0].nodeValue;
}
function myFunction3(xml) {
    var xmlDoc = xml.responseXML;
    var q = xmlDoc.getElementsByTagName("picture");
    document.getElementById("picture").innerHTML =
    q[0].childNodes[0].nodeValue;
}