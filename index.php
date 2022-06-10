<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <title>Document</title>
</head>
<body>
    <div class="seznam">
        <h1 class="title">Soldaten des Vaterlandes</h1>
        <p>
        
        </p>
        <?php
        $ranks[0]['name'] = 'Oberst-Gruppenführer und Generaloberst der Waffen-SS';
        $ranks[1]['name'] = 'Obergruppenführer und General der Waffen-SS';
        $ranks[2]['name'] = 'Gruppenführer und Generalleutnant der Waffen-SS';
        $ranks[3]['name'] = 'Brigadeführer und Generalmajor der Waffen-SS';
        $ranks[4]['name'] = 'Oberführer';
        $ranks[5]['name'] = 'Standartenführer';
        $ranks[6]['name'] = 'Obersturmbannführer';
        $ranks[7]['name'] = 'Sturmbannführer';
        $ranks[8]['name'] = 'Hauptsturmführer';
        $ranks[9]['name'] = 'Obersturmführer';
        $ranks[10]['name'] = 'Standartenoberjunker';
        $ranks[11]['name'] = 'Oberscharführer';
        $ranks[12]['name'] = 'Standartenjunker';
        $ranks[13]['name'] = 'Scharführer';
        $ranks[14]['name'] = 'Oberjunker';
        $ranks[15]['name'] = 'Unterscharführer';
        $ranks[16]['name'] = 'Rottenführer';
        $ranks[17]['name'] = 'Sturmmann';
        $ranks[18]['name'] = 'Oberschütze';
        $ranks[19]['name'] = 'Schütze';

        $rifles[0]['name'] = 'Gewehr 41(M)';
        $rifles[1]['name'] = 'Gewehr 41(W)';
        $rifles[2]['name'] = 'Gewehr 43';
        $rifles[3]['name'] = 'Gewehr 98';
        $rifles[4]['name'] = 'Karabiner 98b';
        $rifles[5]['name'] = 'HIW VSK';
        $rifles[6]['name'] = 'Karabiner 98k';
        $rifles[7]['name'] = 'M30 Luftwaffe drilling';
        $rifles[8]['name'] = 'StG 44';
        $rifles[9]['name'] = 'MP 35';
        $rifles[10]['name'] = 'MP 40';
        $rifles[11]['name'] = 'MP 3008';
        $rifles[12]['name'] = 'EMP 44';
        $rifles[13]['name'] = 'Erma EMP';
        $rifles[14]['name'] = 'MP 34';
        $rifles[15]['name'] = 'ZK-383';

        $people[0]['name'] = 'Hans';
        $people[0]['rank'] = $ranks[1];
        $people[0]['weapon'] = $rifles[0];

        $people[1]['name'] = 'Theodore Eichel';
        $people[1]['rank'] = $ranks[0];
        $people[1]['weapon'] = $rifles[1];

        $people[2]['name'] = 'Albrecht Berger';
        $people[2]['rank'] = $ranks[1];
        $people[2]['weapon'] = $rifles[2];

        $people[3]['name'] = 'Ambros Wolff';
        $people[3]['rank'] = $ranks[2];
        $people[3]['weapon'] = $rifles[3];

        $people[4]['name'] = 'Ludwig Klossner';
        $people[4]['rank'] = $ranks[19];
        $people[4]['weapon'] = $rifles[4];

        $people[5]['name'] = 'Adelhard Roth';
        $people[5]['rank'] = $ranks[8];
        $people[5]['weapon'] = $rifles[5];

        $people[6]['name'] = 'Reinhard Schmidt';
        $people[6]['rank'] = $ranks[7];
        $people[6]['weapon'] = $rifles[6];

        $people[7]['name'] = 'Berend Kempf';
        $people[7]['rank'] = $ranks[4];
        $people[7]['weapon'] = $rifles[7];

        $people[8]['name'] = 'Ägid Sander';
        $people[8]['rank'] = $ranks[10];
        $people[8]['weapon'] = $rifles[8];

        $people[9]['name'] = 'Harmand Weiß';
        $people[9]['rank'] = $ranks[12];
        $people[9]['weapon'] = $rifles[9];

        $people[10]['name'] = 'Reiner Lorenz';
        $people[10]['rank'] = $ranks[11];
        $people[10]['weapon'] = $rifles[10];

        $people[11]['name'] = 'Amalric Hartmann';
        $people[11]['rank'] = $ranks[15];
        $people[11]['weapon'] = $rifles[15];

        $people[12]['name'] = 'Wolfgang Richter';
        $people[12]['rank'] = $ranks[6];
        $people[12]['weapon'] = $rifles[12];

        $people[13]['name'] = 'Gerrit Zimmermann';
        $people[13]['rank'] = $ranks[3];
        $people[13]['weapon'] = $rifles[13];

        $people[14]['name'] = 'Addler Kraus';
        $people[14]['rank'] = $ranks[2];
        $people[14]['weapon'] = $rifles[14];

        $people[15]['name'] = 'Audo Stark';
        $people[15]['rank'] = $ranks[1];
        $people[15]['weapon'] = $rifles[15];

        $people[16]['name'] = 'Barthold Schumacher';
        $people[16]['rank'] = $ranks[19];
        $people[16]['weapon'] = $rifles[1];

        $people[17]['name'] = 'Adalmar Wolff';
        $people[17]['rank'] = $ranks[18];
        $people[17]['weapon'] = $rifles[10];

        $people[18]['name'] = 'Rein Mann';
        $people[18]['rank'] = $ranks[17];
        $people[18]['weapon'] = $rifles[13];

        $people[19]['name'] = 'Werther Frank';
        $people[19]['rank'] = $ranks[13];
        $people[19]['weapon'] = $rifles[11];

        for ($i=0; $i < count($people); $i++) { ?>
            <h2><?= $people[$i]['name']; ?></h2>
            <p><strong>Rank: </strong><?= $people[$i]['rank']['name']; ?></p>
            <p><strong>Waffe: </strong><?= $people[$i]['weapon']['name']; ?></p>
            <?php
        }
        ?>
    </div>
</body>
</html>