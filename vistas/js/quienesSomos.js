var  urlServer='';
$.post("ajax/nosotros.ajax.php", {"action": "urlServer"}, function(result){


$.each($('#tab-mision img'),function() {
    var src = $(this).attr("src"); //$('#tab-mision img').attr('src');
if (!result.includes("localhost")){
    $(this).attr('src',result.slice(0,-1)+src);
}
});

    $.each($('#texto-encabezado img'),function() {
        var src = $(this).attr("src"); //$('#tab-mision img').attr('src');
        if (!result.includes("localhost")){
            $(this).attr('src',result.slice(0,-1)+src);
        }
    });

    $.each($('#tab-vision img'),function() {
        var src = $(this).attr("src"); //$('#tab-mision img').attr('src');
        if (!result.includes("localhost")){
            $(this).attr('src',result.slice(0,-1)+src);
        }
    });

    $.each($('#tab-valores img'),function() {
        var src = $(this).attr("src"); //$('#tab-mision img').attr('src');
        if (!result.includes("localhost")){
            $(this).attr('src',result.slice(0,-1)+src);
        }
    });




});