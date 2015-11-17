<?php

class Tool extends Product
{
    private $shipper;
    private $weight;
    
    public function setShipper($shipper)
    {
        $this->shipper = $shipper;
    }

    public function getShipper()
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
        return 'saveTool.php';
    }
    
    public function productType()
    {
        return 'Tools';
    }
    
    public function renderForm()
    {
        $base_form = file_get_contents('forms/generic_form.html');
        $tool_specific = file_get_contents('forms/tool_form.html');
        return $base_form . $tool_specific;
    }
    
    public function save() 
    {
        $title =  $this->title;
        $description =  $this->description;
        $price =  $this->price;
        $shipper = $this->shipper;
        $weight = $this->weight;
       
        $query =  "INSERT INTO Products (title, description, price, shipper, weight)". 
            "VALUES ('$title', '$description', '$price', '$shipper', '$weight')";
        
        
        if ((!empty($title)) && (!empty($description)) && (!empty($price)) && (!empty($shipper)) && (!empty($weight))) 
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