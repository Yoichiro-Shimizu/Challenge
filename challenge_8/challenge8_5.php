<?php
  class Alcohol{
    public $what_to_drink_with;
    public $what_to_smoke;
    public function setBase(){
      return $this->what_to_drink_with;
    }
    public function setSmoke(){
      return $this->what_to_smoke;
    }
    public function showBase($what_to_drink_with){
      $this->what_to_drink_with=$what_to_drink_with;
      echo $what_to_drink_with;
    }
    public function showSmoke($what_to_smoke){
      $this->what_to_smoke=$what_to_smoke;
      echo $what_to_smoke;
    }
  }

  /**
   * 継承クラス
   */
  class Whisky extends Alcohol
  {
    private $sort;

    public function setSort($sort){
      $this->sort=$sort;
    }

    public function showSort(){
      return $this->sort;
    }

  }

  $drink = new Whisky("Bourbon");
  $drink->setSort("Very Old St.Nick");
  echo "Drink " .$drink->showSort()."<br>";
  $drink->showSmoke("With Cigar");
  
  ?>
