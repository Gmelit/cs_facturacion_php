<?php
require_once ('./App/Model/UserModel.php');

class UserController extends UserModel{
    
    private $userModel = null;

    public function __construct()
    {
        $this->userModel = new UserModel();
        var_dump($_POST);
        $this->index();
    }

    public function index(){
        /* _DISABLED = 0
        _NONE = 1
        _ACTIVE = 2 */
        if (session_status() == 1) {

            require ('./App/View/Login.php');
            return null;

        }
        


    }

    public function login($user,$password){

        $user = $this->userModel->getUser($user,$password);
        /* Si devuelve nulo, no se encontro el usuario y no se crea la sesion */
        if($user == null){
            return null;
        }

        session_start();
        require ('./App/View/Home.php');
        
    }
}

?>