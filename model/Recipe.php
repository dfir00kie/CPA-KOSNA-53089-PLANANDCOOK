<?php

require_once 'framework/Model.php';

/**
 * Fournit les services d'accès aux recettes
 * 
 */
class Recipe extends Model {

    /** Renvoie la liste des recttes
     * 
     * @return PDOStatement La liste des recttes
     */
    public function getRecipes() {
        $sql = 'select REC_ID as id, '
                . ' REC_NAME as name, REC_CONTENT as content from T_RECIPE'
                . ' order by REC_ID desc';
        $recipes = $this->executeRequest($sql);
        return $recipes;
    }

    /** Renvoie les informations sur un billet
     * 
     * @param int $id L'identifiant de la recette
     * @return array La rectte
     * @throws Exception Si l'identifiant de la recette est inconnu
     */
    public function getRecipe($idRecipe) {
        $sql = 'select REC_ID as id, '
                . ' REC_NAME as name, REC_CONTENT as content from T_RECIPE'
                . ' where REC_ID=?';
        $recipe = $this->executeRequest($sql, array($idRecipe));
        if ($recipe->rowCount() > 0)
            return $recipe->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("There is no recipe with such an id '$idRecipe'");
    }

    public function addRecipe($name, $content) {
        $sql = 'insert into T_RECIPE(REC_NAME, REC_CONTENT)'
            . ' values(?, ?)';
        $this->executeRequest($sql, array($name, $content));
    }

    /**
     * Renvoie le nombre total de recettes
     * 
     * @return int Le nombre de la recette
     */
    public function getNumberRecipes()
    {
        $sql = 'select count(*) as nbRecipes from T_RECIPE';
        $result = $this->executeRequest($sql);
        $line = $result->fetch();  // Le résultat comporte toujours 1 ligne
        return $line['nbRecipes'];
    }
}

