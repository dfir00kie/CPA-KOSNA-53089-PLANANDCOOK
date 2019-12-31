<?php

require_once 'framework/Controller.php';
require_once 'model/Recipe.php';


/**
 * Contrôleur des actions liées au menu
 *
 */

class ControllerHome extends Controller {

    private $recipe;

    /**
     * Constructeur 
     */
    
    public function __construct() {
        $this->recipe = new Recipe();
    }

    // Affiche la liste de tous les recettes
    public function index() {
        $recipes = $this->recipe->getRecipes();
        $this->generateView(array('recipes' => $recipes));
    }

}
?>