

<?php

// CODE FOR CREATING A DATABASE:
/*
$servername = "localhost";
$username = "root";
$password;

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();
*/
?>


<?php
// CODE TO CREATE A TABLE
$servername = "localhost";
$username = "root";
$password = "";
$database = "myDB";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}

/*
$sql = "CREATE TABLE `phptrip` ( `sno` INT(6) NOT NULL AUTO_INCREMENT , `fname` VARCHAR(50) NOT NULL ,`arname` VARCHAR(50) NOT NULL ,`asname` VARCHAR(50) NOT NULL , `dname` VARCHAR(50) NOT NULL ,`ryear` INT(4) NOT NULL , PRIMARY KEY (`sno`))";
$result = mysqli_query($conn, $sql);


if($result){
    echo "The table was created successfully!<br>";
}
else{
    echo "The table was not created successfully because of this error ---> ". mysqli_error($conn);
}
  */

  
//INSERT DATA INTO TABLE:

$sql = "INSERT INTO `phptrip` (,`fname`,`arname`,`asname`,`dname`,`ryear`) VALUES ('3_idiots', 'Aamir', 'Kareena', 'Rajkumar', '2009'),('Hera Pheri', 'Paresh Rawal', 'Tabu', 'Priyadarshan', '2000'),('Shang-chi', 'Simu Liu', 'Awkwafina', 'Destin Danieal', '2021'),('Munna Bhai M.B.B.S', 'Sanjay Dutt', 'Gracy Singh', 'Rajkumar', '2003')";

//CODE FOR DATA RETRIEVAL: 

$sql = "SELECT * FROM `phptrip`";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);
echo $num;
echo " records found in the DataBase<br>";
if($num> 0){
    echo "<table border='1'>

    <tr>
    
    <th>Film name</th>
    
    <th>actor name</th>
    
    <th>actress name</th>
    
    <th>director name</th>

    <th>release year</th>
    
    </tr>";


    while($row = mysqli_fetch_assoc($result)){
      
        
        echo "<tr>";

        echo "<td>" . $row['fname'] . "</td>";
      
        echo "<td>" . $row['arname'] . "</td>";
      
        echo "<td>" . $row['asname'] . "</td>";
      
        echo "<td>" . $row['dname'] . "</td>";
        echo "<td>" . $row['ryear'] . "</td>";
      
        echo "</tr>";
    }
}


?>

