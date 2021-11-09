<select class="">
<?php
    $recupUser = $bdd->prepare('SELECT pseudo FROM users');
    $recupUser->execute();
    while ($data = $recupUser->fetch())
        echo "<option value=\"".$data['pseudo']."\">".$data['pseudo']."</option>";
?>
</select>
