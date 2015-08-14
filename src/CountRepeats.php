<?php
class CountRepeats
{
    function countRepeatsMethod($master_string, $search_string)
    {
        $exploded_search_array = explode(' ', $search_string);
        if(in_array($master_string, $exploded_search_array)) {
            return 1;
        } else {
            return 0;
        }
    }
}
?>
