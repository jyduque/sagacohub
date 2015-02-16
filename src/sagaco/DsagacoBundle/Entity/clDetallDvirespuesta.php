<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tpDetallDvirespuesta
 *
 * @ORM\Table(name="e_sagaco.tp_detall_dvirespuesta", uniqueConstraints={@ORM\UniqueConstraint(name="uk_tp_detalle_dvirespuesta_co_dvi_configuracion", columns={"co_dvi_configuracion"})}, indexes={@ORM\Index(name="IDX_C0767B5F77C7BBD1", columns={"co_dvi_respuesta"})})
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clDetallDvirespuestaRepository")
 */
class clDetallDvirespuesta
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_detall_dvirespuesta", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tp_detall_dvirespuesta_co_detall_dvirespuesta", allocationSize=1, initialValue=1)
     */
    private $coDetallDvirespuesta;

    /**
     * @var boolean
     *
     * @ORM\Column(name="in_agrado", type="boolean", nullable=false)
     */
    private $inAgrado;

    /**
     * @var \ESagaco.tbDviConfiguracion
     *
     * @ORM\ManyToOne(targetEntity="clDviConfiguracion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_dvi_configuracion", referencedColumnName="co_dvi_configuracion")
     * })
     */
    private $coDviConfiguracion;

    /**
     * @var \ESagaco.tpDviRespuesta
     *
     * @ORM\ManyToOne(targetEntity="clDviRespuesta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_dvi_respuesta", referencedColumnName="co_dvi_respuesta")
     * })
     */
    private $coDviRespuesta;



    /**
     * Get coDetallDvirespuesta
     *
     * @return integer 
     */
    public function getCoDetallDvirespuesta()
    {
        return $this->coDetallDvirespuesta;
    }

    /**
     * Set inAgrado
     *
     * @param boolean $inAgrado
     * @return clDetallDvirespuesta
     */
    public function setInAgrado($inAgrado)
    {
        $this->inAgrado = $inAgrado;

        return $this;
    }

    /**
     * Get inAgrado
     *
     * @return boolean 
     */
    public function getInAgrado()
    {
        return $this->inAgrado;
    }

    /**
     * Set coDviConfiguracion
     *
     * @param \sagaco\DsagacoBundle\Entity\clDviConfiguracion $coDviConfiguracion
     * @return clDetallDvirespuesta
     */
    public function setCoDviConfiguracion(\sagaco\DsagacoBundle\Entity\clDviConfiguracion $coDviConfiguracion = null)
    {
        $this->coDviConfiguracion = $coDviConfiguracion;

        return $this;
    }

    /**
     * Get coDviConfiguracion
     *
     * @return \sagaco\DsagacoBundle\Entity\clDviConfiguracion 
     */
    public function getCoDviConfiguracion()
    {
        return $this->coDviConfiguracion;
    }

    /**
     * Set coDviRespuesta
     *
     * @param \sagaco\DsagacoBundle\Entity\clDviRespuesta $coDviRespuesta
     * @return clDetallDvirespuesta
     */
    public function setCoDviRespuesta(\sagaco\DsagacoBundle\Entity\clDviRespuesta $coDviRespuesta = null)
    {
        $this->coDviRespuesta = $coDviRespuesta;

        return $this;
    }

    /**
     * Get coDviRespuesta
     *
     * @return \sagaco\DsagacoBundle\Entity\clDviRespuesta 
     */
    public function getCoDviRespuesta()
    {
        return $this->coDviRespuesta;
    }
}
