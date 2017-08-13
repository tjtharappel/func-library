<?php
namespace RT\DataBase;

class PDOConnection implements IDbContext
{
    public $datasource;
    public $username;
    public $password;

    private $con;
    public function __construct(string $datasource,string $username,string $password)
    {
        $this->datasource=$datasource;
        $this->username=$username;
        $this->password=$password;
        try
        {
            $this->database=new \PDO($this->datasource,$this->username,$this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e)
        {
            echo "connection can't be established " . $e->getMessage();
        }
    }
    public function exeNonQuery(string $query=''):bool
    {
        if($query=='')  {

            throw new Exception("query can't be empty");
            return false;
        }
        return $this->con->exec($query);

    }
    public function DbSet(string $query=''):array
    {
        if($query=='')  {
            
            throw new Exception("query can't be empty");
            return false;
        }
        return $this->con->query($query);
    }
}