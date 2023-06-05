
    (function($) {
    "use strict";

    // Add active state to sidbar nav links
    var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
        $("#layoutSidenav_nav .sb-sidenav a.nav-link").each(function() {
            if (this.href === path) {
                $(this).addClass("active");
            }
        });

    // Toggle the side navigation
    $("#sidebarToggle").on("click", function(e) {
        e.preventDefault();
        $("body").toggleClass("sb-sidenav-toggled");
    });

    var allowPaste = function(e){
        e.stopImmediatePropagation();
        return true;
      };
      document.addEventListener('paste', allowPaste, true);
//
$("body").on("contextmenu",function(e){
    return true;
});
$(document).keydown(function(e){
     if (e.ctrlKey && (e.keyCode === 67 || e.keyCode === 86 || e.keyCode === 85 || e.keyCode === 117)){
       return true;
     }
     if(e.which === 123){
         return true;
     }
     if(e.metaKey){
         return true;
     }
     //document.onkeydown = function(e) {
     // "I" key
     if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
         return true;
     }
     // "J" key
     if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
         return true;
     }
     // "S" key + macOS
     if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
         return true;
     }
     if (e.keyCode == 224 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
         return true;
     }
     // "U" key
     if (e.ctrlKey && e.keyCode == 85) {
        return true;
     }
     // "F12" key
     if (event.keyCode == 123) {
        return true;
     }
});

 

ga('create', 'UA-120909275-1', 'auto');
ga('send', 'pageview');

 

})(jQuery);
