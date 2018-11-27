<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 20/11/18
 * Time: 08:38
 */

    require_once "Conexao.php";

class Historico
{
    private $codcalc;
    private $qtd_tijolo;
    private $qtd_azulejo;
    private $qtd_areia;
    private $qtd_cal;
    private $qtd_cimento;

    public function __construct($codcalc = null,$qtd_tijolo = null,$qtd_azulejo = null,$qtd_areia = null,$qtd_cal = null,$qtd_cimento = null)
    {
        $this->codcalc = $codcalc;
        $this->qtd_tijolo = $qtd_tijolo;
        $this->qtd_azulejo = $qtd_azulejo;
        $this->qtd_areia = $qtd_areia;
        $this->qtd_cal = $qtd_cal;
        $this->qtd_cimento = $qtd_cimento;
    }

    /**
     * @return mixed
     */
    public function getCodcalc()
    {
        return $this->codcalc;
    }

    /**
     * @param mixed $codcalc
     */
    public function setCodcalc($codcalc)
    {
        $this->codcalc = $codcalc;
    }

    /**
     * @return mixed
     */
    public function getQtdTijolo()
    {
        return $this->qtd_tijolo;
    }

    /**
     * @param mixed $qtd_tijolo
     */
    public function setQtdTijolo($qtd_tijolo)
    {
        $this->qtd_tijolo = $qtd_tijolo;
    }

    /**
     * @return mixed
     */
    public function getQtdAzulejo()
    {
        return $this->qtd_azulejo;
    }

    /**
     * @param mixed $qtd_azulejo
     */
    public function setQtdAzulejo($qtd_azulejo)
    {
        $this->qtd_azulejo = $qtd_azulejo;
    }

    /**
     * @return mixed
     */
    public function getQtdAreia()
    {
        return $this->qtd_areia;
    }

    /**
     * @param mixed $qtd_areia
     */
    public function setQtdAreia($qtd_areia)
    {
        $this->qtd_areia = $qtd_areia;
    }

    /**
     * @return mixed
     */
    public function getQtdCal()
    {
        return $this->qtd_cal;
    }

    /**
     * @param mixed $qtd_cal
     */
    public function setQtdCal($qtd_cal)
    {
        $this->qtd_cal = $qtd_cal;
    }

    /**
     * @return mixed
     */
    public function getQtdCimento()
    {
        return $this->qtd_cimento;
    }

    /**
     * @param mixed $qtd_cimento
     */
    public function setQtdCimento($qtd_cimento)
    {
        $this->qtd_cimento = $qtd_cimento;
    }


}