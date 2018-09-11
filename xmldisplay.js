var xhttp;
xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status ==200){
        myFunction(this);    
    }
};

xhttp.open("POST", "home.xml", true);
xhttp.send();

function myFunction(xml) {
    var x, i, txt, xmlDoc;
    xmlDoc
    = xml.responseXML;
    txt = "";
    x = xmlDoc.getElementsByTagName("intro");
    for(i=0; i<x.length; i++) {
        txt += x[i].childNodes[0].nodeValue + "<br>";
    }
    document.getElementById("display").innerHTML = txt;
}