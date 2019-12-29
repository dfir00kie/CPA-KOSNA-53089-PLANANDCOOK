<?php

require_once 'framework/Model.php';

/**
 * Modélise menu
 *
 */

class Menu extends Model {

// Renvoie la liste des ingredients associés à une recette

    public function getMenus($idMenu) {
        $sql = 'select MEN_ID as id, REC_NAME as name, . from T_MENU'
                . ' where REC_ID=?';
        $menus= $this->executeRequest($sql, array($idMenu));
        return $menus;
    }
    
    public function addMenu($name, $idMenu) {
        $sql = 'insert into T_MENU(REC_ID, REC_NAME)'
            . ' values(?, ?)';
        $this->executeRequest($sql, array($name, $idMenu));
    }
    
    /**
     * Renvoie le nombre total des ingredients
     * 
     * @return int Le nombre des ingredients
     */
    public function getNumberMenus()
    {
        $sql = 'select count(*) as nbMenus from T_MENU';
        $result = $this->executeRequest($sql);
        $line = $result->fetch();  // Le résultat comporte toujours 1 ligne
        return $line['nbMenus'];
    }

}