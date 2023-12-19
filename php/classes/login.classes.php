<?php

class Login extends Dbh
{
    protected function getUser($uid, $pwd)
    {
        $stmt = $this->connect()->prepare('SELECT Password FROM user WHERE Username = ? OR EMail = ?;');

        if (!$stmt->execute(array($uid, $pwd))) {
            $stmt = null;
            header("location: ../../home.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: ../../auth.php?error=usernotfound");
            exit();
        }

        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd = password_verify($pwd, $pwdHashed[0]["Password"]);

        if ($checkPwd == false) {
            $stmt = null;
            header("location: ../../auth.php?error=wrongpassword");
            exit();
        } elseif ($checkPwd == true) {
            $stmt = $this->connect()->prepare('SELECT * FROM user WHERE Username = ? OR EMail = ? AND Password = ?;');

            if (!$stmt->execute(array($uid, $uid, $pwd))) {
                $stmt = null;
                header("location: ../../home.php?error=stmtfailed");
                exit();
            }

            if ($stmt->rowCount() == 0) {
                $stmt = null;
                header("location: ../../auth.php?error=usernotfound");
                exit();
            }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION["ID"] = $user[0]["ID"];
            $_SESSION["Username"] = $user[0]["Username"];
            $_SESSION["Email"] = $user[0]["EMail"];
            $_SESSION["role"] = $user[0]["Role_ID"];

            $stmt = null;
        }

        $stmt = null;
    }

}


?>