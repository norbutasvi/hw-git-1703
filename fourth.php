<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 3/13/2017
 * Time: 12:28 PM
 */

class homework {

    public $text = "This is fourth.php - git-homework. - last commit after merges";

    public function homeworkText() {
        return $this->text;
    }
}

$homework = new homework();

echo $homework->homeworkText();