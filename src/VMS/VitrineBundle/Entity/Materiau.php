<?php
/**
 * Created by PhpStorm.
 * User: AeroZzSkyline
 * Date: 15/05/2017
 * Time: 14:55
 */

namespace VMS\VitrineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Materiau
 *
 * @ORM\Table(name="materiau")
 * @ORM\Entity(repositoryClass="VMS\VitrineBundle\Repository\MateriauRepository")
 */
class Materiau
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_materiau", type="string", length=255, nullable=false)
     */
    private $libelle;

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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Materiau
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }
  

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }
}
