<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>DRAC Payment Module</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
    <div class="container">
    	<h4>DRAC PAYMENT SYSTEM</h4>
    	<hr>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form">
        	
            <form action="assets/insert.php" method="POST" class="payment_form">
                <div class="form-group">
                    <label for="studentid">Roll/Student ID</label>
                    <input type="text" class="form-control" name="studentid">
                </div>
                <div class="form-group">
                    <label for="fullname">Full Name</label>
                    <input type="text" class="form-control" name="fullname">
                </div>
                <div class="form-group">
                    <label for="section">Select Section</label>
                    <select class="form-control" name="section">
                        <option>General</option>
                        <option>BM</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="year">Select Year</label>
                    <select class="form-control" name="year">
                        <option>First Year</option>
                        <option>Second Year</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="mobile">Mobile No</label>
                    <input type="number" class="form-control" name="mobile">
                </div>
                <div class="form-group">
                    <label for="invoice">Invoice Number</label>
                    <input type="number" class="form-control" name="invoice">
                </div>
                <div class="form-group">
                    <label for="trxid">Transaction ID</label>
                    <input type="text" class="form-control" name="trxid">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                <span class="text-danger">&#9734;
				Before submit please review your informations.</span>
            </form>
        </div>
    </div>
    <!--============Script Link=========-->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-3.3.1.min.js"></script>
</body>

</html>