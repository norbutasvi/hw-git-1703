<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 3/13/2017
 * Time: 12:28 PM
 */

class homework {

    public $text = "This is third.php - git-homework. - edited";

    public function homeworkText() {
        return $this->text;
    }
}

$homework = new homework();

echo $homework->homeworkText();