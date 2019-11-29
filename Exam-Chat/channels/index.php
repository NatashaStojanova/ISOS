<?php
/**
 * @author Natasha Stojanova
 */
if($_SERVER['REQUEST_METHOD']==='GET'){
    require_once("../connection.php");
    $query = "
    SELECT channel.channel_id, name, description, unread 
    FROM ( 
    SELECT channel_id, COUNT(message_id) AS unread 
    FROM message 
    WHERE is_read=false 
    GROUP BY channel_id
    ) as mu RIGHT JOIN channel ON channel.channel_id=mu.channel_id
    ORDER BY unread DESC
    ";
    $unreadMsg=$conn->query($query);

    if($unreadMsg->rowCount() > 0){
        while($row=$unreadMsg->fetchAll()){
            for($i=0; $i < count($row); $i++){

                echo $row[$i]['channel_id']." ";
                ?>
                <a href="/channel?channel-id=<?php echo $row[$i]['channel_id']?>"><?php echo $row[$i]['name'] ?></a>
                <?php
                echo $row[$i]['description']." ";
                if($row[$i]['unread']!=0) {
                    echo $row[$i]['unread'] . "<br>";
                }
                else{
                    echo "0"."<br>";
                }

            }
        }
    }
}