<?php
    $gameData = [
        'boardSize' => '6',
        'survivors' => [
            [
                'name' => 'Nano',
                'live' => 3,
                'exp' => 1,
                'items' => [
                    'leftHand' => null,
                    'rightHand' => 'machete',
                    'backpack' => [
                        'rubber-duck'
                    ],
                ],
                'positionX' => 2,
                'positionY' => 4,
            ],
            [
                'name' => 'Nino',
                'live' => 3,
                'exp' => 3,
                'items' => [
                    'leftHand' => 'knife',
                    'rightHand' => null,
                    'backpack' => null,
                ],
                'positionX' => 5,
                'positionY' => 5,
            ],
        ],
        'zombies' => [
            [
                'name' => 'zombie1',
                'live' => 1,
                'positionX' => 2,
                'positionY' => 1,
            ],
            [
                'name' => 'zombie2',
                'live' => 1,
                'positionX' => 3,
                'positionY' => 4,
            ],
            [
                'name' => 'zombie3',
                'live' => 1,
                'positionX' => 5,
                'positionY' => 3,
            ],
        ],
    ];

    function createBoard($gameData)
    {
        $boardSize = $gameData['boardSize'];
        $survivors = $gameData['survivors'];
        $zombies = $gameData['zombies'];

        $board = '<table>';

        for ($row = 0; $row < $boardSize; $row++) {
            $board .= '<tr>';

            for ($column = 0; $column < $boardSize; $column++) {
                $board .= '<td class="tile'.rand(1, 3).'" data-row="'.$row.'" data-column="'.$column.'">';

                $survivorPrinted = false;

                foreach ($survivors as $key => $survivor) {
                    if ($survivor['positionX'] == $column && $survivor['positionY'] == $row) {
                        $board .= '<img src="assets/images/survivor'.$key.'.png" />';
                        $survivorPrinted = true;
                    }
                }

                if (!$survivorPrinted) {
                    foreach ($zombies as $key => $zombie) {
                        if ($zombie['positionX'] == $column && $zombie['positionY'] == $row) {
                            $board .= '<img src="assets/images/zombie'.$key.'.png" />';
                        }
                    }
                }

                $board .= '</td>';
            }

            $board .= '</tr>';
        }

        $board .= '</table>';

        return $board;
    }
?>
<html lang="en">
    <head>
        <title>Hackaton Tech Summit 2022</title>
        <link rel="stylesheet" href="src/css/index.css">
    </head>
    <body>
        <div id="application-container">
            <?php echo createBoard($gameData); ?>
        </div>
    </body>
</html>
