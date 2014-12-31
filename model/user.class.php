<?php
class User {
    public $Id;
    public $Name;
    public $Email;
    public $AdultEnabled = 0;
    public $Created = 0;
    public $LastSigned = 0;
    public $Password;
    public $Admin = 0;
    protected $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function Save() {
        if (!$this->Id) {
            $q = 'insert into user (name, email, adult_enabled, created, last_signed, password, admin) values (:name, :email, :adult_enabled, :created, :last_signed, :password, :admin)';

            $this->Created = date('Y-m-d H:i:s', time());
            $this->LastSigned = date('Y-m-d H:i:s', time());
        } else {

        }

        $q = $this->db['pdo']->prepare($q);

        $q->bindParam('name', $this->Name);
        $q->bindParam('email', $this->Email);
        $q->bindParam('adult_enabled', $this->AdultEnabled);
        $q->bindParam('created', $this->Created);
        $q->bindParam('last_signed', $this->LastSigned);
        $q->bindParam('password', $this->Password);
        $q->bindParam('admin', $this->Admin);

        $result = $q->execute();

        if ($result) {
            $this->Id = $this->db['pdo']->lastInsertId();
        }

        return $this->Id;
    }

    public function LoadById($id) {
        $q = "select * from user where id=:id";
        $q = $this->db['pdo']->prepare($q);
        $q->bindParam(':id', $id);
        $result = $q->execute();

        if ($result) {
            $this->SetParams($q->fetch(PDO::FETCH_ASSOC));
        }

        return $result;
    }

    public function LoadByName($name) {
        $q = "select * from user where name=:name";
        $q = $this->db['pdo']->prepare($q);
        $q->bindParam(':name', $name);
        $result = $q->execute();

        if ($result) {
            $this->SetParams($q->fetch(PDO::FETCH_ASSOC));
        }

        return $result;
    }

    private function SetParams($DbParams) {
        $this->Id = $DbParams['id'];
        $this->Name = $DbParams['name'];
        $this->Email = $DbParams['email'];
        $this->AdultEnabled = $DbParams['adult_enabled'];
        $this->Created = $DbParams['created'];
        $this->LastSigned = $DbParams['last_signed'];
        $this->Password = $DbParams['password'];
        $this->Admin = $DbParams['admin'];
    }

    public function Login() {
        if ($this->Id) {
            $_SESSION['user']['id'] = $this->Id;
            $_SESSION['user']['admin'] = $this->Admin;
            $_SESSION['user']['name'] = $this->Name;
        }
    }
}
?>