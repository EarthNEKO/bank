<?php
use Phalcon\Mvc\View;
class LoanController extends ControllerBase{
 
	$Loanlist
    public function indexAction(){
		รับจากaccount_numID
		$account_numID=$this->request->get('account_numID');
		$accountID=account::find("account_num = '$account_numID'");
		$Loan_coresspondingID=Loan_coressponding::find("customer_id = '$accountID->customer_id'");
		$Loanlist=Loan::find("Loan_num = '$Loan_coresspondingID->Loan_num'");
	    $this->view->data=$Loanlist;

    }

    public function beforeExecuteRoute(){ // function ที่ทำงานก่อนเริ่มการทำงานของระบบทั้งระบบ
	    if(!$this->session->has('memberAuthen')) // ตรวจสอบว่ามี session การเข้าระบบ หรือไม่
    		$this->response->redirect('authen');   
    } 

    public function MoreinfoAction(){
	
		$Loanlist=Loan::find("Loannum");
		
		$this->view->data=$Loanlist;
    }

}
