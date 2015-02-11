<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tpCambioEspecialidad
 *
 * @ORM\Table(name="e_sagaco.tp_cambio_especialidad", indexes={@ORM\Index(name="IDX_DC1A86BB84F46A54", columns={"co_carrera"}), @ORM\Index(name="IDX_DC1A86BBA13DE4F0", columns={"co_tipo_institucion"}), @ORM\Index(name="IDX_DC1A86BB4F3DF7A8", columns={"co_asigna_cursa"}), @ORM\Index(name="IDX_DC1A86BB410599A0", columns={"co_asigna_masdificil"}), @ORM\Index(name="IDX_DC1A86BB745207B2", columns={"co_asigna_masfacil"}), @ORM\Index(name="IDX_DC1A86BBEC0A701C", columns={"co_asigna_masgusto"}), @ORM\Index(name="IDX_DC1A86BB6F1C610", columns={"co_asigna_menosgusto"}), @ORM\Index(name="IDX_DC1A86BB7BA029ED", columns={"co_cita"}), @ORM\Index(name="IDX_DC1A86BBFFC4C0EE", columns={"co_jerarq_carrerasopsu"}), @ORM\Index(name="IDX_DC1A86BB54741D62", columns={"co_materi_altorendimiento"}), @ORM\Index(name="IDX_DC1A86BBBC12AD2A", columns={"co_materi_bajorendimiento"}), @ORM\Index(name="IDX_DC1A86BBC429AA3D", columns={"co_materi_masdificil"}), @ORM\Index(name="IDX_DC1A86BB1E501854", columns={"co_materi_masfacil"}), @ORM\Index(name="IDX_DC1A86BB86086FFA", columns={"co_materi_masgusto"}), @ORM\Index(name="IDX_DC1A86BB83DDF58D", columns={"co_materi_menosgusto"}), @ORM\Index(name="IDX_DC1A86BBEFF7EEAB", columns={"co_period_prueba"}), @ORM\Index(name="IDX_DC1A86BBCB87AEEB", columns={"co_retiro_universidad"})})
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clCambioEspecialidadRepository")
 */
class clCambioEspecialidad
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_cambio_especialidad", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tp_cambio_especialidad_co_cambio_especialidad_1", allocationSize=1, initialValue=1)
     */
    private $coCambioEspecialidad;

    /**
     * @var boolean
     *
     * @ORM\Column(name="in_retiro_universidad", type="boolean", nullable=false)
     */
    private $inRetiroUniversidad;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_titulo_barriller", type="string", length=20, nullable=false)
     */
    private $txTituloBarriller;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_instit_graduo", type="string", length=150, nullable=false)
     */
    private $txInstitGraduo;

    /**
     * @var string
     *
     * @ORM\Column(name="nu_promed_bachillerato", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $nuPromedBachillerato;

    /**
     * @var boolean
     *
     * @ORM\Column(name="in_repiti_ano", type="boolean", nullable=false)
     */
    private $inRepitiAno;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_cual", type="string", length=20, nullable=true)
     */
    private $txCual;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_causa", type="string", length=255, nullable=false)
     */
    private $txCausa;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_otro_estudio", type="string", length=255, nullable=false)
     */
    private $txOtroEstudio;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_razone_carreracursa", type="string", length=255, nullable=false)
     */
    private $txRazoneCarreracursa;

    /**
     * @var boolean
     *
     * @ORM\Column(name="in_recibi_vocacional", type="boolean", nullable=false)
     */
    private $inRecibiVocacional;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_lugar", type="string", length=255, nullable=true)
     */
    private $txLugar;

    /**
     * @var boolean
     *
     * @ORM\Column(name="in_cambio_carreraant", type="boolean", nullable=false)
     */
    private $inCambioCarreraant;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_porque", type="string", length=100, nullable=true)
     */
    private $txPorque;

    /**
     * @var boolean
     *
     * @ORM\Column(name="in_caso_afirmativo", type="boolean", nullable=true)
     */
    private $inCasoAfirmativo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fe_solicitud", type="date", nullable=true)
     */
    private $feSolicitud;

    /**
     * @var integer
     *
     * @ORM\Column(name="co_carrer_aspira", type="integer", nullable=false)
     */
    private $coCarrerAspira;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_motivo", type="string", length=255, nullable=false)
     */
    private $txMotivo;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_razone_cambiocarrera", type="string", length=255, nullable=false)
     */
    private $txRazoneCambiocarrera;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_opinio_familiacambio", type="string", length=255, nullable=false)
     */
    private $txOpinioFamiliacambio;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_ocupa_tiempolibre", type="string", length=150, nullable=false)
     */
    private $txOcupaTiempolibre;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_experi_laboral", type="string", length=100, nullable=false)
     */
    private $txExperiLaboral;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_observ_mapafamiliar", type="string", length=255, nullable=true)
     */
    private $txObservMapafamiliar;

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
     * @var \ESagaco.tbCarrera
     *
     * @ORM\ManyToOne(targetEntity="ESagaco.tbCarrera")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_carrera", referencedColumnName="co_carrera")
     * })
     */
    private $coCarrera;

    /**
     * @var \ESagaco.tbTipoInstitucion
     *
     * @ORM\ManyToOne(targetEntity="ESagaco.tbTipoInstitucion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_tipo_institucion", referencedColumnName="co_tipo_institucion")
     * })
     */
    private $coTipoInstitucion;

    /**
     * @var \ESagaco.tpAsignaCursa
     *
     * @ORM\ManyToOne(targetEntity="ESagaco.tpAsignaCursa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_asigna_cursa", referencedColumnName="co_asigna_cursa")
     * })
     */
    private $coAsignaCursa;

    /**
     * @var \ESagaco.tpAsignaMasdificil
     *
     * @ORM\ManyToOne(targetEntity="ESagaco.tpAsignaMasdificil")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_asigna_masdificil", referencedColumnName="co_asigna_masdificil")
     * })
     */
    private $coAsignaMasdificil;

    /**
     * @var \ESagaco.tpAsignaMasfacil
     *
     * @ORM\ManyToOne(targetEntity="ESagaco.tpAsignaMasfacil")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_asigna_masfacil", referencedColumnName="co_asigna_masfacil")
     * })
     */
    private $coAsignaMasfacil;

    /**
     * @var \ESagaco.tpAsignaMasgusto
     *
     * @ORM\ManyToOne(targetEntity="ESagaco.tpAsignaMasgusto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_asigna_masgusto", referencedColumnName="co_asigna_masgusto")
     * })
     */
    private $coAsignaMasgusto;

    /**
     * @var \ESagaco.tpAsignaMenosgusto
     *
     * @ORM\ManyToOne(targetEntity="ESagaco.tpAsignaMenosgusto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_asigna_menosgusto", referencedColumnName="co_asigna_menosgusto")
     * })
     */
    private $coAsignaMenosgusto;

    /**
     * @var \ESagaco.tpCita
     *
     * @ORM\ManyToOne(targetEntity="ESagaco.tpCita")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_cita", referencedColumnName="co_cita")
     * })
     */
    private $coCita;

    /**
     * @var \ESagaco.tpJerarqCarrerasopsu
     *
     * @ORM\ManyToOne(targetEntity="ESagaco.tpJerarqCarrerasopsu")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_jerarq_carrerasopsu", referencedColumnName="co_jerarq_carrerasopsu")
     * })
     */
    private $coJerarqCarrerasopsu;

    /**
     * @var \ESagaco.tpMateriAltorendimiento
     *
     * @ORM\ManyToOne(targetEntity="ESagaco.tpMateriAltorendimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_materi_altorendimiento", referencedColumnName="co_materi_altorendimiento")
     * })
     */
    private $coMateriAltorendimiento;

    /**
     * @var \ESagaco.tpMateriBajorendimiento
     *
     * @ORM\ManyToOne(targetEntity="ESagaco.tpMateriBajorendimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_materi_bajorendimiento", referencedColumnName="co_materi_bajorendimiento")
     * })
     */
    private $coMateriBajorendimiento;

    /**
     * @var \ESagaco.tpMateriMasdificil
     *
     * @ORM\ManyToOne(targetEntity="ESagaco.tpMateriMasdificil")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_materi_masdificil", referencedColumnName="co_materi_masdificil")
     * })
     */
    private $coMateriMasdificil;

    /**
     * @var \ESagaco.tpMateriMasfacil
     *
     * @ORM\ManyToOne(targetEntity="ESagaco.tpMateriMasfacil")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_materi_masfacil", referencedColumnName="co_materi_masfacil")
     * })
     */
    private $coMateriMasfacil;

    /**
     * @var \ESagaco.tpMateriMasgusto
     *
     * @ORM\ManyToOne(targetEntity="ESagaco.tpMateriMasgusto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_materi_masgusto", referencedColumnName="co_materi_masgusto")
     * })
     */
    private $coMateriMasgusto;

    /**
     * @var \ESagaco.tpMateriMenosgusto
     *
     * @ORM\ManyToOne(targetEntity="ESagaco.tpMateriMenosgusto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_materi_menosgusto", referencedColumnName="co_materi_menosgusto")
     * })
     */
    private $coMateriMenosgusto;

    /**
     * @var \ESagaco.tpPeriodPrueba
     *
     * @ORM\ManyToOne(targetEntity="ESagaco.tpPeriodPrueba")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_period_prueba", referencedColumnName="co_period_prueba")
     * })
     */
    private $coPeriodPrueba;

    /**
     * @var \ESagaco.tpRetiroUniversidad
     *
     * @ORM\ManyToOne(targetEntity="ESagaco.tpRetiroUniversidad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_retiro_universidad", referencedColumnName="co_retiro_universidad")
     * })
     */
    private $coRetiroUniversidad;



    /**
     * Get coCambioEspecialidad
     *
     * @return integer 
     */
    public function getCoCambioEspecialidad()
    {
        return $this->coCambioEspecialidad;
    }

    /**
     * Set inRetiroUniversidad
     *
     * @param boolean $inRetiroUniversidad
     * @return clCambioEspecialidad
     */
    public function setInRetiroUniversidad($inRetiroUniversidad)
    {
        $this->inRetiroUniversidad = $inRetiroUniversidad;

        return $this;
    }

    /**
     * Get inRetiroUniversidad
     *
     * @return boolean 
     */
    public function getInRetiroUniversidad()
    {
        return $this->inRetiroUniversidad;
    }

    /**
     * Set txTituloBarriller
     *
     * @param string $txTituloBarriller
     * @return clCambioEspecialidad
     */
    public function setTxTituloBarriller($txTituloBarriller)
    {
        $this->txTituloBarriller = $txTituloBarriller;

        return $this;
    }

    /**
     * Get txTituloBarriller
     *
     * @return string 
     */
    public function getTxTituloBarriller()
    {
        return $this->txTituloBarriller;
    }

    /**
     * Set txInstitGraduo
     *
     * @param string $txInstitGraduo
     * @return clCambioEspecialidad
     */
    public function setTxInstitGraduo($txInstitGraduo)
    {
        $this->txInstitGraduo = $txInstitGraduo;

        return $this;
    }

    /**
     * Get txInstitGraduo
     *
     * @return string 
     */
    public function getTxInstitGraduo()
    {
        return $this->txInstitGraduo;
    }

    /**
     * Set nuPromedBachillerato
     *
     * @param string $nuPromedBachillerato
     * @return clCambioEspecialidad
     */
    public function setNuPromedBachillerato($nuPromedBachillerato)
    {
        $this->nuPromedBachillerato = $nuPromedBachillerato;

        return $this;
    }

    /**
     * Get nuPromedBachillerato
     *
     * @return string 
     */
    public function getNuPromedBachillerato()
    {
        return $this->nuPromedBachillerato;
    }

    /**
     * Set inRepitiAno
     *
     * @param boolean $inRepitiAno
     * @return clCambioEspecialidad
     */
    public function setInRepitiAno($inRepitiAno)
    {
        $this->inRepitiAno = $inRepitiAno;

        return $this;
    }

    /**
     * Get inRepitiAno
     *
     * @return boolean 
     */
    public function getInRepitiAno()
    {
        return $this->inRepitiAno;
    }

    /**
     * Set txCual
     *
     * @param string $txCual
     * @return clCambioEspecialidad
     */
    public function setTxCual($txCual)
    {
        $this->txCual = $txCual;

        return $this;
    }

    /**
     * Get txCual
     *
     * @return string 
     */
    public function getTxCual()
    {
        return $this->txCual;
    }

    /**
     * Set txCausa
     *
     * @param string $txCausa
     * @return clCambioEspecialidad
     */
    public function setTxCausa($txCausa)
    {
        $this->txCausa = $txCausa;

        return $this;
    }

    /**
     * Get txCausa
     *
     * @return string 
     */
    public function getTxCausa()
    {
        return $this->txCausa;
    }

    /**
     * Set txOtroEstudio
     *
     * @param string $txOtroEstudio
     * @return clCambioEspecialidad
     */
    public function setTxOtroEstudio($txOtroEstudio)
    {
        $this->txOtroEstudio = $txOtroEstudio;

        return $this;
    }

    /**
     * Get txOtroEstudio
     *
     * @return string 
     */
    public function getTxOtroEstudio()
    {
        return $this->txOtroEstudio;
    }

    /**
     * Set txRazoneCarreracursa
     *
     * @param string $txRazoneCarreracursa
     * @return clCambioEspecialidad
     */
    public function setTxRazoneCarreracursa($txRazoneCarreracursa)
    {
        $this->txRazoneCarreracursa = $txRazoneCarreracursa;

        return $this;
    }

    /**
     * Get txRazoneCarreracursa
     *
     * @return string 
     */
    public function getTxRazoneCarreracursa()
    {
        return $this->txRazoneCarreracursa;
    }

    /**
     * Set inRecibiVocacional
     *
     * @param boolean $inRecibiVocacional
     * @return clCambioEspecialidad
     */
    public function setInRecibiVocacional($inRecibiVocacional)
    {
        $this->inRecibiVocacional = $inRecibiVocacional;

        return $this;
    }

    /**
     * Get inRecibiVocacional
     *
     * @return boolean 
     */
    public function getInRecibiVocacional()
    {
        return $this->inRecibiVocacional;
    }

    /**
     * Set txLugar
     *
     * @param string $txLugar
     * @return clCambioEspecialidad
     */
    public function setTxLugar($txLugar)
    {
        $this->txLugar = $txLugar;

        return $this;
    }

    /**
     * Get txLugar
     *
     * @return string 
     */
    public function getTxLugar()
    {
        return $this->txLugar;
    }

    /**
     * Set inCambioCarreraant
     *
     * @param boolean $inCambioCarreraant
     * @return clCambioEspecialidad
     */
    public function setInCambioCarreraant($inCambioCarreraant)
    {
        $this->inCambioCarreraant = $inCambioCarreraant;

        return $this;
    }

    /**
     * Get inCambioCarreraant
     *
     * @return boolean 
     */
    public function getInCambioCarreraant()
    {
        return $this->inCambioCarreraant;
    }

    /**
     * Set txPorque
     *
     * @param string $txPorque
     * @return clCambioEspecialidad
     */
    public function setTxPorque($txPorque)
    {
        $this->txPorque = $txPorque;

        return $this;
    }

    /**
     * Get txPorque
     *
     * @return string 
     */
    public function getTxPorque()
    {
        return $this->txPorque;
    }

    /**
     * Set inCasoAfirmativo
     *
     * @param boolean $inCasoAfirmativo
     * @return clCambioEspecialidad
     */
    public function setInCasoAfirmativo($inCasoAfirmativo)
    {
        $this->inCasoAfirmativo = $inCasoAfirmativo;

        return $this;
    }

    /**
     * Get inCasoAfirmativo
     *
     * @return boolean 
     */
    public function getInCasoAfirmativo()
    {
        return $this->inCasoAfirmativo;
    }

    /**
     * Set feSolicitud
     *
     * @param \DateTime $feSolicitud
     * @return clCambioEspecialidad
     */
    public function setFeSolicitud($feSolicitud)
    {
        $this->feSolicitud = $feSolicitud;

        return $this;
    }

    /**
     * Get feSolicitud
     *
     * @return \DateTime 
     */
    public function getFeSolicitud()
    {
        return $this->feSolicitud;
    }

    /**
     * Set coCarrerAspira
     *
     * @param integer $coCarrerAspira
     * @return clCambioEspecialidad
     */
    public function setCoCarrerAspira($coCarrerAspira)
    {
        $this->coCarrerAspira = $coCarrerAspira;

        return $this;
    }

    /**
     * Get coCarrerAspira
     *
     * @return integer 
     */
    public function getCoCarrerAspira()
    {
        return $this->coCarrerAspira;
    }

    /**
     * Set txMotivo
     *
     * @param string $txMotivo
     * @return clCambioEspecialidad
     */
    public function setTxMotivo($txMotivo)
    {
        $this->txMotivo = $txMotivo;

        return $this;
    }

    /**
     * Get txMotivo
     *
     * @return string 
     */
    public function getTxMotivo()
    {
        return $this->txMotivo;
    }

    /**
     * Set txRazoneCambiocarrera
     *
     * @param string $txRazoneCambiocarrera
     * @return clCambioEspecialidad
     */
    public function setTxRazoneCambiocarrera($txRazoneCambiocarrera)
    {
        $this->txRazoneCambiocarrera = $txRazoneCambiocarrera;

        return $this;
    }

    /**
     * Get txRazoneCambiocarrera
     *
     * @return string 
     */
    public function getTxRazoneCambiocarrera()
    {
        return $this->txRazoneCambiocarrera;
    }

    /**
     * Set txOpinioFamiliacambio
     *
     * @param string $txOpinioFamiliacambio
     * @return clCambioEspecialidad
     */
    public function setTxOpinioFamiliacambio($txOpinioFamiliacambio)
    {
        $this->txOpinioFamiliacambio = $txOpinioFamiliacambio;

        return $this;
    }

    /**
     * Get txOpinioFamiliacambio
     *
     * @return string 
     */
    public function getTxOpinioFamiliacambio()
    {
        return $this->txOpinioFamiliacambio;
    }

    /**
     * Set txOcupaTiempolibre
     *
     * @param string $txOcupaTiempolibre
     * @return clCambioEspecialidad
     */
    public function setTxOcupaTiempolibre($txOcupaTiempolibre)
    {
        $this->txOcupaTiempolibre = $txOcupaTiempolibre;

        return $this;
    }

    /**
     * Get txOcupaTiempolibre
     *
     * @return string 
     */
    public function getTxOcupaTiempolibre()
    {
        return $this->txOcupaTiempolibre;
    }

    /**
     * Set txExperiLaboral
     *
     * @param string $txExperiLaboral
     * @return clCambioEspecialidad
     */
    public function setTxExperiLaboral($txExperiLaboral)
    {
        $this->txExperiLaboral = $txExperiLaboral;

        return $this;
    }

    /**
     * Get txExperiLaboral
     *
     * @return string 
     */
    public function getTxExperiLaboral()
    {
        return $this->txExperiLaboral;
    }

    /**
     * Set txObservMapafamiliar
     *
     * @param string $txObservMapafamiliar
     * @return clCambioEspecialidad
     */
    public function setTxObservMapafamiliar($txObservMapafamiliar)
    {
        $this->txObservMapafamiliar = $txObservMapafamiliar;

        return $this;
    }

    /**
     * Get txObservMapafamiliar
     *
     * @return string 
     */
    public function getTxObservMapafamiliar()
    {
        return $this->txObservMapafamiliar;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clCambioEspecialidad
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
     * @return clCambioEspecialidad
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
     * Set coCarrera
     *
     * @param \sagaco\DsagacoBundle\Entity\ESagaco.tbCarrera $coCarrera
     * @return clCambioEspecialidad
     */
    public function setCoCarrera(\sagaco\DsagacoBundle\Entity\clCarrera $coCarrera = null)
    {
        $this->coCarrera = $coCarrera;

        return $this;
    }

    /**
     * Get coCarrera
     *
     * @return \sagaco\DsagacoBundle\Entity\ESagaco.tbCarrera 
     */
    public function getCoCarrera()
    {
        return $this->coCarrera;
    }

    /**
     * Set coTipoInstitucion
     *
     * @param \sagaco\DsagacoBundle\Entity\ESagaco.tbTipoInstitucion $coTipoInstitucion
     * @return clCambioEspecialidad
     */
    public function setCoTipoInstitucion(\sagaco\DsagacoBundle\Entity\clTipoInstitucion $coTipoInstitucion = null)
    {
        $this->coTipoInstitucion = $coTipoInstitucion;

        return $this;
    }

    /**
     * Get coTipoInstitucion
     *
     * @return \sagaco\DsagacoBundle\Entity\ESagaco.tbTipoInstitucion 
     */
    public function getCoTipoInstitucion()
    {
        return $this->coTipoInstitucion;
    }

    /**
     * Set coAsignaCursa
     *
     * @param \sagaco\DsagacoBundle\Entity\ESagaco.tpAsignaCursa $coAsignaCursa
     * @return clCambioEspecialidad
     */
    public function setCoAsignaCursa(\sagaco\DsagacoBundle\Entity\clAsignaCursa $coAsignaCursa = null)
    {
        $this->coAsignaCursa = $coAsignaCursa;

        return $this;
    }

    /**
     * Get coAsignaCursa
     *
     * @return \sagaco\DsagacoBundle\Entity\ESagaco.tpAsignaCursa 
     */
    public function getCoAsignaCursa()
    {
        return $this->coAsignaCursa;
    }

    /**
     * Set coAsignaMasdificil
     *
     * @param \sagaco\DsagacoBundle\Entity\ESagaco.tpAsignaMasdificil $coAsignaMasdificil
     * @return clCambioEspecialidad
     */
    public function setCoAsignaMasdificil(\sagaco\DsagacoBundle\Entity\clAsignaMasdificil $coAsignaMasdificil = null)
    {
        $this->coAsignaMasdificil = $coAsignaMasdificil;

        return $this;
    }

    /**
     * Get coAsignaMasdificil
     *
     * @return \sagaco\DsagacoBundle\Entity\ESagaco.tpAsignaMasdificil 
     */
    public function getCoAsignaMasdificil()
    {
        return $this->coAsignaMasdificil;
    }

    /**
     * Set coAsignaMasfacil
     *
     * @param \sagaco\DsagacoBundle\Entity\ESagaco.tpAsignaMasfacil $coAsignaMasfacil
     * @return clCambioEspecialidad
     */
    public function setCoAsignaMasfacil(\sagaco\DsagacoBundle\Entity\clAsignaMasfacil $coAsignaMasfacil = null)
    {
        $this->coAsignaMasfacil = $coAsignaMasfacil;

        return $this;
    }

    /**
     * Get coAsignaMasfacil
     *
     * @return \sagaco\DsagacoBundle\Entity\ESagaco.tpAsignaMasfacil 
     */
    public function getCoAsignaMasfacil()
    {
        return $this->coAsignaMasfacil;
    }

    /**
     * Set coAsignaMasgusto
     *
     * @param \sagaco\DsagacoBundle\Entity\ESagaco.tpAsignaMasgusto $coAsignaMasgusto
     * @return clCambioEspecialidad
     */
    public function setCoAsignaMasgusto(\sagaco\DsagacoBundle\Entity\clAsignaMasgusto $coAsignaMasgusto = null)
    {
        $this->coAsignaMasgusto = $coAsignaMasgusto;

        return $this;
    }

    /**
     * Get coAsignaMasgusto
     *
     * @return \sagaco\DsagacoBundle\Entity\ESagaco.tpAsignaMasgusto 
     */
    public function getCoAsignaMasgusto()
    {
        return $this->coAsignaMasgusto;
    }

    /**
     * Set coAsignaMenosgusto
     *
     * @param \sagaco\DsagacoBundle\Entity\ESagaco.tpAsignaMenosgusto $coAsignaMenosgusto
     * @return clCambioEspecialidad
     */
    public function setCoAsignaMenosgusto(\sagaco\DsagacoBundle\Entity\clAsignaMenosgusto $coAsignaMenosgusto = null)
    {
        $this->coAsignaMenosgusto = $coAsignaMenosgusto;

        return $this;
    }

    /**
     * Get coAsignaMenosgusto
     *
     * @return \sagaco\DsagacoBundle\Entity\ESagaco.tpAsignaMenosgusto 
     */
    public function getCoAsignaMenosgusto()
    {
        return $this->coAsignaMenosgusto;
    }

    /**
     * Set coCita
     *
     * @param \sagaco\DsagacoBundle\Entity\ESagaco.tpCita $coCita
     * @return clCambioEspecialidad
     */
    public function setCoCita(\sagaco\DsagacoBundle\Entity\clCita $coCita = null)
    {
        $this->coCita = $coCita;

        return $this;
    }

    /**
     * Get coCita
     *
     * @return \sagaco\DsagacoBundle\Entity\ESagaco.tpCita 
     */
    public function getCoCita()
    {
        return $this->coCita;
    }

    /**
     * Set coJerarqCarrerasopsu
     *
     * @param \sagaco\DsagacoBundle\Entity\ESagaco.tpJerarqCarrerasopsu $coJerarqCarrerasopsu
     * @return clCambioEspecialidad
     */
    public function setCoJerarqCarrerasopsu(\sagaco\DsagacoBundle\Entity\clJerarqCarrerasopsu $coJerarqCarrerasopsu = null)
    {
        $this->coJerarqCarrerasopsu = $coJerarqCarrerasopsu;

        return $this;
    }

    /**
     * Get coJerarqCarrerasopsu
     *
     * @return \sagaco\DsagacoBundle\Entity\ESagaco.tpJerarqCarrerasopsu 
     */
    public function getCoJerarqCarrerasopsu()
    {
        return $this->coJerarqCarrerasopsu;
    }

    /**
     * Set coMateriAltorendimiento
     *
     * @param \sagaco\DsagacoBundle\Entity\ESagaco.tpMateriAltorendimiento $coMateriAltorendimiento
     * @return clCambioEspecialidad
     */
    public function setCoMateriAltorendimiento(\sagaco\DsagacoBundle\Entity\clMateriAltorendimiento $coMateriAltorendimiento = null)
    {
        $this->coMateriAltorendimiento = $coMateriAltorendimiento;

        return $this;
    }

    /**
     * Get coMateriAltorendimiento
     *
     * @return \sagaco\DsagacoBundle\Entity\ESagaco.tpMateriAltorendimiento 
     */
    public function getCoMateriAltorendimiento()
    {
        return $this->coMateriAltorendimiento;
    }

    /**
     * Set coMateriBajorendimiento
     *
     * @param \sagaco\DsagacoBundle\Entity\ESagaco.tpMateriBajorendimiento $coMateriBajorendimiento
     * @return clCambioEspecialidad
     */
    public function setCoMateriBajorendimiento(\sagaco\DsagacoBundle\Entity\clMateriBajorendimiento $coMateriBajorendimiento = null)
    {
        $this->coMateriBajorendimiento = $coMateriBajorendimiento;

        return $this;
    }

    /**
     * Get coMateriBajorendimiento
     *
     * @return \sagaco\DsagacoBundle\Entity\ESagaco.tpMateriBajorendimiento 
     */
    public function getCoMateriBajorendimiento()
    {
        return $this->coMateriBajorendimiento;
    }

    /**
     * Set coMateriMasdificil
     *
     * @param \sagaco\DsagacoBundle\Entity\ESagaco.tpMateriMasdificil $coMateriMasdificil
     * @return clCambioEspecialidad
     */
    public function setCoMateriMasdificil(\sagaco\DsagacoBundle\Entity\clMateriMasdificil $coMateriMasdificil = null)
    {
        $this->coMateriMasdificil = $coMateriMasdificil;

        return $this;
    }

    /**
     * Get coMateriMasdificil
     *
     * @return \sagaco\DsagacoBundle\Entity\ESagaco.tpMateriMasdificil 
     */
    public function getCoMateriMasdificil()
    {
        return $this->coMateriMasdificil;
    }

    /**
     * Set coMateriMasfacil
     *
     * @param \sagaco\DsagacoBundle\Entity\ESagaco.tpMateriMasfacil $coMateriMasfacil
     * @return clCambioEspecialidad
     */
    public function setCoMateriMasfacil(\sagaco\DsagacoBundle\Entity\clMateriMasfacil $coMateriMasfacil = null)
    {
        $this->coMateriMasfacil = $coMateriMasfacil;

        return $this;
    }

    /**
     * Get coMateriMasfacil
     *
     * @return \sagaco\DsagacoBundle\Entity\ESagaco.tpMateriMasfacil 
     */
    public function getCoMateriMasfacil()
    {
        return $this->coMateriMasfacil;
    }

    /**
     * Set coMateriMasgusto
     *
     * @param \sagaco\DsagacoBundle\Entity\ESagaco.tpMateriMasgusto $coMateriMasgusto
     * @return clCambioEspecialidad
     */
    public function setCoMateriMasgusto(\sagaco\DsagacoBundle\Entity\clMateriMasgusto $coMateriMasgusto = null)
    {
        $this->coMateriMasgusto = $coMateriMasgusto;

        return $this;
    }

    /**
     * Get coMateriMasgusto
     *
     * @return \sagaco\DsagacoBundle\Entity\ESagaco.tpMateriMasgusto 
     */
    public function getCoMateriMasgusto()
    {
        return $this->coMateriMasgusto;
    }

    /**
     * Set coMateriMenosgusto
     *
     * @param \sagaco\DsagacoBundle\Entity\ESagaco.tpMateriMenosgusto $coMateriMenosgusto
     * @return clCambioEspecialidad
     */
    public function setCoMateriMenosgusto(\sagaco\DsagacoBundle\Entity\clMateriMenosgusto $coMateriMenosgusto = null)
    {
        $this->coMateriMenosgusto = $coMateriMenosgusto;

        return $this;
    }

    /**
     * Get coMateriMenosgusto
     *
     * @return \sagaco\DsagacoBundle\Entity\ESagaco.tpMateriMenosgusto 
     */
    public function getCoMateriMenosgusto()
    {
        return $this->coMateriMenosgusto;
    }

    /**
     * Set coPeriodPrueba
     *
     * @param \sagaco\DsagacoBundle\Entity\ESagaco.tpPeriodPrueba $coPeriodPrueba
     * @return clCambioEspecialidad
     */
    public function setCoPeriodPrueba(\sagaco\DsagacoBundle\Entity\clPeriodPrueba $coPeriodPrueba = null)
    {
        $this->coPeriodPrueba = $coPeriodPrueba;

        return $this;
    }

    /**
     * Get coPeriodPrueba
     *
     * @return \sagaco\DsagacoBundle\Entity\ESagaco.tpPeriodPrueba 
     */
    public function getCoPeriodPrueba()
    {
        return $this->coPeriodPrueba;
    }

    /**
     * Set coRetiroUniversidad
     *
     * @param \sagaco\DsagacoBundle\Entity\ESagaco.tpRetiroUniversidad $coRetiroUniversidad
     * @return clCambioEspecialidad
     */
    public function setCoRetiroUniversidad(\sagaco\DsagacoBundle\Entity\clRetiroUniversidad $coRetiroUniversidad = null)
    {
        $this->coRetiroUniversidad = $coRetiroUniversidad;

        return $this;
    }

    /**
     * Get coRetiroUniversidad
     *
     * @return \sagaco\DsagacoBundle\Entity\ESagaco.tpRetiroUniversidad 
     */
    public function getCoRetiroUniversidad()
    {
        return $this->coRetiroUniversidad;
    }
}
