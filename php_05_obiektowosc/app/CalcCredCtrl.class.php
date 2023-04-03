<?php

require_once $conf->root_path.'/../php_04_smarty/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/Messages.class.php';
require_once $conf->root_path.'/app/CalcCredForm.class.php';
require_once $conf->root_path.'/app/CalcCredResult.class.php';

class CalcCredCtrl{
    private $msg;
    private $form;
    private $result;

    public function __construct(){
		$this->msg = new Messages();
		$this->form = new CalcCredForm();
		$this->result = new CalcCredResult();
	}

    function getParams(){
        $this->form->kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
        $this->form->lat = isset($_REQUEST['lat']) ? $_REQUEST['lat'] : null;
        $this->form->procent = isset($_REQUEST['procent']) ? $_REQUEST['procent'] : null;
    }

    function validate(){
        if(!(isset($this->form->kwota)&& isset($this->form->lat)&& isset($this->form->procent))){
            return false;
        }
        if($this->form->kwota == ''){
            $this->msg->addError('Nie podano kwoty');
        }
        if($this->form->lat == ''){
            $this->msg->addError('Nie podano lat');
        }
        if($this->form->procent == ''){
            $this->msg->addError('Nie podano procent');
        }
        
        if (!$this->msg->isError()) {
            
            if(!is_numeric($this->form->kwota)){
                $this->msg->addError('Kwota nie jest liczbą całkowitą');
            }
            if(!is_numeric($this->form->lat)){
                $this->msg->addError('Ilość lat nie jest liczbą całkowitą');
            }
            if(!is_numeric($this->form->procent)){
                $this->msg->addError('Procent nie jest liczbą całkowitą');
            }
        }
        return !$this->msg->isError();
    }

    function calculate(){
        if (!$this->msg->isError()) {
            $this->form->kwota = intval($this->form->kwota);
            $this->form->lat = intval($this->form->lat);
            $this->form->procent = intval($this->form->procent);
            if ($this->form->lat <= 0)
                $this->msg->addInfo('Ilość lat musi być dodatnia');
        }
        if (!$this->msg->isError()) {
            $this->result->result = ($this->form->kwota / ($this->form->lat*12)) * (1+($this->form->procent/100));
            return $this->result->result;
        }
    }
    function process(){
        global $conf;
        $this->getParams();
        if($this->validate())
            $this->calculate();

        $smarty = new Smarty();

        $smarty->assign('app_url',$conf->app_url);

        $smarty->assign('page_header','Kalkulator kredytowy');
        $smarty->assign('kwota',$this->form->kwota);
        $smarty->assign('lat',$this->form->lat);
        $smarty->assign('procent',$this->form->procent);
        $smarty->assign('result',$this->result->result);
        $smarty->assign('messages',$this->msg->getErrors());

        $smarty->display($conf->root_path.'/app/calc_cred_view.html');


    }
}