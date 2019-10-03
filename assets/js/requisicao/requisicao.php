<?php
$ReqPOST = filter_input_array(INPUT_POST, FILTER_DEFAULT);


$Json['error'] = true;
$Nome = $ReqPOST['dados'][0]['value'];
$Email = $ReqPOST['dados'][1]['value'];
$selecao = $ReqPOST['dados'][2]['value'];
$msg = $ReqPOST['dados'][3]['value'];

//incluir a classe PHPMailer
include_once 'PHPMailer/class.smtp.php';
include_once 'PHPMailer/class.phpmailer.php';

//enviando o e-mail utilizando a classe PHPMailer
$Mailer = new PHPMailer;
$Mailer->Charset = "utf-8";
//$Mailer->SMTPDebug = 3;
$Mailer->IsSMTP();
$Mailer->Host = "gapconnectconsultoria.com.br";
$Mailer->SMTPAuth = true;
$Mailer->Username = "projeto@gapconnectconsultoria.com.br";
$Mailer->Password = ''; //Senha do seu e-mail criado na hospedagem esta protegida.
$Mailer->SMTPSecure = 'tls';
$Mailer->Port = 25;
$Mailer->Priority = 1; //Prioridade do e-mail
$Mailer->FromName = ($Nome); // Email e nome de quem enviara o e-mail
$Mailer->From = 'projeto@gapconnectconsultoria.com.br'; 
$Mailer->AddAddress('jlbnunes@live.com'); //Para quem será enviado o e-mail ?
$Mailer->IsHTML(true);
$Mailer->Subject = "Cliente - ($Nome)".date("H:i")." - ".date("d/m/Y");
$Mailer->Body = "
<html>
    <body>
        <h1>Mensagem recebida atraves do site </h1>
        <p>Nome do cliente:<strong>  $Nome </strong><br/></p>
        <p>E-mail:<strong> $Email </strong><br/></p>
        <p>Tipo de serviço<strong> $selecao </strong><br/></p>
        <p>Mensagem:<strong> $msg </strong><br/></p>
    </body>
</html>";
$Mailer->Send();
//Verificação
if($Mailer->Send()){
    $Json['error'] = false;
    echo 'sucesso';
}

echo json_encode($Json);

?>