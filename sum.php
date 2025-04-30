<?php
function add($x, $y){
    return $x + $y;
}

function subst($x, $y){
    return $x - $y;
}

function multi($x, $y){
    return $x * $y;
}

function div($x, $y){
    return $x / $y ;
}

$f1 = [1, 12, 2, 10];
$operator = ["+", "-", "x", ":"];
$f2 = [5, 6, 9, 2];


foreach ($operator as $f => $op) {
    $x = $f1[$f];
    $y = $f2[$f];

    if ($op == "+") {
        $hasil = add($x, $y);
    } elseif ($op == "-") {
        $hasil = subst($x, $y);
    } elseif ($op == "x") {
        $hasil = multi($x, $y);
    } elseif ($op == ":") {
        $hasil = div($x, $y);
    } else {
        $hasil = "Operator tidak dikenali.";
    }

    echo "$x $op $y = $hasil<br/>";
}
?>