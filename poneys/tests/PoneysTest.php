<?php
use PHPUnit\Framework\TestCase;

require_once 'src/Poneys.php';

/**
 * Classe de test de gestion de poneys
 */
class PoneysTest extends TestCase
{
    /**
     * Undocumented function
     *
     * @return void
     */
    public function testRemovePoneyFromField()
    {
        // Setup
        $poneys = new Poneys();

        // Action : remove a poney 
        $poneys->removePoneyFromField(3);

        // Assert
        $this->assertEquals(5, $poneys->getCount());

        // Expect
        $this->expectException(Exception::class);
        // Action : remove more poneys that there exist
        $poneys->removePoneyFromField(20);

        // Expect
        $this->expectException(Exception::class);
        // Action : remove more poneys that there exist
        $poneys->removePoneyFromField(-3);   
    }

    /**
     * @return void
     */
    public function testAddPoneyToField()
    {
        $poneys = new Poneys();
        
        // Action
        $poneys->addPoneyToField(2);
        echo $poneys->getCount();
        // Assert
        $this->assertEquals(10, $poneys->getCount());
    }
}
?>
