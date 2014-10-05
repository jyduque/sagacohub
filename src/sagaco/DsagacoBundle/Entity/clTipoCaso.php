<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * tb_tipo_caso
 *
 * @ORM\Table(name="tb_tipo_caso")
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clTipoCasoRepository")
 */
class clTipoCaso
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
     * @ORM\Column(name="co_tipo_caso", type="integer")
     */
    private $coTipoCaso;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_tipo_caso", type="string", length=50)
     */
    private $txTipoCaso;

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
     * Set coTipoCaso
     *
     * @param integer $coTipoCaso
     * @return tb_tipo_caso
     */
    public function setCoTipoCaso($coTipoCaso)
    {
        $this->coTipoCaso = $coTipoCaso;

        return $this;
    }

    /**
     * Get coTipoCaso
     *
     * @return integer 
     */
    public function getCoTipoCaso()
    {
        return $this->coTipoCaso;
    }

    /**
     * Set txTipoCaso
     *
     * @param string $txTipoCaso
     * @return tb_tipo_caso
     */
    public function setTxTipoCaso($txTipoCaso)
    {
        $this->txTipoCaso = $txTipoCaso;

        return $this;
    }

    /**
     * Get txTipoCaso
     *
     * @return string 
     */
    public function getTxTipoCaso()
    {
        return $this->txTipoCaso;
    }

    /**
     * Set txDescripcion
     *
     * @param string $txDescripcion
     * @return tb_tipo_caso
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
