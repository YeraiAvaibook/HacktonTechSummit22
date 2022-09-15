<?

namespace Hackaton\Zombies\Entity;

class GameData {

    private int $boardSize;
    private array $survivors;
    private array $zombies;


    public function __construct(int $boardSize, array $survivors, array $zombies)
    {
        $this->boardSize = $boardSize;
        $this->survivors = $survivors;
        $this->zombies = $zombies;
    }


    public function export(): string
    {
        $export = [
            'survivors' => [
            ]


            ];
        return json_encode($export);
    }

    public function getSurvivors()
    {
        return $this->survivors;
    }

    public function setSurvivors($survivors)
    {
        $this->survivors = $survivors;

        return $this->survivors;
    }

}