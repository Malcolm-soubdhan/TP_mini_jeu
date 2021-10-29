<?php  ?>
<button><a href="index.php"><- menu </a></button>
<form action="index.php?ajout" method="post">
    <input type="text" name="nom" id="nom" required placeholder="Wesh, comment tu t'appelle ?">
    <select id="classes" name="classes">
        <option value="warrior">Warrior</option> 
        <option value="mage">Mage</option>
    </select>
    <button type="submit">Créer ?</button>
</form>