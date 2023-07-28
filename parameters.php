<?php if ($_POST["articlesNumber"] == 6 || $_POST["articlesNumber"] == 9  || $_POST["articlesNumber"] == 12){
    session_start();
    $_SESSION['articlesNumber']=$_POST['articlesNumber'];
    }?>

<?php include_once 'header.php' ?>


<form action="parameters.php" method="POST">

    <select name="articlesNumber" id="articlesNumber">
        <option>6</option>
        <option>9</option>
        <option>12</option>
    </select>
 

    <input type="submit" value="envoyer">

</form>
<!-- <div class="formContainer">
    <h2>Choisissez vos sujets favoris (3 sur 5) :</h2>
    <form class="userChoices" action="index.php" method="POST">
      <label>
        <input type="checkbox" name="subject[]" value="foot"> Foot 
      </label>
      <label>
        <input type="checkbox" name="subject[]" value="rugby"> Rugby
      </label>
      <label>
        <input type="checkbox" name="subject[]" value="boxe"> Boxe
      </label>
      <label>
        <input type="checkbox" name="subject[]" value="sportsextrêmes" >Sports extrêmes
      </label>
      <label>
        <input type="checkbox" name="subject[]" value="bidule
        ">Bidule
      </label>

      <h2>Choisissez le nombre d'articles par page :</h2>
      <label>
        <input type="radio" name="articles-per-page" value="6" <?php //if ($articlesPerPage === 6)
          //echo 'checked'; ?>> 6
        articles
      </label>
      <label>
        <input type="radio" name="articles-per-page" value="9" <?php // if ($articlesPerPage === 9)
          //echo 'checked'; ?>> 9
        articles
      </label>
      <label>
        <input type="radio" name="articles-per-page" value="12" <?php //if ($articlesPerPage === 12)
          // echo 'checked'; ?>> 12
        articles
      </label>
     
      <button type="submit">Enregistrer</button>
    </form> -->
  </div>



<?php include_once 'footer.php' ?>