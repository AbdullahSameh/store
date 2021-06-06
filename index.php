<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products Store</title>
  <link rel="stylesheet" href="./css/bootstrap.min.css">

</head>

<body onload="getProducts()">

  <div class="container my-5">

    <div class="product">
      <div class="row">
        <div class="col">
          <h3>Product List</h3>
        </div>
        <div class="col text-right">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary ml-auto" data-toggle="modal" data-target="#addProduct">
            Add Product
          </button>
        </div>
      </div>

      <div class="product-list mt-3">
        <div>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Product name</th>
                <th>Quantity in stock</th>
                <th>Price per item</th>
                <th>Datetime</th>
                <th>Total value</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody id="tbody">
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- Add Product modal -->
    <div class="modal fade" id="addProduct" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <form action method="POST" id="addProduct">
            <div class="modal-header">
              <h5 class="modal-title">Add Product</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="inputProductName">Product Name</label>
                <input type="text" class="form-control" id="inputProductName" name="name">
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputQuantity">Quantity in stock</label>
                  <input type="text" class="form-control" id="inputQuantity" name="quantity">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPrice">Price per item</label>
                  <input type="text" class="form-control" id="inputPrice" name="price">
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>


    <!-- Update Product modal -->
    <div class="modal fade" id="editProduct" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <form action method="POST" id="editProduct">
            <div class="modal-header">
              <h5 class="modal-title">Edit Product</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <input type="hidden" id="inputEditProductId" name="id">
              <div class="form-group">
                <label for="inputEditProductName">Product Name</label>
                <input type="text" class="form-control" id="inputEditProductName" name="name">
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEditQuantity">Quantity in stock</label>
                  <input type="text" class="form-control" id="inputEditQuantity" name="quantity">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputEditPrice">Price per item</label>
                  <input type="text" class="form-control" id="inputEditPrice" name="price">
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>


  </div>


  <script src="./js/jquery-3.5.1.slim.min.js"></script>
  <script src="./js/bootstrap.bundle.min.js"></script>
  <script src="./js/script.js"></script>
</body>

</html>