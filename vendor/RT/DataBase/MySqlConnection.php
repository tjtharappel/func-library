<?php
namespace RT\DataBase;

class MySqlConnection{

    public $hostname;
    public $username;
    public $password;

    public $db;
    
    public  function __construct($hostname=null, $username=null, $password=null, $db=null)
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

    public function exeNonQuery($query)
    {
        
        if(!$query)   {

            die('Sorry query must not be empty');

        }
       return ($this->db->query($query));
    }

    public function dbSet($query=null)
    {
        if(!$query=null) {

            die('Sorry query must not be empty');
        }
        return ($this->db->query($query));
    }
    
}