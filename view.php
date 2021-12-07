<?php 
require_once('connect.php');
echo "<script>alert ('You are in view page')</script>";

$query = "SELECT * FROM users_tbl";

$result = $con->query($query);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Recorded List</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h3>Records of Students</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                        <th>Birthdate</th>
                        <th>Address</th>
                        <th>Registration Date</th>
                    </tr>
                </thead>
        </div>
    </body>

<?php
if($result->num_rows > 0 ){
    while($row = $result ->fetch_assoc()){ 
    ?>
    <tr>
        <td><?php echo $row['first_name']?></td>
        <td><?php echo $row['last_name']?></td>
        <td><?php echo $row['date_of_birth']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['addre']?></td>
        <td><?php echo $row['regs_date']?></td>
        <td><a class="btn btn-info" href="">Update the List</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id'];?>">Delete the List</a></td>
    </tr>
    <?php
    }
}
?>
</table>
</html>