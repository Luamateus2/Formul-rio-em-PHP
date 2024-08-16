<?php
if($_SERVER["REQUEST_METHOD"]==_POST){ 
    $nome = addcslashes($_POST['nome']);
    $email =addcslashes($_POST['email']);
    $telefone = addcslashes($_POST['telefone']);
    $mensagem = isset($_POST['exampleFormControlTextarea1'])? $_POST['exampleFormControlTextarea1'] : '';
    $destino = "luanakarolineliramateus2021@gmail.com";
    $assunto = "Coleta de dados - Forms";

}

$corpo = "Nome : ".$nome."\n "."E-mail:".$email."\n"."Telefone:".$telefone."\n"."mensagem: ".$mensagem;
$cabeca = "From teste@ineext.com"."\n"."reply-to : ".$email."\n"."X=Mailer:PHP/".phpversion();
if(mail($destino,$assunto,$cabeca)){
  echo("E-mail enviado com sucesso!");
}else{
    echo("Houve um erro ao enviarl o e-mail");
}


?>