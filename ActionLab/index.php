<?php

// echo 'Hello, ActionLab.';


/*
    URL: localhost/Labs/ActionLab/index.php
    
    URL WITH PARAMS:
    URL: localhost/Labs/ActionLab/index.php?user_id=2

    URL WITH MUTIPLE PARAMS:
    URL: localhost/Labs/ActionLab/index.php?page=user&user_id=2
*/


echo "Page: {$_GET['page']}, UserID: {$_GET['user_id']}";