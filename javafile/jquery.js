$(document).ready(function () {
    $(".cvdownloading").click(function (e) { 
        $(".fa-download").css("color", "green");
    });
    $(".shortlist").click(function (e) { 
        e.preventDefault();
        $(".person").hide();

        $(".messaging").show(function(){
            $(".applicationl").css("display", "none");
        });
    });
    $(".fa-times").click(function (e) { 
        $(".detailsof").css("opacity", "1");
        $(".messaging").hide(function(){
            $(".applicationl").fadeIn();
            $(".person").show();
        });

    });

});
