<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * tb_tipo_entrevista
 *
 * @ORM\Table(name="tb_tipo_entrevista")
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clTipoEntrevistaRepository")
 */
class clTipoEntrevista
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="co_tipo_entrevista", type="integer")
     */
    private $coTipoEntrevista;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_tipo_entrevista", type="string", length=15)
     */
    private $txTipoEntrevista;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_descripcion", type="text", nullable=true)
     */
    private $txDescripcion;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set coTipoEntrevista
     *
     * @param integer $coTipoEntrevista
     * @return tb_tipo_entrevista
     */
    public function setCoTipoEntrevista($coTipoEntrevista)
    {
        $this->coTipoEntrevista = $coTipoEntrevista;

        return $this;
    }

    /**
     * Get coTipoEntrevista
     *
     * @return integer 
     */
    public function getCoTipoEntrevista()
    {
        return $this->coTipoEntrevista;
    }

    /**
     * Set txTipoEntrevista
     *
     * @param string $txTipoEntrevista
     * @return tb_tipo_entrevista
     */
    public function setTxTipoEntrevista($txTipoEntrevista)
    {
        $this->txTipoEntrevista = $txTipoEntrevista;

        return $this;
    }

    /**
     * Get txTipoEntrevista
     *
     * @return string 
     */
    public function getTxTipoEntrevista()
    {
        return $this->txTipoEntrevista;
    }

    /**
     * Set txDescripcion
     *
     * @param string $txDescripcion
     * @return tb_tipo_entrevista
     */
    public function setTxDescripcion($txDescripcion)
    {
        $this->txDescripcion = $txDescripcion;

        return $this;
    }

    /**
     * Get txDescripcion
     *
     * @return string 
     */
    public function getTxDescripcion()
    {
        return $this->txDescripcion;
    }
}
