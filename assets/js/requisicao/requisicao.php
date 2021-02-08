<?php
$ReqPOST = filter_input_array(INPUT_POST, FILTER_DEFAULT);


$Json['error'] = true;
$nome = $ReqPOST["dados"][0]["value"];
$email = $ReqPOST["dados"][1]["value"];
$selecao = $ReqPOST["dados"][2]["value"];
$msg = $ReqPOST["dados"][3]["value"];

//incluir a classe PHPMailer
include_once 'PHPMailer/class.smtp.php';
include_once 'PHPMailer/class.phpmailer.php';

//enviando o e-mail utilizando a classe PHPMailer
$Mailer = new PHPMailer;
$Mailer->Charset = 'utf-8';
//$Mailer->SMTPDebug = 3;
$Mailer->IsSMTP();
$Mailer->Host = 'grupouniq.com.br';
$Mailer->SMTPAuth = true;
$Mailer->Username = 'contato@grupouniq.com.br';
$Mailer->Password = 'Uniq123@'; //Senha do seu e-mail criado na hospedagem esta protegida.
$Mailer->SMTPSecure = 'tls';
$Mailer->Port = 587;
$Mailer->Priority = 1; //Prioridade do e-mail
$Mailer->FromName = ($nome); // Email e nome de quem enviara o e-mail
$Mailer->From = 'contato@grupouniq.com.br'; 
$Mailer->AddAddress('jlbnunes@live.com'); //Para quem será enviado o e-mail ?
$Mailer->AddAddress('marcos.gomes@grupouniq.com.br');
$Mailer->IsHTML(true);
$Mailer->Subject = "Cliente - {$nome} - ".date("H:i")." - ".date("d/m/Y");
$Mailer->Body = "
<!doctype html>
<html lang='pt-br'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <style>
        h1{display:flex;text-align:center;color:#e45234; justify-content:center;}
        p{display:flex;justify-content:space-between;text-transform:uppercase;}
        .corpo{width:500px;display:grid;justify-content:center;border:inset 10px #333;padding:40px;margin:auto;}
        .footer{margin-top:60px;margin-left:100px;display: -webkit-inline-flex;padding:30px;font-size:x-small}
        footer{width:300px;margin-top:40px}
        b{background-color:black;color:white}
        </style>
    </head>
    <body style=' font-family:Arial, Helvetica, sans-serif;' >
        <h1>Mensagem recebida atraves do site </h1>
        <div class='corpo'>
            <p>Nome do cliente:<strong>  {$nome} </strong><br/></p>
            <p>E-mail:<strong> {$email} </strong><br/></p>
            <p>Tipo de serviço<strong> {$selecao} </strong><br/></p>
            <p>Mensagem:<strong> {$msg} </strong><br/></p>
        </div>
        <footer style='margin-bottom:0'>
            <p> 0 - selecionou nenhuma opção</p>
            <p> 1 - selecionou Moveis planejados</p>
            <p> 2 - selecionou Corporativo</p>
            <p> 3 - selecionou Construção e serviços</p>
            <p> 4 - selecionou Energia Solar</p>
        </footer>
        <p class='footer'>Desenvolvido por <b>Woza</b></p>
    </body>
</html>";
//Verificação
if($Mailer->Send()){
    $Json['error'] = false;
}

echo json_encode($Json);

?>