<?php

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
        return 'saveElectronic.php';
    }
    
    public function productType()
    {
        return 'Recyclable';
    }
    
    public function renderForm()
    {
        $base_form = file_get_contents('forms/generic_form.html');
        $electronic_specific = file_get_contents('forms/electronic_form.html');
        return $base_form . $electronic_specific;
    }
    
    public function save() 
    {
        $title =  $this->title;
        $description =  $this->description;
        $price =  $this->price;
        $recyclable = $this->recyclable;
       
        $query =  "INSERT INTO Products (title, description, price, recyclable)". 
            "VALUES ('$title', '$description', '$price', '$recyclable')";
        
        
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