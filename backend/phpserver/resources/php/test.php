<?php
class Test
{
    private $name;
    private $authorID;
    private $questions = [];

    /**
     * Test constructor.
     * @param $name
     * @param $authorID
     * @param array $questions
     */
    public function __construct($name, $authorID, array $questions)
    {
        $this->name = $name;
        $this->authorID = $authorID;
        $this->questions = $questions;
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
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAuthorID()
    {
        return $this->authorID;
    }

    /**
     * @param mixed $authorID
     */
    public function setAuthorID($authorID): void
    {
        $this->authorID = $authorID;
    }

    /**
     * @return array
     */
    public function getQuestions(): array
    {
        return $this->questions;
    }

    /**
     * @param array $questions
     */
    public function setQuestions(array $questions): void
    {
        $this->questions = $questions;
    }

    public function addQuestion($name, $answer):void
    {
        $this->questions[$name]=$answer;
    }

    public function removeQuestion($name)
    {
        unset($this->questions[$name]);
    }
}

class Question
{
    private $name;
    private $answers =[];

    /**
     * Question constructor.
     * @param $name
     * @param array $answers
     */
    public function __construct($name, array $answers)
    {
        $this->name = $name;
        $this->answers = $answers;
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
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return array
     */
    public function getAnswers(): array
    {
        return $this->answers;
    }

    /**
     * @param array $answers
     */
    public function setAnswers(array $answers): void
    {
        $this->answers = $answers;
    }

public function addAnswer($name, $answer):void
{
    $this->answers[$name]=$answer;
}

public function removeAnswer($name)
{
    unset($this->answers[$name]);
}
}
?>