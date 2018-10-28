<?php
use Phalcon\Mvc\Model;
class credit_card extends Model{

	public function getSource(){
    return "credit_card"; // ชื่อ ตาราง ใน ฐานข้อมูล จริงๆ
  }
}