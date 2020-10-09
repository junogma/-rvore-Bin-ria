<?php
echo "------------------------------------------------------------------------------------------------<br>";
echo "Teste para Programador - Juliana Martinez - Anexus<br>";
echo "------------------------------------------------------------------------------------------------<br>";
include 'arvore.class.php';
$no1 = New arvore();
$arvore = New funcao();
echo '<pre>';
echo "Inserindo Usuário 1 como Raiz !<br>";
$arvore->inserir($no1, 200); // esquerda
$arvore->inserir($no1, 100); // direita
echo "<br>------------------------------------------------------------------------<br>";
echo "Pontuação Final: <br>";
echo "------------------------------------------------------------------------<br>";
echo "Lado Esquerdo: 200<br>";
echo "Lado Direito: 100 <br>";
echo "------------------------------------------------------------------------<br>";
?>