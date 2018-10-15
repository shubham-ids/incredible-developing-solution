$(document).ready(function(){ 
  var i=1;
  $('#next').click(function(){
    $('#image'+i).addClass('active');
    $('#outputImage').html('<img src="images/image'+i+'.jpg" height="200px" width="150px" class="slideimage">');       
    i++;
    if(i>3){
      i=1;
    }
  });
  $('#previous').click(function(){
    $('#outputImage').html('<img src="images/image'+i+'.jpg" height="200px" width="150px" class="slideimage">');
    i--;
    if(i != -1){
      i=3;
    }
    console.log(i);
  });
});