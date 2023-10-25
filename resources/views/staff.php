<h1>
    <?= $title;?>
</h1>
<?php

    if(!empty($staff)){
        foreach($staff as $s){
            echo $s['name']." ".$s['lastName'];
            echo "<br>";
        }
    }

?>