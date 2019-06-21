$(document).ready(function(){

    $('#imgs img').click(function () {
        var filename = $(this).attr('data-file');
        var new_tgt  = 'kj_images/lg/' + filename;
        $('#full img').attr('src', new_tgt);
    });

});
