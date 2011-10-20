<?php

namespace Taller\AeronauticoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Taller\AeronauticoBundle\Entity\Empleado
 *
 * @ORM\Table(name="empleado")
 * @ORM\Entity
 */
class Empleado
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $licencia
     *
     * @ORM\Column(name="licencia", type="string", length=45, nullable=true)
     */
    private $licencia;

    /**
     * @var Personas
     *
     * @ORM\ManyToOne(targetEntity="Personas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="personas_id", referencedColumnName="id")
     * })
     */
    private $personas;

    /**
     * @var Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     * })
     */
    private $usuario;



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
     * Set licencia
     *
     * @param string $licencia
     */
    public function setLicencia($licencia)
    {
        $this->licencia = $licencia;
    }

    /**
     * Get licencia
     *
     * @return string 
     */
    public function getLicencia()
    {
        return $this->licencia;
    }

    /**
     * Set personas
     *
     * @param Taller\AeronauticoBundle\Entity\Personas $personas
     */
    public function setPersonas(\Taller\AeronauticoBundle\Entity\Personas $personas)
    {
        $this->personas = $personas;
    }

    /**
     * Get personas
     *
     * @return Taller\AeronauticoBundle\Entity\Personas 
     */
    public function getPersonas()
    {
        return $this->personas;
    }

    /**
     * Set usuario
     *
     * @param Taller\AeronauticoBundle\Entity\Usuario $usuario
     */
    public function setUsuario(\Taller\AeronauticoBundle\Entity\Usuario $usuario)
    {
        $this->usuario = $usuario;
    }

    /**
     * Get usuario
     *
     * @return Taller\AeronauticoBundle\Entity\Usuario 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}