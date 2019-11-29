<?php
/**
 * @author Natasha Stojanova
 */

if($_SERVER['REQUEST_METHOD']==='GET'){
    require_once("../connection.php");
    $channel_Id=$_GET['channel-id'];
    var_dump($channel_Id);
    $query="SELECT sender_username, time_sent, message_text FROM chat.message WHERE channel_id=".$channel_Id;
    $msg=$conn->query($query);

    if($msg->rowCount()>0){
        while($row=$msg->fetchAll()){
            for($i=0;$i<count($row);$i++){
                echo $row[$i]['sender_username']." ";
                echo $row[$i]['time_sent']." ";
                echo $row[$i]['message_text']."<br>";
            }
        }
    }
    ?>

    <form method="post" action="">
        <input name="channel_id" value="<?php echo $channel_Id ?>" hidden>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username">
        <textarea id="message" name="message">Vnesi sodrzina</textarea>
        <button type="submit">Submit</button>

    </form>

    <?php
}
else if($_SERVER['REQUEST_METHOD']==='POST'){
    require_once("../connection.php");
    $username=$_POST['username'];
    $email=$_POST['email'];
    $channel_Id=$_POST['channel_id'];
    $message=$_POST['message'];
    $time=date('y-m-d H:i:s');
    $query="INSERT INTO message(message_text, sender_username, sender_email, channel_id, time_sent) VALUES (?,?,?,?,?)";
    $insert=$conn->prepare($query);
    $insert->execute([$message,$username,$email,$channel_Id,$time]);
    header("Location: /channel?channel-id=".$channel_Id);
}