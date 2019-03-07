<?php
session_start();
$fullNameValue = "";
$totalValue2 = "";
$PhoneNumber = "";
/*
 * Create a session variable for the mobile number
 */
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue2;
$_SESSION['txtNum'] = $PhoneNumber;

/**
 * Allocate The mobile number session variable to a text box
 */
?>

<!DOCTYPE html>
<html>
    <head>
        <title>eBusiness 2</title>
    </head>
    
<style>
        
    input {
        border-style: groove;
            border-radius: 5px;
            font-family: Verdana,sans-serif;
            border: 0.5px solid black;
            color: #6d8ce8;
    }
    
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
    <body>
        <div class="form">
            <form name="Details" method="post" action="eBus3.php">
                <center>
                    <table cellspacing="10"
                            <tr>
                            <td><b></b></td>
                            <td><h2>Enter Your details Below</h2></td>
                        </tr>
                        <br></br><br></br>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" id="txtName" name="txtName" value="" required=""/></td>
                        </tr>
                        <tr>
                            <td>Phone Number</td>
                            <td><input type="text" id="txtNum" name="txtNum" value="" required="" maxlength="10" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" name="itemConsumption"/></td>
                        <!--Source: https://stackoverflow.com/questions/32777184/html-input-for-positive-whole-numbers-only-type-number-->
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" id="txtPassword" name="txtPassword" value=""/></td>
                        </tr>
                        <tr>
                           
                            <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>"/></td>
                        </tr>
                    </table>
                </center>
               
                <center>
                    <input type="submit" name="btnContinue" id="btnContinue" onclick="" value="Continue"/>
                </center>
        </div>
      </form>
      </body>
            </html>

