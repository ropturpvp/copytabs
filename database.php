<?php
$app->get('/', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return config(getenv('DB_HOST'), getenv('DB_NAME'), getenv('DB_USER'), getenv('DB_PASS'));
});
config($host, $dbName, $user, $password)
  $DB = new PDO('mysql:host='.$host.';dbname='.$dbName.'', $user, $password);
  return $DB;
?>
