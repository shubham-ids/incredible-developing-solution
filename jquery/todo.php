<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    /*visibility:  hidden;*/
    display: none;
}
ul li:hover {
  background: #ddd;
}
.checked{
    background-color: #949292;
    color: #fff;           
}
/*.checked::before {
  content: '';
  position: absolute;
  border-color: #fff;
  border-style: solid;
  border-width: 0 2px 2px 0;
  top: 10px;
  left: 16px;
  transform: rotate(45deg);
  height: 15px;
  width: 7px;
}*/
.checked span{
    text-decoration: line-through;
}
.checked .fa{
    display: inline;
    /*visibility: visible;*/
}



/*
li span{
  margin-left: 18px;
}

li.checked span{
  margin-left: 0px;
}

*/

</style>
</head>
<body>

<div class="todo">
  <h2 class="headerName">My To Do List</h2>
  <input type="text" class="inputValue" placeholder="Enter Text..."/>
  <button class="add"> Add </button>
</div>

<ul class="conterner">
<!--
  <li><i class='fa fa-check'></i><span> Hit the gym     <a> X </a> </span> </li>
  <li><i class='fa fa-check'></i><span> Pay bills       <a> X </a> </span> </li>
  <li><i class='fa fa-check'></i><span> Meet George     <a> X </a> </span>  </li>
  <li><i class='fa fa-check'></i><span> Buy eggs        <a> X </a> </span>  </li>
  <li><i class='fa fa-check'></i><span> Read a book     <a> X </a> </span> </li>
  <li><i class='fa fa-check'></i><span> Organize office <a> X </a> </span> </li>
-->
</ul>


<script type="text/javascript">

$(document).ready(function(){

  var activeList = [
    "First task",
    " Second task",
    "Jatin task",
    "Subhma task"
  ];

  // This function is used to add the new element and append the list
  function pushToList(text){
    $('ul').append("<li> <i class='fa fa-check'></i> <span>" +  text + "<span> <a> X </a> </span> </li>");
  }

  for(var i=0 ; i <= activeList.length ; i++){
    pushToList( activeList[i] );
  }
  // This function is uesd to remove the list from task
  function removeItem(item){
    $(item).closest('li').remove();
    return;
  };

   $('button').click(function(){
     if(  $('input').val() == "") {
       // show validation error;
       return;
     }
     pushToList( $('input').val() );
     $('input').val('');
   });

  // Binding the anchor tags
  // This is static binding i.e done with anchor present in the HTML
  // $('a').click(removeItem);


  // Event binding using `on`
  // This is using because element are added dynamically
  $('ul').on( 'click', 'a',function(){
    console.log('we got here');
    removeItem(this);
  });

  // Toggling class on li click
  // This class is added because UI is done based on this class
  $('ul').on('click','li',function(){
    $(this).toggleClass('checked');
  });

});

</script>



</body>
</html>
