<?php

require_once 'framework/Controller.php';
require_once 'model/Recipe.php';
require_once 'model/Ingredient.php';
/**
 * Contrôleur des actions liées aux recettes
 *
 */
class ControllerRecipe extends Controller {

    private $recipe;
    private $ingredient;

    /**
     * Constructeur 
     */

    public function __construct() {
        $this->recipe = new Recipe();
        $this->ingredient = new Ingredient();
    }

    // Affiche les détails d'une recette
    public function index() {
        $idRecipe = $this->request->getParameter("id");
        
        $recipe = $this->recipe->getRecipe($idRecipe);
        $ingredients = $this->ingredient->getIngredients($idRecipe);
        
        $this->generateView(array('recipe' => $recipe, 'ingredients' => $ingredients));
    }

    // Ajoute un ingredient dans une recette
    public function ingredient() {
        $idRecipe = $this->request->getParameter("id");
        $name = $this->request->getParameter("rec_name");
        
        $this->ingredient->addIngredient($name, $idRecipe);
        
        // Exécution de l'action par défaut pour réafficher la liste des recettes
        $this->executeAction("index");
    }
}

