<?php
    $tableaux = array(
        array(
            'Titre' => 'Indiana Jones and the Kingdom of the Crystal Skull',
            'acteur' => array(
                'Cate Blanchett', 'Harrison Ford', 'Karen Allen'
            )   
        ),
        array(
            'Titre' => 'Indiana Jones and the Last Crusade',
            'acteur' => array(
                'Harrison Ford', 'Sean Connery', 'Denholm Elliott'
            )   
        ),
        array(
            'Titre' => 'Indiana Jones and the Temple of Doom',
            'acteur' => array(
                'Harrison Ford', 'Kate Capshaw', 'Jonathan Ke Quan'
             )   
        )
    );
    for ($i =0; $i < count($tableaux); $i++){
        echo 'Dans le film ' .$tableaux[$i]['Titre'], ' les principaux acteurs sont ';
        for ($j =0; $j < 3; $j++){
            echo $tableaux[$i]['acteur'][$j] .', ';
            
        }
        echo '<br>';
        
        
    }
?>
