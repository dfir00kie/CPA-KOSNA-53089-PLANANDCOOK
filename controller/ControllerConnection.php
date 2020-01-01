<?php

require_once 'framework/Controller.php';
require_once 'model/User.php';

/**
 * Contrôleur gérant la connexion au site
 *
 */
class ControllerConnection extends Controller
{
    private $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function index()
    {
        $this->generateView();
    }

    public function connect()
    {
        if ($this->request->existingParameter("login") && $this->request->existingParameter("mdp")) {
            $login = $this->request->getParameter("login");
            $pwd = $this->request->getParameter("mdp");
            if ($this->user->connect($login, $pwd)) {
                $user = $this->user->getUser($login, $pwd);
                $this->request->getSession()->setAttribute("idUser",
                        $user['idUser']);
                $this->request->getSession()->setAttribute("login",
                        $user['login']);
                $this->redirect("admin");
            }
            else
                $this->generateView(array('msgError' => 'Login or password are not correct'),
                        "index");
        }
        else
            throw new Exception("Error : login or password have not been defined");
    }

    public function disconnect()
    {
        $this->request->getSession()->destroy();
        $this->redirect("home");
    }

    // Ajoute un utilisateur
    public function register() {
        $login = $this->request->getParameter("login");
        $email = $this->request->getParameter("email");
        $pwd = $this->request->getParameter("mdp");
            
        $this->register->addUser($login, $email, $mdp);      
    }
}
