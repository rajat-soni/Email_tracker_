<?php

include('../header/header.inc.php');?>

<main id="main" class="main">

<div class="pagetitle">


  <h1>Blank Page</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Pages</li>
      <li class="breadcrumb-item active">Blank</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div id = "msg_alert"  class="alert alert-danger text-right" style = "display: none;"></div>
<div class="card">
        <div class="card-header">Add Category </div>


        <div class="card-body">

                <div class="row mb-3 mt-4">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Category Name</label>
                  <div class="col-sm-10">
                  <input type = "text" class="form-control" name ="cate_name" id ="cate_name" placeholder="category name">
                  <div class="text-danger"  id = "cate_error"></div>
                  </div>
                 
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Category type</label>
                  <div class="col-sm-10">
                  <select  class="form-control" name = "cate_type" id = "cate_type">
                      <option value = "">select one</option>
                      <option value = "clothes">clothes</option>
                      <option value = "Shoes">Shoes</option>
                      
                  </select>
                  <div class="text-danger"  id = "cate_type_error"></div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="" class="col-sm-2 col-form-label">Category Status</label>
                  <div class="col-sm-10">
                  <select  class="form-control" name = "cate_status" id = "cate_status">
                      <option value = "">select one</option>
                      <option value = "1">1</option>
                      <option value = "2">2</option>

                  </select>
                  <div class="text-danger"  id = "cate_status_error"></div>
                  </div>
                </div>
               
                <div class="text-left">
                  <button type="submit" class="btn btn-primary" id = "
                  " onclick = "formSubmit()">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End Horizontal Form -->
            </div>
            <div class="card-footer"></div>

</div>
 

</main><!-- End #main -->
<?php
include('../footer/footer.inc.php');

?>