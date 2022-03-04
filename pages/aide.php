
<?php

$resultQueryTask = $mysqli->query("SELECT * FROM aide ORDER BY id ASC");

if ($resultQueryTask->num_rows < 1){

?>

</br></br><h2>il n' y a pas de resultat</h2>

<?php

}else { ?>





<?php
}

?>



