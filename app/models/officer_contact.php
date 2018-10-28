<?php
use Phalcon\Mvc\Model;
class officer_contact extends Model{

	public function getSource(){
    return "officer_contact"; // ชื่อ ตาราง ใน ฐานข้อมูล จริงๆ
  }
}