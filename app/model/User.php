<?php

use Database\Connection;

class User
{
    private $id;
    private $name;
    private $email;
    private $password;

    public function validateLogin()
    {
        $conn = Connection::getConn();
        $sql = 'SELECT * FROM user WHERE email = :email';

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':email', $this->email);
        $stmt->execute();

        if ($stmt->rowCount()) {
            $result = $stmt->fetch();

            if ($result['password' === $this->password]) {
                $_SESSION['usr'] = $result['id'];

                return true;
            }
        }

        throw new \Exception('Login Inválido');
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getPassword()
    {
        return $this->password;
    }
}
