<?php
/**
 * Created by IntelliJ IDEA.
 * User: s.hitipeuw
 * Date: 2019-01-08
 * Time: 20:44
 */

// SELECT
//1. Connectie
$dbc = new PDO('mysql:host=localhost;dbname=Security', 'root', 'root');

//2. Statement (Named placeholders)
$stmt = $dbc->prepare("SELECT * FROM users WHERE username = :username");
//$stmt = $dbc->prepare("SELECT * FROM users");

// 3. Parameter binding
$stmt->bindParam('username', $username);

// 4. Waarden in variabelen plaatsen
$username = 'Unknown';

// 5. Execute
$stmt->execute() or die('Error select after PDQ');

// 6. WHILE-LOOP
while ($row = $stmt->fetch()) {
    echo $row['userid'] . ' ' . $row['username'] . '<br>';
}

// INSERT
// Prepare (positional placeholder)
$stmt = $dbc->prepare("INSERT INTO users VALUES (?, ?, ?)");
// Bind
$stmt->bindParam(1, $userid);
$stmt->bindParam(2, $username);
$stmt->bindParam(3, $password);

// Waarden
$userid = 0;
$username = 'Unknown';
$password = '123';

//$stmt->execute() or die ('Error insert after PDO');

// Prepare (named placeholder)
$stmt = $dbc->prepare("INSERT INTO users VALUES (:userid, :username, :password)");
// Bind
$stmt->bindParam(':userid', $userid);
$stmt->bindParam(':username', $username);
$stmt->bindParam('password', $password);

// Waarden
$userid = 0;
$username = 'Named placeholder';
$password = '123';

//$stmt->execute() or die ('Error insert after PDO');


$stmt = null;
$dbc = null;