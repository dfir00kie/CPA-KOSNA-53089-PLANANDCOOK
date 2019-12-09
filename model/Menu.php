<?php

require_once 'framework/Model.php';
require_once 'model/Recipe.php';

/**
 * Modélise menu
 *
 */
class Menu extends Model {

    public function Menu() {
        $sql = 'selecT MEN_ID as id,'
                . ' MEN_'
        return $menus;
    }

    public function getIngredient() {
        $sql = 'select ING_ID as id,'
                . ' ING_NAME as name from T_INGREDIENT'
                . ' order by ING_ID desc';
        $ingredients= $this->executeRequest($sql)
        return $ingredients;

}
