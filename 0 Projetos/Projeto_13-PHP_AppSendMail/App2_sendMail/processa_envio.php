<?php

    require "../App2/PHPMailer/Exception.php";
    require "../App2/PHPMailer/PHPMailer.php";
    require "../App2/PHPMailer/POP3.php";
    require "../App2/PHPMailer/SMTP.php";

    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;


    class Mensagem {

        private $para = null;
        private $assunto = null;
        private $mensagem = null;
        public $status = array ('codigo_status' => null, 'descricao_status' => '');

        public function __set($attr, $value)
        {
            $this->$attr = $value;
        }

        public function __get($attr)
        {
            return $this->$attr;
        }


        public function __mensagemValida()
        {
            if(empty($this->para) || empty($this->assunto) || empty($this->mensagem)) {
                return false;
            }
            return true;
        }
    }

    $mensagem = new Mensagem();

    $mensagem->__set('para', $_POST['para']);
    $mensagem->__set('assunto', $_POST['assunto']);
    $mensagem->__set('mensagem', $_POST['mensagem']);

    if(!$mensagem->__mensagemValida()){
        echo '<br/><p style="color: red;">Mensagem Inválida</p>';
        header('Location: index.php');
    }

    //Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = false;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'lindote.testes@gmail.com';             //SMTP username
    $mail->Password   = 'dylwupipfpxvvcyn';                            //SMTP password
    $mail->SMTPSecure = 'tls';                                  //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('lindote.testes@gmail.com', 'Alisson');
    $mail->addAddress($mensagem->__get('para'));                 //Add a recipient


    //Content
    $mail->isHTML(true);                                         //Set email format to HTML
    $mail->Subject = $mensagem->__get('assunto');
    $mail->Body    = $mensagem->__get('mensagem');
    $mail->AltBody = 'É necessário utilizar um client com suporte a HTML para ter acesso a esse recurso.';

    $mail->send();

    $mensagem->status['codigo_status'] = 1;
    $mensagem->status['descricao_status'] = 'E-mail Enviado com sucesso.';
    echo 'Email enviado com sucesso!';

    } catch (Exception $e) {
        $mensagem->status['codigo_status']= 2;
        $mensagem->status['descricao_status'] = 'Não foi possivel enviar este e-mail. Detalhes do Error: '. $mail->ErrorInfo;
    }

?>
<html>
    <head>
    <meta charset="utf-8" />
    	<title>App Mail Send</title>
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="py-3 text-center">
                <img class="d-block mx-auto mb-2" src="logo.png" alt="" width="72" height="72">
                <h2>Send Mail</h2>
                <p class="lead">Seu app de envio de e-mails particular!</p>
            </div>
        <div/>
        <div class="row py-3 text-center">
            <div class="col-md-12">
                <?php if($mensagem->status['codigo_status'] == 1) { ?>
                    <div class="container">
                        <h1 class="display-4 text-success">Sucesso</h1>
                        <p><?= $mensagem->status['descricao_status']?></p>
                        <a href="index.php" class="btn btn-info btn-lg mt-5 text-white">Voltar</a>
                    </div>
                <?php }; ?>

                <?php if($mensagem->status['codigo_status'] == 2) { ?>
                    <div class="container">
                        <h1 class="display-4 text-danger">OPS!</h1>
                        <p><?= $mensagem->status['descricao_status']?></p>
                        <a href="index.php" class="btn btn-info btn-lg mt-5 text-white">Voltar</a>
                    </div>
                <?php }; ?>

            </div>
        </div>
    </body>
</html>
