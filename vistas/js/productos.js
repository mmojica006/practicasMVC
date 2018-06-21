var pathname = window.location.pathname.split('/'); // Returns path only



//console.log(pathname);

    $("#menu li a").on('click', function (e) {
        e.preventDefault()
        var page = $(this).data('page');
        console.log(page);
        $("#pages .page:not('.hide')").stop().fadeOut('fast', function () {
            $(this).addClass('hide');
            $('#pages .page[data-page="' + page + '"]').fadeIn('slow').removeClass('hide');
        });
    });


if (pathname[1] != 'productos') {
    $("#pages .page:not('.hide')").stop().fadeOut('fast', function () {
        $(this).addClass('hide');
        $('#pages .page[data-page="' + pathname[1] + '"]').fadeIn('slow').removeClass('hide');
    });
}









