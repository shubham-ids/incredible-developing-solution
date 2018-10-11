<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<style>



</style>
</head>
<body>
 
 <div id="output"></div>

 <button id="start"> Start Time </button>
 <button id="stop">  Stop Time </button>



<script type="text/javascript">

$(document).ready(function(){
  var intervalTracker; 
  var seconds = 0; // Track the number of seconds
  var counter = 0; // Track the number of time setInterval execute 
  $('#start').click(function(){
    intervalTracker = setInterval(function(){
      var currentDate = new Date();
      $('#output').html(  seconds + " : " + parseInt(currentDate.getMilliseconds()/10) );
      
      if(counter % 10 == 0){
        seconds++;
      }
      counter++;      
    }, 100 );
  });
  
  $('#stop').click(function(){
    clearInterval( intervalTracker );
  })

});

</script>
</body>
</html>
