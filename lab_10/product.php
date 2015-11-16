<? php

class Product
{

    protected $title;
    protected $description;
    protected $price;
    
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }
    
    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }
    
    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

}

class Tools extends Product
{
    private $shipper;
    private $weight;
    
    public function setShipper($shipper)
    {
        $this->shipper = $shipper;
    }

    public function getPrice()
    {
        return $this->shipper;
    }
    
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    public function getWeight()
    {
        return $this->weight;
    }
}

class Electronics extends Product
{
    private $recyclable;
    
    public function setRecyclable($recyclable)
    {
        $this->recyclable = $recyclable;
    }

    public function getRecyclable()
    {
        return $this->recyclable;
    }
}


    
?>