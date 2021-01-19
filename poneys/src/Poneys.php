<?php
/**
 * Gestion de poneys
 */
class Poneys
{
    private $count = 8;

    /**
     * Retourne le nombre de poneys
     *
     * @return void
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * Ajoute une nombre de poneys
     * @return void
     */
    public function addPoneyToField(int $number): void
    {
        if (is_int($number) && $number > 0){
            $this->count += $number;
            echo "Poney added with success !";
        } else {
            echo "Wrong value";
        }
    }

    /**
     * Retire un poney du champ
     *
     * @param int $number Nombre de poneys à retirer
     *
     * @return void
     */
    public function removePoneyFromField(int $number): void
    {
        if($this->count - $number < 0){
            throw new Exception('Attemting to remove more poneys than there are');
        } elseif($number <= 0){
            throw new Exception('Attemting to enter a negative or 0 value');
        }
        $this->count -= $number;
    }

    /**
     * Retourne les noms des poneys
     *
     * @return array
     */
    public function getNames(): array
    {

    }
}

?>
