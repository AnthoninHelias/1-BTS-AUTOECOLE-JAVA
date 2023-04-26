<?php

use Poubelle\Camion;
use Poubelle\Immeuble;
use Poubelle\Poubelle;

require 'vendor/autoload.php';

/**
 * <<<< Jeux d'essai
 * Celui-ci ne peut pas être modifié
 */


$immeubles["A1"] = new Immeuble('Rue de la paix', '75001');
$immeubles["A1"]->addPoubelle(new Poubelle($immeubles["A1"], '1234', 100, 'verre'));
$immeubles["A1"]->addPoubelle(new Poubelle($immeubles["A1"], '5678', 200, 'plastique'));
$immeubles["A1"]->addPoubelle(new Poubelle($immeubles["A1"], '9101', 300, 'ordure'));
$immeubles["A2"] = new Immeuble('Rue de la liberté', '75001');
$immeubles["A2"]->addPoubelle(new Poubelle($immeubles["A2"], '1121', 100, 'verre'));
$immeubles["A2"]->addPoubelle(new Poubelle($immeubles["A2"], '3141', 200, 'plastique'));
$immeubles["A2"]->addPoubelle(new Poubelle($immeubles["A2"], '5161', 300, 'ordure'));
$immeubles["A3"] = new Immeuble('Rue de la justice', '75001');
$immeubles["A3"]->addPoubelle(new Poubelle($immeubles["A3"], '7181', 100, 'verre'));
$immeubles["A3"]->addPoubelle(new Poubelle($immeubles["A3"], '9201', 200, 'plastique'));
$immeubles["A3"]->addPoubelle(new Poubelle($immeubles["A3"], '1222', 300, 'ordure'));
$immeubles["A4"] = new Immeuble('Rue de la fraternité', '75003');
$immeubles["A4"]->addPoubelle(new Poubelle($immeubles["A4"], '3242', 100, 'verre'));
$immeubles["A4"]->addPoubelle(new Poubelle($immeubles["A4"], '5262', 200, 'plastique'));
$immeubles["A4"]->addPoubelle(new Poubelle($immeubles["A4"], '7282', 300, 'ordure'));
$immeubles["A5"] = new Immeuble('Rue de la solidarité', '75003');
$immeubles["A5"]->addPoubelle(new Poubelle($immeubles["A5"], '9302', 100, 'verre'));
$immeubles["A5"]->addPoubelle(new Poubelle($immeubles["A5"], '1323', 200, 'plastique'));
$immeubles["A5"]->addPoubelle(new Poubelle($immeubles["A5"], '3343', 300, 'ordure'));
$immeubles["A6"] = new Immeuble('Rue de la tolérance', '75005');
$immeubles["A6"]->addPoubelle(new Poubelle($immeubles["A6"], '5363', 100, 'verre'));
$immeubles["A6"]->addPoubelle(new Poubelle($immeubles["A6"], '7383', 200, 'plastique'));
$immeubles["A6"]->addPoubelle(new Poubelle($immeubles["A6"], '9403', 300, 'ordure'));
$immeubles["A7"] = new Immeuble('Rue de la démocratie', '75005');
$immeubles["A7"]->addPoubelle(new Poubelle($immeubles["A7"], '1424', 100, 'verre'));
$immeubles["A7"]->addPoubelle(new Poubelle($immeubles["A7"], '3444', 200, 'plastique'));
$immeubles["A7"]->addPoubelle(new Poubelle($immeubles["A7"], '5464', 300, 'ordure'));
$immeubles["A8"] = new Immeuble('Rue de la république', '75005');
$immeubles["A8"]->addPoubelle(new Poubelle($immeubles["A8"], '7484', 100, 'verre'));
$immeubles["A8"]->addPoubelle(new Poubelle($immeubles["A8"], '9504', 200, 'plastique'));
$immeubles["A8"]->addPoubelle(new Poubelle($immeubles["A8"], '1525', 300, 'ordure'));
$immeubles["A9"] = new Immeuble('Rue de la liberté', '75008');
$immeubles["A9"]->addPoubelle(new Poubelle($immeubles["A9"], '3545', 100, 'verre'));
$immeubles["A9"]->addPoubelle(new Poubelle($immeubles["A9"], '5565', 200, 'plastique'));
$immeubles["A9"]->addPoubelle(new Poubelle($immeubles["A9"], '7585', 300, 'ordure'));
$immeubles["A10"] = new Immeuble('Rue de la justice', '75009');
$immeubles["A10"]->addPoubelle(new Poubelle($immeubles["A10"], '9605', 100, 'verre'));
$immeubles["A10"]->addPoubelle(new Poubelle($immeubles["A10"], '1626', 200, 'plastique'));
$immeubles["A10"]->addPoubelle(new Poubelle($immeubles["A10"], '3646', 300, 'ordure'));
$immeubles["A11"] = new Immeuble('Rue de la fraternité', '75010');
$immeubles["A11"]->addPoubelle(new Poubelle($immeubles["A11"], '5666', 100, 'verre'));
$immeubles["A11"]->addPoubelle(new Poubelle($immeubles["A11"], '7686', 200, 'plastique'));
$immeubles["A11"]->addPoubelle(new Poubelle($immeubles["A11"], '9706', 300, 'ordure'));
$immeubles["A12"] = new Immeuble('Rue de la solidarité', '75010');
$immeubles["A12"]->addPoubelle(new Poubelle($immeubles["A12"], '1727', 100, 'verre'));
$immeubles["A12"]->addPoubelle(new Poubelle($immeubles["A12"], '3747', 200, 'plastique'));
$immeubles["A12"]->addPoubelle(new Poubelle($immeubles["A12"], '5767', 300, 'ordure'));
$immeubles["A13"] = new Immeuble('Rue de la tolérance', '75010');
$immeubles["A13"]->addPoubelle(new Poubelle($immeubles["A13"], '7787', 100, 'verre'));
$immeubles["A13"]->addPoubelle(new Poubelle($immeubles["A13"], '9807', 200, 'plastique'));
$immeubles["A13"]->addPoubelle(new Poubelle($immeubles["A13"], '1828', 300, 'ordure'));
$immeubles["A14"] = new Immeuble('Rue de la démocratie', '75010');
$immeubles["A14"]->addPoubelle(new Poubelle($immeubles["A14"], '3848', 100, 'verre'));
$immeubles["A14"]->addPoubelle(new Poubelle($immeubles["A14"], '5868', 200, 'plastique'));
$immeubles["A14"]->addPoubelle(new Poubelle($immeubles["A14"], '7888', 300, 'ordure'));
$immeubles["A15"] = new Immeuble('Rue de la république', '75010');
$immeubles["A15"]->addPoubelle(new Poubelle($immeubles["A15"], '9908', 100, 'verre'));
$immeubles["A15"]->addPoubelle(new Poubelle($immeubles["A15"], '1929', 200, 'plastique'));
$immeubles["A15"]->addPoubelle(new Poubelle($immeubles["A15"], '3949', 300, 'ordure'));
$immeubles["A16"] = new Immeuble('Rue de la liberté', '75015');
$immeubles["A16"]->addPoubelle(new Poubelle($immeubles["A16"], '5969', 100, 'verre'));
$immeubles["A16"]->addPoubelle(new Poubelle($immeubles["A16"], '7989', 200, 'plastique'));
$immeubles["A16"]->addPoubelle(new Poubelle($immeubles["A16"], '9109', 300, 'ordure'));
$immeubles["A17"] = new Immeuble('Rue de la justice', '75015');
$immeubles["A17"]->addPoubelle(new Poubelle($immeubles["A17"], '1120', 100, 'verre'));
$immeubles["A17"]->addPoubelle(new Poubelle($immeubles["A17"], '3140', 200, 'plastique'));
$immeubles["A17"]->addPoubelle(new Poubelle($immeubles["A17"], '5160', 300, 'ordure'));
$immeubles["A18"] = new Immeuble('Rue de la fraternité', '75015');
$immeubles["A18"]->addPoubelle(new Poubelle($immeubles["A18"], '7180', 100, 'verre'));
$immeubles["A18"]->addPoubelle(new Poubelle($immeubles["A18"], '9200', 200, 'plastique'));
$immeubles["A18"]->addPoubelle(new Poubelle($immeubles["A18"], '1221', 300, 'ordure'));
$immeubles["A19"] = new Immeuble('Rue de la solidarité', '75001');
$immeubles["A19"]->addPoubelle(new Poubelle($immeubles["A19"], '3241', 100, 'verre'));
$immeubles["A19"]->addPoubelle(new Poubelle($immeubles["A19"], '5261', 200, 'plastique'));
$immeubles["A19"]->addPoubelle(new Poubelle($immeubles["A19"], '7281', 300, 'ordure'));
$immeubles["A20"] = new Immeuble('Rue de la tolérance', '75011');
$immeubles["A20"]->addPoubelle(new Poubelle($immeubles["A20"], '9301', 100, 'verre'));
$immeubles["A20"]->addPoubelle(new Poubelle($immeubles["A20"], '1322', 200, 'plastique'));
$immeubles["A20"]->addPoubelle(new Poubelle($immeubles["A20"], '3342', 300, 'ordure'));
$immeubles["A21"] = new Immeuble('Rue de la démocratie', '75020');
$immeubles["A21"]->addPoubelle(new Poubelle($immeubles["A21"], '5362', 100, 'verre'));
$immeubles["A21"]->addPoubelle(new Poubelle($immeubles["A21"], '7382', 200, 'plastique'));
$immeubles["A21"]->addPoubelle(new Poubelle($immeubles["A21"], '9402', 300, 'ordure'));

$camion["C1"] = new Camion('C1', 1000, 'verre');
$camion["C1"]->addPoubelle($immeubles["A1"]->getPoubelleForMatricule('1234'));
$camion["C1"]->addPoubelle($immeubles["A2"]->getPoubelleForMatricule('1121'));
$camion["C1"]->addPoubelle($immeubles["A3"]->getPoubelleForMatricule('7181'));
$camion["C1"]->addPoubelle($immeubles["A6"]->getPoubelleForMatricule('5363'));
$camion["C1"]->addPoubelle($immeubles["A15"]->getPoubelleForMatricule('9908'));

$camion["C2"] = new Camion('C2', 1000, 'plastique');
$camion["C2"]->addPoubelle($immeubles["A12"]->getPoubelleForMatricule('3747'));
$camion["C2"]->addPoubelle($immeubles["A5"]->getPoubelleForMatricule('1323'));
$camion["C2"]->addPoubelle($immeubles["A6"]->getPoubelleForMatricule('7383'));

$camion["C3"] = new Camion('C3', 1000, 'ordure');
$camion["C3"]->addPoubelle($immeubles["A16"]->getPoubelleForMatricule('9109'));
$camion["C3"]->addPoubelle($immeubles["A6"]->getPoubelleForMatricule('9403'));
$camion["C3"]->addPoubelle($immeubles["A21"]->getPoubelleForMatricule('9402'));
$camion["C3"]->addPoubelle($immeubles["A12"]->getPoubelleForMatricule('5767'));

$camion["C4"] = new Camion('C4', 1000, 'verre');
$camion["C4"]->addPoubelle($immeubles["A8"]->getPoubelleForMatricule('7484'));
$camion["C4"]->addPoubelle($immeubles["A11"]->getPoubelleForMatricule('5666'));
$camion["C4"]->addPoubelle($immeubles["A6"]->getPoubelleForMatricule('5363'));
$camion["C4"]->addPoubelle($immeubles["A15"]->getPoubelleForMatricule('1929'));
$camion["C4"]->addPoubelle($immeubles["A7"]->getPoubelleForMatricule('1424'));
$camion["C4"]->addPoubelle($immeubles["A18"]->getPoubelleForMatricule('7180'));

/**
 * >>> Fin du Jeux d'essai
 */
$nbVerre =0;
$nbOrdure=0;
$nbPlastique=0;


//
// TP A FAIRE
//

// # 1 ## Completer la classe Immeuble, Poubelle et Camion
// Faire des algorithmes pour les questions suivantes :
// # Exemple à faire marcher ## Liste des immeubles et les poubelles par type de déchets
echo "Liste des immeubles et les poubelles par type de déchets";
foreach ($immeubles as $immeuble) {
    echo $immeuble->getAdresse() . ' - ' . $immeuble->getCodePostal() . ' - ' . $immeuble->getNbPoubelle() . ' poubelle(s)' . '<br>';
    foreach ($immeuble->getPoubelle() as $poubelle) {
        echo ' - ' . $poubelle->getType() . ' - ' . $poubelle->getCapacite() . '<br>';
    }
}


// # 2 ## Liste des camions et les poubelles par type de déchets et par adresse
echo "Liste des camions et les poubelles par type de déchets et par adresse";
foreach ($immeuble as $immeuble)
{
    echo $immeuble->getAdresse();
}
foreach ($camion as $camion) {
    echo $camion->getNom() . ' - ' . $camion->getType(). ' - ' .$camion->getCapacite() .'<br>';
    foreach ($camion->getPoubelle() as $poubelle) {
        echo ' - ' . $poubelle->getType() . ' - ' . $poubelle->getCapacite() . '<br>';
    }

}

// # 3 ## Afficher le nombre de poubelle par type de déchets
echo "le nombre de poubelle par type de déchets";

foreach ($immeubles as $immeuble) {
    foreach ($immeuble->getPoubelle() as $poubelle) {
        if ($poubelle->getType()=='verre'){
            $nbVerre=$nbVerre+1;
        }
        if ($poubelle->getType()=='plastique'){
            $nbPlastique=$nbPlastique+1;
        }
        if ($poubelle->getType()=='ordure'){
            $nbOrdure=$nbOrdure+1;
        }
    }
    echo $nbVerre . '<br>';
    echo $nbOrdure . '<br>';
    echo $nbPlastique . '<br>';
}

// # BONUS ## Afficher l'intru avec un algo d'une poubelle dans le mauvais camion
