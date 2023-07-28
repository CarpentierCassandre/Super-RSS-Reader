<?php 

$sports=[
  1=>[
    "title" => "boxe",
    "url" => "https://rmcsport.bfmtv.com/rss/sports-de-combat/boxe/",
  ],
  2=>[
    "title" =>"foot",
    "url" => "https://rmcsport.bfmtv.com/rss/football/coupe-du-monde/",
  ],
  3=> [
    "title" =>"rugby",
    "url" => "https://rmcsport.bfmtv.com/rss/rugby/",
  ],
  4=> [
    "title"=>"sports extrêmes",
    "url" =>"https://rmcsport.bfmtv.com/rss/sports-extremes/",
  ],
  
];

// on charge un fichier xml
$rss_feed = simplexml_load_file($sports[1]['url']);
session_start();
$articlesNumber = (isset($_SESSION['articlesNumber'])?$_SESSION['articlesNumber']:12);
var_dump($articlesNumber);
$title='SportsActu';
include_once 'parts/header.php';
?>

<div class="containerIndex">

    <div class="box">
<?php $rss_feed = simplexml_load_file($sports[1]["url"]);
for ($i=1;$i<=$articlesNumber;$i++){
var_dump($rss_feed->channel->item[$i]);
}
?>
    </div>

    <div class="box">
<?php include_once 'rugby.php'?>
    </div>

    <div class="box">
<?php include_once 'boxe.php'?>
    </div>

<?php include_once 'parts/footer.php' ?>