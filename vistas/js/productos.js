    $("#menu li a").on('click', function (e) {
        e.preventDefault()
        var page = $(this).data('page');
        console.log(page);
        $("#pages .page:not('.hide')").stop().fadeOut('fast', function () {
            $(this).addClass('hide');
            $('#pages .page[data-page="' + page + '"]').fadeIn('slow').removeClass('hide');
        });
    });


    var pathname = window.location.pathname.split('/'); // Returns path only
    console.log(pathname[2]);
    false;

    $("#pages .page:not('.hide')").stop().fadeOut('fast', function () {
        $(this).addClass('hide');
        $('#pages .page[data-page="' + pathname[2] + '"]').fadeIn('slow').removeClass('hide');
    });






