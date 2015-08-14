<?php
    require_once "src/ScrabbleScore.php";
    class ScrabbleScoreTest extends PHPUnit_Framework_TestCase
    {
        function test_single_letter_value_one()
        {
            //Arrange
            $test_ScrabbleScore = new ScrabbleScore;
            $input = 'a';
            //Act
            $result = $test_ScrabbleScore->scrabbleScoreCalculator($input);
            //Assert
            $this->assertEquals(1, $result);
        }
    }
?>
