<?php
/**
 * Created by PhpStorm.
 * User: MAZZO
 * Date: 19/07/2018
 * Time: 12:57
 */

if ($_POST['largura'] > 0  AND $_POST['comprimento'] > 0){
    $largura = $_POST['largura'];
    $comprimento = $_POST['comprimento'];
    $metrosparede = $largura * $comprimento;

//        echo("".$_POST['tijolos1']."\n");

    //cálculo de tijolos
    if (!empty($_POST['tijolos1'])){
        $tipotijolo = $_POST['tijolos1'];
        switch ($tipotijolo){
            case 1:
                $metrostijolo1 = $metrosparede / 0.0361;
                echo "<br>";
                echo "<p id='qtd_tijolo'><b>Quantidade de Tijolo:</b> ".ceil($metrostijolo1).".</p>";
                echo "<br>";
                break;
            case 2:
                $metrostijolo2 = $metrosparede / 0.0551;
                echo "<br>";
                echo "<p id='qtd_tijolo'><b>Quantidade de Tijolos:</b> ".ceil($metrostijolo2).".</p>";
                echo "<br>";
                break;
            case 3:
                $metrostijolo3 = $metrosparede / 0.0361;
                echo "<br>";
                echo "<p id='qtd_tijolo'><b>Quantidade de Tijolos:</b> ".ceil($metrostijolo3).".</p>";
                echo "<br>";
                break;
            case 4:
                $metrostijolo4 = $metrosparede / 0.0551;
                echo "<br>";
                echo "<p id='qtd_tijolo'><b>Quantidade de Tijolos:</b> ".ceil($metrostijolo4).".</p>";
                echo "<br>";
                break;
            case 5:
                $metrostijolo5 = $metrosparede / 0.0361;
                echo "<br>";
                echo "<p id='qtd_tijolo'><b>Quantidade de Tijolos:</b> ".ceil($metrostijolo5).".</p>";
                echo "<br>";
                break;
            case 6:
                $metrostijolo6 = $metrosparede / 0.0551;
                echo "<br>";
                echo "<p id='qtd_tijolo'><b>Quantidade de Tijolos:</b> ".ceil($metrostijolo6).".</p>";
                echo "<br>";
                break;
            case 7:
                $metrostijolo7 = $metrosparede / 0.0171;
                echo "<br>";
                echo "<p id='qtd_tijolo'><b>Quantidade de Tijolos:</b> ".ceil($metrostijolo7).".</p>";
                echo "<br>";
                break;
            case 8:
                $metrostijolo8 = $metrosparede / 0.0253;
                echo "<br>";
                echo "<p id='qtd_tijolo'><b>Quantidade de Tijolos:</b> ".ceil($metrostijolo8).".</p>";
                echo "<br>";
                break;
        }
    }

    //cálculo areia
   if (!empty($_POST['areia1'])){
        $metrosareia = $metrosparede * 20;
        $qtdareia = $metrosareia * 1.600;
        $conversaoareia = $qtdareia / 1000;
        echo "<p id='qtd_areia'><b>Quantidade de Areia:</b> ".ceil($conversaoareia)." sacos de 50kg.</p>";
        echo "<br>";
    }

    //cálculo azulejos
    if (!empty($_POST['azulejo1'])) {
        $tipoazulejo = $_POST['azulejo1'];
        switch ($tipoazulejo) {
            case 1:
                $metrosazulejo1 = $metrosparede / 0.09;
                echo "<p id='qtd_azulejo'><b>Quantidade de Azulejos:</b> ".ceil($metrosazulejo1).".</p>";
                echo "<br>";
                break;
            case 2:
                $metrosazulejo2 = $metrosparede / 0.15;
                echo "<p id='qtd_azulejo'><b>Quantidade de Azulejos:</b> ".ceil($metrosazulejo2).".</p>";
                echo "<br>";
                break;
            case 3:
                $metrosazulejo3 = $metrosparede / 0.1764;
                echo "<p id='qtd_azulejo'><b>Quantidade de Azulejos:</b> ".ceil($metrosazulejo3).".</p>";
                echo "<br>";
                break;
        }
    }

    //cálculo cal
   if (!empty($_POST['cal1'])){
        $metroscal = $metrosparede * 3;
        $qtdcal = $metroscal * 36;
        $conversaocal = $qtdcal / 1000;
       echo "<p id='qtd_cal'><b>Quantidade de Cal:</b> ".ceil($metroscal)." sacos de 50kg.</p>";
        echo "<br>";
    }

    //cálculo cimento
   if (!empty($_POST['cimento1'])){
        $metroscimento = $metrosparede * 5;
        $qtdcimento = $metroscimento * 36;
        $conversaocimento = $qtdcimento / 1000;
        echo "<p id='qtd_cimento'><b>Quantidade de Cimento:</b> ".ceil($conversaocimento)." sacos de 50kg.</p>";
        echo "<br>";
    }
echo "<button id='salvar-hist' class='btn btn-default'>Salvar no histórico</button>";

}else{
    echo "Precisa digitar a altura e comprimento";
}


?>