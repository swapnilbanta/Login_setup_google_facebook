<?php

//logout.php

include('config.php');

//Reset OAuth access token

//Destroy entire session data.
session_destroy();



//redirect page to index.php
header('location:index.php');

?>
<h1>jello</h1>
