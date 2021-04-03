<?php
  $command = $_GET['command'];
	switch ($command){
		case 'getmail':
            $id = $_GET['id'];
            $amount = $_GET['amount'];
			$fd = fopen("$id.php", 'r') or die("не удалось открыть файл");
            if($amount<count($fd)){
			while(!feof($fd))
				{
					$str = htmlentities(fgets($fd));
					echo html_entity_decode($str);
				}
			fclose($fd);
            }
			break;
		default: 
			$id = $_POST['id'];
			$subject = $_POST['subject'];
			$text = $_POST['text']; 
            $today = date("Y-m-d H:i:s");
			$mail = "<div><p>Письмо на тему: $subject</p><p>Письмо:</p><p>$text</p><p>$today</p></div>\n";
			$fd = fopen("$id.php", 'a') or die("не удалось создать файл");
			fwrite($fd, $mail);
			fclose($fd);
			break;
	}
  ?>