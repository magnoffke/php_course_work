<?php

  class Madlib
{
  private $noun;
  private $verb;
  private $adjective;
  private $adverb;
  private $story;
  
  //Getters & Setter for noun, verb, adjective & adverb
  
    public function setNoun($noun){
        $this->noun = $noun;
    }

    public function getNoun(){
        return $this->noun;
    }
    
    public function setVerb($verb){
        $this->verb = $verb;
    }

    public function getVerb(){
        return $this->verb;
    }
    
    public function setAdjective($adjective){
        $this->adjective = $adjective;
    }

    public function getAdjective(){
        return $this->adjective;
    }
 
    public function setAdverb($adverb){
        $this->adverb = $adverb;
    }

    public function getAdverb(){
        return $this->adverb;
    }   
    
  
  public function createStory() {
      $noun =  $this->noun;
      $verb =  $this->verb;
      $adjective =  $this->adjective;
      $adverb =  $this->adverb;
      
      return "Do you $verb your $adjective $noun $adverb? That\'s hilarious!";
  }
  
    public function save() 
    {
       $noun =  $this->noun;
       $verb =  $this->verb;
       $adjective =  $this->adjective;
       $adverb =  $this->adverb;
       $story = $this->createStory();
       
        $query =  "INSERT INTO Madlibs (Story, Noun, Verb, Adjective, Adverb)". 
            "VALUES ('$story', '$noun', '$verb', '$adjective', '$adverb')";
        
        
        if ((!empty($noun)) && (!empty($verb)) && (!empty($adjective)) && (!empty($adverb))) 
        {    
        
        $result = $this->database($query); 
        }
    }
    
    public function displayAllStories() {
        $query = "SELECT * FROM Madlibs ORDER BY id DESC";
        $result = $this->database($query);
        
        echo '<h3>Following is your story, and other users stories after that:</h3>';
    
        while ($row = mysqli_fetch_array($result)) {
            echo $row['Story'] . '<br />';
        }
    
    }
    
    
    private function database($query){
        $dbc = mysqli_connect('localhost', 'magnoffke', '', 'lab_9_madlibs')
        or die('Error connecting to MySQL server.');
        
        $result = mysqli_query($dbc, $query);
        
        return $result;
        
    }
    
}


?>