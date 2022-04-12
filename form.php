<!DOCTYPE html>
<html>
  <head>
    <title>Data Entry Form</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css" />
  </head>
  <body>
    <div class="container"  >
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-success">
          <div class="panel-heading text-center bg-success text-white">
            <h1 class="text-white">Data Entry Form</h1>
          </div>
          <div class="panel-body">
            <form action="insert.php" method="post">
              <div class="form-group">
                <label for="text">InvoiceNo</label>
                <input
                  type="text"
                  class="form-control"
                  id="invoiceno"
                  name="invoice"
               
                />
              </div>
              <div class="form-group">
                <label for="text">StockCode</label>
                <input
                  type="text"
                  class="form-control"
                  id="stockcode"
                  name="stock"
                  
                />
              </div>
              <div class="form-group">
                <label for="text">Description</label>
                <input
                  type="text"
                  class="form-control"
                  id="desc"
                  name="desc"
                 
                />
              </div>
              <div class="form-group">
                <label for="text">Quantity</label>
                <input
                  type="text"
                  class="form-control"
                  id="quantity"
                  name="quantity"
                 
                />
              </div>
              <!-- <div class="form-group">
                <label for="text">Quantity</label>
                <input
                  type="text"
                  class="form-control"
                  id="quantity"
                  name="quantity"
                 
                />
              </div> -->
              <div class="form-group">
                <label for="text">InvoiceDate</label>
               

                <input
                  value="2019-07-01"
                  type="date"
                  class="form-control"
                  id="dates"
                  name="dates"
                 
                />
              </div>
              <div class="form-group">
                <label for="text">UnitPrice</label>
                <input
                  type="text"
                  class="form-control"
                  id="number"
                  name="unit"
               
                />
              </div>
              <div class="form-group">
                <label for="customer">Customer</label>
                <input
                  type="text"
                  class="form-control"
                  id="customer"
                  name="customer"
                  
                />
                <div class="form-group">
                  <label for="country">Country</label >
                  <div>
                    <select name="country_code" class="form_group" >
                    <option selected hidden value="">Select country</option>
                    <option value="Africa">Africa</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="United States">United state</option>
                    <option value="France">France</option>
                    <option value="Asia">Asia</option>
                    <option value="Britain">Britain</option>
                   </select> 
                  </div>
                </div>
              </div>
              <input type="submit" class="btn btn-success btn-center" />
            </form>
          </div>
         
        </div>
      </div>
    </div>
    
  </body>
</html>











