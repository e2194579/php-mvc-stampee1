<?php

namespace App\Models;

use PDO;

/**
 * Example user model
 *
 * PHP version 7.0
 */
class Etudiant extends \Core\Model
{

    public $table = 'etudiant';
    public $primarykey = 'id';

    /**
     * Get all the users as an associative array
     *
     * @return array
     */
    public static function getAll()
    {
        $db = static::getDB();
        $stmt = $db->query('SELECT * FROM etudiant');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function insert($data)
    {
        $db = static::getDB();
        $sql = 'INSERT INTO Etudiant (nom,age) VALUES (:nom,:age)';
        $stmt = $db->prepare($sql);

        $stmt->execute([
            ':nom' => $data['nom'],
            ':age' => $data['age']
        ]);
    }
}
