<?php 

/* GERADOR DE SENHAS ONLINE

Objetivo: Gerar senhas seguras de forma simples

Por: Erick Andrade
Facebook: fb.com/erick0day
Instagram: @erickandrade_
Site: erickandrade.com.br
E-mail: erick@erickandrade.com.br

*/

//Caracteres que irao compor a senha

$caracteres = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUWYVXZ!@#$%&*()_+=\/,?.;:?[]{}`'-";

//Aqui vai misturar tudo e gerar a senha

$misturatudo = substr(str_shuffle($caracteres),0,10);

//Mensagem de aviso

$mensagem = "<center><b>Obs</b>: Gera senha com 10 caracteres, para gerar novas senhas atualize a página.</center><br/>";

//Mostrar a mensagem de aviso e senha

echo "$mensagem"; 
echo "<center>Senha gerada: <i>$misturatudo</i></center>";

?>
