$(function() {
    let activeCategorie = "active-categorie";
    let urlParams = new URLSearchParams(window.location.search);
    let categories = ['gateaux', 'brunch', 'viennoiseries', 'voyage'];
    let params = 'categorie';
    let $gateauxCategorie = $("#gateaux_categorie");
    let $brunchCategorie = $("#brunch_categorie");

    if(urlParams.has(params)){
        let $gateau = $("#gateau");
        let $viennoiseries = $("#viennoiseries");
        let $brunch = $("#brunch");
        let $voyage = $("#voyage");
        let $active = $('.active-categorie');
        switch (urlParams.get(params)) {
            case categories[0]:
                $active.removeClass(activeCategorie);
                $gateauxCategorie.addClass(activeCategorie);
                $gateau.show();
                $viennoiseries.hide();
                $brunch.hide();
                $voyage.hide();
                break;
            case categories[1]:
                $active.removeClass(activeCategorie);
                $brunchCategorie.addClass(activeCategorie);
                $brunch.show();
                $viennoiseries.hide();
                $gateau.hide();
                $voyage.hide();
                break;
            case categories[2]:
                $active.removeClass(activeCategorie);
                $("#viennoiseries_categorie").addClass(activeCategorie);
                $viennoiseries.show();
                $gateau.hide();
                $brunch.hide();
                $voyage.hide();
                break;
            case categories[3]:
                $active.removeClass(activeCategorie);
                $("#voyage_categorie").addClass(activeCategorie);
                $voyage.show();
                $brunch.hide();
                $viennoiseries.hide();
                $gateau.hide();
                break;
        }
    }

    $("#tous_categorie").click(function (event) {
        event.preventDefault();
        $('.active-categorie').removeClass(activeCategorie);
        $(this).addClass(activeCategorie);
        $("#gateau").show();
        $("#viennoiseries").show();
        $("#brunch").show();
        $("#voyage").show();
    });
    $gateauxCategorie.click(function (event) {
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
    $brunchCategorie.click(function (event) {
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
    $(".close").mouseenter(function(){
        console.log("Test");
        $(this).children().attr('src',function(index, attr){
            return attr.replace(".svg", "-active.svg");
        });
    });
    $(".close").mouseleave(function(){
        $(this).children().attr('src',function(index, attr){
            return attr.replace("-active.svg",".svg");});
    });

});