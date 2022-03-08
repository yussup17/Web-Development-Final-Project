<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OUR SHOP HOME</title>
    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

</head>
<body>
     <div class="row">
         <div class="col-4"></div>
      <div class="col-4">
          <h1 class="text-info text-center">eMobilis Students'Center</h1>
          <form action="product_add_handler.php" class="was-validated"method="post">
              <div class="form-group">
                  <label for="pname">Product name:</label>
                  <input type="text" class="form-control" id="pname" placeholder="Enter product name" name="pname" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group">
                  <label for="qtty">Quantity:</label>
                  <input type="number" class="form-control" id="qtty" placeholder="Enter quantity" name="qtty" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group">
                  <label for="Price">Price:</label>
                  <input type="text" class="form-control" id="price" placeholder="Enter price" name="price" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
              </div>


             <input type="submit"name="btn_submit"value="submit"class="btn btn-outline-info btn-block">
              <a href="product.php"class="btn btn-outline-success btn-block">View products</a>
              <input type="reset"value="Clear"class="btn btn-outline-secondary btn-block">
          </form>
          <div class="col-4">
</div>
     </div>
</body>
</html>
