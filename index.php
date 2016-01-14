<?php

$events = array(
    array(1, 'Targi Pracy Lublin', '12.02.2016'),
    array(2, 'Targi Targow Lublin', '14.03.2016'),
    array(3, 'Targi Sportu Lublin', '19.03.2016')
);






?>
<table border="1">
    <?php

        foreach ($events as $event) {
            echo "<tr><td>$event[0]</td><td>".$event[1].'</td><td>'.$event[2].'</td></tr>';
        }
    ?>
</table>