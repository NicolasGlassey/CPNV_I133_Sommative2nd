<?php
/**
 * Author   : nicolas.glassey@cpnv.ch
 * Project  : Diagnostic2nd
 * Created  : 10.01.2019 - 18:41
 *
 * Last update :    14-JAN-2019 [nom de l'élève]
 *                  ajout du corps des méthodes pour GUIThead et GUITbody
 * Git source  :    [link]
 */

$arrayTH = array ('SATELLITE','LIFETIME','POSITION','SERVICE','CONTACT','EDIT','DELETE');
$arrayData = array(
    array ('Meteosat-11', '15/07/2015 - Availability lifetime is until 2024','0° 36,000km','0° Service including Data Collection Service and Web Imagery.','isometric.mohsin@gmail.com'),
    array ('Meteosat-10', '05/07/2012 - Availability lifetime is until 2024','9.5°E 36,000km','Rapid Scanning Service. Replaced Meteosat-9 RSS on 20 March 2018','isometric.mohsin@gmail.com'),
    array ('Meteosat-9', '22/12/2015 - Fuel lifetime is until 2024','3.5°E 36,000km','Rapid Scan Service gap filing and back-up spacecraft since 20 March 2018','isometric.mohsin@gmail.com'),
    array ('Meteosat-8', '28/08/2002 - Fuel lifetime is until 2020', '41.5°E 36,000km','Indian Ocean Data Coverage Service including Data Collection Service and Web Imagery. Replaced Meteosat-7 on 01 February 2018','isometric.mohsin@gmail.com')
);

$GUITitle = "Satellite Second Generation (MSG)";//titre de la page et du tableau
$GUIThead = generateGUIThead($arrayTH);//entête du tableau
$GUITbody = generateGUITbody($arrayData);//contenu du tableau

function generateGUIThead($arrayTH)
{
    $tempGUIThead = "";

    //TODO

    return $tempGUIThead;
}

function generateGUITbody($arrayData)
{
    $tempGUITbody = "";

    //TODO

    return $tempGUITbody;
}

require 'gabarit_doc.php';