    <div>
        <h2>Choose your character!!</h2>
        <table>
            <tr>
                <th></th>
                <th>Nom</th>
                <th>Classes</th>
                <th>PV</th>
                <th>MP</th>
                <th>Attaque</th>
                <th>Défense</th>
                <th>Incarner</th>
            </tr>
            <?php
                $sql = 'SELECT * FROM personnage';
                $request = $bdd->query($sql);
                foreach ($request as $data) { ?>
                    <tr>
                        <td><?php echo '<img alt="icone casque" id="icone_pers" src="img/'.$data['image'].'"'  ?>;</td>
                        <td><?php echo $data['nom']; ?></td>
                        <td><?php echo $data['classe']; ?></td>
                        <td><?php echo $data['PV']; ?></td>
                        <td><?php echo $data['MP']; ?></td>
                        <td><?php echo $data['attack']; ?></td>
                        <td><?php echo $data['defense']; ?></td>
                        <td><a href="index.php?fight&p=<?php echo $data['ID']; ?>">LET'S GOOO!</a></td>
                    </tr>
        <?php } ?>
    </table>
    <button><a href="index.php?creation">Nouveau perso ?</a></button>
</div>