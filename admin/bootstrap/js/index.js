
    // side bar submenu toggle

   $('.submenu-111 a').click(function(){
    $(this).next('ul').slideToggle('500');
    $(this).find('i').toggleClass('fa-angle-double-right fa-angle-double-up')
});


// for the body toggle
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("active");
    
});

