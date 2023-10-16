<?php

/* ----------------------------------------------------------------
Classe que representa o domínio (Visitante)
---------------------------------------------------------------- */

namespace Ifba\Visitantes\model\entities;

class Visitor {
  protected int $id;
  protected string $name;
  protected int $rating;
  protected string $date;

  //public function __construct($id, $name, $rating, $date) {
   // $this->id = $id;
   // $this->name = $name;
  //  $this->rating = $rating;
  //  $this->date = $date;
  // }



  public function getId(): int 
  {
    return $this->id;
  }

  public function setId(int $id): void 
  {
    $this->id = $id;
  }

  public function getName(): string 
  {
    return $this->name;
  }

  public function setName(string $name): void 
  {
    $this->name = $name;
  }

  public function getRating(): int 
  {
    return $this->rating;
  }

  public function setRating(int $rating): void 
  {
    $this->rating = $rating;
  }

  public function getDate($format = 'us'): string 
  {
    if($format === 'br'){
      return date('d/m/Y H:i:s', strtotime($this->date));
    }
    
    return $this->date;
  }

  public function setDate(string $date = ''): void 
  {
    if($date === ''){
      $date = date('Y-m-d H:i:s');
    }

    $this->date = $date;
  }
}