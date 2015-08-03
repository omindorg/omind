$(document).ready(function() {
    /* fixed element */
    $('.fixed').scrollFix();

    /* scroll to top */
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    }); 

    $('.scrollup').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 150);
        return false;
    });

    /* google pretty lineheight */
    $("pre").addClass("prettyprint");
    prettyPrint();

    /* slider */
    $('.slider').glide({
        arrowLeftText: '',
        arrowRightText: '',
        hoverpause: 0
    }).data('api_glide');

});



/* Simple Cart */
simpleCart({
    cartColumns: [
        { attr: "name" , label: "Name" } ,
        { attr: "price" , label: "Price", view: 'currency' } ,
        { view: "decrement" , label: false , text: "-" } ,
        { attr: "quantity" , label: "Qty", view: "input" } ,
        { view: "increment" , label: false , text: "+" } ,
        { attr: "total" , label: "SubTotal", view: 'currency' } ,
        { view: "remove" , text: "X" , label: "Delete" }
    ]
});