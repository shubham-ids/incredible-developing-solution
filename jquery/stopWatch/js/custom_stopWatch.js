$(document).ready(function(){

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
  */
	function resetTime(output){
    var currentDate = new Date();
    if(TimeTracker !==null){
      clearInterval( TimeTracker );
    }
    seconds = 0;
    $(output).html("<b>" + seconds + "</b>" + " <a>s</a>" + " : " + "<a> 00 </a>" );      
  }

 });