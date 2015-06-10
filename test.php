<?php

namespace CONTACTUS;
use PHPMailer;
use Mysqli;

require_once "components/header.php";
require_once "php/config.php";

$config = new Config;
print_r($config);

print_r($config->emailUsername);

?>

<h1>Test</h1>

<?php require 'components/footer.php'; ?>
