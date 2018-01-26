// for the body toggle
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("active");
    $("#page-wrapper-login").toggleClass("main-content-login")
});