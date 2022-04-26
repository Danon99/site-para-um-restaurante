
<?php
		use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\Exception;
		
		
            
			require ("PHPMailer-master/PHPMailer-master/src/PHPMailer.php");
			require ("PHPMailer-master/PHPMailer-master/src/Exception.php");
			require ("PHPMailer-master/PHPMailer-master/src/SMTP.php");
			$mail = new PHPMailer(true);

            

			try {
				$mail->isSMTP();                                            
				$mail->Host       = 'smtp.gmail.com';                     
				$mail->SMTPAuth   = true;                                   
				$mail->Username   = 'bistro.dani12@gmail.com';                  
				$mail->Password   = 'Dani@2022';                         
				$mail->Port       = 587;                                 
				$mail->setFrom('bistro.dani12@gmail.com', 'Dani bistro');
				$mail->addAddress('bistro.dani12@gmail.com');
				$mail->isHTML(true);                                  
				$mail->Subject = 'mensagem vinda do site';
				$mail->Body    = $_POST["message"];
				$mail->send();
                echo "mensagem enviada com sucesso";
			} catch (Exception $e) {
				echo "Não foi possível enviar menssagem de e-mail. Erro: {$mail->ErrorInfo}";
			}
		
			
	?>