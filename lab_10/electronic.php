<? php

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
        $base_form = file_get_contents('forms/generic_form.html');
        $electronic_specific = file_get_contents('forms/electronic_form.html');
        return $base_form . $electronic_specific;
    }
    
}


    
?>