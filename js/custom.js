
$("#tabs").tabs({active: 0});

$("#accordion").accordion({active: 0, animate: 300});

$(function() {
    $( "#sortable" ).sortable();
    //$( "#sortable" ).disableSelection();
});

$( "#animate" ).animate({
    opacity: 0.4,
    fontSize: "2em"
    }, 1500 );

