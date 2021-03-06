<?php

namespace VMS\VitrineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit")
 * @ORM\Entity(repositoryClass="VMS\VitrineBundle\Repository\ProduitRepository")
 */
class Produit
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
     * @ORM\Column(name="image_path", type="string", nullable=false)
     */
    private $image_path;

    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $prix;

    /**
     * @var int
     *
     * @ORM\Column(name="stock", type="integer", nullable=true)
     */
    private $stock;    

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_produit", type="string", length=255, nullable=false)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="description_produit", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="taille", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $taille;

    /**
     * @ORM\ManyToOne(targetEntity="VMS\VitrineBundle\Entity\Materiau")
     */
    private $materiau;

    /**
     * @var string
     *
     * @ORM\Column(name="poids", type="string", length=255, nullable=true)
     */
    private $poids;

    /**
     * @ORM\ManyToOne(targetEntity="VMS\VitrineBundle\Entity\Origine")
     */
    private $origine;

    /**
     * @var string
     *
     * @ORM\Column(name="taux_reduc", type="string", length=255, nullable=true)
     */
    private $tauxReduc;

    /**
     * @ORM\ManyToOne(targetEntity="VMS\VitrineBundle\Entity\Categorie")
     */
    private $categorie;

    /**
     * @ORM\ManyToOne(targetEntity="VMS\VitrineBundle\Entity\Marque")
     */
    private $marque;


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
     * Set imagePath
     *
     * @param string $imagePath
     *
     * @return Produit
     */
    public function setImagePath($imagePath)
    {
        $this->image_path = $imagePath;

        return $this;
    }

    /**
     * Get imagePath
     *
     * @return string
     */
    public function getImagePath()
    {
        return $this->image_path;
    }

    /**
     * Set prix
     *
     * @param string $prix
     *
     * @return Produit
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return string
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set stock
     *
     * @param integer $stock
     *
     * @return Produit
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get stock
     *
     * @return integer
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Produit
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

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Produit
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set taille
     *
     * @param string $taille
     *
     * @return Produit
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;

        return $this;
    }

    /**
     * Get taille
     *
     * @return string
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * Set poids
     *
     * @param string $poids
     *
     * @return Produit
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;

        return $this;
    }

    /**
     * Get poids
     *
     * @return string
     */
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * Set tauxReduc
     *
     * @param string $tauxReduc
     *
     * @return Produit
     */
    public function setTauxReduc($tauxReduc)
    {
        $this->tauxReduc = $tauxReduc;

        return $this;
    }

    /**
     * Get tauxReduc
     *
     * @return string
     */
    public function getTauxReduc()
    {
        return $this->tauxReduc;
    }

    /**
     * Set categorie
     *
     * @param \VMS\VitrineBundle\Entity\Categorie $categorie
     *
     * @return Produit
     */
    public function setCategorie(\VMS\VitrineBundle\Entity\Categorie $categorie = null)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \VMS\VitrineBundle\Entity\Categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set marque
     *
     * @param \VMS\VitrineBundle\Entity\Marque $marque
     *
     * @return Produit
     */
    public function setMarque(\VMS\VitrineBundle\Entity\Marque $marque = null)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return \VMS\VitrineBundle\Entity\Marque
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set materiau
     *
     * @param \VMS\VitrineBundle\Entity\Materiau $materiau
     *
     * @return Produit
     */
    public function setMateriau(\VMS\VitrineBundle\Entity\Materiau $materiau = null)
    {
        $this->materiau = $materiau;

        return $this;
    }

    /**
     * Get materiau
     *
     * @return \VMS\VitrineBundle\Entity\Materiau
     */
    public function getMateriau()
    {
        return $this->materiau;
    }

    /**
     * Set origine
     *
     * @param \VMS\VitrineBundle\Entity\Origine $origine
     *
     * @return Produit
     */
    public function setOrigine(\VMS\VitrineBundle\Entity\Origine $origine = null)
    {
        $this->origine = $origine;

        return $this;
    }

    /**
     * Get origine
     *
     * @return \VMS\VitrineBundle\Entity\Origine
     */
    public function getOrigine()
    {
        return $this->origine;
    }
}
