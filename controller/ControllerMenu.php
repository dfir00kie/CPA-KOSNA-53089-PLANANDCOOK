<?php

require_once 'framework/Controller.php';
require_once 'model/Recipe.php';

/**
 * Contrôleur des actions liées aux recettes
 *
 */
class ControllerMenu extends Controller {

    private $menu;

    /**
     * Constructeur 
     */

    public function __construct() {
        $this->menu = new Menu();
    }

    // Affiche les détails d'un menu
    public function index() {
        $idMenu = $this->request->getParameter("idMenu");
        $menu = $this->recipe->getMenu($idMenu);
        
        $this->generateView(array('menu' => $menu, 'recipe' => $recipes));
    }

    // Ajoute une recette dans un menu
    public function addMenu($idRecipe) {
        $idMenu = $this->request->getParameter("idMenu");
        $idRecipe = $this->request->getParameter("idRecipe");
        
        // Exécution de l'action par défaut pour réafficher la liste des recettes
        $this->executeAction("index");
    }
}

