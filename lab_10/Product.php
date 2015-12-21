<?php

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
        return 'saveProduct.php';
    }
    
    public function productType()
    {
        return 'Generic Product';
    }
    
    public function renderForm()
    {
        return  file_get_contents('forms/generic_form.html');
        
    }
    
    public function save() 
    {
        $title =  $this->title;
        $description =  $this->description;
        $price =  $this->price;
       
        $query =  "INSERT INTO Products (title, description, price)". 
            "VALUES ('$title', '$description', '$price')";
        
        
        if ((!empty($title)) && (!empty($description)) && (!empty($price))) 
        {    
            $result = $this->database($query); 
        }
    }
    
    private function database($query){
        $dbc = mysqli_connect('localhost', 'magnoffke', '', 'productdatabase')
        or die('Error connecting to MySQL server.');
        
        $result = mysqli_query($dbc, $query);
        
        return $result;
        
    }

}
    
?>