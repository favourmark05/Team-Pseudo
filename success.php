<?php
session_start();
if(!isset($_SESSION['user_login'])){
  header("Location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login success</title>
    <style>
      body{
        background: url(https://res.cloudinary.com/placeholder30/image/upload/v1568841095/HNG/jon-tyson-Es6wM0ASCAU-unsplash_rbwtsz.jpg);
        background-size: cover;
        background-repeat: no-repeat;
      }
      #container{
        margin-left: auto; 
        margin-top: 15%;
      }
      h2{
        font-size: 40px;
        font-weight: 700px;
        font-family: Courier, monospace;
        color: rgb(245, 245, 245);


      }
      button{
      margin: 20px auto;
      border: 0;
      text-align: center;
      display: block;
      padding: 14px 10px;
      width: 200px;
      border-radius: 50px;
      outline: none;
      cursor: pointer;
      background: #2753e4; 
      margin-top: 25% ;
      margin-left: 43%;
      color: aliceblue;
      }
      button:hover{
        background: steelblue;
      }
      
      a{
        text-decoration: none;
      }

    </style>
</head>

<body>
    <div id="container">
    <h2>You are in! There is not much to do here at this time, Check back later! :-)</h2>
  </div>
/*Dear<?php echo $_SESSION['user_login']?>, */
   <div >
  <a href="logout.php"><button>Logout</button></a>
  </div>
</body>

</html>
