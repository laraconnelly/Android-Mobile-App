$(document).ready(function () {
    $('a').click(function (evt) {
        evt.preventDefault();
    });
// Tabs - Pizza
    $(function () {
        $("#tabs").tabs({collapsible: true});
        $("#tabs").tabs({show: {effect: "slide", direction: "left", duration: 9000}});
    });

    // Accordion - Drinks
    $(function () {
        $("#accordion").accordion({
            heightStyle: "fill"
        });
    });

    $(function() {

        $( "#number" )
            .selectmenu()
            .selectmenu( "menuWidget" )
            .addClass( "overflow" );
    });

    // Sortable
    $(function() {
        $( "#sortable" ).sortable();
        $( "#sortable" ).disableSelection();
    });








});
