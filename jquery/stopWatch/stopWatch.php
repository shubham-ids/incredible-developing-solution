<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="js/jquery.min.js"></script>  
  <script src="js/bootstrap.min.js"></script>
  <style>
  	.contener {
      margin: 0px auto;
      width: 50%;
      padding: 11px 15px;
    }
    .content {
	    border: 1px solid #c7c7c7;
	    padding: 10px 17px;
	    margin-bottom: 14px;
    }
    #output {
	    text-align: center;
	    font-size: 46px;
    }  
		.bt {
		  text-align: center;
		}     
		.TimeStamp {
	    border: none;
	    cursor: pointer;
	    padding: 2% 4%;
	    margin-right: 16px;
	    font-size: 20px;
		} 
		.ColorTimeStamp{
	    border: none;
	    cursor: pointer;
	    padding: 2% 4%;
	    margin-right: 16px;
	    font-size: 20px;			
		} 
    .colorbt {
      padding: 12px 11px;
      text-align: center;
    }		
    .stopWatchHeader{
    	width:50%;
    	float:left;
    } 
    .TimerHeader{
      text-align:right;
    }  
  </style>
  <body>
  	<div class="contener">
  		<div class="content">
		    <h1 style="color: lightblue;" class="stopWatchHeader"><i class="fa fa-clock-o" aria-hidden="true"></i>Stop Watch</h1>
		    <h1 style="color: lightblue;" class="TimerHeader"><i class="fa fa-clock-o" aria-hidden="true"></i>Start Timer</h1><br>
		    <div id="output"><span><b>0</b> <a>s</a>: <a>00</a></span></div>
      </div>
		  <div class="bt"> 
		   <button id='start' class="TimeStamp">Start Time</button>
		   <button id="reset" class="TimeStamp" vg0932v>Reset Time</button>
		  </div>
		  <div class="colorbt"> 
		   <button id='startTime' class="ColorTimeStamp" style="background-color: rgba(255, 146, 0, 0.5);">Start Time</button>
		   <button id='stopTime'  class="ColorTimeStamp" style="background-color: rgba(255, 146, 100, 0.5);">Stop Time</button>
		   <button id="resetTime" class="ColorTimeStamp" style="background-color: rgba(255, 186, 150, 0.5);">Reset Time</button>
	  </div>
  </div>
  <script src="js/custom_stopWatch.js"></script> 
  </body>
</html>