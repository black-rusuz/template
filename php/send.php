<?php
	// Файлы PHPMailer
	require "class.phpmailer.php";
	require "class.smtp.php";

	// Настройки
	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->Host = "smtp.jino.ru";
	$mail->Port = 465;
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = "ssl";

	$mail->Username = "robot@email.com";        // Логин
	$mail->Password = "qwerty";                 // Пароль
	$mail->setFrom("robot@email.com");          // Email отправителя
	$mail->addAddress("manager@email.com");     // Email получателя
	//$mail->addAddress("");                    // Ещё один email получателя

	// Переменные
	$fake = $_POST["name"];
	$buyer = $_POST["buyer"];
	$tel = $_POST["tel"];

	// Письмо
	// TODO: Сделать красивое тело
	$mail->isHTML(true);
	$mail->Subject = "";                                        // Заголовок письма
	$mail->Body = "<h3>Имя: $buyer <br>Телефон: $tel</h3>";     // Текст письма

	if(isset($fake) && empty($fake)) {
		if ($mail->send()) {
		    // TODO: Сделать страницу успешной отправки
			echo "Заявка отправлена!";
		} else {
		    // TODO: Сделать страницу ошибки
			echo "Сообщение не отправлено.<br>Ошибка: " . $mail->ErrorInfo;
		}
	} else {
        // TODO: Сделать страницу для роботов
		echo "Кажется, вы робот! Бип буп... ಠ_ಠ";
	}
?>

<script language="JavaScript" type="text/javascript">
    // TODO: Таймер перехода обратно
	window.setTimeout(() => eval(self.location="../"), 5000);
</script>