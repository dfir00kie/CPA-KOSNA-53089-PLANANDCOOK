<?php

require_once 'ControllerSecured.php';
require_once 'model/Recipe.php';

/**
 * Contrôleur des actions d'administration
 * 
 */
class ControllerAdmin extends ControllerSecured
{
    private $recipe;
    private $ingredient;

    /**
     * Constructeur 
     */
    public function __construct()
    {
        $this->recipe = new Recipe();
        $this->ingredient = new Ingredient();
    }

    public function index()
    {
        $nbRecipes = $this->recipe->getNumberRecipes();
        $nbIngredient = $this->ingredient->getNumberIngredient();
        $login = $this->request->getSession()->getAttribute("login");
        parent::generateView(array('nbRecipes' => $nbRecipes, 'nbIngredient' => $nbIngredient, 'login' => $login));
    }
}
?>