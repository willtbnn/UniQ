<?php
$ReqPOST = filter_input_array(INPUT_POST, FILTER_DEFAULT);


$json['error'] = true;
$nome = $ReqPOST["dados"][0]["value"];
$email = $ReqPOST["dados"][1]["value"];
$selecao = $ReqPOST["dados"][2]["value"];
$msg = $ReqPOST["dados"][3]["value"];

//incluir a classe PHPMailer
include_once 'PHPMailer/class.smtp.php';
include_once 'PHPMailer/class.phpmailer.php';

//enviando o e-mail utilizando a classe PHPMailer
$mailer = new PHPMailer;
$mailer->Charset = 'UTF-8';
$mailer->Encoding = 'base64';
$mailer->IsSMTP(true);
$mailer->SMTPDebug = 2;
$mailer->Host = 'smtp.hostinger.com';
$mailer->SMTPAuth = true;
$mailer->Username = 'contato@grupouniq.com.br';
$mailer->Password = 'Uniq123@'; //Senha do seu e-mail criado na hospedagem esta protegida.
$mailer->SMTPSecure = 'tls';
$mailer->Port = 587;
$mailer->Priority = 1; //Prioridade do e-mail
$mailer->FromName = ($nome); // Email e nome de quem enviara o e-mail
$mailer->From = 'contato@grupouniq.com.br'; 
// $Mail->setFrom('contato@grupouniq.com.br','Site');
$mailer->AddAddress('jlbnunes@live.com'); //Para quem será enviado o e-mail ?
$mailer->AddAddress('marcos.gomes@grupouniq.com.br');
$mailer->IsHTML(true);
// $mail->msgHTML(file_get_contents('message.html'), __DIR__);
$mailer->Subject = "Cliente - {$nome}";
$mailer->Body = "
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
 <head>
  <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
  <title>Woza designer Email</title>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'/>
</head>
<body  style='margin: 0; padding: 0;'>
<table border='0' cellpadding='0' cellspacing='0' width='600 ' style='border-collapse: collapse;' align='center'>
<tr style='padding: 0; margin:0px;'>
    <td align='center' bgcolor='#FFF' style='padding: 40px 0 30px 0;'>
        <img src='Woza-new.png' alt='Woza soluçãoes em tecnologia' width='300' height='auto' style='display: block;' />
    </td>
</tr>
    <tr>
        <td style='padding: 25px 0 0 0;'>
            <h1>Mensagem recebida atraves do site </h1>
            <p>Nome do cliente:<strong>  {$nome} </strong><br/></p>
            <p>E-mail:<strong> {$email} </strong><br/></p>
            <p>Tipo de serviço<strong> {$selecao} </strong><br/></p>
            <p>Mensagem:<strong> {$msg} </strong><br/></p>
            <h1>Qual segmento o cliente mandou mensagem</h1>
            <p><i>1 = Planejados</i></p>
            <p><i>2 = Moveis</i> </p>
            <p><i>3 = Corporativo</i> </p>
            <p><i>4 = Construção e Serviços</i></p>
            <p><i>5 = Energia Solar</i></p>
        </td>
    </tr>
    <tr>
        <td bgcolor='#ee4c50' align='center' style='padding: 40px 0 30px 0;'>
            todos direitos reservado Woza
        </td>
    </tr>
</table>
</body>
</html>";
//Verificação
if($mailer->Send()){
    $json['error'] = false;
}

echo json_encode($json);

?>