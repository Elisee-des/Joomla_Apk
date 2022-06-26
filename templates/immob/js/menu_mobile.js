$(document).ready(function(){
    $("#btn_menu").click(function(e){
        $("#menu_mobile").animate({right:0}, 800)
    })

    $("#btn_fermer").click(function(e){
        $("#menu_mobile").animate({right:"-320px"}, 800)
    })
})