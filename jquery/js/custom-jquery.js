$(document).ready(function(){ 



$('#inputEmail').change(function(){
    requireField(this , '#label-input' );   
});
 
 function requireField(input , ErrorId){
  if($(input).val() ==""){
    $(ErrorId).html('Pleae Insert This Field');
    $(ErrorId).addClass('text-danger');
    return;
  }

}

});
