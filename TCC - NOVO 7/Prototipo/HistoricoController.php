<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 20/11/18
 * Time: 08:25
 */
    require_once "Conexao.php";
    require_once "Historico.php";
class HistoricoController
{

    private $conexao;

    public function __construct()
    {
        $this->conexao = new conexao();
    }

    public function salvarHistorico (Historico $historico){

        $sql = "INSERT INTO historico (qtd_tijolo, qtd_azulejo, qtd_areia, qtd_cal, qtd_cimento) VALUES ('{$historico->getQtdTijolo()}', '{$historico->getQtdAzulejo()}', '{$historico->getQtdAreia()}', '{$historico->getQtdCal()}','{$historico->getQtdCimento()}')";
        try{
            $this->conexao->getCon($sql);
        }catch (PDOException $e){
            return $e->getMessage();
        }
    }
}