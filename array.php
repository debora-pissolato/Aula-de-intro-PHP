<?php

if(isset($_POST['lazer'])){

    $oplazer = $_POST['lazer'];
        $cont = count($oplazer);

        echo "<lef><p><h2> $cont Opções de lazer </h2></p></lef>";
        foreach ($oplazer as $o_lazer) {
         echo "<lef><p> <h3> $o_lazer </h3> </strong> </p> </left>";
         
         
    }
}else {

    echo "<br> <center> <h3> Nenhuma opção de lazer escolhida!!! </h3> </center>";
}

?>

<hr>

<div style="text-align: center;"><a href="index.html"> Voltar</a></div>