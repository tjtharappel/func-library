<?php
namespace RT\DataBase;

class MySqlConnection implements IDbContext
{

    public $hostname;
    public $username;
    public $password;

    private $db;
    
    public  function __construct(string $hostname, string $username, string $password, string $db)
    {

        $this->hostname = $hostname;
        $this->username = $username;
        $this->password = $password;
        $this->db = $db;
        try
        {
            
            $this->db = new \Mysqli( $hostname,$username,$password,$db);
        }
        catch(Exception $e)
        {
            die($e);
        }
    }

    public function exeNonQuery(string $query='')
    {
        
        if ($query==''){
            die('Sorry query must not be empty');
        }
       return ($this->db->query($query));
    }

    public function dbSet(string $query='')
    {
        if ($query==''){
            die('Sorry query must not be empty');
        }
        return ($this->db->query($query));
    }
}
