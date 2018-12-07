<?php

require __DIR__ . '/dbcon.php';

class CRUD
{

    protected $db;

    function __construct()
    {
        $this->db = DB();
    }

    function __destruct()
    {
        $this->db = null;
    }

    /*
     * Add new Record
     *
     * @param $fname
     * @param $lname
     * @param $idcard
     * @param $email
     * @param $phone
     * @return $mixed
     * */
    public function Create($fname, $lname, $idcard, $email, $phone)
    {
        $query = $this->db->prepare("INSERT INTO dn1_billrequest(fname, lname, idcard, email, phone) VALUES (:fname,:lname,:idcard,:email,:phone)");
        $query->bindParam("fname", $fname, PDO::PARAM_STR);
        $query->bindParam("lname", $lname, PDO::PARAM_STR);
        $query->bindParam("idcard", $idcard, PDO::PARAM_STR);
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->bindParam("phone", $phone, PDO::PARAM_STR);
        $query->execute();
        return $this->db->lastInsertId();
    }

    /*
     * Read all records
     *
     * @return $mixed
     * */
    public function Read()
    {
        $query = $this->db->prepare("SELECT * FROM users");
        $query->execute();
        $data = array();
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $data[] = $row;
        }
        return $data;
    }

    /*
     * Delete Record
     *
     * @param $user_id
     * */
    public function Delete($user_id)
    {
        $query = $this->db->prepare("DELETE FROM users WHERE id = :id");
        $query->bindParam("id", $user_id, PDO::PARAM_STR);
        $query->execute();
    }

    /*
     * Update Record
     *
     * @param $first_name
     * @param $last_name
     * @param $email
     * @return $mixed
     * */
    public function Update($first_name, $last_name, $email, $user_id)
    {
        $query = $this->db->prepare("UPDATE users SET first_name = :first_name, last_name = :last_name, email = :email  WHERE id = :id");
        $query->bindParam("first_name", $first_name, PDO::PARAM_STR);
        $query->bindParam("last_name", $last_name, PDO::PARAM_STR);
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->bindParam("id", $user_id, PDO::PARAM_STR);
        $query->execute();
    }

    /*
     * Get Details
     *
     * @param $user_id
     * */
    public function Details($user_id)
    {
        $query = $this->db->prepare("SELECT * FROM users WHERE id = :id");
        $query->bindParam("id", $user_id, PDO::PARAM_STR);
        $query->execute();
        return json_encode($query->fetch(PDO::FETCH_ASSOC));
    }
}

?>
