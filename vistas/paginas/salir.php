<?php
session_destroy();
$redirectURL ="index.php?pagina=ingreso";
header("Location: $redirectURL");