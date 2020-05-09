@extends('admin.layouts.master')

@section('content')
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="header-icon">
         <i class="fa fa-product-hunt"></i>
      </div>
      <div class="header-title">
         <h1>Add Product</h1>
         <small>Product list</small>
      </div>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="row">
         <!-- Form controls -->
         <div class="col-sm-12">
            <div class="panel panel-bd lobidrag">
               <div class="panel-heading">
                  <div class="btn-group" id="buttonlist"> 
                     <a class="btn btn-add " href="{{ route('product.index') }}">
                        <i class="fa fa-list"></i>  Product List </a>  
                     </div>
                  </div>
                  <div class="panel-body">
                      @if (Session::has('mess'))
                          <div class="alert alert-danger alert-dismissible" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                      aria-hidden="true">×</span></button>
                              <strong>Ui!</strong> {{ session('mess') }}
                          </div>
                      @endif
                     <form class="col-sm-6" action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                           <label>Product Name</label>
                           <input type="text" class="form-control" placeholder="Enter Product Name" name="product_name" required>
                        </div>
                        <div class="form-group">
                           <label>Product Code</label>
                           <input type="text" class="form-control" placeholder="Enter Product code" name="product_code" required>
                        </div>
                        <div class="form-group">
                           <label>Product Color</label>
                           <input type="text" class="form-control" placeholder="Enter Product color" name="product_color" required>
                        </div>
                        <div class="form-group">
                           <label>Product Description</label>
                           <textarea class="form-control" rows="3" name="product_des" required></textarea>
                        </div>
                        <div class="form-group">
                           <label>Product Price</label>
                           <input type="number" class="form-control" placeholder="Enter Price" name="product_price" required>
                        </div>
                        <div class="form-group">
                           <label>Picture upload</label>
                           <input type="file" name="picture">
                           <input type="hidden" name="old_picture">
                        </div>
                        
                        <div class="form-check">
                           <div class="reset-button">
                              <button class="btn btn-success">Save</button>
                           </div>
                        </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- /.content -->
      </div>
      @endsection
