<?php
    require_once "src/CountRepeats.php";
    class CountRepeatsTest extends PHPUnit_Framework_TestCase
    {
        function test_one_letter_each_indentical()
        {
            //Arrange
            $test_CountRepeats = new CountRepeats;
            $input1 = 'a';
            $input2 = 'a';
            //Act
            $result = $test_CountRepeats->countRepeatsMethod($input1, $input2);
            //Assert
            $this->assertEquals(1, $result);
        }

        function test_one_letter_each_different()
        {
            //Arrange
            $test_CountRepeats = new CountRepeats;
            $input1 = 'a';
            $input2 = 'b';
            //Act
            $result = $test_CountRepeats->countRepeatsMethod($input1, $input2);
            //Assert
            $this->assertEquals(0, $result);
        }

        function test_one_letter_to_two_word()
        {
            //Arrange
            $test_CountRepeats = new CountRepeats;
            $input1 = 'a';
            $input2 = 'a b';
            //Act
            $result = $test_CountRepeats->countRepeatsMethod($input1, $input2);
            //Assert
            $this->assertEquals(1, $result);
        }
    }
?>
