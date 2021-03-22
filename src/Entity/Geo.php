<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Geo
 *
 * @ORM\Table(name="geo")
 * @ORM\Entity
 */
class Geo
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="actual", type="integer", nullable=false)
     */
    private $actual;

    /**
     * @var int
     *
     * @ORM\Column(name="cheflieu", type="integer", nullable=false)
     */
    private $cheflieu;

    /**
     * @var int
     *
     * @ORM\Column(name="cdc", type="integer", nullable=false)
     */
    private $cdc;

    /**
     * @var int
     *
     * @ORM\Column(name="rang", type="integer", nullable=false)
     */
    private $rang;

    /**
     * @var int
     *
     * @ORM\Column(name="reg", type="integer", nullable=false)
     */
    private $reg;

    /**
     * @var int
     *
     * @ORM\Column(name="dep", type="integer", nullable=false)
     */
    private $dep;

    /**
     * @var int
     *
     * @ORM\Column(name="com", type="integer", nullable=false)
     */
    private $com;

    /**
     * @var int
     *
     * @ORM\Column(name="ar", type="integer", nullable=false)
     */
    private $ar;

    /**
     * @var int
     *
     * @ORM\Column(name="ct", type="integer", nullable=false)
     */
    private $ct;

    /**
     * @var int
     *
     * @ORM\Column(name="modif", type="integer", nullable=false)
     */
    private $modif;

    /**
     * @var int
     *
     * @ORM\Column(name="pole", type="integer", nullable=false)
     */
    private $pole;

    /**
     * @var string
     *
     * @ORM\Column(name="tncc", type="string", length=255, nullable=false)
     */
    private $tncc;

    /**
     * @var string
     *
     * @ORM\Column(name="artmaj", type="string", length=255, nullable=false)
     */
    private $artmaj;

    /**
     * @var string
     *
     * @ORM\Column(name="ncc", type="string", length=255, nullable=false)
     */
    private $ncc;

    /**
     * @var string
     *
     * @ORM\Column(name="artmin", type="string", length=255, nullable=false)
     */
    private $artmin;

    /**
     * @var string
     *
     * @ORM\Column(name="nccenr", type="string", length=255, nullable=false)
     */
    private $nccenr;

    /**
     * @var string
     *
     * @ORM\Column(name="articlct", type="string", length=255, nullable=false)
     */
    private $articlct;

    /**
     * @var string
     *
     * @ORM\Column(name="nccct", type="string", length=255, nullable=false)
     */
    private $nccct;


}
