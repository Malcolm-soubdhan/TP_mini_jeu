<h2 class="fight_title"> Combat en cours :  </h2>
<div class="fight_content">
    <div>
        <h3 class="highlight">Ton perso : </h3>
        <table>
            <tr>
                <th></th>
                <th>Nom</th>
                <th>Classe</th>
                <th>PV</th>
                <th>MP</th>
                <th>Attaque</th>
                <th>Défense</th>
            </tr>
            <?php
            $id = $_GET['p'];
            $sql = "SELECT * FROM personnage WHERE ID=$id";
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
            </tr>
            <?php } ?>
        </table>
    </div>
    <div>
        <h3 class="highlight"> Tes opposants : </h3>
        <table>
            <tr>
                <th></th>
                <th>Nom</th>
                <th>Classes</th>
                <th>PV</th>
                <th>MP</th>
                <th>Attaque</th>
                <th>Défense</th>
                <th>Lui offrir un RBNB ?</th>
                <th>Lui faire bobo ?</th>
            </tr>
            <?php
            $sqlClasse = "SELECT DISTINCT classe FROM personnage WHERE ID=$id";
            $requestClasse = $bdd->query($sqlClasse);
            $fetchClasse = $requestClasse->fetch(PDO::FETCH_ASSOC);
            $classe = $fetchClasse['classe'];
            $sql = "SELECT * FROM personnage WHERE ID NOT IN($id)";
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
                <?php if($classe=='mage'){ ?> 
                <td><img src="img/night.png" alt="moon icon" ><button><a href="index.php?p=<?php echo $id; ?>&sleep=<?php echo $data['ID']; ?>">Fais dodo !</a></button></td> <?php }else{ echo '<td><I>Fallait lire des bouquins ! </I></td></em>'; }?>
                <td><img src="img/attack.png" alt="attack" ><button><a href="index.php?p=<?php echo $id; ?>&hit=<?php echo $data['ID']; ?>">Attaquer !</a></button></td>
            </tr>
                <?php } ?>
        </table>
    </div>
</div>
<button><a href="index.php"><- Accueil </a></button>