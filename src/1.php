  <?php
   // define variables and include files
   $servername = "localhost";
   $username = "username";
   $password = "password";
   $dbname = "myDBPDO";
   // create PDO object
   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
   // set the PDO error mode to exception
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // prepare sql and bind parameters
   $stmt = $conn->prepare("SELECT * FROM MyGuests");
   $stmt->execute();
   // set the resulting array to associative
   while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
       echo "id: " . $row["id"]. " - Name: " . $row["firstname"]." ".$row["lastname"];
   }
  ?>