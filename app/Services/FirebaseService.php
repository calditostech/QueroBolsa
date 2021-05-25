<?php
namespace App\Services;

require './vendor/autoload.php';

use Kreait\Firebase\Factory;

class FirebaseService
{
    private $firebase;
    private $db;

    public function __construct()
    {
        $this->firebase = (new Factory)->withServiceAccount('./key/testequero-c7416-3e5d1a9556a8.json');
        $this->db = $this->firebase->createDatabase();
    }

    public function temperaturaCocina()
    {
        $reference = $this->db->getReference('/cocina/temperatura');
        $registros = $reference->getValue();
        return $registros;
    }
}