  <?php
    if(isset($_POST["palestrante"])){
        $nome=$_POST["palestrante"];
        $palestra=$_POST["nome"];
        $horario=$_POST["horario"];
        echo "Sua palestra '$palestra' foi agendada para às $horario, $nome";
    }
    ?>


