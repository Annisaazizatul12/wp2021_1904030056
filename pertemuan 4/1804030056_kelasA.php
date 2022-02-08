<!DOCTYPE html>
<html>

<head>
    <title>Pertemuan 4</title>
</head>

<body>
    <h2>Nama : Annisaa Azizatul Munawaroh <br>
        Nim : 1904030056
    </h2>

    <h1>Membuat Array</h1>
    <?php
    $values = array(1,2,3,4,5,60);
    var_dump($values);
    echo"<br>";
    echo($values[4]);
    
    echo"<br>";

    $prodi = ["T.Geomatika","T.Arsitektur Lanskap","T.Pesawat Udara","T.Informatika"];
    var_dump($prodi);
    echo"<br>";
    echo "$prodi[3]";

    echo"<br>";
    //mengganti isi value
    $prodi[0] = "T.Geomatika";
    var_dump($prodi);
    echo"<br>";

    //menambahkan value
    $prodi[] = "T.Arsitektur Lanskap";
    var_dump($prodi);
    echo"<br>";

    //menghapus salah satu value
    unset($prodi[0]);
    var_dump($prodi);
    echo"<br>";

    // menghitung total array
    echo"<br>";
    var_dump(count($prodi));

    ?>

    <hr>
    <h1>Map Dengan Array</h1>
    <?php
    $annisaa = array(
        "id" => "Annisaa",
        "nama" => "Annisaa Azizatul Munawaroh",
        "umur" => "20"
    );
    var_dump($annisaa);
    echo"<br>";

    $nisa = [
        "id" => "Nisa",
        "nama" => "Nisa Zatul",
        "umur" => "20",
        "alamat" => [
            "kota" => "Tangerang",
            "Prov" => "Banten"
            ]
    ];
    var_dump($nisa);

    // echo"<br>";
    // echo("Nama Id :" . $arif["id"]);
    // echo"<br>";
    // echo("Nama Lengkap :" . $arif["nama"]);
    // echo"<br>";
    // echo("Umur :" . $arif["umur"]);
    // echo"<br>";
    // echo("Alamat :" . $arif["alamat"]);

    ?>

    <hr>
    <h1>Operator Matematika</h1>

    <?php
    $tambah = 10 + 10;
    $kurang = 100 - 10;
    $kali = 5 * 5;
    $bagi = 50 / 10;
    $modular = 100 % 3;
    $pangkat = 4 ** 3;

    echo "Tambah    : " . $tambah . "<br>";
    echo "Kurang    : " . $kurang . "<br>";
    echo "Kali      : " . $kali . "<br>";
    echo "Bagi      : " . $bagi . "<br>";
    echo "Modular   : " . $modular . "<br>";
    echo "Pangkat   : " . $pangkat . "<br>";
    ?>

    <hr>
    <h1>Increment</h1>
    <?php
    $a = 10;
    $a++;
    // $a = $a + 1;
    $a++;
    // Decrement
    $a--;

    echo($a);
    ?>

    <hr>
    <?php
    $nama1= "Ahmad Fuad Firmansyah";
    $nama2= "Anisa Nurul Istiqomah";
    $nama3= "Nusirwan Eka Putra";
    $nama4= "Erika Novianti";
    $nama5= "Firdaus Hanafi Pangabean";
    ?>

    <h1>Daftar Nama Anggota Kelas</h1>

    <?php echo "$nama1";?><br>
    <?php echo "$nama2";?><br>
    <?php echo "$nama3";?><br>
    <?php echo "$nama4";?><br>
    <?php echo "$nama5";?><br>

    <hr>
    <h1>Membuat Array di PHP</h1>
    <?php
    // membuat array kosong
    $array1 = array("elemen","elemen");//cara dibawah php 5
    $array2 = ["elemen","elemen"];//diatas php 5

    //membuat array sekaligus mengisinya
    $minuman = array("Jus Alpukat", "Es Cingcau", "Kopi Susu");
    $makanan = array("Rendang", "Gulai Ikan", "Nasi Kuning");
    ?>

    <?php
    var_dump($minuman);
    ?>

    <?php
    print_r($makanan);
    ?>

    <?php
    echo "$makanan[0]";
    ?>

    <hr>
    <?php
    // membuat array mhs
        $nama= ["Ahmad Fuad Firmansyah","Anisa Nurul Istiqomah","Nusirwan Eka Putra","Erika Novianti","Firdaus Hanafi Pangabean"];
    ?>

    <?php
    // menampilkan isi array perulangan for
    for($i=0; $i < count($nama); $i++){
        echo $nama[$i]."<br>";
    }
    ?>
 
    <hr>
    <?php
    //membuat array kumpulan buku
    $books= ["Belajar Web Programming","Desainer Grafis dengan Vektor","Kursus 2 Jam HTML"];

    // menampilkan isi array dengan perulangan foreach
    foreach($books as $book){
        echo $book."<br>";
    }
    ?>

    <hr>
    <h1>Menambahkan Array</h1>
    <?php
    // membuat array
    $hobi = [
     	"Melukis Anime",
     	"Memasak",
     	"Menonton Drakor"
        ];

    // mengganti isi pada indeks ke-2
    $hobi[2] = "Membaca Novel";
    // menambahkan isi pada indeks ke-3
    $hobi [3] = "Memasak";
    // menambahkan isi pada indeks terakhir
    $hobi[] = "Melukis";

    // cetak array dengan perulangan
    foreach ($hobi as $hobiku){
        echo $hobiku."<br>";
    }
    ?>

    <hr>
    <h1>Membuat Array Asosiatif</h1>
    <?php
    // membuat array asosiatif
    $mhs = [
        "nim" => "1904030056",
        "nama" => "Annisaa Azizatul Munawaroh",
        "fakultas" => "Teknik",
        "jurusan" => "Teknik Informatika"
    ];
        
    // mencetak isi array assosiatif
    echo "<h2>Data Mahasiswa</h2>";
    echo "<p>Nim        : ".$mhs["nim"]."</br>";
    echo "<p>Nama       : ".$mhs["nama"]."</br>";
    echo "<p>Fakultas   : ".$mhs["fakultas"]."</br>";
    echo "<p>Jurusan    : ".$mhs["jurusan"]."</br>";
    ?>

    <hr>
    <h1>Array Multi Dimensi</h1>
    <?php
    // ini adalah array dua dimensi
    $matrik = [ 
        [2,3,4],
        [7,5,0],
        [4,3,8],
    ];

    // cara mengakses isinya
    echo $matrik[1][0]; //-> output: 7
    ?>

    <hr>
    <h1>Ini Adalah Array 2 Dimensi</h1>
    <?php
    // membuat array 2 dimensi yang berisi array asosiatif
    $ortus = [
        [ 
            "nama" => "Soleman",
            "hubungan" => "Hubungan : Ayah Kandung"
        ],
        [
            "nama" => "Mutmainah",
            "hubungan" => "Hubungan : Ibu Kandung"
        ],
        [ 
            "nama" => "Nabilah Stabita Najwa Sukarni ",
            "hubungan" => "Hubungan : Adik Perempuan"
        ]
    ];

    // menampilkan array
    foreach($ortus as $ortu){
        echo "<h3>".$ortu["nama"]."</h3>";
        echo "<p>".$ortu["hubungan"]."<p>";
        echo "<hr>";
    }
    ?>
</body>

</html>