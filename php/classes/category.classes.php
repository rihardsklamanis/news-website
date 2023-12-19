<?php
  
Class Category extends Dbh {

    protected function setCategory($category)
    {
        $stmt = $this->connect()->prepare("INSERT INTO category (ID, Name) VALUES (?, ?);");

        if (!$stmt->execute(array(6, $category))) {
            $stmt = null;
            header("location: ../../categories.php$");
            exit();
        }

        $stmt = null;
    }

    function getCategories() {

        $stmt = $this->connect()->prepare("SELECT * FROM category;");
        if (!$stmt->execute()) {
            $stmt = null;
            header("location: ../../index.php?error=stmtfailed");
            exit();
        }
        if ($stmt->rowCount() == 0) {
            $stmt = null;
            ?>
            <option value="ERROR"></option>ERROR: Categories not found</option>
            <?php exit();
        }
        $categories= $stmt->fetchAll(PDO::FETCH_ASSOC);

        $stmt = null; 
        foreach($categories as $category){ ?>
            <option value="<?php echo $category['ID']; ?>"><?php echo $category['Name']; ?></option>
        <?php }
    }

   function countArticles($categoryName) {
    $stmt = $this->connect()->prepare("SELECT COUNT(a.ID) as 'count' FROM article AS a
    INNER JOIN category  AS c
    ON a.Category_ID = c.ID
    where c.Name = '$categoryName';");

    if (!$stmt->execute()) {
        $stmt = null;
        header("location: ../../categories.php?error=stmtfailed");
        exit();
    }
    if ($stmt->rowCount() == 0) {
        $stmt = null;
        ?>
        
        <?php exit();
    }
    $categorycount= $stmt->fetch(PDO::FETCH_ASSOC);

    echo $categorycount["count"];

   }

   function outputCategories() {
        $stmt = $this->connect()->prepare("SELECT * FROM category;");

        if (!$stmt->execute()) {
            $stmt = null;
            header("location: ../../categories.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            ?>
            <div class="title">
                <i class="uil uil-books"></i>
                <span class="text">0 Categories Found</span>
            </div>
            <?php exit();
        }

        $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $stmt = null; 
        foreach($categories as $category){ ?>
            <div class="box box3">
                <span class="text"><?php echo $category['Name']; ?></span>
                <span class="number"><?php $this->countArticles($category['Name']); ?></span>
                <span class="text"><a href="php/includes/removecategory.php?id=<?php echo $category['ID']; ?>">Remove</a></span>
            </div>
        <?php }
   }
}

?>