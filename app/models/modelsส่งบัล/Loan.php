<?php
use Phalcon\Mvc\Model;
class Loan extends Model{

	public function getSource(){
    return "Loan"; // ชื่อ ตาราง ใน ฐานข้อมูล จริงๆ
  }
}