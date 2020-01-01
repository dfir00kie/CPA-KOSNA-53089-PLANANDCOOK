<?php

require_once 'framework/Model.php';

/**
 * Modélise utilisateur
 *
 */
class User extends Model {

    /**
     * Vérifie qu'un utilisateur existe dans la BD
     * 
     * @param string $login Le login
     * @param string $pwd Le mot de passe
     * @return boolean Vrai si l'utilisateur existe, faux sinon
     */
    public function connect($login, $pwd)
    {
        $sql = "select USR_ID from T_USER where USR_LOGIN=? and USR_PWD=?";
        $user = $this->executeRequest($sql, array($login, $pwd));
        return ($user->rowCount() == 1);
    }

    /**
     * Renvoie un utilisateur existant dans la BD
     * 
     * @param string $login Le login
     * @param string $pwd Le mot de passe
     * @return mixed L'utilisateur
     * @throws Exception Si aucun utilisateur ne correspond aux paramètres
     */
    public function getUser($login, $pwd)
    {
        $sql = "select USR_ID as idUser, USR_LOGIN as login, USR_PWD as pwd 
            from T_USER where USR_LOGIN=? and USR_PWD=?";
        $user = $this->executeRequest($sql, array($login, $pwd));
        if ($user->rowCount() == 1)
            return $user->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("This user does not exist.");
    }

    /**
     * Crée un nouveau utilisateur dans la BD
     * 
     * @param string $login Le login
     * @param string $email Le email
     * @param string $pwd Le mot de passe
     * @return mixed L'utilisateur
     * @throws Exception Si aucun utilisateur ne correspond aux paramètres
     */
    public function addUser($login, $email, $pwd)
    {
        $sql = 'insert into T_USER(USER_LOGIN, USR_EMAIL, USR_PWD)'
            . ' values(?, ?, ?)';
        $user = $this->executeRequest($sql, array($login, $email, $pwd));
        if ($user->rowCount() == 1)
            return $user->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("This user already exists.");
    }
}