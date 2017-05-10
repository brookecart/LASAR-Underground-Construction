$(document).foundation()
window.open("www.youraddress.com","_self")


$(document).ready(function(){
        $(".button-collapse").sideNav();
        $('.parallax').parallax();
        $(".dropdown-button").dropdown({
            hover: false
        });
        menuWidth: 300, // Default is 300
      edge: 'right', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true // Choose whether you can drag to open on touch screens
    });
(function($){
  $(function(){

    $('.button-collapse').sideNav();

  }); // end of document ready
})(jQuery); // end of jQuery name space

