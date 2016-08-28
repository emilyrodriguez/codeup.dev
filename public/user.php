<?php
require_once("model_magic.php");

class User extends Model {
	protected static $table = 'users';
}
	User::getTableName();