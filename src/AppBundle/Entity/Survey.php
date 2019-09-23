<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;


/**
 * Survey
 *
 * @ORM\Table(name="survey")
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SurveyRepository")
 */
class Survey
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
     * @var array
     *
     * @ORM\Column(name="s1q1", type="array")
     */
    private $s1q1;

    /**
     * @var string
     *
     * @ORM\Column(name="s1q1b", type="text", nullable=true)
     */
    private $s1q1b;

    /**
     * @var string
     *
     * @ORM\Column(name="s1q2", type="array")
     */
    private $s1q2;

    /**
     * @var string
     *
     * @ORM\Column(name="s1q2b", type="text", nullable=true)
     */
    private $s1q2b;

    /**
     * @var string
     *
     * @ORM\Column(name="s1q3", type="array")
     */
    private $s1q3;

    /**
     * @var string
     *
     * @ORM\Column(name="s1q3b", type="text",  nullable=true)
     */
    private $s1q3b;

    /**
     * @var string
     *
     * @ORM\Column(name="s1q4", type="array")
     */
    private $s1q4;

    /**
     * @var string
     *
     * @ORM\Column(name="s1q4b", type="text", nullable=true)
     */
    private $s1q4b;

    /**
     * @var string
     *
     * @ORM\Column(name="s1q5", type="array")
     */
    private $s1q5;

    /**
     * @var string
     *
     * @ORM\Column(name="s1q5b", type="text", nullable=true)
     */
    private $s1q5b;

    /**
     * @var string
     *
     * @ORM\Column(name="s2q1", type="text", nullable=true)
     */
    private $s2q1;

    /**
     * @var string
     *
     * @ORM\Column(name="s2q2", type="text", nullable=true)
     */
    private $s2q2;

    /**
     * @var bool
     *
     * @ORM\Column(name="s2q3", type="boolean", nullable=true)
     */
    private $s2q3;

    /**
     * @var string
     *
     * @ORM\Column(name="s2q4", type="text", nullable=true)
     */
    private $s2q4;

    /**
     * @var string
     *
     * @ORM\Column(name="s2q5", type="text", nullable=true)
     */
    private $s2q5;

    /**
     * @var string
     *
     * @ORM\Column(name="s2q6", type="text", nullable=true)
     */
    private $s2q6;

    /**
     * @var string
     *
     * @ORM\Column(name="s2q7", type="text", nullable=true)
     */
    private $s2q7;

    /**
     * @var string
     *
     * @ORM\Column(name="s2q8", type="text", nullable=true)
     */
    private $s2q8;

    /**
     * @var string
     *
     * @ORM\Column(name="s2q9", type="text", nullable=true)
     */
    private $s2q9;

    /**
     * @var string
     *
     * @ORM\Column(name="s2q10", type="array", nullable=true)
     */
    private $s2q10;

    /**
     * @var string
     *
     * @ORM\Column(name="s2q11", type="text", nullable=true)
     */
    private $s2q11;

    /**
     * @var string
     *
     * @ORM\Column(name="s2q12", type="text", nullable=true)
     */
    private $s2q12;

    /**
     * @var string
     *
     * @ORM\Column(name="s2q13", type="text", nullable=true)
     */
    private $s2q13;

    /**
     * @var string
     *
     * @ORM\Column(name="s3q1", type="text", nullable=true)
     */
    private $s3q1;

    /**
     * @var bool
     *
     * @ORM\Column(name="leader", type="boolean")
     */
    private $leader;

    /**
     * @var string
     *
     * @ORM\Column(name="stage", type="text")
     */
    private $stage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modifiedAt", type="datetime", nullable=true)
     */
    private $modifiedAt;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set s1q1
     *
     * @param mixed $s1q1
     * @return Survey
     */
    public function setS1q1($s1q1)
    {
        $this->s1q1 = $s1q1;

        return $this;
    }

    /**
     * Get s1q1
     *
     * @return Collection
     */

    public function getS1q1()
    {
        return $this->s1q1;
    }

    /**
     * Set s1q1b
     *
     * @param string $s1q1b
     *
     * @return Survey
     */
    public function setS1q1b($s1q1b)
    {
        $this->s1q1b = $s1q1b;

        return $this;
    }

    /**
     * Get s1q1b
     *
     * @return string
     */
    public function getS1q1b()
    {
        return $this->s1q1b;


    }

    /**
     * Set s1q2
     *
     * @param mixed $s1q2
     * @return Survey
     */
    public function setS1q2($s1q2)
    {
        $this->s1q2 = $s1q2;

        return $this;
    }

    /**
     * Get s1q2
     *
     * @return Collection
     */
    public function getS1q2()
    {
        return $this->s1q2;
    }

    /**
     * Set s1q2b
     *
     * @param string $s1q2b
     *
     * @return Survey
     */
    public function setS1q2b($s1q2b)
    {
        $this->s1q2b = $s1q2b;

        return $this;
    }

    /**
     * Get s1q2b
     *
     * @return string
     */
    public function getS1q2b()
    {
        return $this->s1q2b;
    }

    /**
     * @return string
     */
    public function getS1q3()
    {
        return $this->s1q3;
    }

    /**
     * @param string $s1q3
     */
    public function setS1q3($s1q3)
    {
        $this->s1q3 = $s1q3;
    }



    /**
     * Set s1q3b
     *
     * @param string $s1q3b
     *
     * @return Survey
     */
    public function setS1q3b($s1q3b)
    {
        $this->s1q3b = $s1q3b;

        return $this;
    }

    /**
     * Get s1q3b
     *
     * @return string
     */
    public function getS1q3b()
    {
        return $this->s1q3b;
    }

    /**
     * Set s1q4
     *
     * @param string $s1q4
     *
     * @return Survey
     */
    public function setS1q4($s1q4)
    {
        $this->s1q4 = $s1q4;

        return $this;
    }

    /**
     * Get s1q4
     *
     * @return string
     */
    public function getS1q4()
    {
        return $this->s1q4;
    }

    /**
     * Set s1q4b
     *
     * @param string $s1q4b
     *
     * @return Survey
     */
    public function setS1q4b($s1q4b)
    {
        $this->s1q4b = $s1q4b;

        return $this;
    }

    /**
     * Get s1q4b
     *
     * @return string
     */
    public function getS1q4b()
    {
        return $this->s1q4b;
    }

    /**
     * Set s1q5
     *
     * @param string $s1q5
     *
     * @return Survey
     */
    public function setS1q5($s1q5)
    {
        $this->s1q5 = $s1q5;

        return $this;
    }

    /**
     * Get s1q5
     *
     * @return string
     */
    public function getS1q5()
    {
        return $this->s1q5;
    }

    /**
     * Set s1q5b
     *
     * @param string $s1q5b
     *
     * @return Survey
     */
    public function setS1q5b($s1q5b)
    {
        $this->s1q5b = $s1q5b;

        return $this;
    }

    /**
     * Get s1q5b
     *
     * @return string
     */
    public function getS1q5b()
    {
        return $this->s1q5b;
    }

    /**
     * Set s2q1
     *
     * @param string $s2q1
     *
     * @return Survey
     */
    public function setS2q1($s2q1)
    {
        $this->s2q1 = $s2q1;

        return $this;
    }

    /**
     * Get s2q1
     *
     * @return string
     */
    public function getS2q1()
    {
        return $this->s2q1;
    }

    /**
     * Set s2q2
     *
     * @param string $s2q2
     *
     * @return Survey
     */
    public function setS2q2($s2q2)
    {
        $this->s2q2 = $s2q2;

        return $this;
    }

    /**
     * Get s2q2
     *
     * @return string
     */
    public function getS2q2()
    {
        return $this->s2q2;
    }

    /**
     * @return bool
     */
    public function isS2q3()
    {
        return $this->s2q3;
    }

    /**
     * @param bool $s2q3
     */
    public function setS2q3($s2q3)
    {
        $this->s2q3 = $s2q3;
    }



    /**
     * Set s2q4
     *
     * @param string $s2q4
     *
     * @return Survey
     */
    public function setS2q4($s2q4)
    {
        $this->s2q4 = $s2q4;

        return $this;
    }

    /**
     * Get s2q4
     *
     * @return string
     */
    public function getS2q4()
    {
        return $this->s2q4;
    }

    /**
     * Set s2q5
     *
     * @param string $s2q5
     *
     * @return Survey
     */
    public function setS2q5($s2q5)
    {
        $this->s2q5 = $s2q5;

        return $this;
    }

    /**
     * Get s2q5
     *
     * @return string
     */
    public function getS2q5()
    {
        return $this->s2q5;
    }

    /**
     * Set s2q6
     *
     * @param string $s2q6
     *
     * @return Survey
     */
    public function setS2q6($s2q6)
    {
        $this->s2q6 = $s2q6;

        return $this;
    }

    /**
     * Get s2q6
     *
     * @return string
     */
    public function getS2q6()
    {
        return $this->s2q6;
    }

    /**
     * Set s2q7
     *
     * @param string $s2q7
     *
     * @return Survey
     */
    public function setS2q7($s2q7)
    {
        $this->s2q7 = $s2q7;

        return $this;
    }

    /**
     * Get s2q7
     *
     * @return string
     */
    public function getS2q7()
    {
        return $this->s2q7;
    }

    /**
     * Set s2q8
     *
     * @param string $s2q8
     *
     * @return Survey
     */
    public function setS2q8($s2q8)
    {
        $this->s2q8 = $s2q8;

        return $this;
    }

    /**
     * Get s2q8
     *
     * @return string
     */
    public function getS2q8()
    {
        return $this->s2q8;
    }

    /**
     * Set s2q9
     *
     * @param string $s2q9
     *
     * @return Survey
     */
    public function setS2q9($s2q9)
    {
        $this->s2q9 = $s2q9;

        return $this;
    }

    /**
     * Get s2q9
     *
     * @return string
     */
    public function getS2q9()
    {
        return $this->s2q9;
    }

    /**
     * Set s2q10
     *
     * @param string $s2q10
     *
     * @return Survey
     */
    public function setS2q10($s2q10)
    {
        $this->s2q10 = $s2q10;

        return $this;
    }

    /**
     * Get s2q10
     *
     * @return string
     */
    public function getS2q10()
    {
        return $this->s2q10;
    }

    /**
     * Set s2q11
     *
     * @param string $s2q11
     *
     * @return Survey
     */
    public function setS2q11($s2q11)
    {
        $this->s2q11 = $s2q11;

        return $this;
    }

    /**
     * Get s2q11
     *
     * @return string
     */
    public function getS2q11()
    {
        return $this->s2q11;
    }

    /**
     * Set s2q12
     *
     * @param string $s2q12
     *
     * @return Survey
     */
    public function setS2q12($s2q12)
    {
        $this->s2q12 = $s2q12;

        return $this;
    }

    /**
     * Get s2q12
     *
     * @return string
     */
    public function getS2q12()
    {
        return $this->s2q12;
    }

    /**
     * Set s2q13
     *
     * @param string $s2q13
     *
     * @return Survey
     */
    public function setS2q13($s2q13)
    {
        $this->s2q13 = $s2q13;

        return $this;
    }

    /**
     * Get s2q13
     *
     * @return string
     */
    public function getS2q13()
    {
        return $this->s2q13;
    }

    /**
     * Set s3q1
     *
     * @param string $s3q1
     *
     * @return Survey
     */
    public function setS3q1($s3q1)
    {
        $this->s3q1 = $s3q1;

        return $this;
    }

    /**
     * Get s3q1
     *
     * @return string
     */
    public function getS3q1()
    {
        return $this->s3q1;
    }

    /**
     * @return bool
     */
    public function isLeader()
    {
        return $this->leader;
    }

    /**
     * @param bool $leader
     */
    public function setLeader($leader)
    {
        $this->leader = $leader;
    }

    /**
     * @return string
     */
    public function getStage()
    {
        return $this->stage;
    }

    /**
     * @param string $stage
     */
    public function setStage($stage)
    {
        $this->stage = $stage;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Survey
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @return \DateTime
     */
    public function getModifiedAt()
    {
        return $this->modifiedAt;
    }

    /**
     * @param \DateTime $modifiedAt
     */
    public function setModifiedAt($modifiedAt)
    {
        $this->modifiedAt = $modifiedAt;
    }


//    /**
//     * @ORM\PrePersist
//     */
//    public function setCreatedAtValue()
//    {
//        $this->createdAt = new \DateTime();
//
//    }

    /**
     * @ORM\PrePersist
     */
    public function prePersist()
    {
        $this->setCreatedAt(new \DateTime());
        $this->setModifiedAt(new \DateTime());
    }


    /**
     * @ORM\PreUpdate
     */
    public function preUpdate()
    {
        $this->setModifiedAt(new \DateTime());
    }


}

