<?php

     $nome = addslashes($_post['nome']);
     $email = addslashes($_post['email']);
     $telefone = addslashes($_post['telefone']);

     $para = "nelsonleandro8888@gmail.com";
     $assunto = "Informações do usuário";
     
     $corpo = "Nome: ".$nome."\n"."Email: ".$email."\n"."Telefone: ".$telefone;

     $cabeca ="From: nelsonleandro@gmail.com"."\n"."Reply-to: ".$email"".\n."X=Mailer:PHP/".phpversion();

     if(mail($para,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso!")
     } else {
        echo("Houve um erro ao enviar o e-mail!");
     }

?>