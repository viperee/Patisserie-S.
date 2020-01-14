$(function() {
    let activeCategorie = "active-categorie";
    $("#tous_categorie").click(function (event) {
        event.preventDefault();
        $('.active-categorie').removeClass(activeCategorie);
        $(this).addClass(activeCategorie);
        $("#gateau").show();
        $("#viennoiseries").show();
        $("#brunch").show();
        $("#voyage").show();
    });
    $("#gateaux_categorie").click(function (event) {
        event.preventDefault();
        $('.active-categorie').removeClass(activeCategorie);
        $(this).addClass(activeCategorie);
        $("#gateau").show();
        $("#viennoiseries").hide();
        $("#brunch").hide();
        $("#voyage").hide();
    });
    $("#viennoiseries_categorie").click(function (event) {
        event.preventDefault();
        $('.active-categorie').removeClass(activeCategorie);
        $(this).addClass(activeCategorie);
        $("#viennoiseries").show();
        $("#gateau").hide();
        $("#brunch").hide();
        $("#voyage").hide();

    });
    $("#brunch_categorie").click(function (event) {
        event.preventDefault();
        $('.active-categorie').removeClass(activeCategorie);
        $(this).addClass(activeCategorie);
        $("#brunch").show();
        $("#viennoiseries").hide();
        $("#gateau").hide();
        $("#voyage").hide();
    });
    $("#voyage_categorie").click(function (event) {
        event.preventDefault();
        $('.active-categorie').removeClass(activeCategorie);
        $(this).addClass(activeCategorie);
        $("#voyage").show();
        $("#brunch").hide();
        $("#viennoiseries").hide();
        $("#gateau").hide();
    });
    $('.modal-toggle').click(function(){
        var frameNumber = $(this).data('frame');
        $('.carousel').carousel(frameNumber);
    });

});