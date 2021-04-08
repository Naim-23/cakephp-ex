<?php

session_unset();
session_destroy();

header("location: http://cakephp-mysql-persistent-qmweblab.apps.okd.eecs.qmul.ac.uk/MP/PortfolioFrontPage.html");

exit();

?>
