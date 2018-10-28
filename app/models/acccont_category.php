<?php
use Phalcon\Mvc\Model;
class acccont_category extends Model{

	public function getSource(){
    return "acccont_category"; // ชื่อ ตาราง ใน ฐานข้อมูล จริงๆ
  }
}