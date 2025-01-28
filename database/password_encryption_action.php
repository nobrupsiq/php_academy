<?php 

$hash = '$2y$10$7Q.hcxb9ZxLOxeuEnp5a2.rEQSKNYVBDshL4blypqrM0mvmC7jCO2';
$senha = 1234;

if(password_verify($senha, $hash)) {
    echo 'senha correta!';
} else {
    echo 'senha errada!';
}
