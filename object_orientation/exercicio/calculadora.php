<?php

class Calculadora {
  
  public float $storage = 0;

  public function add($n) {
    $this -> storage += $n;
  }
  public function sub($n) {
    $this -> storage -= $n;
  }
  public function multiply($n) {
    $this -> storage *= $n;
  }
  public function divide($n) {
    $this -> storage /= $n;
  }
  public function total() {
    return $this -> storage;
  }
  public function clear() {
    $this -> storage = 0;
  }

}