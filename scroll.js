// When the user scrolls down 360px from the top of the document, slide down the nav bar
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
   var x= document.getElementsByClassName("sidenav");  //make x get elements in class sidenav  
    if (document.body.scrollTop > 350 || document.documentElement.scrollTop > 350) { // check to see position on page
        x[0].style.top = "-12px"; //make sidenav disappear
    } else {
        x[0].style.top = "-350px"; //make sidenav appear
    }
}

