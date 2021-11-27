<?php
namespace Database;

define('CONECTOR', 'pgsql');
define('HOST', 'localhost');
define('PORT', '5432');
define('DBNAME', 'spectrum');
define('USER', 'spectrum_user');
define('PASSWORD', 'Y;dGn3#3.}r9P.B7');

class ConnectionPDO {                               // self se refere a algo da mesma classe
    private static $pdo;                            // :: acessa métodos e classes estáticas
    private function __construct() {}               // isset "existe"

    public static function getInstance() {          // PDO "Classe padrão PHP"
 
        if(!isset(self::$pdo)) {                    // Singleton - verifica se existe conexão aberta
            try {
                self::$pdo = new \PDO(CONECTOR . ":host=" . HOST . "; port=" . PORT ."; dbname=" . DBNAME . ';options=\'--client_encoding=UTF8\'', USER, PASSWORD);
            } catch (PDOException $e) {
                print("Erro: " . $e->getMessage());
            }
        }
        return self::$pdo;  
    } 
}
?>