<!DOCTYPE html>
<html>
    <head>
        <title>Learning Todo Function</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script><style>
        body {
          margin: 0;
          min-width: 250px;

        }

        .fun{
          background-color: #F44336;
          padding: 30px 40px 30px 40px;
          color: white;
          text-align: center;
        }

        .fun:after {
          content: "";
          display: table;
          clear: both;
        }

        h2{
            font-family:  Arial, sans-serif;
            font-style: italic;
            font-size: 42px;
        }


        #In{
          margin: 0;
          border: none;
          width: 75%;
          border-radius: 0;
          padding: 10px;
          float: left;
          font-size: 18px;
        }

        .btn {
          padding: 10px;
          width: 25%;
          background: #d9d9d9;
          color: #555;
          float: left;
          text-align: center;
          font-size: 16px;
          cursor: pointer;
          transition: 0.3s;
          border-radius: 0;
        }

        .btn:hover{
            background-color: #bfbfbf;
            color: red;
        }

        ul {
          margin: 0;
          padding: 0;
        }

        ul li {
          position: relative;
          padding: 12px 35px 12px 40px;
          list-style-type: none;
          background: #ddd;
          font-size: 20px;
          transition: 0.2s;
        }


        a{
            float: right;
        }
        li .fa{
            display: none;
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
p {
    border-width: 1px 1px 1px 1px;
    color: #fff;
    border-style: solid;
    position: absolute;
}

        </style>
    </head>
<body>

<div id="todo" class="fun">
  <h2>My To Do List</h2>
  <input type="text" id="In" placeholder="Enter The Text Here...">
  <button class="btn"> Add </button>
</div>

<ul>
  <li class="checked"> <i class="fa fa-check"></i> <span> Hit the gym <a> X </a> </span> </li>
  <li>Pay bills <a> X </a> </li>
  <li>Meet George <a> X </a> </li>
  <li>>Buy eggs <a> X </a> </li>
  <li>Read a book <a> X </a> </li>
  <li><p></p><a>Organize office <a> X </a> </li>
</ul>


<script type="text/javascript">

 $(document).ready(function(){
  

   var onclickFunction = function(){
     console.log("Default binding");
     $(this).parent().remove();
   };

   $('button').click(function(){

     if(  $('input').val() == "") {
       // show validation error;
       return;
     }




     $('ul').append("<li>" +  $('input').val() + "<a> X </a></li>");

     $('input').val('');

     // Not a good appoach
     // Because this is binding event multiple time on same 'a'
     
     // $('a').click(function(){
     //   console.log("Inner binding");
     //   $(this).parent().remove();
     // });


     // Better way of binding
     // $('li').last().find('a').click(function(){
     //   console.log('I am the last element adeed');
     //    $(this).parent().remove();
     // });

     // Unbinding and then doing the rebinding
     // $('a').unbind("click", onclickFunction);
     // $('a').click(onclickFunction);
   });



  // Binding the anchor tags
   $('a').click(onclickFunction);


   // Event binding using `on`

   $('ul').on( 'click', 'a',function(){
     console.log("Default binding");
     $(this).parent().remove();
   });

   $('a').click(function(){
    console.log(' Second binding ');
   })

   $('li').click(function(){
    console.log('I am here !!');


    // First alernative
    if( $(this).hasClass('checked') ){
      $(this).removeClass('checked');
    }else{
      $(this).addClass('checked');     
    }

    // Second alternative
    // $(this).toggleClass('checked');
   })

 });

</script>


</body>
</html>