<?php
	$destinatario= 'aloisio@elianapedrosa.com.br';
	$assunto= $_POST['Assunto'];
	$corpo= $_POST['Mensagem'];
	mail($destinatario, $assunto, $corpo);	

?>