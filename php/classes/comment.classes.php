<?php

class Comment extends Dbh {

    protected function setComment($author, $comment, $fid)
    {
        $stmt = $this->connect()->prepare("INSERT INTO comments (Author_ID, Content, News_ID) VALUES (?, ?, ?);");

        if (!$stmt->execute(array($author, $comment, $fid))) {
            $stmt = null;
            header("location: ../../article.php?id=$fid");
            exit();
        }

        $stmt = null;
    }
}


?>