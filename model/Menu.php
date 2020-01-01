<?php

require_once 'framework/Model.php';

/**
 * Fournit les services d'accès aux menus
 * 
 */
class Menu extends Model {

    // Renvoie la liste des recipes associés à un menu
    
        public function getRecipes($idMenu) {
            $sql = 'select MEN_ID as id from T_MENU'
                    . ' where REC_ID=?';
            $recipes = $this->executeRequest($sql, array($idMenu));
            return $recipes;
        }
    
        public function addRecipe($name, $idMenu) {
            $sql = 'insert into T_MENU(REC_ID)'
                . ' values(?)';
            $this->executeRequest($sql, array($idRecipe));
        }
    
    /**
     * Renvoie le nombre total des recipes dans le menu
     * 
     * @return int Le nombre des recipes
     */
    public function getNumberMenus()
    {
        $sql = 'select count(*) as nbMenus from T_MENU';
        $result = $this->executeRequest($sql);
        $line = $result->fetch();  // Le résultat comporte toujours 1 ligne
        return $line['nbMenus'];
    }

}