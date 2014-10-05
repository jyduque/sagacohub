<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * tb_orientador
 *
 * @ORM\Table(name="tb_orientador")
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clOrientadorRepository")
 */
class clOrientador
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
     * @ORM\Column(name="co_orientador", type="integer")
     */
    private $coOrientador;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_profesion", type="string", length=15)
     */
    private $txProfesion;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_carrer_atendida", type="string", length=50)
     */
    private $txCarrerAtendida;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_comentario", type="text", nullable=true)
     */
    private $txComentario;

    /** @ORM\ManyToOne(targetEntity="sagaco\DsagacoBundle\Entity\clRecursHumanos") */
    protected $vi_recurs_humanos;

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
     * Set coOrientador
     *
     * @param integer $coOrientador
     * @return tb_orientador
     */
    public function setCoOrientador($coOrientador)
    {
        $this->coOrientador = $coOrientador;

        return $this;
    }

    /**
     * Get coOrientador
     *
     * @return integer 
     */
    public function getCoOrientador()
    {
        return $this->coOrientador;
    }

    /**
     * Set txProfesion
     *
     * @param string $txProfesion
     * @return tb_orientador
     */
    public function setTxProfesion($txProfesion)
    {
        $this->txProfesion = $txProfesion;

        return $this;
    }

    /**
     * Get txProfesion
     *
     * @return string 
     */
    public function getTxProfesion()
    {
        return $this->txProfesion;
    }

    /**
     * Set txCarrerAtendida
     *
     * @param string $txCarrerAtendida
     * @return tb_orientador
     */
    public function setTxCarrerAtendida($txCarrerAtendida)
    {
        $this->txCarrerAtendida = $txCarrerAtendida;

        return $this;
    }

    /**
     * Get txCarrerAtendida
     *
     * @return string 
     */
    public function getTxCarrerAtendida()
    {
        return $this->txCarrerAtendida;
    }

    /**
     * Set txComentario
     *
     * @param string $txComentario
     * @return tb_orientador
     */
    public function setTxComentario($txComentario)
    {
        $this->txComentario = $txComentario;

        return $this;
    }

    /**
     * Get txComentario
     *
     * @return string 
     */
    public function getTxComentario()
    {
        return $this->txComentario;
    }
        
    /**
     * Set vi_recurs_humanos
     *
     * @param string $vi_recurs_humanos
     * @return tb_orientador
     */
    public function setvi_recurs_humanos($vi_recurs_humanos)
    {
        $this->vi_recurs_humanos = $vi_recurs_humanos;

        return $this;
    }
    
    /**
     * Get vi_recurs_humanos
     *
     * @return string 
     */
    public function getvi_recurs_humanos()
    {
        return $this->vi_recurs_humanos;
    }
}
