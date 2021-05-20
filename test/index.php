<?php

require __DIR__ . '/../vendor/autoload.php';

use Notification\Email;

$novoEmail = new Email(2, "smtp.office365.com", "cursojoao@outlook.com", "joao1415", "starttls", "587", "cursojoao@outlook.com", "Equipe Jao");
$novoEmail->sendMail("So pra saber se vc me ama", "<p> Eu amo voce com todo meu coração <b>casa cmg?</b></p>", "cursojoao@outlook.com", "Joao Vitor", "biaaraujocampos@icloud.com", "Joao");

var_dump($novoEmail);
