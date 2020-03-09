$(document).ready(function(){
    console.log('Fixing Site...');

    // Resize Videos
    console.log('Resizing Videos');
    $('video').width('100%');
    $('video').height('100%');

    // Remove Warning Messages
    console.log('Remove Warning Messages');
    $('.alerts-wrapper').remove();

    console.log('Site Fixed');
});

