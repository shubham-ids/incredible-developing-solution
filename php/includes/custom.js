$(document).ready(function(){
// This method is used to one click the multiple checkbox clicked
  $('#checkAll').click(function(){
    $('.checkItem').prop('checked', $(this).prop('checked'));
  });
  $('.checkItem').click(function(){
    if( $('.checkItem:checked').length == $('.checkItem').length ){
      $('#checkAll').prop('checked',true);     
    }else{
      $('#checkAll').prop('checked',false);
    } 
  });
  
});