<?php
$action = $_request['action'];
switch($action)
{
    case 'delegues':
        $lesDeleg=Visiteur::getDelegues();
                            //inclure la vue visiteur
                            break;

    default: echo "rien";
}
