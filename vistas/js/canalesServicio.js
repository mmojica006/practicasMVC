function makeRequest(url, callback) {
    var request;
    if (window.XMLHttpRequest) {
        request = new XMLHttpRequest(); // IE7+, Firefox, Chrome, Opera, Safari
    } else {
        request = new ActiveXObject("Microsoft.XMLHTTP"); // IE6, IE5
    }
    request.onreadystatechange = function() {
        if (request.readyState == 4 && request.status == 200) {
            callback(request);
        }
    }
    request.open("GET", url, true);
    request.send();
}



var  urlServer='';
$.post("ajax/nosotros.ajax.php", {"action": "urlServer"}, function(result){


    $.each($('#descriptionCanalesimg'),function() {
        var src = $(this).attr("src"); //$('#tab-mision img').attr('src');
        if (!result.includes("localhost")){
            $(this).attr('src',result.slice(0,-1)+src);
        }
    });






});