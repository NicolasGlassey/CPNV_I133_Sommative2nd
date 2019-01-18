<?php
/**
 * Author   : nicolas.glassey@cpnv.ch
 * Project  : Diagnostic2nd
 * Created  : 10.01.2019 - 18:41
 *
 * Last update :    13-JAN-2019 - nicolas.glassey@gmail.com
 *                  Add evaluation rules
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

    //result expected = //'<th>SATELLITE</th><th>LIFETIME</th><th>POSITION</th> <th>SERVICE</th><th>CONTACT</th><th>EDIT</th><th>DELETE</th>';

    //Evaluation
    //1pt pour l'utilisation correct du foreach (pas de for)
    //1pt pour avoir utilisé la variable temporaire $tempGUIThead
    //1pt construction correct de la liste de th
    //1pt ajout checkbox

    $tempGUIThead = '<th><input type="checkbox" id="checkall" /></th>';

    foreach ($arrayTH as $th) {
        $tempGUIThead = $tempGUIThead . '<th>' . $th . '</th>';
    }
    return $tempGUIThead;
}

function generateGUITbody($arrayData)
{
    $tempGUITbody = "";

    //Evaluation
    //1pt pour l'utilisation correct du foreach
    //1pt pour l'ajout du checkbox avant la deuxième boucle
    //1pt pour pour le second foreach
    //1pt pour la construction de la liste de table data
    //1pt pour l'utilisation de la variable temporaire $tempGUITbody
    //1pt ajout des boutons après la deuxième boucle

    foreach ($arrayData as $data) {

        $tempGUITbody = $tempGUITbody . '<tr><td><input type="checkbox" class="checkthis" /></td>';

        foreach ($data as $value)
        {
            $tempGUITbody = $tempGUITbody . '<td>' . $value . '</td>';
        }

        //add button and close table record
        $tempGUITbody = $tempGUITbody . '<td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>'
                                      . '<td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>'
                                      . '</tr>';
    }
    return $tempGUITbody;
}
require 'gabarit.php';