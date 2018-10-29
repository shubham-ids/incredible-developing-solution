<!DOCTYPE HTML>
<html>
  <head>
    <title>Calculator</title>
    <link rel="stylesheet" href="../css/custom-calculator.css" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <script src="../includes/jquery.min.js"></script>
  </head>
  <body>
    <div class="Container">
      <div class="Header">
        <h1>Calculator</h1>
      </div>
      <div class="outputContainer">0</div>
      <div class="btnContanier">
        <div class="btnContant">
          <button class="InputNumber" value="CE">CE</button>
          <button class="InputNumber" value="(">(</button>
          <button class="InputNumber" value=")">)</button>
          <button class="InputNumber" value="/">/</button>

          <button class="Number" value="7">7</button>
          <button class="Number" value="8">8</button>
          <button class="Number" value="9">9</button>
          <button class="InputNumber" value="*">x</button>

          <button class="Number" value="4">4</button>
          <button class="Number" value="5">5</button>
          <button class="Number" value="6">6</button>
          <button class="InputNumber" value="-">-</button>

          <button class="Number" value="1">1</button>
          <button class="Number" value="2">2</button>
          <button class="Number" value="3">3</button>
          <button class="InputNumber" value="+">+</button>

          <button class="Number" value="0">0</button>          
          <button class="InputNumber" value=".">.</button>
          <button class="InputNumber" value="=">=</button>
        </div>           
      </div>      
    </div>
    <script type="text/javascript">
      $(document).ready(function(){
        console.log($("#outputContainer").text());
        var firstOperand, // Contain the first operand
         operator, // contain the selector operator
         resetNumber = false; // Why this is used very important ????
  
        //This method is used to append the button value
        $('.Number').click(function(){
          if(resetNumber){
            $('.outputContainer').html("");
            resetNumber = false;
           }
          $('.outputContainer').append( $(this).val() );
        });  
        //This method is used to erace the text value one by one
        $('.InputNumber[value="CE"]').click(function(){
         var textValue = $('.outputContainer').text(); // This method is used to show the output text value
         var EraceString = textValue.slice(0 , -1);    // This method is used to erace the text value
         if( EraceString == 0 ){
            EraceString = "0";
         }
         $('.outputContainer').text(EraceString);
        });
        // This method is used to addtion of the  value
        $('.InputNumber[value="+"]').click(function(){
          firstOperand = $('.outputContainer').text();
          operator = "+";
          resetNumber = true;
        });
        // This method is used to Subtraction of the  value
        $('.InputNumber[value="-"]').click(function(){
          firstOperand = $('.outputContainer').text();
          operator = "-";
          resetNumber = true;
        });
        // This method is used to Multiplication of the  value
        $('.InputNumber[value="*"]').click(function(){
          //console.log($('.InputNumber[value="-"]').val() );
          firstOperand = $('.outputContainer').text();
          operator = "*";
          resetNumber = true;
        });
        // This method is used to Devision of the  value
        $('.InputNumber[value="/"]').click(function(){
          //console.log($('.InputNumber[value="-"]').val() );
          firstOperand = $('.outputContainer').text();
          operator = "/";
          resetNumber = true;
        });                        
        // This method is used to store os the value
        $('.InputNumber[value="="]').click(function(){
          secondOperand = $('.outputContainer').html();
          //This method is used to addtion of the value
          var operatorValue = operator;
          var a = parseInt(firstOperand);
          var b = parseInt(secondOperand);
          var c;
          switch(operatorValue){
            case "+":
              c = a+b;
              break;
            case "-":
              c = a-b;
              break;
            case "*":
              c = a*b;
              break;
            case "/":
              c = a/b;
              break;
            default:
              c = "Something went wrong, pelase refresh the page.";    
          } 
          $('.outputContainer').html( c );      
        });
        });        

        // This method is used to multiplication of the  value
        $('.InputNumber[value="*"]').click(function(){
          firstOperand = $('.outputContainer').text();
          operator = "*";
          resetNumber = true;
        }); 
    </script>
  </body>
</html>