// Code adapted from view-source:http://www.webdesignerwall.com/demo/jquery/simple-slide-panel.html
// by Mike Davidovich - davidovm@csp.edu
/**
 * Created by mdavidovich on 8/6/2017.
 */

jQuery(document).ready(function ($) {
    //alert("jQuery is active!");
    $(".text").hide();

    $(".btn-slide").click(function(){
        console.log($(this).parent().parent().children("#panel"));
        //$("#panel").slideToggle("slow");
        $(this).parent().parent().children("#panel").slideToggle("slow");
        //console.log($(this).parent());
        $(this).toggleClass("active"); return false;
    });
});
