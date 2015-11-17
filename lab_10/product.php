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
        return 'shippers/generic.php';
    }
    
    public funtion productType()
    {
        return 'Generic Product';
    }
    
    public function renderForm()
    {
        return = file_get_contents('forms/generic_form.html');
        
    }

}
    
?>