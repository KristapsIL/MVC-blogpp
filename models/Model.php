<?php
require "Database.php";

abstract class Model {
    protected static $db;

    public static function init() {
        if (!self::$db) {
          self::$db = new Database();
        }
      }

    abstract protected static function getTableName(): string;

    public static function all() {
        self::init();
        $sql = "SELECT * FROM " . static::getTableName();
      
        $records = self::$db->query($sql)->fetchAll();
        return  $records;
    }
    public static function find($id) {
        self::init();
        $sql = "SELECT * FROM " . static::getTableName() . " WHERE id = :id";
    
        $stmt = self::$db->query($sql, [":id" => $id]);
    
        return $stmt->fetch();
    }
    public static function create($data) {
        self::init();

        $columns = implode(", ", array_keys($data));
        $placeholders = ":" . implode(", :", array_keys($data));
    
        $sql = "INSERT INTO ".static::getTableName()."($columns) VALUES ($placeholders)";
    
        $stmt = self::$db->query($sql, $data); 
    
    }
    public static function save($id, $data) {
        self::init();
    
        $table = static::getTableName();
        $setClause = implode(", ", array_map(fn($key) => "$key = :$key", array_keys($data)));
    
        $sql = "UPDATE $table SET $setClause WHERE id = :id";
    
        $data[":id"] = $id; 
        $stmt = self::$db->query($sql, $data);
    
    }
    public static function delete($id) {
        self::init();
    
        $table = static::getTableName();
        $sql = "DELETE FROM $table WHERE id = :id";
    
        $stmt = self::$db->query($sql, [":id" => $id]); 
    }    
    
}