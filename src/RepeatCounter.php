<?php
class RepeatCounter
{
    function countRepeats($master_string, $search_string)
    {
      //using a regular expression, ignoring all alphanumeric characters and spaces, replaces all other characters with nothing
        $clean_search_string = preg_replace('/[^A-Za-z0-9\s]/', '', $search_string);
      //first input to lowercase
        $master_string = strtolower($master_string);
      //explodes the cleaned search into an array
        $exploded_search_array = explode(' ', $clean_search_string);
      //creates match counter
        $number_of_matches = 0;
      //cylcling through each word in the exploded word array
        foreach ($exploded_search_array as $word) {
          //transforming each word to lowercase
            $word = strtolower($word);
          //incrementing the counter if that word in the array matches the initial input
            if($word == $master_string) {
                $number_of_matches++;
            }
        }
      //returns the number of matches
        return $number_of_matches;
    }
}
?>
