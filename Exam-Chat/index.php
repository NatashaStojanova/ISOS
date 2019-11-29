<?php
/**
 * @author Natasha Stojanova
 */

if($_SERVER['REQUEST_METHOD']==='POST'){
    //require_once("./connection.php");
    $username=$_POST['username'];
    $email=$_POST['email'];
    setcookie("username",$username,time()+7200);
    setcookie("email",$email,time()+7200);
    header("Location: /channels");
}

else if($_SERVER['REQUEST_METHOD']==='GET'){
    require_once("./connection.php");
    if(isset($_COOKIE['username']) && isset($_COOKIE['email'])){
        //Togash korisnikot e najaven
        $username=$_COOKIE['username'];
        $email=$_COOKIE['email'];
        ?>
        <form method="post" action="index.php">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" <?php echo "value=$email";?>><br>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" <?php  echo "value=$username";?>><br>
            <button type="submit">Submit</button>

        </form>
        <?php
    }
    else{
        ?>
        <form method="post" action="index.php">
            <label for="email">Email:</label>
            <input id="email" type="text" name="email"><br>
            <label for="username">Username:</label>
            <input id="username" type="text" name="username"><br>
            <button type="submit">Sign in</button>
        </form>
    <?php
    }
}
