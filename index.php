<form action="prova.php" method="GET">
    <label for="paragraph">Paragrafo: </label>
    <br>
    <textarea id="paragraph" name="paragraph" rows="5" cols="30" placeholder="Scrivi qui il tuo paragrafo..."></textarea>
    <br>
    <input type="text" placeholder="Scrivi qui la parola da censurare">
    <button>invia</button>
</form>


<?php 
    echo $_GET['paragraph'];
?>