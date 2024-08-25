

<body style="background-color: black; color:white; font-size:large">
    
</body>

<?php 

function menghitungDiagonal($matriks){
    $n = 0;
    $diagonalUtama = 0;
    $diagonalSekunder = 0;

    foreach ($matriks as $key => $value) {
        $n = $matriks[$key][$key];
    }

    for($i=0; $i<$n; $i++){
        $diagonalUtama += $matriks[$i][$i];
        $diagonalSekunder += $matriks[$i][$n-1-$i];
    }

    if($n % 2 !==0){
        $diagonalSekunder -= $matriks[$n/2  -0.5][$n/2  -0.5];
    }
    
    echo $diagonalUtama ;
    echo $diagonalSekunder;
    echo $diagonalUtama + $diagonalSekunder;
}


$matriks = [
    [6,2,8],
    [1,7,4],
    [8,3,3],
];

menghitungDiagonal($matriks);

?>
