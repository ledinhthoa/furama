<?php
namespace model;



class ServicesDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }
    public function create($loaidichvu)
    {
        $sql = "INSERT INTO dichvu(tendichvu,dientichdichvu,soluongnguoitoida,giathue,kieuthue ,loaidv_id) 
                VALUES (?,?,?,?,?,?)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $tendichvu->tenloaidv);
        $statement->bindParam(2, $loaidichvu->soloaidv);
        $statement->bindParam(2, $loaidichvu->soloaidv);
        try{
            return $statement->execute();
            throw new Exception();
        }catch (Exception $e){
            echo "Khong the connec database";
        }

    }
    public function getAll()
    {
        $sql = "SELECT * FROM loaidichvu ";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $customers = [];
        foreach ($result as $row) {
            $customer = new loaidichvu($row['tenloaidv'], $row['soloaidv']);
            $customer->loaidv_id = $row['loaidv_id'];
            $customers[] = $customer;
        }
        return $customers;
    }
    public function get($loaidv_id){
        $sql = "SELECT * FROM loaidichvu WHERE loaidv_id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $loaidv_id);
        $statement->execute();
        $row = $statement->fetch();
        $customer = new loaidichvu($row['tenloaidv'], $row['soloaidv']);
        $customer->loaidv_id = $row['loaidv_id'];
        return $customer;
    }
    public function delete($loaidv_id){
        $sql = "DELETE FROM loaidichvu WHERE loaidichvu.loaidv_id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $loaidv_id);
        return $statement->execute();
    }
    public function update($loaidv_id, $customer)
    {
        $sql = "UPDATE loaidichvu SET loaidv_id = ?, tenloaidv = ?, soloaidv = ? WHERE loaidv_id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $customer->loaidv_id);
        $statement->bindParam(2, $customer->tenloaidv);
        $statement->bindParam(3, $customer->soloaidv);
        $statement->bindParam(4, $loaidv_id);
        return $statement->execute();
    }


}