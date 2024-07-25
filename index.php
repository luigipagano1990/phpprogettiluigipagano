<?php
$users = [
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
    ['name' => 'Mario', 'surname' => 'Rossi', 'gender' => 'M'],
    ['name' => 'Lucia', 'surname' => 'Verdi', 'gender' => 'F'],
];

foreach ($users as $user) {
    switch ($user['gender']) {
        case 'M':
            echo "Buongiorno Sig. {$user['name']} {$user['surname']}\n";
            break;
        case 'F':
            echo "Buongiorno Sig.ra {$user['name']} {$user['surname']}\n";
            break;
        default:
            echo "Buongiorno {$user['name']} {$user['surname']}\n";
            break;
    }
}
?>
