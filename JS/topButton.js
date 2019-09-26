//DESKTOP

window.onscroll = function() {myFunction()};

function myFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    document.getElementById("upPage").style.opacity = "0.8";
  } else {
    document.getElementById("upPage").style.opacity = "0";
  }
}
// MOBILE 
