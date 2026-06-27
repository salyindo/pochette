<?php

do {
    echo " Menu  wallet\n";
    echo "1 - Créer Wallet\n";
    echo "2 - Faire Dépôt\n";
    echo "3 - Faire Retrait\n";
    echo "4 - Lister les Transactions\n";
    echo "0 - Quitter\n";
    echo "Votre choix : ";

    $choix = (int) trim(fgets(STDIN));

    if ($choix < 0 || $choix > 4) {
        echo "Choix invalide, veuillez réessayer\n";
    } elseif ($choix !== 0) {
        echo "Option $choix choisie\n";
    }

} while ($choix !== 0);

echo "Au revoir !\n";