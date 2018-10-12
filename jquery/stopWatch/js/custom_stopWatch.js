$(document).ready(function(){

  //TODO : Please comment your code

  $('#start').click(function(){
      if( $(this).text() == 'Start Time' ){
        startTime('#output');
        $(this).text('Stop Time');
        $('#output').css('color','rgba(0, 00, 0, 1)');
      }else{
        stopTime();
        $(this).text('Start Time');
        $('#output').css('color','rgba(0, 00, 0, 1)');
      }   
  });
  $('#startTime').click(function(){
    startTime('#output');
    $('#start').text('Stop Time');
    $('#output').css('color', 'rgba(255, 146, 0, 0.5)');
  });
  $('#stopTime').click(function(){
    stopTime();
    $('#start').text('Start Time');
    $('#output').css('color', 'rgba(255, 146, 100, 0.5)');
  });
  $('#reset').click( function(){
    resetTime('#output');
    $('#start').text('Start Time');
    $('#output').css('color','rgba(0, 00, 0, 1)');
  });
  $('#resetTime').click( function(){
  resetTime('#output');
  $('#start').text('Start Time');
  $('#output').css('color', 'rgba(255, 186, 150, 0.5)');
  });
  //Start Timer 
  $('.TimerHeader').click(function(){
    $('.stopWatchContener').hide(); //Toggle function are used to hide the stop button contener
    $('.TimerContener').show();     // Toggle function are used to show the element
    $('.process').show();
    $('#startTimer').click(function(){
      StartTimer('#output');
    });
  });
  //Reset Timer
  $('#resetTimer').click( function(){
  resetTime('#output');
  });

  var TimeTracker = null; // The TimeTracker default value is null
  var seconds     = 0;   // Track the number of seconds
  var counter     = 0;  // Track the number of time setInterval execute	
  /*
  * This function is used to one parameter 
  * This function work progress is display the current millisecond ans second
  */
  function startTime(output){
      TimeTracker = setInterval(function(){
      var currentTime = new Date(); // This is used to get the current tim
      //The decisecond is used to get the current the miilisecond and parsrInt is used to convert the floting number to integer
      var decisecond  = parseInt( currentTime.getMilliseconds()/10 ); 
      $(output).html("<b>" + seconds + "</b>" + " <a>s</a>" + " : " + "<a>" + decisecond + "</a>" );
      if( counter %100 == 0){
        seconds++;
      }
      counter++
    },10); // Close the breaces in stInterval function 
    //$(this).text('Stop Time'); // Change the button value 
     return;
  }
  /*
   * This function is used return the stop setInterval progress
   */
  function stopTime(){
    return clearInterval( TimeTracker );
  }
  /*
  * This function is used to one parameter
  * This function is used to reset of the time progress
  * Function Name : resetTime
  * Parameter     : 
  *   output -> accept the class
  * Return : 
  *  void
  */
	function resetTime(output){
    var currentDate = new Date();
    if(TimeTracker !==null){
      clearInterval( TimeTracker );
    }
    seconds = 0;
    $(output).html("<b>" + seconds + "</b>" + " <a>s</a>" + " : " + "<a> 00 </a>" );      
  }
  /*****************************************************************
  ******************* Start Timer JQuery Code     ******************
  ******************************************************************/
 
    function StartTimer(output){
      seconds = 10;
      TimeTracker = setInterval(function(){
        var currentTime = new Date(); // This is used to get the current time 
        $(output).html("<b>" + seconds + "</b>" + " <a>s</a>" );
        // if( counter %100 == 0){
        //   seconds--;
        //   if( seconds < 0){
        //     clearInterval(TimeTracker);
        //   }

        // } 

          seconds--;
          if( seconds < 0){
            clearInterval(TimeTracker);
          }
        counter++
         $('.process').css('width',counter+'%');
      },1000); // Close the breaces in stInterval function
    }//Close the breases in start timer 
  //

 });