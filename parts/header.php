<?php
$sports = [
    1 => [
      "title" => "boxe",
      "url" => "https://rmcsport.bfmtv.com/rss/sports-de-combat/boxe/",
    ],
    2 => [
      "title" => "foot",
      "url" => "https://rmcsport.bfmtv.com/rss/football/coupe-du-monde/",
    ],
    3 => [
      "title" => "rugby",
      "url" => "https://rmcsport.bfmtv.com/rss/rugby/",
    ],
    4 => [
      "title" => "sports extrêmes",
      "url" => "https://rmcsport.bfmtv.com/rss/sports-extremes/",
    ],
    5 => [
      "title" => "sports d'hiver",
      "url" => "https://rmcsport.bfmtv.com/rss/sports-d-hiver/",
    ],
  
  ];
session_start()
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <h1>SportActu</h1>
        <nav class="navindex">
            <ul>
                <li><a href="feed.php?sport=<?=$_SESSION['selected'][0]?>"><?=$sports[$_SESSION['selected'][0]]['title']?></a></li>
                <li> <a href="feed.php?sport=<?=$_SESSION['selected'][1]?>"><?=$sports[$_SESSION['selected'][1]]['title']?></a></li>
                <li><a href="feed.php?sport=<?=$_SESSION['selected'][2]?>"><?=$sports[$_SESSION['selected'][2]]['title']?></a></li>
                
                <!-- crée un $_GET -->
            </ul>
        </nav>
    </header>