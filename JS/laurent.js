//DESKTOP

window.onscroll = function() {myFunction()};

function myFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    document.getElementById("upPageDesktop").style.opacity = "0.8";
  } else {
    document.getElementById("upPageDesktop").style.opacity = "0";
  }
}
// MOBILE 

window.onscroll = function() {myFunctionMobile()};

function myFunctionMobile() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    document.getElementById("upPageMobile").style.opacity = "0.6";
  } else {
    document.getElementById("upPageMobile").style.opacity = "0";
  }
}