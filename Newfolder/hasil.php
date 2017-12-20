<!DOCTYPE html>
<html>
<head>
	<title>Sistem Pendukung Keputusan</title>
</head>
<body>


<?php

$p1 = $_POST['p1'];
$p2 = $_POST['p2'];
$p3 = $_POST[''];
$k1 = "Cantik";
$k2 = "Pendidikan";
$k3 = "Kaya";

$n = 3;

switch ($n) {
	case 1:
		$ri = 0;
		break;
	case 2:
		$ri = 0;
		break;
	case 3:
		$ri = 0.58;
		break;
	case 4:
		$ri = 0.9;
		break;
	case 5:
		$ri = 1.12;
		break;
	case 6:
		$ri = 1.24;
		break;
	case 7:
		$ri = 1.32;
		break;
	case 8:
		$ri = 1.41;
		break;
	case 9:
		$ri = 1.45;
		break;
	case 10:
		$ri = 1.49;
		break;
	default:
		echo "tidak ada";
		break;
}

//mengisi matriks kriteria
$cc=1;     $cp=$p1;     $ck=$p2;
$pc=1/$cp; $pp=1;     $pk=$p3;
$kc=1/$ck; $kp=1/$pk; $kk=1;

//menjumlahkan kriteria secara vertikal
$jc = $cc + $pc + $kc;
$jp = $cp + $pp + $kp;
$jk = $ck + $pk + $kk;

//menghitung priority vector
$pvc = ($cc/$jc + $cp/$jp + $ck/$jk) / 3;
$pvp = ($pc/$jc + $pp/$jp + $pk/$jk) / 3;
$pvk = ($kc/$jc + $kp/$jp + $kk/$jk) / 3;

//menghitung jumlah priority vector
$jpv = $pvc + $pvp + $pvk;
$w1 = $pvc;
$w2 = $pvp;
$w3 = $pvk;

//menghitung Priciple Eigen Value
$pev = $jc*$pvc + $jp*$pvp + $jk*$pvk;

$ci = ($pev-$n)/($n-1);
$cr = ($ci / 0.58)*100;
?>

Paired-Comparasion Matrix of Kriteria
<table border="1" cellpadding="5" cellspacing="0">
	<tr>
		<td width="100" align="center">Kriteria</td>
		<td width="100" align="center"><b><?php echo $k1; ?></b></td>
		<td width="100" align="center"><b><?php echo $k2; ?></b></td>
		<td width="100" align="center"><b><?php echo $k3; ?></b></td>
		<td width="100" align="center"><b>Priority Vector</b></td>
	</tr>
	<tr>
		<td><b><?php echo $k1; ?></b></td>
		<td align="center"><?php echo round($cc, 2); ?></td>
		<td align="center"><?php echo round($cp, 2); ?></td>
		<td align="center"><?php echo round($ck, 2); ?></td>
		<td align="center"><?php echo round($pvc, 4); ?></td>
	</tr>
	<tr>
		<td><b><?php echo $k2; ?></b></td>
		<td align="center"><?php echo round($pc, 2); ?></td>
		<td align="center"><?php echo round($pp, 2); ?></td>
		<td align="center"><?php echo round($pk, 2); ?></td>
		<td align="center"><?php echo round($pvp, 4); ?></td>
	</tr>
	<tr>
		<td><b><?php echo $k3; ?></b></td>
		<td align="center"><?php echo round($kc, 2); ?></td>
		<td align="center"><?php echo round($kp, 2); ?></td>
		<td align="center"><?php echo round($kk, 2); ?></td>
		<td align="center"><?php echo round($pvk, 4); ?></td>
	</tr>
	<tr>
		<td><b>Jumlah</b></td>
		<td align="center"><?php echo round($jc, 4); ?></td>
		<td align="center"><?php echo round($jp, 4);?></td>
		<td align="center"><?php echo round($jk, 4); ?></td>
		<td align="center"><?php echo round($jpv, 4); ?></td>
	</tr>
</table>
<table width="550">
	<tr>
		<td><b>Priciple Eigen Value(lmax)</b></td>
		<td></td>
		<td></td>
		<td align="right"><?php echo round($pev, 3); ?></td>
	</tr>	
	<tr>
		<td><b>Consistency Index CI</b></td>
		<td></td>
		<td></td>
		<td align="right"><?php echo round($ci, 3); ?></td>
	</tr>	
	<tr>
		<td><b>Consistency Ratio RC</b></td>
		<td></td>
		<td></td>
		<td  align="right"><?php echo round($cr, 2)."%"; ?></td>
	</tr>	
</table>


<?php

$p1 = 4;
$p2 = 3;
$p3 = 0.5;
$a1 = "Yayu";
$a2 = "Grace";
$a3 = "Fitri";

$n = 3;

switch ($n) {
	case 1:
		$ri = 0;
		break;
	case 2:
		$ri = 0;
		break;
	case 3:
		$ri = 0.58;
		break;
	case 4:
		$ri = 0.9;
		break;
	case 5:
		$ri = 1.12;
		break;
	case 6:
		$ri = 1.24;
		break;
	case 7:
		$ri = 1.32;
		break;
	case 8:
		$ri = 1.41;
		break;
	case 9:
		$ri = 1.45;
		break;
	case 10:
		$ri = 1.49;
		break;
	default:
		echo "tidak ada";
		break;
}

//mengisi matriks kecantikan
$cc=1;     $cp=$p1;     $ck=$p2;
$pc=1/$cp; $pp=1;     $pk=$p3;
$kc=1/$ck; $kp=1/$pk; $kk=1;

//menjumlahkan kecantikan secara vertikal
$jc = $cc + $pc + $kc;
$jp = $cp + $pp + $kp;
$jk = $ck + $pk + $kk;

//menghitung priority vector
$pvc = ($cc/$jc + $cp/$jp + $ck/$jk) / 3;
$pvp = ($pc/$jc + $pp/$jp + $pk/$jk) / 3;
$pvk = ($kc/$jc + $kp/$jp + $kk/$jk) / 3;

//menghitung jumlah priority vector
$jpv = $pvc + $pvp + $pvk;
$wcy = $pvc;
$wcg = $pvp;
$wcf = $pvk;

//menghitung Priciple Eigen Value
$pev = $jc*$pvc + $jp*$pvp + $jk*$pvk;

$ci = ($pev-$n)/($n-1);
$cr = ($ci / 0.58)*100;
?>
Paired-Comparasion Matrix of Kecantikan
<table border="1" cellpadding="5" cellspacing="0">
	<tr>
		<td width="100" align="center">Kriteria</td>
		<td width="100" align="center"><b><?php echo $a1; ?></b></td>
		<td width="100" align="center"><b><?php echo $a2; ?></b></td>
		<td width="100" align="center"><b><?php echo $a3; ?></b></td>
		<td width="100" align="center"><b>Priority Vector</b></td>
	</tr>
	<tr>
		<td><b><?php echo $a1; ?></b></td>
		<td align="center"><?php echo round($cc, 2); ?></td>
		<td align="center"><?php echo round($cp, 2); ?></td>
		<td align="center"><?php echo round($ck, 2); ?></td>
		<td align="center"><?php echo round($pvc, 4); ?></td>
	</tr>
	<tr>
		<td><b><?php echo $a2; ?></b></td>
		<td align="center"><?php echo round($pc, 2); ?></td>
		<td align="center"><?php echo round($pp, 2); ?></td>
		<td align="center"><?php echo round($pk, 2); ?></td>
		<td align="center"><?php echo round($pvp, 4); ?></td>
	</tr>
	<tr>
		<td><b><?php echo $a3; ?></b></td>
		<td align="center"><?php echo round($kc, 2); ?></td>
		<td align="center"><?php echo round($kp, 2); ?></td>
		<td align="center"><?php echo round($kk, 2); ?></td>
		<td align="center"><?php echo round($pvk, 4); ?></td>
	</tr>
	<tr>
		<td><b>Jumlah</b></td>
		<td align="center"><?php echo round($jc, 4); ?></td>
		<td align="center"><?php echo round($jp, 4);?></td>
		<td align="center"><?php echo round($jk, 4); ?></td>
		<td align="center"><?php echo round($jpv, 4); ?></td>
	</tr>
</table>
<table width="550">
	<tr>
		<td><b>Priciple Eigen Value(lmax)</b></td>
		<td></td>
		<td></td>
		<td align="right"><?php echo round($pev, 3); ?></td>
	</tr>	
	<tr>
		<td><b>Consistency Index CI</b></td>
		<td></td>
		<td></td>
		<td align="right"><?php echo round($ci, 3); ?></td>
	</tr>	
	<tr>
		<td><b>Consistency Ratio RC</b></td>
		<td></td>
		<td></td>
		<td  align="right"><?php echo round($cr, 2)."%"; ?></td>
	</tr>	
</table>

<?php

$p1 = 0.33;
$p2 = 0.25;
$p3 = 0.5;
$a1 = "Yayu";
$a2 = "Grace";
$a3 = "Fitri";

$n = 3;

switch ($n) {
	case 1:
		$ri = 0;
		break;
	case 2:
		$ri = 0;
		break;
	case 3:
		$ri = 0.58;
		break;
	case 4:
		$ri = 0.9;
		break;
	case 5:
		$ri = 1.12;
		break;
	case 6:
		$ri = 1.24;
		break;
	case 7:
		$ri = 1.32;
		break;
	case 8:
		$ri = 1.41;
		break;
	case 9:
		$ri = 1.45;
		break;
	case 10:
		$ri = 1.49;
		break;
	default:
		echo "tidak ada";
		break;
}

//mengisi matriks pendidikan
$cc=1;     $cp=$p1;     $ck=$p2;
$pc=1/$cp; $pp=1;     $pk=$p3;
$kc=1/$ck; $kp=1/$pk; $kk=1;

//menjumlahkan pendidikan secara vertikal
$jc = $cc + $pc + $kc;
$jp = $cp + $pp + $kp;
$jk = $ck + $pk + $kk;

//menghitung priority vector
$pvc = ($cc/$jc + $cp/$jp + $ck/$jk) / 3;
$pvp = ($pc/$jc + $pp/$jp + $pk/$jk) / 3;
$pvk = ($kc/$jc + $kp/$jp + $kk/$jk) / 3;

//menghitung jumlah priority vector
$jpv = $pvc + $pvp + $pvk;
$wpy = $pvc;
$wpg = $pvp;
$wpf = $pvk;

//menghitung Priciple Eigen Value
$pev = $jc*$pvc + $jp*$pvp + $jk*$pvk;

$ci = ($pev-$n)/($n-1);
$cr = ($ci / 0.58)*100;
?>
Paired-Comparasion Matrix of Pendidikan
<table border="1" cellpadding="5" cellspacing="0">
	<tr>
		<td width="100" align="center">Kriteria</td>
		<td width="100" align="center"><b><?php echo $a1; ?></b></td>
		<td width="100" align="center"><b><?php echo $a2; ?></b></td>
		<td width="100" align="center"><b><?php echo $a3; ?></b></td>
		<td width="100" align="center"><b>Priority Vector</b></td>
	</tr>
	<tr>
		<td><b><?php echo $a1; ?></b></td>
		<td align="center"><?php echo round($cc, 2); ?></td>
		<td align="center"><?php echo round($cp, 2); ?></td>
		<td align="center"><?php echo round($ck, 2); ?></td>
		<td align="center"><?php echo round($pvc, 4); ?></td>
	</tr>
	<tr>
		<td><b><?php echo $a2; ?></b></td>
		<td align="center"><?php echo round($pc, 2); ?></td>
		<td align="center"><?php echo round($pp, 2); ?></td>
		<td align="center"><?php echo round($pk, 2); ?></td>
		<td align="center"><?php echo round($pvp, 4); ?></td>
	</tr>
	<tr>
		<td><b><?php echo $a3; ?></b></td>
		<td align="center"><?php echo round($kc, 2); ?></td>
		<td align="center"><?php echo round($kp, 2); ?></td>
		<td align="center"><?php echo round($kk, 2); ?></td>
		<td align="center"><?php echo round($pvk, 4); ?></td>
	</tr>
	<tr>
		<td><b>Jumlah</b></td>
		<td align="center"><?php echo round($jc, 4); ?></td>
		<td align="center"><?php echo round($jp, 4);?></td>
		<td align="center"><?php echo round($jk, 4); ?></td>
		<td align="center"><?php echo round($jpv, 4); ?></td>
	</tr>
</table>
<table width="550">
	<tr>
		<td><b>Priciple Eigen Value(lmax)</b></td>
		<td></td>
		<td></td>
		<td align="right"><?php echo round($pev, 3); ?></td>
	</tr>	
	<tr>
		<td><b>Consistency Index CI</b></td>
		<td></td>
		<td></td>
		<td align="right"><?php echo round($ci, 3); ?></td>
	</tr>	
	<tr>
		<td><b>Consistency Ratio RC</b></td>
		<td></td>
		<td></td>
		<td  align="right"><?php echo round($cr, 2)."%"; ?></td>
	</tr>	
</table>


<?php

$p1 = 0.01;
$p2 = 0.1;
$p3 = 10;
$a1 = "Yayu";
$a2 = "Grace";
$a3 = "Fitri";

$n = 3;

switch ($n) {
	case 1:
		$ri = 0;
		break;
	case 2:
		$ri = 0;
		break;
	case 3:
		$ri = 0.58;
		break;
	case 4:
		$ri = 0.9;
		break;
	case 5:
		$ri = 1.12;
		break;
	case 6:
		$ri = 1.24;
		break;
	case 7:
		$ri = 1.32;
		break;
	case 8:
		$ri = 1.41;
		break;
	case 9:
		$ri = 1.45;
		break;
	case 10:
		$ri = 1.49;
		break;
	default:
		echo "tidak ada";
		break;
}

//mengisi matriks kaya
$cc=1;     $cp=$p1;     $ck=$p2;
$pc=1/$cp; $pp=1;     $pk=$p3;
$kc=1/$ck; $kp=1/$pk; $kk=1;

//menjumlahkan kaya secara vertikal
$jc = $cc + $pc + $kc;
$jp = $cp + $pp + $kp;
$jk = $ck + $pk + $kk;

//menghitung priority vector
$pvc = ($cc/$jc + $cp/$jp + $ck/$jk) / 3;
$pvp = ($pc/$jc + $pp/$jp + $pk/$jk) / 3;
$pvk = ($kc/$jc + $kp/$jp + $kk/$jk) / 3;

//menghitung jumlah priority vector
$jpv = $pvc + $pvp + $pvk;
$wky = $pvc;
$wkg = $pvp;
$wkf = $pvk;

//menghitung Priciple Eigen Value
$pev = $jc*$pvc + $jp*$pvp + $jk*$pvk;

$ci = ($pev-$n)/($n-1);
$cr = ($ci / 0.58)*100;
?>
Paired-Comparasion Matrix of Kaya
<table border="1" cellpadding="5" cellspacing="0">
	<tr>
		<td width="100" align="center">Kriteria</td>
		<td width="100" align="center"><b><?php echo $a1; ?></b></td>
		<td width="100" align="center"><b><?php echo $a2; ?></b></td>
		<td width="100" align="center"><b><?php echo $a3; ?></b></td>
		<td width="100" align="center"><b>Priority Vector</b></td>
	</tr>
	<tr>
		<td><b><?php echo $a1; ?></b></td>
		<td align="center"><?php echo round($cc, 2); ?></td>
		<td align="center"><?php echo round($cp, 2); ?></td>
		<td align="center"><?php echo round($ck, 2); ?></td>
		<td align="center"><?php echo round($pvc, 4); ?></td>
	</tr>
	<tr>
		<td><b><?php echo $a2; ?></b></td>
		<td align="center"><?php echo round($pc, 2); ?></td>
		<td align="center"><?php echo round($pp, 2); ?></td>
		<td align="center"><?php echo round($pk, 2); ?></td>
		<td align="center"><?php echo round($pvp, 4); ?></td>
	</tr>
	<tr>
		<td><b><?php echo $a3; ?></b></td>
		<td align="center"><?php echo round($kc, 2); ?></td>
		<td align="center"><?php echo round($kp, 2); ?></td>
		<td align="center"><?php echo round($kk, 2); ?></td>
		<td align="center"><?php echo round($pvk, 4); ?></td>
	</tr>
	<tr>
		<td><b>Jumlah</b></td>
		<td align="center"><?php echo round($jc, 4); ?></td>
		<td align="center"><?php echo round($jp, 4);?></td>
		<td align="center"><?php echo round($jk, 4); ?></td>
		<td align="center"><?php echo round($jpv, 4); ?></td>
	</tr>
</table>
<table width="550">
	<tr>
		<td><b>Priciple Eigen Value(lmax)</b></td>
		<td></td>
		<td></td>
		<td align="right"><?php echo round($pev, 3); ?></td>
	</tr>	
	<tr>
		<td><b>Consistency Index CI</b></td>
		<td></td>
		<td></td>
		<td align="right"><?php echo round($ci, 3); ?></td>
	</tr>	
	<tr>
		<td><b>Consistency Ratio RC</b></td>
		<td></td>
		<td></td>
		<td  align="right"><?php echo round($cr, 2)."%"; ?></td>
	</tr>	
</table>

<br>

Overall Composite Weight
<table border="1" cellpadding="5" cellspacing="0">
	<tr>
		<td></td>
		<td width="100" align="center"><b>Weight</b></td>
		<td width="100" align="center"><b><?php echo $a1; ?></b></td>
		<td width="100" align="center"><b><?php echo $a2; ?></b></td>
		<td width="100" align="center"><b><?php echo $a3; ?></b></td>
	</tr>
	<tr>
		<td><b><?php echo $k1; ?></b></td>
		<td align="center"><?php echo round($w1, 4); ?></td>
		<td align="center"><?php echo round($wcy, 4); ?></td>
		<td align="center"><?php echo round($wcg, 4); ?></td>
		<td align="center"><?php echo round($wcf, 4); ?></td>
	</tr>
	<tr>
		<td><b><?php echo $k2; ?></b></td>
		<td align="center"><?php echo round($w2, 4); ?></td>
		<td align="center"><?php echo round($wpy, 4); ?></td>
		<td align="center"><?php echo round($wpg, 4); ?></td>
		<td align="center"><?php echo round($wpf, 4); ?></td>
	</tr>
	<tr>
		<td><b><?php echo $k3; ?></b></td>
		<td align="center"><?php echo round($w3, 4); ?></td>
		<td align="center"><?php echo round($wky, 4); ?></td>
		<td align="center"><?php echo round($wkg, 4); ?></td>
		<td align="center"><?php echo round($wkf, 4); ?></td>
	</tr>
	<?php
		$cwy = $w1*$wcy + $w1*$wpy +$w1*$wky;
		$cwg = $w2*$wcg + $w2*$wpg +$w2*$wkg;
		$cwf = $w3*$wcf + $w3*$wpf +$w3*$wkf;
		
	?>
	<tr>
		<td><b>Composite Weight</b></td>
		<td align="center"></td>
		<td align="center"><?php echo round($cwy, 4);?></td>
		<td align="center"><?php echo round($cwg, 4); ?></td>
		<td align="center"><?php echo round($cwf, 4); ?></td>
	</tr>
</table>
<?php

		$a =9;
		$b= 9;
		$c =5;

	if ($cwy > $cwg) {
		if ($cwy > $cwf) {
			echo "Pemenangnya adalah ".$a1;
		}
	} elseif ($cwg > $cwf) {
		echo "Pemenangnya adalah ".$a2;
	} else {
		echo "Pemenangnya adalah ".$a3;
	}
	

?>
</body>
</html>