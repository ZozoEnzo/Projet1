<?php
$action = $_request['action'];
switch($action)
{
    case 'delegues':
        echo "enzo borges";
        $lesDeleg=Visiteur::getDelegues();
        include ("vue/v_visiteur.inc.php");
        break;

    default: echo "rien";
}
