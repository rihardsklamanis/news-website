<?php

class Users extends Dbh {

    function countUsers()
    {
        $stmt = $this->connect()->prepare("SELECT COUNT(ID) as 'count' FROM user;");

        if (!$stmt->execute()) {
            $stmt = null;
            header("location: ../../users.php?error=stmtfailed");
            exit();
        }
        if ($stmt->rowCount() == 0) {
            $stmt = null;
            ?>
            
            <?php exit();
        }
        $usercount= $stmt->fetch(PDO::FETCH_ASSOC);

        echo $usercount["count"];
        
    }

    function countBanned()
    {
        $stmt = $this->connect()->prepare("SELECT COUNT(ID) as 'count' FROM user WHERE Role_ID = 5;");

        if (!$stmt->execute()) {
            $stmt = null;
            header("location: ../../users.php?error=stmtfailed");
            exit();
        }
        if ($stmt->rowCount() == 0) {
            $stmt = null;
            ?>
            
            <?php exit();
        }
        $bannedcount= $stmt->fetch(PDO::FETCH_ASSOC);

        echo $bannedcount["count"];
        
    }

    function outputUsers() {

        $stmt = $this->connect()->prepare("SELECT u.ID AS 'ID', u.Username AS 'Username', u.EMail AS 'EMail', u.Creation_Date AS 'CreationDate', r.Name AS 'Role' FROM user AS u
        INNER JOIN roles AS r
        ON u.Role_ID = r.ID;");

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
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Free result from memory
        $stmt = null;
        ?><div class="data title">
            <span class="data-title">Username</span> <?php
            foreach($users as $user){ ?>
                <span class="data-list"><?php echo $user['Username'] ?></span>
            <?php } ?>
        </div> 
        <div class="data postdate">
            <span class="data-title">Registration Date</span>
        <?php
        foreach($users as $user){ ?>
            <span class="data-list"><?php echo $user['CreationDate'] ?></span>
        <?php } ?>
        </div>
        <div class="data email">
            <span class="data-title">E-Mail</span> 
            <?php
            foreach($users as $user){ ?>
            <span class="data-list"><?php echo $user['EMail'] ?></span>
        <?php } ?>
        </div>          
        <div class="data type">
            <span class="data-title">Role</span>
            <?php
            foreach($users as $user){ ?>
            <span class="data-list"><?php echo $user['Role'] ?></span>
        <?php } ?>            
        </div>              
        <div class="data status">
            <span class="data-title">Change Role</span>  
            <?php
            foreach($users as $user){ ?>
            <span class="data-list"><a href="changerole.php?id=<?php echo $user['ID'] ?>">Change</a></span>
        <?php } ?>            
        </div>             
        <div class="data type">
            <span class="data-title">Block User</span>
            <?php
            foreach($users as $user){ ?>
            <span class="data-list"><a href="php/includes/blockrole.php?id=<?php echo $user['ID'] ?>">Block</a></span>
        <?php } ?>            
        </div>
        <?php                
                    
    }

    function getRoles() {

        $stmt = $this->connect()->prepare("SELECT * FROM roles;");
        if (!$stmt->execute()) {
            $stmt = null;
            header("location: ../../index.php?error=stmtfailed");
            exit();
        }
        if ($stmt->rowCount() == 0) {
            $stmt = null;
            ?>
            <option value="ERROR"></option>ERROR: Roles not found</option>
            <?php exit();
        }
        $roles= $stmt->fetchAll(PDO::FETCH_ASSOC);

        $stmt = null; 
        foreach($roles as $role){ ?>
            <option value="<?php echo $role['ID']; ?>"><?php echo $role['Name']; ?></option>
        <?php }
    }
}


?>