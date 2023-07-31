<?php
session_start();
if (count($_POST) > 0) {
    if ($_POST["articlesNumber"] == 6 || $_POST["articlesNumber"] == 9  || $_POST["articlesNumber"] == 12) {

        $_SESSION['articlesNumber'] = $_POST['articlesNumber'];
    }

    if (count($_POST['choiceSport']) == 3) {
        unset($_SESSION['selected']);

        foreach ($_POST['choiceSport'] as $selected) {
           $_SESSION['selected'][] = $selected;
          
        }
    }
}
?>
<?php include_once 'header.php' ?>

<form action="parameters.php" method="POST">

    <select name="articlesNumber" id="articlesNumber">
        <option>6</option>
        <option>9</option>
        <option>12</option>
    </select>

    <fieldset>

        <legend> Choisissez trois sports :</legend>
        <label for="foot">football</label>
        <input type="checkbox" name="choiceSport[]" value="2" id="foot">

        <label for="rugby"> rugby</label>
        <input type="checkbox" name="choiceSport[]" value="3" id="rugby">

        <label for="boxe">Boxe</label>
        <input type="checkbox" name="choiceSport[]" value="1" id="boxe">

        <label for="extrem">Sports extrêmes</label>
        <input type="checkbox" name="choiceSport[]" value="4" id="extrem">

        <label for="wintersport"> Sports d'hiver</label>
        <input type="checkbox" name="choiceSport[]" value="5" id="wintersport">
    </fieldset>
    <input type="submit" value="envoyer">

</form>

</div>

<?php include_once 'footer.php' ?>

<!-- git merge puis git commit puis git push  -->