<?php

class CommentContr extends Comment
{

    private $author;
    private $comment;
    public $fid;


    public function __construct($author, $comment, $fid)
    {
        $this->author = $author;
        $this->comment = $comment;
        $this->fid = $fid;
    }

    public function addComment()
    {
        if ($this->emptyInput() == false) {
            // Empty input!";
            header("location: ../../article.php?id=1321321");
            exit();
        }
        $this->setComment($this->author, $this->comment, $this->fid);
    }

    // Test for empty input
    private function emptyInput()
    {
        $result;
        if (empty($this->comment)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}


?>