<?php
//Tableaux simple
$notes = [17, 19, 15, 18, 14, 16];
echo "Tableau simple $notes[3]\n";

//Tableaux multiple
$eleves = ['Thomas', 'Kia', [17, 19, 15, 18, 14, 16]];
echo 'Tableau multiple '. $eleves[2][4]."\n";

//Tableaux multiple associatif
$eleves = ['prenom' => 'Thomas',
            'nom' => 'Kia',
            'notes' => [17, 19, 15, 18, 14, 16]
        ];

//Ajout d'une note
$eleves['notes'][] = 20;
echo 'Tableau multiple particulier '. $eleves['nom']. ' '.$eleves['prenom']."\n";
print_r($eleves['notes']);

//Tableaux multidimensionnel
$classe = [
    [
        'prenom' => 'Thomas',
        'nom' => 'Kia',
        'notes' => [17, 19, 15, 18, 14, 16]
    ],
    [
        'prenom' => 'Lea',
        'nom' => 'Jane',
        'notes' => [18, 13, 12, 16, 11, 17]
    ]
];
