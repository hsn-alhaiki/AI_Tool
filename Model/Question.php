<?php 
class Question {
    private $question;
    private $options;

    public function __construct($question, $options)
    {
        $this-> question = $question;
        $this-> options = $options;
    }

  
    public function get_question(){
    $this -> question;
    }

    public function get_options(){
    $this-> options;
    }
}

