<?php
require_once __DIR__ . '/Model.php';

class User extends Model
{
    protected function insert()
    {
        $insert = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password )";
        $stmt = self::$dbc->prepare($insert);
        foreach ($this->attributes as $attribute => $value) {
            $stmt->bindValue(":$attribute", $value, PDO::PARAM_STR);
        }
        $stmt->execute();
        $this->attributes['id'] = self::$dbc->lastInsertId();
    }
        
    protected function update()
    {
        $update=self::$dbc->prepare("UPDATE users SET name = :name, email = :email, password = :password WHERE id = :id");
        $stmt = self::$dbc->prepare($update);
        foreach ($this->attributes as $attribute => $value) {
            $stmt->bindValue(":$attribute", $value, PDO::PARAM_STR);
        }
        $stmt->execute();
    }

    public static function find($id)
    {
        self::dbConnect();
        $select = "SELECT * FROM users WHERE id = :id";
        $stmt = self::$dbc->prepare($select);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $instance = null;
        if ($result) {
            $instance = new static($result);
        }
        return $instance;
    }

    public static function all()
    {
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