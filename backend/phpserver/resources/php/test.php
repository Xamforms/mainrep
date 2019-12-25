<?php
class SomeTest
{
    private $name = "Добавьте название";
    private $authorID;
    private $questions = [];

    public function __construct(){}

    public static function create()
    {
        $instance = new self();
        $instance->authorID = session('userID');
        $instance->questions = [Question::create()];
        return $instance;
    }

    public static function edit(string $name, array $questions)
    {
        $instance = new self();
        $instance->name = $name;
        $instance->authorID = session('userID');
        $instance->questions = $questions;
        return $instance;
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
    public function setName(string $name): void
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

    public function addQuestion(string $name, $question):void
    {
        $this->questions[$name]=$question;
    }

    public function removeQuestion($questionname)
    {
        unset($this->questions[$questionname]);
    }
}

class Question
{
    private $name = "Добавьте вопрос";
    private $quality = 2;
    private $answers = [];

    public function __construct(){}

    public static function create()
    {
        $instance = new self();
        $instance->answers = [
            Answer::create("Добавьте ответ 1",false),
            Answer::create("Добавьте ответ 2",true)
        ];
        return $instance;
    }


    public static function edit (string $name, int $quality, array $answers)
    {
        $instance = new self();
        $instance->answers = $answers;
        $instance->name=$name;
        $instance->quality = $quality;
        return $instance;
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
    public function setName(string $name): void
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

    public function addAnswer(string $name, $answer): void
    {
        $this->answers[$name] = $answer;
    }

    public function removeAnswer($answername)
    {
        unset($this->answers[$answername]);
    }

    /**
     * @return int
     */
    public function getQuality(): int
    {
        return $this->quality;
    }

    /**
     * @param int $quality
     */
    public function setQuality(int $quality): void
    {
        $this->quality = $quality;
    }
}

class Answer
{
    private $name = "Добавьте ответ";
    private $type = false;

    public function __construct(){}

    public static function create(string $name, bool $type)
    {
        $instance = new self();
        $instance->name = $name;
        $instance->type = $type;
        return $instance;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return bool
     */
    public function isType(): bool
    {
        return $this->type;
    }

    /**
     * @param bool $type
     */
    public function setType(bool $type): void
    {
        $this->type = $type;
    }
}
?>