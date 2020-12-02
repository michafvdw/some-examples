
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

$albums = array(
    1 => array(
        "artiest" => "Wallows",
        "album" => "Nothing Happens",
        "datum" => "2019",
        "tracks" => "11",
        "genre" => "Alternative",
        "details" =>'<a href="http://localhost/prg02/week%202/detailswallows.php"><u>Details!</u></a>',
    ),
    2 => array(
        "artiest" => "Tamino",
        "album" => "Amir",
        "datum" => "2018",
        "tracks" => "12",
        "genre" => "Indie",
        "details" =>'<a href="edit.php"><u>Details!</u></a>',
    ),
    3 => array(
        "artiest" => "Tamino",
        "album" => "Amir",
        "datum" => "2018",
        "tracks" => "12",
        "genre" => "Indie",
        "details" =>'<a href="edit.php"><u>Details!</u></a>',
    ),
    4 => array(
        "artiest" => "Sufjan Stevens",
        "album" => "Carrie & Lowell",
        "datum" => "2015",
        "tracks" => "11",
        "genre" => "Indie",
        "details" =>'<a href="edit.php"><u>Details!</u></a>',
    ),
    5=> array(
        "artiest" => "Pink Floyd",
        "album" => "Wish you were here [remastered]",
        "datum" => "1975",
        "tracks" => "5",
        "genre" => "Rock",
        "details" =>'<a href="edit.php"><u>Details!</u></a>',
    ),
    6=> array(
        "artiest" => "David Bowie",
        "album" => "Hunky Dory",
        "datum" => "1971",
        "tracks" => "11",
        "genre" => "Rock",
        "details" =>'<a href="edit.php"><u>Details!</u></a>',
    ),
    7=> array(
        "artiest" => "Agnes Obel",
        "album" => "Philharmonics",
        "datum" => "2010",
        "tracks" => "13",
        "genre" => "Folk",
        "details" =>'<a href="edit.php"><u>Details!</u></a>',
    ),
    8=> array(
        "artiest" => "Gorillaz",
        "album" => "Plastic Beach",
        "datum" => "2010",
        "tracks" => "16",
        "genre" => "Alternative rock",
        "details" =>'<a href="edit.php"><u>Details!</u></a>',
    ),
    9=> array(
        "artiest" => "Hozier",
        "album" => "Wasteland baby",
        "datum" => "2019",
        "tracks" => "14",
        "genre" => "Indie",
        "details" =>'<a href="edit.php"><u>Details!</u></a>',
    ),
    10=> array(
        "artiest" => "Nothing but thieves",
        "album" => "Broken machine",
        "datum" => "2017",
        "tracks" => "15",
        "genre" => "Rock",
        "details" =>'<a href="edit.php"><u>Details!</u></a>',
    )
);




?>

<a href="http://localhost/prg02/week%202/formalbum.php"><u>Create</u></a>
<table>
    <th>    </th>
    <th>Artiesten</th>
    <th>Album</th>
    <th>Datum</th>
    <th>Tracks</th>
    <th>Genre</th>
    <th>Details</th>


    <?php foreach ($albums as $value => $album): ?>
        <tr>
            <td> <?=$value?></td>
            <td> <?=$album['artiest']?> </td>
            <td> <?=$album['album']?> </td>
            <td> <?=$album['datum']?> </td>
            <td> <?=$album['tracks']?> </td>
            <td> <?=$album['genre']?> </td>
            <td> <?=$album['details']?> </td>
        </tr>
    <?php endforeach; ?>


</table>
</body>
</html>
