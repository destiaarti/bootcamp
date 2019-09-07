
<?php

function hitungKembalian($uang1,$harga){
$Uang=$harga-$uang1;
$bagi1=100000;
$Pecahan1=$Uang/$bagi1;
$Sisa1=$Uang%$bagi1;
$bagi2=50000;
$Pecahan2=$Sisa1/$bagi2;
$Sisa2=$Sisa1%$bagi2;
$bagi3=20000;
$Pecahan3=$Sisa2/$bagi3;
$Sisa3=$Sisa2%$bagi3;
$bagi4=10000;
$Pecahan4=$Sisa3/$bagi4;
$Sisa4=$Sisa3%$bagi4;
$bagi5=5000;
$Pecahan5=$Sisa4/$bagi5;
$Sisa5=$Sisa4%$bagi5;
$bagi6=2000;
$Pecahan6=$Sisa5/$bagi6;
$Sisa6=$Sisa5%$bagi6;
$bagi7=1000;
$Pecahan7=$Sisa6/$bagi7;
$Sisa7=$Sisa6%$bagi7;
$bagi8=500;
$Pecahan8=$Sisa7/$bagi8;
$Sisa8=$Sisa7%$bagi8;
$bagi9=200;
$Pecahan9=$Sisa8/$bagi9;
$Sisa9=$Sisa8%$bagi9;
$bagi10=100;
$Pecahan10=$Sisa9/$bagi10;
$Sisa10=$Sisa9%$bagi10;

function cek($angka,$bagi){
	if($angka<=0.9){

	}
	else{
		echo (int) $angka.' x '.$bagi;
	echo '<br/>';}
	
}

echo 'Jumlah Uang:Rp.'.number_format($Uang),'<br/>';
echo '<br/>';
cek($Pecahan1,$bagi1);
cek($Pecahan2,$bagi2);
cek($Pecahan3,$bagi3);
cek($Pecahan4,$bagi4);
cek($Pecahan5,$bagi5);
cek($Pecahan6,$bagi6);
cek($Pecahan7,$bagi7);
cek($Pecahan8,$bagi8);
cek($Pecahan9,$bagi9);
cek($Pecahan10,$bagi10);

}
hitungKembalian(15500, 50000);
?> 