<?php

class AddBook extends Connection
{
    public function addbook()
    {
        $sql = "Insert into `crud` (bookname,publisher,price) 
        VALUES ('$name', '$publisher', '$price')";
        $result = mysqli_query($this->connect(), $sql);
        return $result;
    }
}






?>