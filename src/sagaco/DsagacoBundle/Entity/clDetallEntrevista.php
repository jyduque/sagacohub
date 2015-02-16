<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tpDetallEntrevista
 *
 * @ORM\Table(name="e_sagaco.tp_detall_entrevista", indexes={@ORM\Index(name="IDX_201EFF8DE474AE11", columns={"co_pregunta"}), @ORM\Index(name="IDX_201EFF8DB29BE9D9", columns={"co_entrevista"})})
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clDetallEntrevistaRepository")
 */
class clDetallEntrevista
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_detall_entrevista", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tp_detall_entrevista_co_detall_entrevista", allocationSize=1, initialValue=1)
     */
    private $coDetallEntrevista;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_descri_respuesta", type="string", length=255, nullable=true)
     */
    private $txDescriRespuesta;

    /**
     * @var boolean
     *
     * @ORM\Column(name="in_decisi_respuesta", type="boolean", nullable=true)
     */
    private $inDecisiRespuesta;

    /**
     * @var \ESagaco.tbConfigEntrevista
     *
     * @ORM\ManyToOne(targetEntity="clConfigEntrevista")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_pregunta", referencedColumnName="co_pregunta")
     * })
     */
    private $coPregunta;

    /**
     * @var \ESagaco.tpEntrevista
     *
     * @ORM\ManyToOne(targetEntity="clEntrevista")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_entrevista", referencedColumnName="co_entrevista")
     * })
     */
    private $coEntrevista;



    /**
     * Get coDetallEntrevista
     *
     * @return integer 
     */
    public function getCoDetallEntrevista()
    {
        return $this->coDetallEntrevista;
    }

    /**
     * Set txDescriRespuesta
     *
     * @param string $txDescriRespuesta
     * @return clDetallEntrevista
     */
    public function setTxDescriRespuesta($txDescriRespuesta)
    {
        $this->txDescriRespuesta = $txDescriRespuesta;

        return $this;
    }

    /**
     * Get txDescriRespuesta
     *
     * @return string 
     */
    public function getTxDescriRespuesta()
    {
        return $this->txDescriRespuesta;
    }

    /**
     * Set inDecisiRespuesta
     *
     * @param boolean $inDecisiRespuesta
     * @return clDetallEntrevista
     */
    public function setInDecisiRespuesta($inDecisiRespuesta)
    {
        $this->inDecisiRespuesta = $inDecisiRespuesta;

        return $this;
    }

    /**
     * Get inDecisiRespuesta
     *
     * @return boolean 
     */
    public function getInDecisiRespuesta()
    {
        return $this->inDecisiRespuesta;
    }

    /**
     * Set coPregunta
     *
     * @param \sagaco\DsagacoBundle\Entity\clConfigEntrevista $coPregunta
     * @return clDetallEntrevista
     */
    public function setCoPregunta(\sagaco\DsagacoBundle\Entity\clConfigEntrevista $coPregunta = null)
    {
        $this->coPregunta = $coPregunta;

        return $this;
    }

    /**
     * Get coPregunta
     *
     * @return \sagaco\DsagacoBundle\Entity\clConfigEntrevista 
     */
    public function getCoPregunta()
    {
        return $this->coPregunta;
    }

    /**
     * Set coEntrevista
     *
     * @param \sagaco\DsagacoBundle\Entity\clEntrevista $coEntrevista
     * @return clDetallEntrevista
     */
    public function setCoEntrevista(\sagaco\DsagacoBundle\Entity\clEntrevista $coEntrevista = null)
    {
        $this->coEntrevista = $coEntrevista;

        return $this;
    }

    /**
     * Get coEntrevista
     *
     * @return \sagaco\DsagacoBundle\Entity\clEntrevista 
     */
    public function getCoEntrevista()
    {
        return $this->coEntrevista;
    }
}
