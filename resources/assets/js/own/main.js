$( document ).ready(function(){
    $(".button-collapse").sideNav();
    $(".dropdown-button").dropdown({
        inDuration: 300,
        outDuration: 225,
        //hover: true, // Activate on hover
        belowOrigin: true, // Displays dropdown below the button
    });
    $('.tooltipped').tooltip({delay: 50});
});

