<? php

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
        $base_form = file_get_contents('forms/generic_form.html');
        $tool_specific = file_get_contents('forms/tool_form.html');
        return $base_form . $tool_specific;
    }

}



    
?>