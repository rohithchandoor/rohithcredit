<html>
<head>
    <title>My page</title>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    .container {
    min-height: 100vh;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}
a{
    font-size: 20px;
    text-decoration:none;
}
.b1{
   display: block;
   background-color:yellow;
   color:crimson;
   width:200px;
   height:30px;
   border-radius: 10px;
   margin-bottom:20px;
   text-align: center;
   border-style:solid;
   border-color: crimson;
}
.b2{
   display: block;
   background-color:#BEF781;
   color:crimson;
   width:200px;
   height:30px;
   border-radius: 10px;
   margin-right: 5px;
   text-align: center;
   border-style:solid;
   border-color: crimson;
}
</style>
</head>
<body>
    <div class="container">
      <div>
        <h1 style="color:red;font-size:50px;">Chandoor Rohith</h1>
        <h2 style="color:blue;">credit transfer</h2>
        <div class="b1">
            <a href="view.php">View all users</a>
        </div>
        <div class="b2">
            <a href="transaction.php">View transactions</a>
        </div>
     </div> 
    </div>
</body>
</html>
