$(document).ready(function(){
         $('.button-collapse').sideNav({
            menuWidth: 200, // Default is 300
            edge: 'left', // Choose the horizontal origin
            closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
            draggable: true // Choose whether you can drag to open on touch screens
        });
        $('.parallax').parallax();
        $(".dropdown-button").dropdown({
            hover: false
        });
    });


// document.getElementById("text").innerHTML = "<?php echo $row['text'];?>";