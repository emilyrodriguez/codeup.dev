<?php
// __DIR__ is a *magic constant* with the directory path containing this file.
// This allows us to correctly require_once Model.php, no matter where this file is being required from.
require_once __DIR__ . '/Model.php';

class User extends Model
{
    /** Insert a new entry into the database */
    protected function insert()
    {
        // @TODO: Use prepared statements to ensure data security

        // @TODO: You will need to iterate through all the attributes to build the prepared query
        $insert = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password )";
        $stmt = self::$dbc->prepare($insert);
        // @TODO: After the insert, add the id back to the attributes array so the object properly represents a DB record. Ids won't be in sync otherwise
        foreach ($this->attributes as $attribute => $value) {
            $stmt->bindValue(":$attribute", $value, PDO::PARAM_STR);
        }
        $stmt->execute();
        $this->attributes['id'] = self::$dbc->lastInsertId();
    }
        
    

    /** Update existing entry in the database */
    protected function update()
    {
        // @TODO: Use prepared statements to ensure data security

        // @TODO: You will need to iterate through all the attributes to build the prepared query saves over existing
        $update=self::$dbc->prepare("UPDATE users SET name = :name, email = :email, password = :password WHERE id = :id");
        $stmt = self::$dbc->prepare($update);
        foreach ($this->attributes as $attribute => $value) {
            $stmt->bindValue(":$attribute", $value, PDO::PARAM_STR);
        }
        $stmt->execute();
    }

    /**
     * Find a single record in the DB based on its id
     *
     * @param int $id id of the user entry in the database
     *
     * @return User An instance of the User class with attributes array set to values from the database
     */
    public static function find($id)
    {
        // Get connection to the database
        self::dbConnect();
        // @TODO: Create select statement using prepared statements
        $select = "SELECT * FROM users WHERE id = :id";
        $stmt = self::$dbc->prepare($select);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);

        // @TODO: Store the result in a variable named $result
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // The following code will set the attributes on the calling object based on the result variable's contents
        $instance = null;
        if ($result) {
            $instance = new static($result);
        }
        return $instance;
    }

    /**
     * Find all records in a table
     *
     * @return User[] Array of instances of the User class with attributes set to values from database
     */
    public static function all()
    {
        // @TODO: Learning from the find method, return all the matching records
        self::dbConnect();
        $select = "SELECT * FROM users";
        $stmt = self::dbc->prepare($select);
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $users = [];
        foreach ($rows as $row) {
            $users[] = new static($row);
        }
        return $users;
    }
}