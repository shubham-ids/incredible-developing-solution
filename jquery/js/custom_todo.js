  $(document).ready(function(){
    $('#task').keyup(function(){
      required(this , '.ErrorMessage' ); // Display the Error Message
    });
    $('#task').blur(function(){
      required(this , '.ErrorMessage' ); // Display the Error Message 
    });  
    $('#inputDescription').keyup(function(){
      required(this , '.descriptionErrorMessage' ); // Display the Error Message
    });
    $('#inputDescription').blur(function(){
      required(this , '.descriptionErrorMessage' ); // Display the Error Message 
    }); 
    /*
     * This function is used to two parameters
     * checked the input value and display the required message 
     */
    function required(input , errorId){
      $(errorId).html('');
      if( $(input).val() == "" ){
        $(errorId).html('This field is required');
        $(input).css('color:red');
        return;
      }
    } 
    /*
    * THis function is used to accept the one parameter
    * Display the current date and time for add a new element 
    * Return the value
    */
    function AddTaskTime( TagName ){
      var currentDate = new Date();
      var dd     = currentDate.getDate();
      var mm     = currentDate.getMonth()+1;
      var yyyy   = currentDate.getFullYear();
      var hours  = currentDate.getHours();
      //var hours  = Math.abs( 12- currentDate.getHours() );
      var Minute = currentDate.getMinutes(); 
      $(TagName).html( hours + ":" + Minute +"/"+ dd + "-" + mm + "-" + yyyy); 
      return;     
      } 
        
    var activeList = [
      "First task",
      " Second task"
    ];
    //This function is used to add the new element and appeng the list
    function pushToList(text , content){
      $('ul').append("<li> <i class='fa fa-check'></i> <span>" 
        +  text+
          "<p class='descriptionValue'>" 
            +content+
          "</p>"+
          "</span><a> X </a><div class='addTime'></div> </li>");
      AddTaskTime( '.addTime' );
    }
    // T
    for(var i=0 ; i <= activeList.length ; i++){
      pushToList( activeList[i] );
    }
    // This function is used to remove the list
    // var removeItem = function(){
    //   $(this).closest('li').remove();
    // };
    /*
    * This method is used to checked the blank value  
    * If input value is blank then this function is return the error message
    * ELse this method is append the new element form list
    */
    $('button').click(function(){
      if(  $('input').val() == "" && $('#inputDescription').val() =="" ) {
        $(".ErrorMessage").html('This field is required');
        $(".descriptionErrorMessage").html('This field is required');
        $('input').css('color:red');
        return;
      }
      pushToList( $('input' ).val() , $('#inputDescription').val() );
      $('input').val('');
      $('#inputDescription').val('');
    });

    // Binding the anchor tags
    // This is static binding i.e done with anchor present in the HTML
    // $('a').click(onclickFunction);

    // Event binding using `on`
    // This is using because element are added dynamically
    $('ul').on( 'click', 'a',function(){
      $(this).closest('li').remove();
    });

    // Toggling class on li click
    // This class is added because UI is done based on this class
    $('ul').on('click','li',function(){
      $(this).toggleClass('checked');
    });
});