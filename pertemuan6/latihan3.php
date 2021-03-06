<?php
/*
Faisal Ibnul Hakim
203040027
https://github.com/FaisalHakim081/pw2021_203040027
Pertemuan 6 - 4 Maret 2021
Associative Array
*/
?>

<?php
$figure = [
        [
            "nama" => "Rimuru Tempest",
            "anime"  => "Tensei Shitara Slime Datta Ken",
            "produksi" => "Phat!",
            "harga" => "IDR 2,600,000",
            "gambar" => "rimuru.jpg"
        ],
        [
            "nama" => "Sakurajima Mai",
            "anime"  => "Seishun Buta Yarou wa Bunny Girl Senpai no Yume wo Minaiu",
            "produksi" => "ANIPLEX+",
            "harga" => "IDR 2,850,000",
            "gambar" => "mai.jpg"
        ],
        [
            "nama" => "Kaori Miyazono",
            "anime"  => "Shigatsu wa Kimi no Uso",
            "produksi" => "ANIPLEX+",
            "harga" => "IDR 2,250,000",
            "gambar" => "kaori.jpg"
        ],
        [
            "nama" => "Nezuko Kamado",
            "anime"  => "Kimetsu no Yaiba ",
            "produksi" => "Good Smile Company",
            "harga" => "IDR 500,000",
            "gambar" => "nezuko.jpg"
        ],
        [
            "nama" => "Eris Boreas Greyrat",
            "anime"  => "Mushoku Tensei: Isekai Ittara Honki Dasu",
            "produksi" => "Union Creative",
            "harga" => "IDR 2,310,000",
            "gambar" => "eris.jpg"
        ],
        [
            "nama" => "Megumin",
            "anime"  => "Kono Subarashii Sekai ni Shukufuku wo!",
            "produksi" => "Chara Ani",
            "harga" => "IDR 2,800,000",
            "gambar" => "megumin.jpg"
        ],
        [
            "nama" => "Senku Ishigami",
            "anime"  => "Dr. Stone",
            "produksi" => "Bandai Spirits",
            "harga" => "IDR 760,000",
            "gambar" => "senku.jpg"
        ],
        [
            "nama" => "Naofumi Iwatani",
            "anime"  => "Tate no Yuusha no Nariagari",
            "produksi" => "Good Smile Company",
            "harga" => "IDR 520,000",
            "gambar" => "naofumi.jpg"
        ],
        [
            "nama" => "Kurumi Tokisaki",
            "anime"  => "Date A Live",
            "produksi" => "Alter",
            "harga" => "IDR 2,650,000",
            "gambar" => "kurumi.jpg"
        ],
        [
            "nama" => "Aliceliese Lou Nebulis IX",
            "anime"  => "Kimi to Boku no Saigo no Senjou, Aruiwa Sekai ga Hajimaru Seisen",
            "produksi" => "F:NEX",
            "harga" => "IDR 4,150,000",
            "gambar" => "alice.jpg"
        ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Action Figure</title>
</head>
<body>
<h1>Action Figure</h1>


<?php foreach ($figure as $fr) : ?>
<ul>
    <li>
        <img src="img/<?= $fr["gambar"]; ?>">
    </li>
    <li>Nama               : <?= $fr["nama"]; ?></li>
    <li>Series Anime       : <?= $fr["anime"]; ?></li>
    <li>Diproduksi Oleh    : <?= $fr["produksi"]; ?></li>
    <li>harga              : <?= $fr["harga"]; ?></li>

</ul>
<?php endforeach; ?>
</body>
</html>