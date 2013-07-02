<?php

namespace Mascotas\MascotasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mascota
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Mascotas\MascotasBundle\Entity\MascotaRepository")
 */
class Mascota {

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
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="raza", type="string", length=200)
     */
    private $raza;

    /**
     * @var string
     *
     * @ORM\Column(name="edad", type="string", length=10)
     */
    private $edad;

    /**
     * @var string
     *
     * @ORM\Column(name="foto", type="string", length=255)
     */
    private $foto;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @ORM\ManyToOne(targetEntity="Usuario", inversedBy="mascotas", cascade={"persist"})
     */
    private $usuario;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Mascota
     */
    public function setNombre($nombre) {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre() {
        return $this->nombre;
    }

    /**
     * Set raza
     *
     * @param string $raza
     * @return Mascota
     */
    public function setRaza($raza) {
        $this->raza = $raza;

        return $this;
    }

    /**
     * Get raza
     *
     * @return string 
     */
    public function getRaza() {
        return $this->raza;
    }

    /**
     * Set edad
     *
     * @param string $edad
     * @return Mascota
     */
    public function setEdad($edad) {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get edad
     *
     * @return string 
     */
    public function getEdad() {
        return $this->edad;
    }

    /**
     * Set foto
     *
     * @param string $foto
     * @return Mascota
     */
    public function setFoto($foto) {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string 
     */
    public function getFoto() {
        return $this->foto;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Mascota
     */
    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion() {
        return $this->descripcion;
    }


    /**
     * Set usuario
     *
     * @param \Mascotas\MascotasBundle\Entity\Usuario $usuario
     * @return Mascota
     */
    public function setUsuario(\Mascotas\MascotasBundle\Entity\Usuario $usuario = null)
    {
        $this->usuario = $usuario;
    
        return $this;
    }

    /**
     * Get usuario
     *
     * @return \Mascotas\MascotasBundle\Entity\Usuario 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}
