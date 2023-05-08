<?php
namespace app\controllers;

use app\forms\CalcCredForm;
use app\transfer\CalcCredResult;

class CalcCredCtrl{
    private $form;
    private $result;

    public function __construct(){
		$this->form = new CalcCredForm();
		$this->result = new CalcCredResult();
	}

    function getParams(){
        $this->form->kwota = getFromRequest('kwota');
        $this->form->lat = getFromRequest('lat');
        $this->form->procent = getFromRequest('procent');
    }

    function isFormEmpty(){
        if(!(isset($this->form->kwota)&& isset($this->form->lat)&& isset($this->form->procent))){
            return true;
        }
        return false;
    }

    function validate(){
        if($this->isFormEmpty()){
            return false;
        }
        if($this->form->kwota == ''){
            getMessages()->addError('Nie podano kwoty');
        }
        if($this->form->lat == ''){
            getMessages()->addError('Nie podano lat');
        }
        if($this->form->procent == ''){
            getMessages()->addError('Nie podano procent');
        }
        
        if (!getMessages()->isError()) {
            
            if(!is_numeric($this->form->kwota)){
                getMessages()->addError('Kwota nie jest liczbą całkowitą');
            }
            if(!is_numeric($this->form->lat)){
                getMessages()->addError('Ilość lat nie jest liczbą całkowitą');
            }
            if(!is_numeric($this->form->procent)){
                getMessages()->addError('Procent nie jest liczbą całkowitą');
            }
        }
        return !getMessages()->isError();
    }

    function calculate(){
        if (!getMessages()->isError()) {
            $this->form->kwota = intval($this->form->kwota);
            $this->form->lat = intval($this->form->lat);
            $this->form->procent = intval($this->form->procent);
            if ($this->form->lat <= 0)
                getMessages()->addInfo('Ilość lat musi być dodatnia');
        }
        if (!getMessages()->isError()) {
            $this->result->result = ($this->form->kwota / ($this->form->lat*12)) * (1+($this->form->procent/100));
            return $this->result->result;
        }
    }
    function action_calcCompute(){
        global $conf;
        $this->getParams();
        if($this->validate())
            $this->calculate();

        if (!getMessages()->isError() && !$this->isFormEmpty()) {
            try{
                $database = new \Medoo\Medoo([
                    'database_type' => 'mysql',
                    'database_name' => 'calc',
                    'server' => 'mysql',
                    'username' => 'root',
                    'password' => 'root',
                    'charset' => 'utf8', 
                    'collation' => 'utf8_polish_ci',
                    'port' => 3306,
                    'option' => [
                    \PDO::ATTR_CASE => \PDO::CASE_NATURAL,
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
                    ]
                ]);
                $database->insert("wynik", [
                    "kwota" => $this->form->kwota,
                    "lat" => $this->form->lat,
                    "procent" => $this->form->procent,
                    "rata" => $this->result->result,
                    "data" => date("Y-m-d H:i:s")
                ]);
            }
            catch (\PDOException $ex){
                getMessages()->addError("DB Error: ".$ex->getMessage());
            }
        }

        getSmarty()->assign('app_url',$conf->app_url);

        getSmarty()->assign('page_header','Kalkulator kredytowy');
        getSmarty()->assign('kwota',$this->form->kwota);
        getSmarty()->assign('lat',$this->form->lat);
        getSmarty()->assign('procent',$this->form->procent);
        getSmarty()->assign('result',$this->result->result);
        getSmarty()->assign('messages',getMessages()->getErrors());

        getSmarty()->display($conf->root_path.'/app/views/calc_cred_view.html');


    }
}