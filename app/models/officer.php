<?php
use Phalcon\Mvc\Model;
class officer extends Model{

	public function getSource(){
    return "officer"; // ชื่อ ตาราง ใน ฐานข้อมูล จริงๆ
  }
}