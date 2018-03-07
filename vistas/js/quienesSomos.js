var  urlServer='';
$.post("ajax/nosotros.ajax.php", {"action": "urlServer"}, function(result){
$.each($('#tab-mision img'),function() {
    var src = $(this).attr("src"); //$('#tab-mision img').attr('src');
if (!result.includes("localhost")){
    $(this).attr('src',result+src);
}
});

});