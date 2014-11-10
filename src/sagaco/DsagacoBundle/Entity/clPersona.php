<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * clPersona
 *
 * @ORM\Table(name="tb_persona")
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clPersonaRepository")
 */
class clPersona
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
     * @var string
     *
     * @ORM\Column(name="tx_descripcion", type="text")
     */
    private $tx_descripcion;

    /**
     * @ORM\ManyToOne(targetEntity="clGrupoRol", inversedBy="prPersona")
     * @ORM\JoinColumn(name="co_gruporol_id", referencedColumnName="co_tipo_rol")
     */
    protected $prGrupoRol;
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
     * Set tx_descripcion
     *
     * @param string $txDescripcion
     * @return clPersona
     */
    public function setTxDescripcion($txDescripcion)
    {
        $this->tx_descripcion = $txDescripcion;

        return $this;
    }

    /**
     * Get tx_descripcion
     *
     * @return string 
     */
    public function getTxDescripcion()
    {
        return $this->tx_descripcion;
    }

    /**
     * Set prGrupoRol
     *
     * @param \sagaco\DsagacoBundle\Entity\clGrupoRol $prGrupoRol
     * @return clPersona
     */
    public function setPrGrupoRol(\sagaco\DsagacoBundle\Entity\clGrupoRol $prGrupoRol = null)
    {
        $this->prGrupoRol = $prGrupoRol;

        return $this;
    }

    /**
     * Get prGrupoRol
     *
     * @return \sagaco\DsagacoBundle\Entity\clGrupoRol 
     */
    public function getPrGrupoRol()
    {
        return $this->prGrupoRol;
    }
}
