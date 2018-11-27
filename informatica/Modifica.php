<?php

	$Code = $_GET["code"];

    include ("conect.inc");

    $Cons = "$Code";
    $resp = mysqli_query($db, $Cons);

?>