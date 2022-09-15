<?php
require_once 'vendor/autoload.php';

use Hackaton\Zombies\Entity\Game;
use Hackaton\Zombies\Helper\GameFileReader;

    $fileReader = new GameFileReader('assets/steps/example.txt');
    new Game($fileReader);

    function createBoard($size = 6)
    {
        $board = '<table>';

        for ($row = 0; $row < $size; $row++) {
            $board .= '<tr>';

            for ($column = 0; $column < $size; $column++) {
                $board .= '<td data-row="'.$row.'" data-column="'.$column.'"></td>';
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
            <?php echo createBoard(); ?>
        </div>
    </body>
</html>
