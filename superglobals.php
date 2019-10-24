<?php

//special variable in php example is the $_POST that we have been using. The way it is writtenis for us for have dollar sign followed by an underscore and capital letter eg $_EKITI (not a superglobals just using as an example). Please note that when you pass things you named yourself it can be small letter however researved words (keywords )  are caps.

echo $_SERVER['SERVER_NAME'] . '<br/>';
echo $_SERVER['REQUEST_METHOD'] . '<br/>';
echo $_SERVER['SCRIPT_FILENAME'] . '<br/>';
echo $_SERVER['PHP_SELF'] . '<br/>';

//NEXT SESSION AND COOKIES SUPERGLOBAL
