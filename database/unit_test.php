<?php
require("Database.php");
$db = new Database();

// case 1 : Inserting data using valid SQL insert command
// $result = $db->execute("INSERT INTO tbuser (name, age, address,email) 
//             VALUES ('John LLoyd', 21, 'Minglanilla', 'mayol@m.com')");
// echo "Case 1: Result ".$result;

// case 2 : Updating data using valid SQL update command
// $result = $db->execute("UPDATE tbuser 
//         SET name = 'Benjamin', age = 17, address = 'Naga', email = 'Banjamin@b.com'
//         WHERE id = 1 ");
// echo "Case 2: Result ".$result;

// case 3 : Extracting data using valid SQL select command.
// $result = $db->execute("SELECT * FROM tbuser ");
// echo "Case 3: Result ".$result;

// case 4 : Deleting data using valid SQL delete command.
// $result = $db->execute("DELETE FROM tbuser WHERE id = 1 ");
// echo "Case 4: Result ".$result;

// case 5 : Inserting data using invalid SQL insert command.
// $result = $db->execute("INSERT INTO tbuse (name, age, address,email) 
//             VALUES ('John LLoyd', 21, 'Minglanilla', 'mayol@m.com')");
// echo "Case 5: Result ".$result;
// error : tbuser

// case 6 : Updating data using invalid SQL update command.
// $result = $db->execute("UPDATE tbuse 
//         SET name = 'Benjamin', age = 17, address = 'Naga', email = 'Banjamin@b.com'
//         WHERE id = 1 ");
// echo "Case 6: Result ".$result;
// error : tbuser

// case 7 : Extracting data using invalid SQL select command.
// $result = $db->execute("SELECT * FROM tbuse ");
// echo "Case 7: Result ".$result;
// error : tbuser

// case 8 : Deleting data using invalid SQL delete command.
$result = $db->execute("DELETE FROM tbuse WHERE id = 1 ");
echo "Case 8: Result ".$result;
// error : tbuser
?>