<?php

$mysqli=new mysqli("localhost","Doggo","DoGgOeXtReM","stonehawk");

$result=$mysqli->query("SELECT chat_messages.message, user_names.name AS 'user name', 
chat_rooms.name_of_room AS 'room' 
FROM chat_messages INNER JOIN user_names ON 
chat_messages.sender = 
user_names.ID INNER JOIN chat_rooms ON chat_messages.room = chat_rooms.ID");

$result_count = $mysqli->field_count;
//begining of HTML page source
$html=
"<html>
	<head>
	</head>
		<body>
			<table>
				<tr>
					<td><b>Message</b></td>
					<td><b>User</b></td>
					<td><b>Room</b></td>
					<td><b></b></td>
					<td><b></b></td>
					<td><b></b></td>
				</tr>";

while($row=$result->fetch_array())
	{
		$html.="<tr>";
		for($i=0; $i<$result_count; $i++)
		{
			$html.="<td>".$row[$i]."</td>";
		}
		$html.="</tr>";
}

$html.=
"</table>
</body>
</html>";

echo $html;


?>