<!DOCTYPE html>
<html>
    <head>
        <title>eBus3</title>
        
        <style>
        body {
  background-color: lightblue;
  background-image: url("Consultancy.jpg");
      padding: 0;
      text-align: center;
      font-family: Verdana,sans-serif;
      position: relative;
      margin: 0;
      height: 100%;
}

h1 {
  color: white;
  text-align: center;
}

p {
  font-family: verdana;
  font-size: 20px;
        }
    </style>
    </head>
    <body>
        <br>
        <br>
        <br></br>
        <br></br>
       <!-- //Starting the session to get the session variable from last page-->
        <?php
      
        session_start();
        $totalValue2 = $_POST['txtTotal'];
        $fullNameValue = $_POST['txtName'];
        $PhoneNumber = $_POST['txtNum'];
                
        echo "The name is : ".$fullNameValue.".";
        echo"<br></br>";
        echo "The total value is : ".$totalValue2.".";
        echo"<br></br>";
        echo"The phone number is : ".$PhoneNumber.".";
        ?>
    </body>
</html>

