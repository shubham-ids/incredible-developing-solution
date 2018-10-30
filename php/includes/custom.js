$(document).ready(function(){

// This method is used to one click the multiple checkbox clicked
  $('#checkAll').click(function(){
    $('.checkItem').prop('checked', $(this).prop('checked'));
    CheckedCountNumber('.checkItem' , '.countChecked');
  });

// Thid method is used to check the length value
// If checkbox length  is equal of length checkbox
// Then header checkbox is checked
// Else header cheackbox is uncheck 
  $('.checkItem').click(function(){
    CheckedCountNumber('.checkItem' , '.countChecked');
    if( $('.checkItem:checked').length == $('.checkItem').length ){
      $('#checkAll').prop('checked',true);  
    }else{
      $('#checkAll').prop('checked',false);
    } 
  });
  
// This function is accept the two parameter
// This function is used to count the checkbox checked  
// return NULL
  function CheckedCountNumber($classname , $output){
    var countCheckedRow = $($classname+':checked').length;
    $(countCheckedRow) ? $($output).html(countCheckedRow) : $($output).html('');
    if(countCheckedRow == 0){
      $($output).html('');
    }    
  }

// Bootstrap tooltip 
  $("[data-toggle=tooltip]").tooltip();

/*
 *  Data delete in jquery ajax method
 */

 $(".deleteAjax").click(function(){
  var parent     = $(this).parents("tr");
  var del_id = $(this).attr("id");
  var info   = 'id=' + del_id;
  if(confirm("Are you sure you want to delete this Record ?")){
    $.ajax({
      type: "get",
      url:  "?task=delete",
      data: info,
      success: function(){
        $(parent).remove();
        alert('Record is delete successfull');
      },
      error: function(){
        alert('Something is wrong !');
      }
    });
  }else{
    alert('No action taken');
  }
  });   

});

/*
 *  Data delete in alert box using javascript
 */

// This method is used to delete the record using javascript
// click the delete button and then open the alert box
// click the ok button ans then record is delete
// Else cancle the record delete 

//href           = "javascript:confirmation(<?php echo $row['id']; ?>)">

/*function confirmation(ID){
  var warningMessage = "Are you sure you want to delete this Record ?"
  var answer = confirm(warningMessage);
  if(answer){
    alert("Your record delete successfull");
    window.location="?task=delete&id="+ID+"&page=<?php echo $currentPage; ?>";
  }else{
    alert('no action taken');
  }
} */

