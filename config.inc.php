<?php
session_start();
$servername = "ec2-54-235-220-220.compute-1.amazonaws.com";
$username = "tqcldbjguvavxn";
$password = "d044dc5d51b0c73f3558f79494e3a3070793b1a30479ed2b85da0aa49659bf7f";
$dbname = "d1todkffj2lu9q";
$port	= "5432";

try {
    $conn = new PDO("pgsql:host=$servername;dbname=$dbname", $username, $password, $port);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }


    // $dbopts = parse_url(getenv($servername));
    // $app->register(new Herrera\Pdo\PdoServiceProvider(),
    //                array(
    //                    'pdo.dsn' => 'pgsql:dbname='.ltrim($dbopts["path"],'/').';host='.$dbopts["host"] . ';port=' . $dbopts["port"],
    //                    'pdo.username' => $dbopts["user"],
    //                    'pdo.password' => $dbopts["pass"]
    //                )
    // );

?>