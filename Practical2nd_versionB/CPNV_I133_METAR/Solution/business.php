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

    //Evaluation
    //1pt pour l'intégration du checkbox
    //1pt pour l'utilisation correct du foreach
    //1pt pour avoir utilisé la variable temporaire $tempGUIThead
    //1pt construction correct de la liste de th

    $tempGUIThead = '<th><input type="checkbox" id="checkall" /></th>';

    foreach ($arrayTH as $th) {
        $tempGUIThead = $tempGUIThead . '<th>' . $th . '</th>';
    }
    return $tempGUIThead;
}

function generateGUITbody($arrayData)
{
    //Evaluation
    //1pt pour l'utilisation correct du foreach
    //1pt pour l'ajout du checkbox avant la deuxième boucle
    //1pt pour pour le second foreach
    //1pt pour la construction de la liste de table data
    //1pt pour l'utilisation de la variable temporaire $tempGUITbody
    //1pt ajout des boutons après la deuxième boucle

    $tempGUITbody = "";

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