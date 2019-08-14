$(document).ready(function(){

    $('#imgs img').click(function () {
        var filename = $(this).attr('data-file');
        var new_tgt  = 'kj_images/lg/' + filename;
//        $('#full img').attr('src', new_tgt);
        $('#full').html('<img src="' + new_tgt + '">');
    });

    $('#imgs video').click(function () {
        var filename = $(this).children('source').eq(0).attr('data-file');
        var new_tgt  = '<video controls><source data-file="' + filename + '" src="kj_images/' + filename + '" type="video/mp4">Your browser doesn\'t support the video tag.</video>';

        $('#full').html(new_tgt);
    });

});
