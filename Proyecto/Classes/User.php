<?php
class User {
    private $id_user;
    private $user_name;
    private $user_role;

    // Constructor
    public function __construct($id_user, $user_name, $user_role) {
        $this->id_user = $id_user;
        $this->user_name = $user_name;
        $this->user_role = $user_role;
    }

    // Getters
    public function getIdUser() {
        return $this->id_user;
    }

    public function getUserName() {
        return $this->user_name;
    }

    public function getUserRole() {
        return $this->user_role;
    }

    public function isAdmin() {
        return $this->user_role === "Admin";
    }

    // Setters
    public function setIdUser($id_user) {
        $this->id_user = $id_user;
    }

    public function setUserName($user_name) {
        $this->user_name = $user_name;
    }

    public function setUserRole($user_role) {
        $this->user_role = $user_role;
    }
}
?>
