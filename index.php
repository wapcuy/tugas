<?php 

echo "Hewan-Hewan <br>";

class Kucing{
	public $nama, $jumlah_kaki, $bisa_terbang, $suara;

}

$Kucing = new Kucing;
$Kucing->nama = "Keke";
$Kucing->jumlah_kaki = "4";
$Kucing->bisa_terbang = "tidak";
$Kucing->suara = "meaww meeaww";

echo "Kucing <br>";
echo " Nama: $Kucing->nama";
echo "<br>";
echo " Jumlah kaki: $Kucing->jumlah_kaki";
echo "<br>";
echo " Bisa terbang: $Kucing->bisa_terbang";
echo "<br>";
echo " Suara: $Kucing->suara";
echo "<hr>"; 

class Anjing{
	public $nama, $jumlah_kaki, $bisa_terbang, $suara;
}

$Anjing = new Anjing;
$Anjing->nama = "GokGok";
$Anjing->jumlah_kaki = "4";
$Anjing->bisa_terbang = "tidak";
$Anjing->suara = "Guk Guk Guk";

echo "Anjing <br>";
echo " Nama: $Anjing->nama";
echo "<br>";
echo " Jumlah kaki: $Anjing->jumlah_kaki";
echo "<br>";
echo " Bisa terbang: $Anjing->bisa_terbang";
echo "<br>";
echo " Suara: $Anjing->suara";
echo "<hr>";

class Angsa{
	public $nama, $jumlah_kaki, $bisa_terbang, $suara;

}

$Angsa = new Angsa;
$Angsa->nama = "Miya";
$Angsa->jumlah_kaki = "2";
$Angsa->bisa_terbang = "tidak";
$Angsa->suara = "Kwaaak Kwaaak";

echo "Angsa <br>";
echo " Nama: $Angsa->nama";
echo "<br>";
echo " Jumlah kaki: $Angsa->jumlah_kaki";
echo "<br>";
echo " Bisa terbang: $Angsa->bisa_terbang";
echo "<br>";
echo " Suara: $Angsa->suara";
echo "<hr>"; 

class Elang{
	public $nama, $jumlah_kaki, $bisa_terbang, $suara;

}

$Elang = new Elang;
$Elang->nama = "Garit";
$Elang->jumlah_kaki = "2";
$Elang->bisa_terbang = "iya";
$Elang->suara = "Miiiiiip";

echo "Elang <br>";
echo " Nama: $Elang->nama";
echo "<br>";
echo " Jumlah kaki: $Elang->jumlah_kaki";
echo "<br>";
echo " Bisa terbang: $Elang->bisa_terbang";
echo "<br>";
echo " Suara: $Elang->suara";
echo "<hr>";