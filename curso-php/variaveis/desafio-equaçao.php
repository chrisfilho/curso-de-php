 <div class="titulo">desafio equaçao</div>

 <?php
    $bloco_a = ((1 - 5) * (2 - 7) / 2) ** 2;
    $bloco_b = (6 * (3 + 2)) ** 2 / (3 * 2);
    echo $bloco_a, '<br>';
    echo $bloco_b, '<br>';
    $bloco_c = ($bloco_b - $bloco_a);
    echo $bloco_c, '<br>';
    $bloco_d = ($bloco_c ** 3) / (10 ** 3);
    echo " o resultado e de " . $bloco_d . "!";