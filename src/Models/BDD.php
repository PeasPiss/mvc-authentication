<?php
require("connect.php");

// Connexion à la BDD
function connect_db()
{
    $dsn = "mysql:dbname=" . BASE . ";host=" . SERVER;
    try {
        $option = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
        $connexion = new PDO($dsn, USER, PASSWD,$option);
    } catch (PDOException $e) {
        printf("Echec connexion : %s\n", $e->getMessage());
        exit();
    }
    return $connexion;
}

// Création de la liste des Utilisateur
function get_all_utilisateur(){

    $connexion = connect_db();
    $utilisateur = array();
    $sql = "SELECT * from Utilisateur";

    foreach ($connexion->query($sql) as $row) {
        $utilisateur[] = $row;
    }
    return $utilisateur;
}

// Suppression d'un utilisateur par id
/* function delete_utilisateur_by_id($id){

    $connexion = connect_db();
    $sql= "DELETE FROM utilisateur WHERE id_membre = :id ";
    $reponse = $connexion->prepare($sql);
    $reponse->bindValue(":id", intval($_GET["id"]), PDO::PARAM_INT);
    $reponse->execute();
 
}
 */
// Ajout d'un utilisateur dans lq BDD
function ajouterUtilisateur($login, $nom) {
    $connexion = connect_db();
    $sql = "INSERT INTO utilisateur (login_membre, utilisateur) VALUES (:login, :utilisateur)";
    $stmt = $connexion->prepare($sql);
    $stmt->bindValue(':login', $login, PDO::PARAM_STR);
    $stmt->bindValue(':utilisateur', $utilisateur, PDO::PARAM_STR);
    $stmt->execute();
}

// Ajouter un utilisateur par ID
function get_utilisateur_by_id($id) {
    $connexion = connect_db();
    $sql = "SELECT * FROM membres WHERE id_membre = :id";
    $stmt = $connexion->prepare($sql);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

// Modifier un utilisateur
function modifier_utilisateur_bdd($id, $login, $nom) {
    $connexion = connect_db();
    $sql = "UPDATE membres SET login_membre = :login, nom_membre = :nom WHERE id_membre = :id";
    $stmt = $connexion->prepare($sql);
    $stmt->bindValue(':login', $login, PDO::PARAM_STR);
    $stmt->bindValue(':nom', $nom, PDO::PARAM_STR);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
}
?>