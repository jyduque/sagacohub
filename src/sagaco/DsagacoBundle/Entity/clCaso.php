<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tpCaso
 *
 * @ORM\Table(name="e_sagaco.tp_caso", uniqueConstraints={@ORM\UniqueConstraint(name="uk_tp_caso_co_histor_persona", columns={"co_histor_persona"})}, indexes={@ORM\Index(name="IDX_B860EAD64E190D5B", columns={"co_estado_caso"}), @ORM\Index(name="IDX_B860EAD66A01F41C", columns={"co_motivo_consulta"}), @ORM\Index(name="IDX_B860EAD64BD8FA32", columns={"co_orientador"}), @ORM\Index(name="IDX_B860EAD63BFCC05A", columns={"co_semestre"}), @ORM\Index(name="IDX_B860EAD65D7E26EC", columns={"co_cambio_especialidad"})})
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clCasoRepository")
 */
class clCaso
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_caso", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tp_caso_co_caso_2", allocationSize=1, initialValue=1)
     */
    private $coCaso;

    /**
     * @var integer
     *
     * @ORM\Column(name="co_orient_referido", type="integer", nullable=true)
     */
    private $coOrientReferido;

    /**
     * @var boolean
     *
     * @ORM\Column(name="in_cambio_especialidad", type="boolean", nullable=true)
     */
    private $inCambioEspecialidad;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fh_creacion", type="datetime", nullable=false)
     */
    private $fhCreacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fh_actualizacion", type="datetime", nullable=false)
     */
    private $fhActualizacion;

    /**
     * @var \ESagaco.tbEstadoCaso
     *
     * @ORM\ManyToOne(targetEntity="ESagaco.tbEstadoCaso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_estado_caso", referencedColumnName="co_estado_caso")
     * })
     */
    private $coEstadoCaso;

    /**
     * @var \ESagaco.tbMotivoConsulta
     *
     * @ORM\ManyToOne(targetEntity="ESagaco.tbMotivoConsulta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_motivo_consulta", referencedColumnName="co_motivo_consulta")
     * })
     */
    private $coMotivoConsulta;

    /**
     * @var \ESagaco.tbOrientador
     *
     * @ORM\ManyToOne(targetEntity="ESagaco.tbOrientador")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_orientador", referencedColumnName="co_orientador")
     * })
     */
    private $coOrientador;

    /**
     * @var \ESagaco.tbSemestre
     *
     * @ORM\ManyToOne(targetEntity="ESagaco.tbSemestre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_semestre", referencedColumnName="co_semestre")
     * })
     */
    private $coSemestre;

    /**
     * @var \ESagaco.tpCambioEspecialidad
     *
     * @ORM\ManyToOne(targetEntity="ESagaco.tpCambioEspecialidad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_cambio_especialidad", referencedColumnName="co_cambio_especialidad")
     * })
     */
    private $coCambioEspecialidad;

    /**
     * @var \ESagaco.tpHistorPersona
     *
     * @ORM\ManyToOne(targetEntity="ESagaco.tpHistorPersona")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_histor_persona", referencedColumnName="co_histor_persona")
     * })
     */
    private $coHistorPersona;



    /**
     * Get coCaso
     *
     * @return integer 
     */
    public function getCoCaso()
    {
        return $this->coCaso;
    }

    /**
     * Set coOrientReferido
     *
     * @param integer $coOrientReferido
     * @return clCaso
     */
    public function setCoOrientReferido($coOrientReferido)
    {
        $this->coOrientReferido = $coOrientReferido;

        return $this;
    }

    /**
     * Get coOrientReferido
     *
     * @return integer 
     */
    public function getCoOrientReferido()
    {
        return $this->coOrientReferido;
    }

    /**
     * Set inCambioEspecialidad
     *
     * @param boolean $inCambioEspecialidad
     * @return clCaso
     */
    public function setInCambioEspecialidad($inCambioEspecialidad)
    {
        $this->inCambioEspecialidad = $inCambioEspecialidad;

        return $this;
    }

    /**
     * Get inCambioEspecialidad
     *
     * @return boolean 
     */
    public function getInCambioEspecialidad()
    {
        return $this->inCambioEspecialidad;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clCaso
     */
    public function setFhCreacion($fhCreacion)
    {
        $this->fhCreacion = $fhCreacion;

        return $this;
    }

    /**
     * Get fhCreacion
     *
     * @return \DateTime 
     */
    public function getFhCreacion()
    {
        return $this->fhCreacion;
    }

    /**
     * Set fhActualizacion
     *
     * @param \DateTime $fhActualizacion
     * @return clCaso
     */
    public function setFhActualizacion($fhActualizacion)
    {
        $this->fhActualizacion = $fhActualizacion;

        return $this;
    }

    /**
     * Get fhActualizacion
     *
     * @return \DateTime 
     */
    public function getFhActualizacion()
    {
        return $this->fhActualizacion;
    }

    /**
     * Set coEstadoCaso
     *
     * @param \sagaco\DsagacoBundle\Entity\ESagaco.tbEstadoCaso $coEstadoCaso
     * @return clCaso
     */
    public function setCoEstadoCaso(\sagaco\DsagacoBundle\Entity\clEstadoCaso $coEstadoCaso = null)
    {
        $this->coEstadoCaso = $coEstadoCaso;

        return $this;
    }

    /**
     * Get coEstadoCaso
     *
     * @return \sagaco\DsagacoBundle\Entity\ESagaco.tbEstadoCaso 
     */
    public function getCoEstadoCaso()
    {
        return $this->coEstadoCaso;
    }

    /**
     * Set coMotivoConsulta
     *
     * @param \sagaco\DsagacoBundle\Entity\ESagaco.tbMotivoConsulta $coMotivoConsulta
     * @return clCaso
     */
    public function setCoMotivoConsulta(\sagaco\DsagacoBundle\Entity\clMotivoConsulta $coMotivoConsulta = null)
    {
        $this->coMotivoConsulta = $coMotivoConsulta;

        return $this;
    }

    /**
     * Get coMotivoConsulta
     *
     * @return \sagaco\DsagacoBundle\Entity\ESagaco.tbMotivoConsulta 
     */
    public function getCoMotivoConsulta()
    {
        return $this->coMotivoConsulta;
    }

    /**
     * Set coOrientador
     *
     * @param \sagaco\DsagacoBundle\Entity\ESagaco.tbOrientador $coOrientador
     * @return clCaso
     */
    public function setCoOrientador(\sagaco\DsagacoBundle\Entity\clOrientador $coOrientador = null)
    {
        $this->coOrientador = $coOrientador;

        return $this;
    }

    /**
     * Get coOrientador
     *
     * @return \sagaco\DsagacoBundle\Entity\ESagaco.tbOrientador 
     */
    public function getCoOrientador()
    {
        return $this->coOrientador;
    }

    /**
     * Set coSemestre
     *
     * @param \sagaco\DsagacoBundle\Entity\ESagaco.tbSemestre $coSemestre
     * @return clCaso
     */
    public function setCoSemestre(\sagaco\DsagacoBundle\Entity\clSemestre $coSemestre = null)
    {
        $this->coSemestre = $coSemestre;

        return $this;
    }

    /**
     * Get coSemestre
     *
     * @return \sagaco\DsagacoBundle\Entity\ESagaco.tbSemestre 
     */
    public function getCoSemestre()
    {
        return $this->coSemestre;
    }

    /**
     * Set coCambioEspecialidad
     *
     * @param \sagaco\DsagacoBundle\Entity\ESagaco.tpCambioEspecialidad $coCambioEspecialidad
     * @return clCaso
     */
    public function setCoCambioEspecialidad(\sagaco\DsagacoBundle\Entity\clCambioEspecialidad $coCambioEspecialidad = null)
    {
        $this->coCambioEspecialidad = $coCambioEspecialidad;

        return $this;
    }

    /**
     * Get coCambioEspecialidad
     *
     * @return \sagaco\DsagacoBundle\Entity\ESagaco.tpCambioEspecialidad 
     */
    public function getCoCambioEspecialidad()
    {
        return $this->coCambioEspecialidad;
    }

    /**
     * Set coHistorPersona
     *
     * @param \sagaco\DsagacoBundle\Entity\ESagaco.tpHistorPersona $coHistorPersona
     * @return clCaso
     */
    public function setCoHistorPersona(\sagaco\DsagacoBundle\Entity\clHistorPersona $coHistorPersona = null)
    {
        $this->coHistorPersona = $coHistorPersona;

        return $this;
    }

    /**
     * Get coHistorPersona
     *
     * @return \sagaco\DsagacoBundle\Entity\ESagaco.tpHistorPersona 
     */
    public function getCoHistorPersona()
    {
        return $this->coHistorPersona;
    }
}
