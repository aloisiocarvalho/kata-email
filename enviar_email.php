<?php

	error_reporting (0);
	$destinatario= 'aloisio@elianapedrosa.com.br';
	$assunto= $_POST['Assunto'];
	$corpo= $_POST['Mensagem'];
	
	if ( mail($destinatario, $assunto, $corpo)):

?>

	<p>Seu email foi enviado. Obrigado.</p>

<?php else: ?>

	<p>Não foi possivel enviar seu email. Tente novamente mais tarde.</p>
	
<?php endif; ?>
	