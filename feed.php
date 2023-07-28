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

$title = $sports[$_GET['sport']]["title"];

// on charge un fichier xml
$rss_feed = simplexml_load_file($sports[$_GET['sport']]["url"]);

include_once 'parts/header.php';
?>
<main>
  <div class="cardContainer">
    <?php

    foreach ($rss_feed->channel->item as $item) {

      $dateFr = date("d/m/Y", strtotime($item->pubDate));
    ?>

      <div class="card">
       
        <h2>
          <?php echo $item->title; ?>
        </h2>
        <div> 
          <?= $item->description; ?>
        </div>

        <?= $dateFr ?></p>
        <a href="<?php echo $item->link; ?>">Lire la suite</a>
      </div>

    <?php

    }

    ?>
  </div>
</main>

<?php include_once 'footer.php'; ?>