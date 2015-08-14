<?php
class CountRepeats
{
    function countRepeatsMethod($master_string, $search_string)
    {
        $master_string = strtolower($master_string);
        $exploded_search_array = explode(' ', $search_string);
        $number_of_matches = 0;
        foreach ($exploded_search_array as $word) {
            $word = strtolower($word);
            if($word == $master_string) {
                $number_of_matches++;
            }
        }
        return $number_of_matches;
    }
}
?>
