<?php
    require_once('php/class.phpmailer.php'); 
    require_once('php/PHPMailerAutoload.php');

  if (isset($_POST['sendform'])){
     
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    $body = '<b style="color: #000000;">Nome: </b>'.$nome.'<br/>';
    $body .= '<b style="color: #000000;">E-mail: </b>'.$email.'<br/><br/>';
    $body .= '<b style="color: #000000;">Mensagem: </b><br/>';
    $body .= $mensagem.'<br/><br/>';
     

    $mail = new PHPMailer();

    // $mail->SMTPOptions = array(
    //    'ssl' => array(
    //        'verify_peer' => false,
    //        'verify_peer_name' => false,
    //        'allow_self_signed' => true
    //     )
    // );
     
    $mail->IsSMTP();        // Ativar SMTP
    $mail->SMTPDebug = 0;       // Debugar: 1 = erros e mensagens, 2 = mensagens apenas
    $mail->SMTPAuth = true;     // Autenticação ativada
    $mail->Charset   = 'utf8_decode()';
    $mail->SMTPSecure = 'ssl';    // SSL REQUERIDO pelo GMail
    $mail->Host = 'smtp.gmail.com';    // SMTP utilizado
    $mail->Port = 465;  
    $mail->Username = 'scfsitebr@gmail.com';
    $mail->Password = 'H7@eh1Sflq';
    $mail->AddReplyTo($email, $nome);   
    $mail->From = utf8_decode($email);
    $mail->FromName = utf8_decode($nome);
    $mail->IsHTML(true); // send as HTML  
    $mail->Subject  = utf8_decode($nome);
    $mail->Body  = utf8_decode($body);

    $to = "diego@zarov.com.br"; //Para   
     
    $mail->AddAddress($to);
     
    if(!$mail->Send()){
      $mensagemRetorno = 'Erro ao enviar formulário: '. print($mail->ErrorInfo);
    }else{
      echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script><script>$(function(){setTimeout(function(){var scroll = $("#contato").offset().top; $("html, body").animate({ scrollTop: scroll }, 0);});});</script>';
      $mensagemRetorno = '<p class="msg-success-form">Mensagem enviada com sucesso.</p>';
    } 
   
  }







  if (isset($_POST['sendOuvidoria'])){
    
    $mail = new PHPMailer();

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cliente = $_POST['cliente'];
    $mensagem = $_POST['mensagem'];

    $body = '<b style="color: #000000;">'.$cliente.'</b><br/><br/>';
    $body .= '<b style="color: #000000;">Nome: </b>'.$nome.'<br/>';
    $body .= '<b style="color: #000000;">E-mail: </b>'.$email.'<br/>';
    $body .= '<b style="color: #000000;">Telefone: </b>'.$telefone.'<br/><br/>';
    $body .= '<b style="color: #000000;">Mensagem: </b><br/>';
    $body .= $mensagem.'<br/><br/>';
     
    // $mail->SMTPOptions = array(
    //    'ssl' => array(
    //        'verify_peer' => false,
    //        'verify_peer_name' => false,
    //        'allow_self_signed' => true
    //     )
    // );
     
    $mail->IsSMTP();        // Ativar SMTP
    $mail->SMTPDebug = 0;       // Debugar: 1 = erros e mensagens, 2 = mensagens apenas
    $mail->SMTPAuth = true;     // Autenticação ativada
    $mail->Charset   = 'utf8_decode()';
    $mail->SMTPSecure = 'ssl';    // SSL REQUERIDO pelo GMail
    $mail->Host = 'smtp.gmail.com';    // SMTP utilizado
    $mail->Port = 465;  
    $mail->Username = 'scfsitebr@gmail.com';
    $mail->Password = 'H7@eh1Sflq';
    $mail->AddReplyTo($email, $nome);   
    $mail->From = utf8_decode($email);
    $mail->FromName = utf8_decode($nome);
    $mail->IsHTML(true); // send as HTML  
    $mail->Subject  = utf8_decode($nome);
    $mail->Body  = utf8_decode($body);

    $to = "diego@zarov.com.br"; //Para   
     
    $mail->AddAddress($to);
     
    if(!$mail->Send()){
       echo '<script>alert("Erro ao enviar formulário: ")</script>' . print($mail->ErrorInfo);
    }else{
      echo '<script>alert("Mensagem enviada com sucesso.")</script>';
    } 
  }







  if (isset($_POST['sendCv'])){
    
    $mail = new PHPMailer();

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $arquivo = $_FILES['arquivo'];

    /* Insira aqui a pasta que deseja salvar o arquivo*/
    $uploaddir = 'upload/';
    $uploadfile = $uploaddir . $arquivo['name'];
    $ext = pathinfo($arquivo['name'], PATHINFO_EXTENSION);
    $newname = $nome.'.'.$ext;
    if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $uploadfile)){
      $mail->AddAttachment($uploadfile, $newname);      
    }
    $body = '<b style="color: #000000;">Curriculo recebido de: '.$nome.' </b><br/>';    
    $body .= '<b style="color: #000000;">E-mail: '.$email.' </b><br/>';    

    // $mail->SMTPOptions = array(
    //    'ssl' => array(
    //        'verify_peer' => false,
    //        'verify_peer_name' => false,
    //        'allow_self_signed' => true
    //     )
    // );
     
    $mail->IsSMTP();        // Ativar SMTP
    $mail->SMTPDebug = 0;       // Debugar: 1 = erros e mensagens, 2 = mensagens apenas
    $mail->SMTPAuth = true;     // Autenticação ativada
    $mail->Charset   = 'utf8_decode()';
    $mail->SMTPSecure = 'ssl';    // SSL REQUERIDO pelo GMail
    $mail->Host = 'smtp.gmail.com';    // SMTP utilizado
    $mail->Port = 465;  
    $mail->Username = 'scfsitebr@gmail.com';
    $mail->Password = 'H7@eh1Sflq';
    $mail->AddReplyTo($email, $nome);   
    $mail->From = utf8_decode($email);
    $mail->FromName = utf8_decode($nome);
    $mail->IsHTML(true); // send as HTML  
    $mail->Subject  = utf8_decode($nome);
    $mail->Body  = utf8_decode($body);
   
    $to = "diego@zarov.com.br"; //Para   
     
    $mail->AddAddress($to);
     
    if(!$mail->Send()){
       echo '<script>alert("Erro ao enviar formulário: ")</script>' . print($mail->ErrorInfo);
    }else{
      echo '<script>alert("Mensagem enviada com sucesso.")</script>';
    } 
  }

?>