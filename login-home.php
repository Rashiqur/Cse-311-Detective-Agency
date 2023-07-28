<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
$connection = mysqli_connect('localhost', 'root', '', 'detectives');
$sherlock = mysqli_query($connection, "select * from sherlock");
$bakshi = mysqli_query($connection, "select * from bakshi");
$hercule = mysqli_query($connection, "select * from hercule");
$maple = mysqli_query($connection, "select * from maple");
?>


<html>
    <head>
        <title>Detective Hiring Agency</title>
        <link rel="stylesheet" href="dez.css"> 
        <script src="https://kit.fontawesome.com/c64b631310.js" crossorigin="anonymous"></script>
    </head>    
    <body>  
        <i class="fas fa-eye"></i>
        <span class="title">Detective Hiring Agency</span>

        <div class="nav">
            <ol>
                     <li><i class="fas fa-sign-in-alt"></i> <a href="Home-Screen.php">LogOut</li>                    
                    </ol>                  
        </div>
        
        <h2> Welcome <?php echo $_SESSION['username']; ?> </h2>

        <div>
            <img src= "img/sherlock.jpg" alt="sherlock" width="400" height="300">
        </div>
        <?php
        
            while($res = mysqli_fetch_array($sherlock)){
                
                echo '<h2> Name: '.$res['name'].'</h2>';
                echo '<h2>'.$res['address'].'</h2>';
                echo '<h2> Hiring Price: TK '.$res['hire_rate'].'</h2>';
        }
        ?>
        <button type="text">Hire Sherlock</button>
        <div>
            <img src= "img/bakshi.jpg" alt="Byomkesh Bakshi" width="400" height="300">
        </div>
        <?php
        
            while($res = mysqli_fetch_array($bakshi)){
                
                echo '<h2> Name: '.$res['name'].'</h2>';
                echo '<h2>'.$res['address'].'</h2>';
                echo '<h2> Hiring Price: TK '.$res['hire_rate'].'</h2>';
        }
        ?>
        <button type="text">Hire Byomkesh Bakshi</button>
        <div>
            <img src= "img/poriot.jpg" alt="Hercule Poirot" width="400" height="300">
        </div>
        <?php
        
            while($res = mysqli_fetch_array($hercule)){
                
                echo '<h2> Name: '.$res['name'].'</h2>';
                echo '<h2>'.$res['address'].'</h2>';
                echo '<h2> Hiring Price: TK '.$res['hire_rate'].'</h2>';
        }
        ?>
        <button type="text">Hire Hercule Poirot</button>
        <div>
            <img src= "img/maple.jpg" alt="Miss Maple" width="400" height="300">
        </div>
        <?php
        
            while($res = mysqli_fetch_array($maple)){
                
                echo '<h2> Name: '.$res['name'].'</h2>';
                echo '<h2>'.$res['address'].'</h2>';
                echo '<h2> Hiring Price: TK '.$res['hire_rate'].'</h2>';
        }
        ?>
        <button type="text">Hire Miss Maple</button>
        
    </body>
</html>