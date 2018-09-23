<?php
    include 'session.php';

    $message = '';

    $inSession = session_getvar('insession');

    if ($inSession <> ''){
        $user = session_getvar('app.user');
        $password = session_getvar('app.user');

        // 
        $idsede = session_getvar('app.idsede');
        $nomsede = session_getvar('app.nomsede');

        // menus
        include 'entities/menus.php';
        $menus[] = new Menus('', '', '');

        
        $message = "Se inicio sesión con User[".$user."]";        
    } else 
    {
        $message = "No hay sesión iniciada...";        
    }
?>