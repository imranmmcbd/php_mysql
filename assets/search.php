<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>DRAC Payment Search</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php
                	include 'connect.php';
					$sql = "SELECT studentid, fullname, section, year,mobile, invoice, trxid FROM studentinfo";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
    				echo "<table>
    				<tr>
    				<th>Roll</th>
    				<th>Full Name</th>
    				<th>Section</th>
    				<th>Year</th>
    				<th>Mobile</th>
    				<th>Invoice</th>
    				<th>Trxid</th>
    				</tr>";
    				
    				// output data of each row
    				while($row = $result->fetch_assoc()) {
        			echo "<tr>
        			<td>".$row["studentid"]."</td>
        			<td>".$row["fullname"]."</td>
        			<td>".$row["section"]."</td>
        			<td>".$row["year"]."</td>
        			<td>".$row["mobile"]."</td>
        			<td>".$row["invoice"]."</td>
        			<td>".$row["trxid"]."</td>
        			</tr>";
   					 }
    				echo "</table>";
					} else {
    				echo "0 results";
					}
					$conn->close();
				?>
            </div>
        </div>
    </div>
    <!--============Script Link=========-->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
</body>

</html>