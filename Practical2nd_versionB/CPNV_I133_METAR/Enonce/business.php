<?php
/**
 * Author   : nicolas.glassey@cpnv.ch
 * Project  : Diagnostic2nd_versionB
 * Created  : 10.01.2019 - 18:41
 *
 * Last update :    14-JAN-2019 [nom de l'élève]
 *                  ajout du corps des méthodes pour GUIThead et GUITbody
 * Git source  :    [link]
 */

$arrayTH = array ('AIRPORT','MSGDATE','HVISIBILITY','SITUATION','TEMP/DEWPT','QNH','PREVIEW','EDIT','DELETE');
$arrayData = array(
    array ('LSZH','140820Z','9999','MIFG FEW012 SCT040','02/02','Q1013','TEMPO SHRA='),
    array ('LSZH','140850Z','9999','VCSH FEW012 SCT060','05/03','Q1013','TEMPO SHRA='),
    array ('LSGG','140820Z','9999','-SHRA SCT035 BKN050','06/03','Q1016','NOSIG='),
    array ('LFSB', '140850Z','9999','FEW020 SCT035 BKN050','06/03','Q1014','NOSIG=')
);

$GUITitle = "MeteoSwiss - METAR";//titre de la page et du tableau
$GUIThead = generateGUIThead($arrayTH);//entête du tableau
$GUITbody = generateGUITbody($arrayData);//contenu du tableau

function generateGUIThead($arrayTH)
{
    $tempGUIThead = '<th><input type="checkbox" id="checkall" /></th>';

    //TODO

    return $tempGUIThead;
}

function generateGUITbody($arrayData)
{
    $tempGUITbody = "";

    //TODO

    return $tempGUITbody;
}

require 'gabarit.php';