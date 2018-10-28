<?php
use Phalcon\Mvc\Model;
class crm_officer_calendar extends Model{

	public function getSource(){
    return "crm_officer_calendar"; // ชื่อ ตาราง ใน ฐานข้อมูล จริงๆ
  }
}