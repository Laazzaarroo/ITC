<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/37f2a30c31.js" crossorigin="anonymous"></script>
</head>
<body>
        <div class="bg-primary p-3"> 
            <h1 class="text-white"><b>InkLab PRINTING SERVICES</b></h1>
        </div>
    <div class="px-4 pt-1 pb-2 bg-info rounded-bottom ">
        <div class="fs-3 float-righ d-flex justify-content-between align-items-center">
            <b>Products</b>
            <span>
                <a class="btn btn-light rounded-3 btn-sm" data-bs-toggle="modal" data-bs-target="#product">
                    <span class="d-inline d-md-none"> <i
                            class="fa-solid fa-plus"></i></span>
                    <span class="d-none d-md-inline"><i class="fa-solid fa-plus fa-beat-fade"></i></span> </a>
                <a class="btn btn-light rounded-3 btn-sm" data-bs-toggle="modal" data-bs-target="#category">
                <i class="fa-solid fa-bars fa-beat-fade"></i>
                    <span class="d-none d-md-inline"></span>
                </a>
            </span>
        </div> 
    </div>

        
        <!-- The Modal -->  
        <div class="modal fade" id="product">
     <div class="modal-dialog">
        <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">Add New Product</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
        <label for="email">Enter Product Name</label>
        <input type="email" class="form-control mb-2" id="email" placeholder="Product Name" name="email">
        <label for="email">Enter Categ</label>
        <select class="form-control form-select mb-2">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
        </select>
        <label for="comment">Description</label>
        <textarea class="form-control" rows="2" id="comment" placeholder="Enter Description" name="text"></textarea>
        <div class="mt-1">
        <label for="email">Price</label>
        <div class="input-group">
    <span class="input-group-text">₱</span>
    <input type="text" class="form-control">
</div>
<label for="email" class="mt-1">Quantity</label>
        <input type="email" class="form-control mb-2" id="email" name="email">
  </div>
        </div>
        

        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-success " data-bs-dismiss="modal">Create</button>
        </div>

        </div>
    </div>
    </div>

    <div class="modal fade" id="category">
    <div class="modal-dialog">
        <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">Category</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <!-- Modal body -->
        <div class="input-group mb-3 p-2">
        <input type="text" class="form-control" placeholder="Input Category">
        <button class="btn btn-success" type="submit">Create</button> 


        <div class="container">
        <div class="container mt-1 mb-1">
        <ul class="list-group">
            <li class="list-group-item">First item</li>
            <li class="list-group-item">Second item</li>
            <li class="list-group-item">Third item</li>
        </ul>
        </div>
        <!-- Modal footer -->

            <button type="button" class="btn btn-danger flex-row-reverse" data-bs-dismiss="modal">Close</button>

        </div>
        </div>
    </div>
    </div>


        
</body>
</html>