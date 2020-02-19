<html>
<body>

<?php

$mysqli=new mysqli("localhost","Doggo","DoGgOeXtReM","stonehawk");

$user=$_POST["uName"];

$result=$mysqli->query("SELECT `ID` FROM `user_names` WHERE `name` = '$user'
");
$fetch_result=mysqli_fetch_assoc($result);


$sqli = "
INSERT INTO `chat_messages`
(`time_date`, `message`, `sender`, `room`, `emojis`, `ID`)
VALUES (current_timestamp(), ?, ?, ?, ?, ?);
";


$name=$_POST["uName"];
$mess=$_POST["message"];
$emoji = '';
$nada = NULL;
$stmt = $mysqli->prepare($sql,);

$stmt->bind_param("sssss", $mess , $fetch_result["name"], $_POST["chatNum"], $emoji, $nada)

$stmt->execute();



?>

Welcome: <?php echo $_POST["uName"]; ?><br>
the ChatROOM is: <?php echo $_POST["chatNum"]; ?><br>
Your message is: <?php echo $_POST["message"]; ?><br>

</body>
</html>