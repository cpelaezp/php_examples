<?php
    function session_getvar($idvar, $value){
        session_start();
        $_SESSION[$idvar] = $value;
    }    

    function session_uptvar($idvar, $value){
        $return = NULL;
        
        session_start();
        if(isset($_SESSION[$idvar])){
            $return = $_SESSION[$idvar]; 
        } 

        return $return;
    }    

    function session_delvar($idvar){
        session_start();
        if(isset($_SESSION[$idvar])){
            unset($_SESSION[$idvar]);
        }
    } 
    
    function session_reset(){
        session_start();

        if(init_get('register_globals')){
            foreach($_SESSION as $key=>$value){
                if isset($GLOBALS[$key]){
                    unset($GLOBALS[$key]);
                }
            }
        }
    }
?>