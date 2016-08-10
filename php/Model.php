<?php
require("migration.php");
abstract class Model
{
    protected static $dbc = null;
    protected $attributes = array();

    public function __construct(array $attributes = array())
    {
        self::dbConnect();
        $this->attributes = $attributes;
    }

    protected static function dbConnect()
    {
       if (!self::$dbc) {
            // @TODO: Connect to database
            self::$dbc = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . "", DB_USER, DB_PASS);
            self::$dbc->setAttribute(PDO::ERRMODE_EXCEPTION);
        }
    }

    public function __get($name)
    {
        return isset($this->attributes[$name]) ? $this->attributes[$name] : null;
    }

    public function __set($name, $value)
    {
        $this->attributes[$name] = $value;
    }

    public function save()
    {
        if (empty($this->attributes)) {
            throw new InvalidArgumentException("No values to insert or update");
        } 
        if (isset($this->attributes["id"]){
            $this->update();
        } else {
            $this->insert();
        }
        
    }

    protected abstract function insert();
    protected abstract function update();
}