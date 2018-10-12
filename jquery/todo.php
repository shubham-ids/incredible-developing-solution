<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/custom-todo.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<body> 
  <div class="todo">
    <h2 class="headerName">My To Do List</h2>
    <div class="text-contener">
      <input type="text" class="inputValue" id="task" placeholder="Enter Task..."/>
      <div class="messageContener">
        <p class="ErrorMessage"></p>
      </div> 
      <textarea class="description" id="inputDescription" placeholder="Enter description"></textarea>
      <div class="messageContener">
        <p class="descriptionErrorMessage"></p>
      </div>
      <button class="add"> Add </button>
    </div>   
  </div>
  <ul class="conterner">
  </ul>
<script src="js/custom_todo.js"></script>
</body>
</html>