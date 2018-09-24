<?php
session_start();

require ("destroy_session.php");

echo "You successfully logout. Click here to 
                <a href='index.php'>login again</a>";
?>