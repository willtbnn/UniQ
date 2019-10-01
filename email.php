<?php
if(isset($_POST['email']) && !empty($_POST['email'])){
//recupera dados enviado pelo formulario.
    $GetPost = filter_input_array(INPUT_POST,FILTER_DEFAULT);

    //variaveis locais
    $erro = true;
    $nome = $GetPost['nome'];
    $email = $GetPost['email'];
    $selecao = $GetPost['selecao'];
    $msg = $GetPost['mensagem'];

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
    $Mailer->Password = 'unique71'; //Senha do seu e-mail criado na hospedagem 
    $Mailer->SMTPSecure = 'tls';
    $Mailer->Port = 25;
    $Mailer->Priority = 2; //Prioridade do e-mail
    $Mailer->FromName = ($nome); // Email e nome de quem enviara o e-mail
    $Mailer->From = 'projeto@gapconnectconsultoria.com.br'; 
    $Mailer->AddAddress('jlbnunes@live.com'); //Para quem será enviado o e-mail ?
    $Mailer->IsHTML(true);
    $Mailer->Subject = "Cliente - ($nome)".date("H:i")." - ".date("d/m/Y");
    $Mailer->Body = "
    <html>
        <body>
            <h1>Mensagem recebida atraves do site </h1>
            <p>Nome do cliente:<strong>  $nome </strong><br/></p>
            <p>E-mail:<strong> $email </strong><br/></p>
            <p>Tipo de serviço<strong> $selecao </strong><br/></p>
            <p>Mensagem:<strong> $msg </strong><br/></p>
        </body>
    </html>";
    $Mailer->Send();
    //Verificação
    if($Mailer->Send()){
        $erro = false;
        echo "Sucesso"; 
    }
} else {
    print_r('Campo de email, obrig');
}

/*if(isset($_POST['email']) && !empty($_POST['email'])){
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $selecao= addslashes($_POST['selecao']);
    $msg = addslashes($_POST['msg']);
    
    $to = "jlbnunes@live.com";
    $subject = "Contato - Cliente UniQ";
    $body = "
<html>
    <body>
        <h1>Mensagem recebida atraves do site </h1>
        <p>Nome do cliente:<strong>  $nome </strong><br/></p>
        <p>E-mail:<strong> $email </strong><br/></p>
        <p>Tipo de serviço<strong> $selecao </strong><br/></p>
        <p>Mensagem:<strong> $msg </strong><br/></p>
    </body>
</html>
";
    $header = "From:contato@gapconnectconsultoria.com.br"."\r\n"."Replay-To:".$email."\r\n"."X-Mail:PHP/".phpversion();
    if(mail($to,$subject,$body,$header)){
        
        echo ("Email enviado com sucesso");
    }else{
        echo ("Email enviado com sucesso");
    }
}*/?>