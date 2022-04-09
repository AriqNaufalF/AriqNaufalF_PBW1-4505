<?php
function is_prime($num)
{
    $flag = 0;
    if ($num == 1 || $num == 0) {
        $flag = 1;
    }
    $square = floor(sqrt($num));
    for ($i = 2; $i <= $square; $i++) {
        if ($num % $i == 0) {
            $flag = 1;
            break;
        }
    }

    if ($flag == 0) {
        return true;
    } else {
        return false;
    }
}

function cek_prima($n, $m)
{
    if ($n > $m) {
        echo "<br>Nilai maksimum harus lebih tinggi dari nilai minimum";
    } else {
        $total = 0;
        for ($i = $n; $i < $m; $i++) {
            if (is_prime($i)) {
                echo $i . ',';
                $total++;
            }
        }
        echo "<br>Jumlah bilangan prima " . $total;
    }
}

cek_prima(1, 10);
