<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DjangoSite
 *
 * @ORM\Table(name="django_site")
 * @ORM\Entity
 */
class DjangoSite
{
    /**
     * @var string
     *
     * @ORM\Column(name="domain", type="string", length=100, nullable=false)
     */
    private $domain;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="django_site_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;



    /**
     * Set domain
     *
     * @param string $domain
     *
     * @return DjangoSite
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;

        return $this;
    }

    /**
     * Get domain
     *
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return DjangoSite
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
