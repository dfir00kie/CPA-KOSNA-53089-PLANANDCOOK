<?php

require_once 'framework/Model.php';

/**
 * Modélise recipe
 *
 */

class Recipe extends Model {

    /** Renvoie la liste des recettes
     * 
     * @return PDOStatement La liste des recettes
     */
    public function getRecipes() {
        $sql = 'select REC_ID as idRecipe,'
                . ' REC_NAME as rec_name,'
                . ' REC_CONTENT as rec_content from T_RECIPE'
                . ' order by REC_ID asc';
        $recipes= $this->executeRequest($sql);
        return $recipes;
    }

    /** Renvoie les informations sur une recette
     * 
     * @param int $id L'identifiant de la recette
     * @return array La recette
     * @throws Exception Si l'identifiant de la recette est inconnu
     */

    public function getRecipe($idRecipe) {
        $sql = 'select REC_ID as idRecipe, REC_CONTENT as rec_content,'
                . ' REC_NAME as rec_name from T_RECIPE'
                . ' where REC_ID=?';
        $recipe = $this->executeRequest($sql, array($idRecipe));
        if ($recipe->rowCount() > 0)
            return $recipe->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucune recette ne correspond à l'identifiant '$idRecipe'");
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