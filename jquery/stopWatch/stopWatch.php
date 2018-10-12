<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/custom-stopWatch.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="js/jquery.min.js"></script>  
  <script src="js/bootstrap.min.js"></script>
  <!-- TODO : Format your code properly -->
  <body>
    <div class="contener">
        <div class="headerContener">
          <h1 class="tab-title stopWatchHeader">
            <i class="fa fa-clock-o" aria-hidden="true"></i>
            <a id="stopTimer">Stop Watch</a>
          </h1>
            <h1 class="tab-title TimerHeader">
                <i class="fa fa-hourglass-o" aria-hidden="true"></i>
                <a id="Start-watch">Timer</a>
            </h1>
        </div>  
            <div class="content">
                <div id="output"><span><b>0</b> <a>s</a>: <a>00</a></span></div>
                <div class="process" style="display: none;"></div>
          </div>
              <div class="TimerContener" style="display: none;"> 
                 <button id='startTimer' class="TimeStamp">Start Time</button>
                 <button id="resetTimer" class="TimeStamp">Reset Time</button>
              </div>
              <div class="stopWatchContener">             
                  <div class="bt"> 
                   <button id='start' class="TimeStamp">Start Time</button>
                   <button id="reset" class="TimeStamp">Reset Time</button>
                  </div>      
                  <div class="colorbt">         
                   <button id='startTime' class="ColorTimeStamp" style="background-color: rgba(255, 146, 0, 0.5);">Start Time</button>
                   <button id='stopTime'  class="ColorTimeStamp" style="background-color: rgba(255, 146, 100, 0.5);">Stop Time</button>
                   <button id="resetTime" class="ColorTimeStamp" style="background-color: rgba(255, 186, 150, 0.5);">Reset Time</button>
                </div>
         </div>
  </div> <!--Close contener -->
  <script src="js/custom_stopWatch.js"></script>
  </body>
</html>