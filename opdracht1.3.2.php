<!--  Dit is de code voor huiswerkopdracht 1.3 voor programmeren 2
      Bevat een tabel met eigenschappen van 10 verschillende albums-->

<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>


<?php
///array met albums en bijbehorendee eigenschappen
$albums = array(
    1 => array(
        "artiest" => "Wallows",
        "album" => "Nothing Happens",
        "datum" => "2019",
        "tracks" => "11",
        "genre" => "Alternative",
    ),
    2 => array(
        "artiest" => "Tamino",
        "album" => "Amir",
        "datum" => "2018",
        "tracks" => "12",
        "genre" => "Indie",
    ),
    3 => array(
        "artiest" => "Tamino",
        "album" => "Amir",
        "datum" => "2018",
        "tracks" => "12",
        "genre" => "Indie",
    ),
    4 => array(
        "artiest" => "Sufjan Stevens",
        "album" => "Carrie & Lowell",
        "datum" => "2015",
        "tracks" => "11",
        "genre" => "Indie",
    ),
    5=> array(
        "artiest" => "Pink Floyd",
        "album" => "Wish you were here [remastered]",
        "datum" => "1975",
        "tracks" => "5",
        "genre" => "Rock",
    ),
    6=> array(
        "artiest" => "David Bowie", "album" => "Hunky Dory", "datum" => "1971", "tracks" => "11", "genre" => "Rock",
    ),
    7=> array(
        "artiest" => "Agnes Obel", "album" => "Philharmonics", "datum" => "2010", "tracks" => "13", "genre" => "Folk",
    ),
    8=> array(
        "artiest" => "Gorillaz", "album" => "Plastic Beach", "datum" => "2010", "tracks" => "16", "genre" => "Alternative rock",
    ),
    9=> array(
        "artiest" => "Hozier", "album" => "Wasteland baby", "datum" => "2019", "tracks" => "14", "genre" => "Indie",
    ),
    10=> array(
        "artiest" => "Grimes", "album" => "Art angels", "datum" => "2015", "tracks" => "11", "genre" => "Electropop",
    )
);

?>

<!--  Tabel waar de albums en eigenschappen worden weergegeven -->
<table>
    <th>    </th>
    <th>Artiesten</th>
    <th>Album</th>
    <th>Datum</th>
    <th>Tracks</th>
    <th>Genre</th>


    <!--  for each loop to echo table with albums -->
    <?php foreach ($albums as $value => $album): ?>
        <tr>
            <td> <?=$value?></td>
            <td> <?=$album['artiest']?> </td>
            <td> <?=$album['album']?> </td>
            <td> <?=$album['datum']?> </td>
            <td> <?=$album['tracks']?> </td>
            <td> <?=$album['genre']?> </td>
        </tr>
    <?php endforeach; ?>


</table>
</body>
</html>