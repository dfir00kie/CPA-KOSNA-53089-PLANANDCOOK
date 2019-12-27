<?php

require_once 'framework/Model.php';

/**
 * Modélise ingredient
 *
 */
class Ingredient extends Model {

// Renvoie la liste des commentaires associés à une recette

    public function getIngredients($idRecipe) {
        $sql = 'select ING_ID as id, ING_NAME as name, . from T_INGREDIENT'
                . ' where REC_ID=?';
        $ingredients= $this->executeRequest($sql, array($idRecipe));
        return $ingredients;
    }
    
    public function addIngredient($name, $idRecipe) {
        $sql = 'insert into T_INGREDIENT(ING_NAME, REC_ID)'
            . ' values(?, ?)';
        $this->executeRequest($sql, array($name, $idRecipe));
    }
    
    /**
     * Renvoie le nombre total de commentaires
     * 
     * @return int Le nombre de commentaires
     */
    public function getNumberIngredients()
    {
        $sql = 'select count(*) as nbIngredients from T_INGREDIENT';
        $result = $this->executeRequest($sql);
        $line = $result->fetch();  // Le résultat comporte toujours 1 ligne
        return $line['nbIngredients'];
    }

}