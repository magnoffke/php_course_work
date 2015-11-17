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
    
    public function postTo()
    {
        return 'some_url.php';
    }
    
    public funtion productType()
    {
        return 'Generic';
    }
    
    public function renderForm()
    {
        return file_get_contents('forms/generic_form.html');
    }

}

class Tool extends Product
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
    
    public function postTo()
    {
        return 'some_url.php';
    }
    
    public funtion productType()
    {
        return 'Tools';
    }
    
    public function renderForm()
    {
        return file_get_contents('forms/tool_form.html');
    }

}

class Electronic extends Product
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
    
    public function postTo()
    {
        return 'some_url.php';
    }
    
    public funtion productType()
    {
        return 'Recyclable';
    }
    
    public function renderForm()
    {
        return file_get_contents('forms/electronic_form.html');
    }
    
}


    
?>