$(document).ready(function(){ 
  //Slider image using custom code and jquery method
  var displayImage=0;
  $('#next').click(function(){
    displayImage++;
    var ImageCount   = $('.imageContainer').children().length; //
    if(displayImage == ImageCount){
      displayImage = 0;
    }
    var nextImageSource = $('.imageContainer img').eq(displayImage);
    var imageClone = nextImageSource.clone();
    // Adding class so that we can remove the image next time
    // $('.temp-image').remove();
    // clonedImages.addClass('temp-image')

    imageClone.appendTo( $('body') );
    imageClone.css({
      'position' : 'absolute'
    })

    imageClone.animate({
      'height' : '411',
      'top'    : '127',
      'left'   : '307',
      'width'  : '400'
    }, 'slow', function(){
      imageClone.remove();
      $('#outputImage').html("<img src='"+nextImageSource.attr('src')+"' class='slideimage' />");          
    })    
  });
// Previous image displayed
        $('#previous').click(function(){
        displayImage--;

        // :nth-child()
        // :eq

        var totalImages = $('.imageContainer').children().length;
        if(displayImage == -1){
          displayImage = totalImages-1;
        }

        var nextImageSource = $('.imageContainer img').eq(displayImage);

        $('#outputImage').html("<img src='"+nextImageSource.attr('src')+"' class='slideimage' />");

    });
});