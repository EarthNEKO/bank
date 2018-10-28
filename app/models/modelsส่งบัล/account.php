<?php
use Phalcon\Mvc\Model;
class account extends Model{

	public function getSource(){
    return "account"; // ชื่อ ตาราง ใน ฐานข้อมูล จริงๆ
  }
}