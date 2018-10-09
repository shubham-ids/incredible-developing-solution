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

.todo{
    background-color: #f00;
    padding: 2% 3%;
    text-align: center;
    color: #fff;
}
.inputValue {
    width: 45%;
    padding: 8px;
    font-size: 18px;
    border: none;
    margin: 0px -5px;
}
.headerName {
    font-size: 32px;
    font-style: oblique;
}
.add {
    width: 16%;
    padding: 9px;
    font-size: 16px;
    margin: 0px 0px;
    cursor: pointer;
    font-style: italic;
}
.conterner {
    margin: 0px 0px;
    padding: 1% 3%;
    background-color: #f9f9f9;
}
li{
    cursor: pointer;
    position: relative;
    padding: 12px 8px 12px 40px;
    list-style-type: none;
    background: #eee;
    font-size: 18px;
}

a{
    float: right;
}
li .fa{
    display: none;
}
ul li:hover {
  background: #ddd;
}
.checked{
    background-color: #949292;
    color: #fff;           
}

.checked span{
    text-decoration: line-through;
}
.checked .fa{
    display: inline;
}

</style>
</head>
<body>

<div class="todo">
  <h2 class="headerName">My To Do List</h2>
  <input type="text" class="inputValue" placeholder="Enter Text..."/>
  <button class="add"> Add </button>
</div>

<ul class="conterner">
  <li class="checked"><span> Hit the gym     <a> X </a> </span> </li>
  <li><span> Pay bills       <a> X </a> </span> </li>
  <li><span> Meet George     <a> X </a> </span>  </li>
  <li><span> Buy eggs        <a> X </a> </span>  </li>
  <li><span> Read a book     <a> X </a> </span> </li>
  <li><span> Organize office <a> X </a> </span> </li>
</ul>


<script type="text/javascript">

 $(document).ready(function(){
     var onclickFunction = function(){
     $(this).parent().remove();
   };

   $('button').click(function(){
     if(  $('input').val() == "") {
       // show validation error;
       return;
     }
     $('ul').append("<li><span>" +  $('input').val() + "<a> X </a></span></li>");
     $('input').val('');
   });

  // Binding the anchor tags
   $('a').click(onclickFunction);
   // Event binding using `on`

   $('ul').on( 'click', 'a',function(){
     $(this).parent().remove();
   });

   $('ul').on('click','li',function(){
    // First alernative
    if( $(this).hasClass('checked') ){
      $(this).removeClass('checked');
    }else{
      $(this).addClass('checked'); 
      //$(this).prepend('<span></span>');    
    }

    // Second alternative
    // $(this).toggleClass('checked');
   })
   // if( $('li').hasClass('checked') == true ){
   //  console.log('The Value has been checked');
   // }

 });

</script>



</body>
</html>
