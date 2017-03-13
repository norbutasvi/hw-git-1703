<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 3/13/2017
 * Time: 12:29 PM
 */

class homework {

    public $text = "This is fifth.php - git-homework.";

    public function homeworkText() {
        return $this->text;
    }
}

$homework = new homework();

echo $homework->homeworkText();