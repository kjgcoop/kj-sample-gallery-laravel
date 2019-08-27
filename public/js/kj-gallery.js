$(document).ready(function(){

    // Show an iamge
    $('#imgs li.still').click(function () {
        var filename = $(this).attr('data-file');
        var new_tgt  = 'kj_images/' + filename;
//        $('#full img').attr('src', new_tgt);
        $('#full').html('<img src="' + new_tgt + '">');
        $('#exif_block').html($(this).html());
    });

    // Show a video
    $('#imgs li.video').click(function () {
        var filename = $(this).attr('data-file');
        var new_tgt  = '<video controls><source data-file="' + filename + '" src="kj_images/' + filename + '" type="video/mp4">Your browser doesn\'t support the video tag.</video>';

        $('#full').html(new_tgt);
    });

    // Toggle highlighting when an iamge is clicked
    $('#imgs li').click(function () {
        // Get rid of current highlighting
        $('.selected').removeClass('selected');

        // Add new highlighting
        $(this).toggleClass('selected');
    });

    // Display the first image
    $('#imgs li:first-child').click();

});
