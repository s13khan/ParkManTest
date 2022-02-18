<?php

class Garage extends DBConn {

    // properties
    protected  $garage_id;
    protected  $name;
    protected  $hourly_price;
    protected  $currency;
    protected  $contact_email;
    protected  $country;
    protected  $owner_id;
    protected  $garage_owner;
    protected  $point_lat;
    protected  $point_long;


    // GET METHODS
    public function getGarage_id()
    {
        return $this->garage_id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getHourly_price()
    {
        return $this->hourly_price;
    }

    public function getCurrency()
    {
        return $this->currency;
    }

    public function getContact_email()
    {
        return $this->contact_email;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function getOwner_id()
    {
        return $this->owner_id;
    }

    public function getGarage_owner()
    {
        return $this->garage_owner;
    }

    public function getPoint_lat()
    {
        return $this->point_lat;
    }

    public function getPoint_long()
    {
        return $this->point_long;
    }



    // SET METHODS

    // public function setGarage_id(string $garage_id)
    // {
    //     $this->garage_id = $garage_id;
    // }
    public function setName(string $name)
    {
        $this->name = $name;
    }
    public function setHourly_price(float $hourly_price)
    {
        $this->hourly_price = $hourly_price;
    }
    public function setCurrency(string $currency)
    {
        $this->currency = $currency;
    }

    public function setContact_email(string $contact_email)
    {
        $this->contact_email = $contact_email;
    }

    public function setCountry(string $country)
    {
        $this->country = $country;
    }

    public function setOwner_id(int $owner_id)
    {
        $this->owner_id = $owner_id;
    }

    public function setGarage_owner(string $garage_owner)
    {
        $this->garage_owner = $garage_owner;
    }

    public function setPoint_lat(decimal $point_lat)
    {
        $this->point_lat= $point_lat;
    }

    public function setPoint_long(decimal $point_long)
    {
        $this->point_long = $point_long;
    }



    public function __construct(){
 
    }



    
    // methods
    public function getGarageAll() {
        // $sql = "select * from tblgarage ";
        // $stmt = $this->connect()->query($sql);

        // while($row = $stmt->fetch()){
        //     echo $row['GarageName'] . '<hr>';
        // }
    }
  
    protected function getGaragesByCountry($Country) {
        $sql = "select garage_id, name, hourly_price, currency, contact_email, concat(point_lat , ' ' , point_long) as point, country, owner_id, garage_owner from tblgarage  WHERE Country = ? ";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$Country]);

        $results = $stmt->fetchAll();
        return $results;
    }

    protected function getGaragesByOwner($GarageOwner) {
        $sql = "select garage_id, name, hourly_price, currency, contact_email, concat(point_lat , ' ' , point_long) as point, country, owner_id, garage_owner from tblgarage WHERE garage_owner = ? ";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$GarageOwner]);

        $results = $stmt->fetchAll();
        return $results;
    }
  
    protected function getGaragesByLocation($point_lat, $point_long) {
        $sql = "select garage_id, name, hourly_price, currency, contact_email, concat(point_lat , ' ' , point_long) as point, country, owner_id, garage_owner from tblgarage  WHERE point_lat = ? AND point_long = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$point_lat, $point_long]);

        $results = $stmt->fetchAll();
        return $results;
    }
    

    public function __destruct(){
 
    }
}