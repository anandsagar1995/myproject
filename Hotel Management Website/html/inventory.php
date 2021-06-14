<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/inventorycss.css">
    
    <title>Login Form</title>
    
</head>

<body>


    


    <div class="home">
        <a href="../index.php"><i class="fa fa-angle-double-left" id="arrow"></i><i class="fa fa-home"></i>HomePage</a>   
       <div class="message">
        <h3>you have successfullty registered </h3>
</div>
</div>
    <div class="big1">
    <div class="big">
    <div class="main">
        <h1>Inventory</h1>
        <h2>Choose-items</h2>
    </div>
    <div class="mainbox">
            <form action="../valid/inventoryvalid.php" method="POST">

 <input type="checkbox" id="item1" name="item1" value="Bike">
  <label for="item1"> Item 1</label><br>

  <input type="checkbox" id="item2" name="item2" value="Car">
  <label for="item2"> Item 2</label><br>

  <input type="checkbox" id="item3" name="item3" value="Boat">
  <label for="item3"> Item 3</label><br>

  <input type="checkbox" id="item4" name="item4" value="coat">
  <label for="item4"> Item 4</label><br><br>
</div>
<div class="ename">
  <label for="name">Name:</label>
  <input type="text" id="name" name="sname" placeholder="enter your name" required>
</div>
                    <div class="btn">
                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
</div>
                



            </form>
            
            <div class="signupblock">
                <h3>I am a New User!!!</h3>
                <a href="signup.php">Sign-Up</a>
                </div>
        </div>
    </div>
</div>
</div>
</body>

</html>