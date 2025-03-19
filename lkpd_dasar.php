<?php
$mata_pelajaran = 'DPPLG';
$nilai_kamu     = '83';

if($nilai_kamu >= 90 && $nilai_kamu <= 100){
    echo "Nilai $nilai_kamu = A";
}elseif($nilai_kamu >=80 && $nilai_kamu <= 89){
    echo "Nilai $nilai_kamu = B";
}elseif($nilai_kamu >= 70 && $nilai_kamu <= 79){
    echo "Nilai $nilai_kamu = C";
}elseif($nilai_kamu >= 0 && $nilai_kamu <= 69){
    echo "Nilai $nilai_kamu = D";
}else{
    echo "Nilai wajib diantara 0-100";
}
?>

