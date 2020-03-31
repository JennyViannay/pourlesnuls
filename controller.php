<?php

function getAutentification($login){
    if(!empty($login['email'] && !empty($login['password']) && $login['password'] == 1234)){
        $_SESSION['isConnected'] = true;

        return header('Location: http://localhost:8000/pages/articles.php');
    } else {
        return "Les champs email et password sont obligatoires.";
    }
}

function getUserLogOut(){
    unset($_SESSION['isConnected']);
    session_destroy();
    return header('Location: http://localhost:8000');
}

function getContact($parametre){
    $name = $parametre['name'];
    $message = $parametre['message'];
    return header('Location: http://localhost:8000');
}

function kick($attaquant, $defenseur){
    return $defenseur['life'] - $attaquant['atk'];
}

function getLifePoint($parametre){
    return $parametre['life'] + $parametre['life_point'];
}