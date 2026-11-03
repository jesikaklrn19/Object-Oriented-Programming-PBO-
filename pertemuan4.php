<?php

class BangunDatar
{
    public $phi;

    // Konstanta phi disimpan di dalam constructor
    function __construct()
    {
        $this->phi = 3.14;
    }

    function persegi($sisi)
    {
        $luas = $sisi * $sisi;
        $keliling = 4 * $sisi;

        echo "<b>PERSEGI</b><br>";
        echo "Sisi: $sisi<br>";
        echo "Luas: $sisi x $sisi = $luas<br>";
        echo "Keliling: 4 x $sisi = $keliling<br><br>";
    }

    function persegiPanjang($panjang, $lebar)
    {
        $luas = $panjang * $lebar;
        $keliling = 2 * ($panjang + $lebar);

        echo "<b>PERSEGI PANJANG</b><br>";
        echo "Panjang: $panjang<br>";
        echo "Lebar: $lebar<br>";
        echo "Luas: $panjang x $lebar = $luas<br>";
        echo "Keliling: 2 x ($panjang + $lebar) = $keliling<br><br>";
    }

    function segitiga($alas, $tinggi, $sisi2, $sisi3)
    {
        $luas = 0.5 * $alas * $tinggi;
        $keliling = $alas + $sisi2 + $sisi3;

        echo "<b>SEGITIGA</b><br>";
        echo "Alas: $alas<br>";
        echo "Tinggi: $tinggi<br>";
        echo "Sisi 2: $sisi2<br>";
        echo "Sisi 3: $sisi3<br>";
        echo "Luas: 1/2 x $alas x $tinggi = $luas<br>";
        echo "Keliling: $alas + $sisi2 + $sisi3 = $keliling<br><br>";
    }

    function lingkaran($jariJari)
    {
        $luas = $this->phi * $jariJari * $jariJari;
        $keliling = 2 * $this->phi * $jariJari;

        echo "<b>LINGKARAN</b><br>";
        echo "Phi: $this->phi<br>";
        echo "Jari-jari: $jariJari<br>";
        echo "Luas: $this->phi x $jariJari x $jariJari = $luas<br>";
        echo "Keliling: 2 x $this->phi x $jariJari = $keliling<br><br>";
    }

    function trapesium($sisiAtas, $sisiBawah, $tinggi, $kaki1, $kaki2)
    {
        $luas = 0.5 * ($sisiAtas + $sisiBawah) * $tinggi;
        $keliling = $sisiAtas + $sisiBawah + $kaki1 + $kaki2;

        echo "<b>TRAPESIUM</b><br>";
        echo "Sisi atas: $sisiAtas<br>";
        echo "Sisi bawah: $sisiBawah<br>";
        echo "Tinggi: $tinggi<br>";
        echo "Kaki 1: $kaki1<br>";
        echo "Kaki 2: $kaki2<br>";
        echo "Luas: 1/2 x ($sisiAtas + $sisiBawah) x $tinggi = $luas<br>";
        echo "Keliling: $sisiAtas + $sisiBawah + $kaki1 + $kaki2 = $keliling<br><br>";
    }
}

$bangun = new BangunDatar();

$bangun->persegi(5);
$bangun->persegiPanjang(8, 4);
$bangun->segitiga(6, 4, 5, 5);
$bangun->lingkaran(7);
$bangun->trapesium(4, 10, 4, 5, 5);