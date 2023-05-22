<?php
class User{
    private $id; 
    private $name;
    private $lastname;
    private $email;
    private $password;
    private $rol;
    private $image;
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }
    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName($name): self
    {
        $stmt = $this->db->prepare('UPDATE users SET name = :name WHERE id = :id');
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':id', $this->id);
        $stmt->execute();

        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of lastname
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     */
    public function setLastname($lastname): self
    {
        $stmt = $this->db->prepare('UPDATE users SET lastname = :lastname WHERE id = :id');
        $stmt->bindParam(':lastname', $lastname);
        $stmt->bindParam(':id', $this->id);
        $stmt->execute();

        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail($email): self
    {
        $stmt = $this->db->prepare('UPDATE users SET email = :email WHERE id = :id');
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':id', $this->id);
        $stmt->execute();

        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     */
    public function setPassword($password): self
    {
        $stmt = $this->db->prepare('UPDATE users SET  password = :password WHERE id = :id');
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':id', $this->id);
        $stmt->execute();

        $this->password = password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);

        return $this;
    }

    /**
     * Get the value of rol
     */
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * Set the value of rol
     */
    public function setRol($rol): self
    {
        $this->rol = $rol;

        return $this;
    }

    /**
     * Get the value of image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     */
    public function setImage($image): self
    {
        $this->image = $image;

        return $this;
    }
    // code to mysql

    // public function save(){
    //     $sql = "INSERT INTO users VALUES (NULL, '{$this->getName()}', '{$this->getLastname()}', '{$this->getEmail()}', '{$this->getPassword()}', 'user', null);";
    //     $save = $this->db->query($sql);

    //     $result = false;
    //     if($save){
    //         $result = true;
    //     }
    // }

    public function save(){
        $sql = "INSERT INTO users (name, lastname, email, password, rol) VALUES (:name, :lastname, :email, :password, 'user')";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':name', $this->getName());
        $stmt->bindParam(':lastname', $this->getLastname());
        $stmt->bindParam(':email', $this->getEmail());
        $stmt->bindParam(':password', $this->getPassword());

        $result = $stmt->execute();
        return $result;
    }
}