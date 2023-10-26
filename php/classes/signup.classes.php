<?php

class Signup extends Dbh
{
    protected function setUser($uid, $pwd, $email)
    {
        $stmt = $this->connect()->prepare('INSERT INTO user (Username, EMail, Password, Role_ID) VALUES (?, ?, ?, ?);');

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        if (!$stmt->execute(array($uid, $email, $hashedPwd, 1))) {
            $stmt = null;
            header("location: ../../home.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }


    protected function checkUser($uid, $email)
    {
        $stmt = $this->connect()->prepare('SELECT Username FROM user WHERE Username = ? or EMail = ?;');

        if (!$stmt->execute(array($uid, $email))) {
            $stmt = null;
            header("location: ../../home.php?error=stmtfailed");
            exit();
        }

        $resultCheck;
        if ($stmt->rowCount() > 0) {
            $resultCheck = false;
        } else {
            $resultCheck = true;
        }
        return $resultCheck;
    }

}

?>