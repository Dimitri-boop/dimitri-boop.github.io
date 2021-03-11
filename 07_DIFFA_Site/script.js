(function ($jq) {
    $jq(document).ready(function () {

        $jq(".menu-bar").click(function () {
            $jq(this).toggleClass("active");
            $jq("body").toggleClass("menu-open");
            $jq("#overlay").toggleClass("open");
        });
        
        $jq(".menu-item").click(function () {
            $jq("#menu-open").style.display ="none";
        });
    });
})(jQuery)


$(function(){
    $('.selectpicker').selectpicker();
});



window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("menuTablette");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}