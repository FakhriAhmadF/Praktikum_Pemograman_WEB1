$(document).ready(function() {
    $('#header').css('text-align', 'center'); 
    $('li').css('margin', '5px'); 
    
    $('img[alt="Alumni Photo 1"]').css('border', '2px solid red'); 
    
    $('#alumniList li').css('font-size', '18px'); 
    $('.featured').addClass('highlight'); 
    
    $('.gallery img').on('click', function() {
        var src = $(this).attr('src');
        $('#modallmage').attr('src', src);
        $('#myModal').fadeIn();
    });
    
    $('.modal-content .close').on('click', function() {
        $('#myModal').fadeOut();
    });
    

    $(window).on('click', function(event) {
        if ($(event.target).is('#myModal')) {
            $('#myModal').fadeOut();
        }
    });
});