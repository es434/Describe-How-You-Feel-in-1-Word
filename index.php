<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $connection=new mysqi("localhost","root","","emotionalmessages");
    $stmt=$connection->prepare("select*from popup");
    $stmt->execute();

    $result=$stmt->get_result();
    echo "<table border='1'>;
    while($row=$result->fetch_assoc()){

       echo  "<tr><td>".$row['ID']."</td><td>".$row['Emotion']."</td><td>".$row['Messages']."</td><td>".$row['link']."</td></tr>"
    }

   echo "</table>"

    ?>
</body>
</html>