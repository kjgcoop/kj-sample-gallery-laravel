$(document).ready(function(){

    $('#imgs li.still').click(function () {
        var filename = $(this).attr('data-file');
        var new_tgt  = 'kj_images/' + filename;
//        $('#full img').attr('src', new_tgt);
        $('#full').html('<img src="' + new_tgt + '">');
        $('#exif_block').html($(this).html());
    });

    $('#imgs li.video').click(function () {
        var filename = $(this).attr('data-file');
        var new_tgt  = '<video controls><source data-file="' + filename + '" src="kj_images/' + filename + '" type="video/mp4">Your browser doesn\'t support the video tag.</video>';

        $('#full').html(new_tgt);
    });

    $('#imgs li:first-child').click();
});
