<?php
function Triangle($int) {

    for($i = 0; $i < $int; $i++) {
        echo '<div>';
        for($j = 0; $j <= $i; $j++) {
            echo'**';
        }
        echo '</div>';
    }
};

echo '<div style="text-align: center">';
echo Triangle(10);
echo '</div>';