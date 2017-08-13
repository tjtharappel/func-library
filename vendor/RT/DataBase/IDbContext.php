<?php
namespace RT\DataBase;

interface IDbContext
{
    public function exeNonQuery(string $query=null);
    public function DbSet(string $query=null);
}