<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>
<head>

    <link rel="stylesheet" href="style.css">
    <title>CRUD PABW</title>

</head>

<body>

    <div class="container">
        <h3>UTS PABW CRUD</h3><br>
        <table align="center">
            <tr>
                <th>Nama</th> <th>No. Telp</th> <th>Email</th> <th>Aksi</th>
            </tr>
            <?php  
                while($user_data = mysqli_fetch_array($result)) {         
                    echo "<tr>";
                    echo "<td>".$user_data['name']."</td>";
                    echo "<td>".$user_data['mobile']."</td>";
                    echo "<td>".$user_data['email']."</td>";    
                    echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
                }
            ?>
        </table>
        <br/><br/><a href="add.php" class="add-data">Tambah data</a>

    </div>


</body>
</html>