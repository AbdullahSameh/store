/* #####################   Get All Product   ################### */

function getProducts() {
  const getProductsRequest = new XMLHttpRequest();

  getProductsRequest.onreadystatechange = function () {
    if (this.readyState === 4 && this.status === 200) {
      document.getElementById("tbody").innerHTML = this.responseText;
    }
  };

  getProductsRequest.open("GET", "./get_products.php", true);
  getProductsRequest.send();
}

/* #####################   Add New Product   ################### */

document.getElementById("addProduct").onsubmit = function addProduct(e) {
  e.preventDefault();
  var formData = new FormData();

  formData.append("name", document.getElementById("inputProductName").value);
  formData.append("quantity", document.getElementById("inputQuantity").value);
  formData.append("price", document.getElementById("inputPrice").value);

  const addProductsRequest = new XMLHttpRequest();

  addProductsRequest.onreadystatechange = function () {
    if (this.readyState === 4 && this.status === 200) {
      getProducts();
      $("#addProduct").modal("hide");
      document.getElementById("inputProductName").value = "";
      document.getElementById("inputQuantity").value = "";
      document.getElementById("inputPrice").value = "";
    }
  };

  addProductsRequest.open("POST", "./add_products.php");
  addProductsRequest.send(formData);
};

/* #####################   Edit Product   ################### */

function editProduct(e) {
  e.preventDefault();

  const id = e.currentTarget.dataset.id;

  const editProductsRequest = new XMLHttpRequest();

  editProductsRequest.onreadystatechange = function () {
    if (this.readyState === 4 && this.status === 200) {
      const product = JSON.parse(this.responseText);
      $("#editProduct").modal("show");

      document.getElementById("inputEditProductId").value = product.id;
      document.getElementById("inputEditProductName").value = product.name;
      document.getElementById("inputEditQuantity").value = product.quantity;
      document.getElementById("inputEditPrice").value = product.price;
    }
  };

  editProductsRequest.open("GET", `./edit_products.php?id=${id}`, true);
  editProductsRequest.send();
}

/* #####################   Update Product   ################### */

document.getElementById("editProduct").onsubmit = function updateProduct(e) {
  e.preventDefault();
  var formData = new FormData();

  formData.append("id", document.getElementById("inputEditProductId").value);
  formData.append(
    "name",
    document.getElementById("inputEditProductName").value
  );
  formData.append(
    "quantity",
    document.getElementById("inputEditQuantity").value
  );
  formData.append("price", document.getElementById("inputEditPrice").value);

  const addProductsRequest = new XMLHttpRequest();

  addProductsRequest.onreadystatechange = function () {
    if (this.readyState === 4 && this.status === 200) {
      getProducts();
      $("#editProduct").modal("hide");
      document.getElementById("inputEditProductId").value = "";
      document.getElementById("inputEditProductName").value = "";
      document.getElementById("inputEditQuantity").value = "";
      document.getElementById("inputEditPrice").value = "";
    }
  };

  addProductsRequest.open("POST", "./update_products.php");
  addProductsRequest.send(formData);
};
