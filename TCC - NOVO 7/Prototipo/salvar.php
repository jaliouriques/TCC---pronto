<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 20/11/18
 * Time: 08:42
 */

    require_once 'Conexao.php';
    require_once 'HistoricoController.php';


    $qtdtijolo = $_POST["qtd_tijolo"];
    $qtdazulejo = $_POST["qtd_azulejo"];
    $qtdareia = $_POST["qtd_areia"];
    $qtdcal = $_POST["qtd_cal"];
    $qtdcimento = $_POST["qtd_cimento"];

    $historico = new Historico('',$qtdtijolo,$qtdazulejo,$qtdareia,$qtdcal,$qtdcimento);
    $salvar = new HistoricoController();
    $salvar->salvarHistorico($historico);

    echo "<p>Histórico Salvo !!!</p>";
    echo "<p>".$qtdtijolo."</p>";
    echo "<p>".$qtdazulejo."</p>";
    echo "<p>".$qtdareia."</p>";
    echo "<p>".$qtdcal."</p>";
    echo "<p>".$qtdcimento."</p>";