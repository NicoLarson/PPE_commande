<?php

ob_start();
$title = "Formulaire de commande";
?>
<?= isset($_POST['tablettes']) ? $formulaire->getWarningMessage() : false ?>
<form action="#" method="post">
    <table>
        <thead>
            <tr>
                <th>Produits</th>
                <th>Quantité</th>
            </tr>
        </thead>
        <tr>
            <td><label for="tablettes">Tablettes</label></td>
            <td>
                <input type="number" name="tablettes" id="tablettes" placeholder="0" autofocus>
            </td>
        </tr>
        <tr>
            <td><label for="pc">Pc</label></td>
            <td>
                <input type="number" name="pc" id="pc" placeholder="0">
            </td>
        </tr>
        <tr>
            <td><label for="portable">Portable</label></td>
            <td>
                <input type="number" name="portable" id="portable" placeholder="0">
            </td>
        </tr>
        <tr>
            <td><label for="adresse">Adresse</label></td>
            <td>
                <input type="text" name="adresse" id="adresse" placeholder="Adresse">
            </td>
        </tr>
        <tfoot>
            <tr>
                <td colspan="2">
                    <input type="submit" name="send" value="Envoyer la commande" aria-label="send">
                </td>
            </tr>
        </tfoot>
    </table>
</form>

<?php
$content = ob_get_clean();
require('../templates/base.php');
?>