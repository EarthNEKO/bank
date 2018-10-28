<?php
use Phalcon\Mvc\Model;
class customer extends Model{

	public function getSource(){
    return "customer"; // ชื่อ ตาราง ใน ฐานข้อมูล จริงๆ
  }
}