<?php
/**
 * Created by PhpStorm.
 * User: stevendsb
 * Date: 18/10/17
 * Time: 16:02
 */

namespace project\model;


class Quest
{
    private $id;
    private $name;
    private $course;
    private $score;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Quest
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Quest
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * @param mixed $course
     * @return Quest
     */
    public function setCourse($course)
    {
        $this->course = $course;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * @param mixed $score
     * @return Quest
     */
    public function setScore($score)
    {
        $this->score = $score;
        return $this;
    }
}