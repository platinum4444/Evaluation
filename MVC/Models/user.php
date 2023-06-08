<?php
require_once 'database.php';

class UserModel
{
    private $conn;

    public function __construct()
    {
        $db = Database::getInstance();
        $this->conn = $db->getConnection();
    }

    public function saveUserData($firstName, $lastName, $company, $country, $prefix, $phone, $email)
    {
        try {
            $stmt = $this->conn->prepare("INSERT INTO users (firstname, lastname, company, country, prefix, phone, email) VALUES (:firstname, :lastname, :company, :country, :prefix, :phone, :email)");
            $stmt->bindParam(':firstname', $firstName);
            $stmt->bindParam(':lastname', $lastName);
            $stmt->bindParam(':company', $company);
            $stmt->bindParam(':country', $country);
            $stmt->bindParam(':prefix', $prefix);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    
    
}
?>
