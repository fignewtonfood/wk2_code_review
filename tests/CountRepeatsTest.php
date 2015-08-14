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

        function test_one_letter_to_two_word_intraword_exception()
        {
            //Arrange
            $test_CountRepeats = new CountRepeats;
            $input1 = 'a';
            $input2 = 'a ab';
            //Act
            $result = $test_CountRepeats->countRepeatsMethod($input1, $input2);
            //Assert
            $this->assertEquals(1, $result);
        }

        function test_two_letters_identical()
        {
            //Arrange
            $test_CountRepeats = new CountRepeats;
            $input1 = 'ab';
            $input2 = 'ab';
            //Act
            $result = $test_CountRepeats->countRepeatsMethod($input1, $input2);
            //Assert
            $this->assertEquals(1, $result);
        }

        function test_two_letters_different()
        {
            //Arrange
            $test_CountRepeats = new CountRepeats;
            $input1 = 'ab';
            $input2 = 'cd';
            //Act
            $result = $test_CountRepeats->countRepeatsMethod($input1, $input2);
            //Assert
            $this->assertEquals(0, $result);
        }

        function test_more_than_one_match()
        {
            //Arrange
            $test_CountRepeats = new CountRepeats;
            $input1 = 'a';
            $input2 = 'a b a';
            //Act
            $result = $test_CountRepeats->countRepeatsMethod($input1, $input2);
            //Assert
            $this->assertEquals(2, $result);
        }

        function test_more_than_two_letters_as_source()
        {
            //Arrange
            $test_CountRepeats = new CountRepeats;
            $input1 = 'abcd';
            $input2 = 'abcd efg hi j';
            //Act
            $result = $test_CountRepeats->countRepeatsMethod($input1, $input2);
            //Assert
            $this->assertEquals(1, $result);
        }

        function test_more_than_two_matches()
        {
            //Arrange
            $test_CountRepeats = new CountRepeats;
            $input1 = 'a';
            $input2 = 'a a b a b a';
            //Act
            $result = $test_CountRepeats->countRepeatsMethod($input1, $input2);
            //Assert
            $this->assertEquals(4, $result);
        }

        function test_more_than_two_letters_more_than_two_matches()
        {
            //Arrange
            $test_CountRepeats = new CountRepeats;
            $input1 = 'abcd';
            $input2 = 'abcd efg abcd abcd hi j abcd';
            //Act
            $result = $test_CountRepeats->countRepeatsMethod($input1, $input2);
            //Assert
            $this->assertEquals(4, $result);
        }

        function test_ignore_case()
        {
            //Arrange
            $test_CountRepeats = new CountRepeats;
            $input1 = 'aBcD';
            $input2 = 'AbCd';
            //Act
            $result = $test_CountRepeats->countRepeatsMethod($input1, $input2);
            //Assert
            $this->assertEquals(1, $result);
        }

    }
?>
