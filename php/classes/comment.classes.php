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

    function countComments() {
        $stmt = $this->connect()->prepare("SELECT COUNT(ID) as 'count' FROM comments");

        if (!$stmt->execute()) {
            $stmt = null;
            header("location: ../../comments.php?error=stmtfailed");
            exit();
        }
        if ($stmt->rowCount() == 0) {
            $stmt = null;
            ?>
            
            <?php exit();
        }
        $commentcount= $stmt->fetch(PDO::FETCH_ASSOC);

        echo $commentcount["count"];
    }

    function outputComments() {
        $stmt = $this->connect()->prepare("SELECT c.ID AS 'ID', u.ID AS 'UID', u.Username AS 'Username', c.PostDate AS 'Postdate', c.Content AS 'Comment'  FROM comments AS c 
        INNER JOIN user AS u 
        ON c.Author_ID = u.ID
        ORDER BY c.PostDate DESC;");

        // Test if statement executed
        if (!$stmt->execute()) {
            $stmt = null;
            header("location: ../../home.php?error=stmtfailed");
            exit();
        }

        // Check if statement returns anything
        if ($stmt->rowCount() == 0) {
            $stmt = null;
            exit();
        }

        // Fetch all results into $news array
        $comments = $stmt->fetchAll(PDO::FETCH_ASSOC); ?>

        <div class="article-data">
            <div class="data title"> 
                <span class="data-title">Author Name</span> <?php
                foreach($comments as $comment){ ?>
                <span class="data-list"><?php echo $comment['Username'] ?></span>
            <?php } ?>
            </div>
            <div class="data postdate">
                <span class="data-title">Post Date</span> <?php
                foreach($comments as $comment){ ?>
                <span class="data-list"><?php echo $comment['Postdate'] ?></span>
            <?php } ?>
            </div>
            <div class="data comments">
                <span class="data-title">Comment</span> <?php
                foreach($comments as $comment){ ?>
                <span class="data-list"><?php echo $comment['Comment'] ?></span>
            <?php } ?>
            </div>
            <div class="data type">
                <span class="data-title">Block User</span><?php
                foreach($comments as $comment){ ?>
                <span class="data-list"><a href="php/includes/blockrole.php?id=<?php echo $comment['UID'] ?>">Block</a></span>
            <?php } ?>
            </div>
            <div class="data status">
                <span class="data-title">Remove Comment</span><?php
                foreach($comments as $comment){ ?>
                <span class="data-list"><a href="php/includes/removecomment.php?id=<?php echo $comment['ID'] ?>">Remove</a></span>
            <?php } ?>
            </div>
        </div>
        <?php
    }
}


?>