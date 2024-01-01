<?php
require_once('Model.php');

class User extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table = 'users';
    }

    //method - method lainnya
    public function getUserByEmail($email)
    {
        $query = "SELECT * FROM {$this->table} WHERE email = :email";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function verifyLogin($email, $password)
    {
        $user = $this->getUserByEmail($email);
        if ($user && password_verify($password, $user['password'])) {
            // Password matches
            return $user;
        } else {
            // Invalid credentials
            return false;
        }
    }

    public function verifyToken($email, $token)
    {
        $user = $this->getUserByEmail($email);
        if ($user && $token === $user['token']) {
            // Password matches
            return $user;
        } else {
            // Invalid credentials
            return false;
        }
    }

    public function setTokenUser($email, $token)
    {
        try {
            $query = "UPDATE {$this->table} SET token = :token WHERE email = :email";
            $stmt = $this->conn->prepare($query);

            $stmt->bindValue(':token', $token);
            $stmt->bindValue(':email', $email);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

}
