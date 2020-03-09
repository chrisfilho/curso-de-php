<div class="titulo">aritimeticas</div>

<?php
echo 1 + 1, '<br>';
var_dump(1 + 1);
echo '<br>';
echo 1 + 2.3, '<br>';
echo 10 - 2, '<br>';
echo 2 * 5, '<br>';
echo 7 / 4, '<br>';
echo intdiv(7, 4), '<br>'; // resultado inteiro
echo round(7 / 4), '<br>'; // arredondar
echo 7 % 4, '<br>';
echo 7 % 2, '<br>';
echo 8 % 4, '<br>';
echo 7 / 0, '<br>'; // valor infinito
echo 4 ** 2, '<br>'; //exponenciaçao

// precendencia de operadores
// () => ** => / * % => + -
echo '<p>Precedencia</p>';
echo 2 + 3 * 4, '<br>';
echo (2 + 3) * 4, '<br>';
echo 2 + 3 * 4 ** 2, '<br>';
echo ((2 + 3) * 4) ** 2;