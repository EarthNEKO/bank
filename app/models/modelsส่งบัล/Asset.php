<?php
use Phalcon\Mvc\Model;
class Asset extends Model{

	public function getSource(){
    return "Asset"; // ชื่อ ตาราง ใน ฐานข้อมูล จริงๆ
  }
}