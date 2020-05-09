@extends('admin.layouts.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="header-icon">
                <i class="fa fa-users"></i>
            </div>
            <div class="header-title">
                <h1>Product</h1>
                <small>Product List</small>
            </div>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                            <div class="btn-group" id="buttonexport">
                                <a href="#">
                                    <h4>Add product</h4>
                                </a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                            <div class="btn-group">
                                <div class="buttonexport" id="buttonlist">
                                    <a class="btn btn-add" href="{{ route('product.create') }}"> <i
                                            class="fa fa-plus"></i> Add product
                                    </a>
                                </div>

                            </div>
                            @if (Session::has('mess'))
                                <div class="alert alert-danger" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                            aria-hidden="true">×</span></button>
                                    <strong>Ui!</strong> {{ session('mess') }}
                                </div>
                            @endif
                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                            <div class="table-responsive">
                                <table id="table_id" class="table table-bordered table-striped table-hover">
                                    <thead>
                                    <tr class="info">
                                        <th>Name</th>
                                        <th>Code</th>
                                        <th>Color</th>
                                        <th>Image</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $item)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->code }}</td>
                                            <td>{{ $item->color }}</td>
                                            <td>
                                                @if(!empty($item->image))
                                                    <img src="{{ asset('/upload/products/'. $item->image) }}"
                                                         alt="User Image" width="100px">
                                                @endif
                                            </td>
                                            <td>{{ $item->price }}</td>
                                            <td><span class="label-custom label label-default">Active</span></td>
                                            <td>
                                                <a type="button" class="btn btn-add btn-sm" data-toggle="modal"
                                                   data-target="#customer1"><i class="fa fa-pencil"></i></a>
                                                <a href="{{ url('admin/product/'. $item->id) }}" type="button"
                                                   class="btn btn-danger btn-sm" data-toggle="modal"
                                                   data-target="#customer2"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>

                                    @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- customer Modal1 -->
            <div class="modal fade" id="customer1" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h3><i class="fa fa-user m-r-5"></i> Update Customer</h3>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form-horizontal">
                                        <fieldset>
                                            <!-- Text input-->
                                            <div class="col-md-4 form-group">
                                                <label class="control-label">Customer Name:</label>
                                                <input type="text" placeholder="Customer Name" class="form-control">
                                            </div>
                                            <!-- Text input-->
                                            <div class="col-md-4 form-group">
                                                <label class="control-label">Email:</label>
                                                <input type="email" placeholder="Email" class="form-control">
                                            </div>
                                            <!-- Text input-->
                                            <div class="col-md-4 form-group">
                                                <label class="control-label">Mobile</label>
                                                <input type="number" placeholder="Mobile" class="form-control">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="control-label">Address</label><br>
                                                <textarea name="address" rows="3"></textarea>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="control-label">type</label>
                                                <input type="text" placeholder="type" class="form-control">
                                            </div>
                                            <div class="col-md-12 form-group user-form-group">
                                                <div class="pull-right">
                                                    <button type="button" class="btn btn-danger btn-sm">Cancel</button>
                                                    <button type="submit" class="btn btn-add btn-sm">Save</button>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <!-- Modal -->
            <!-- Customer Modal2 -->
            <div class="modal fade" id="customer2" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h3><i class="fa fa-user m-r-5"></i> Delete Customer</h3>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form-horizontal">
                                        <fieldset>
                                            <div class="col-md-12 form-group user-form-group">
                                                <label class="control-label">Delete Customer</label>
                                                <div class="pull-right">
                                                    <button type="button" class="btn btn-danger btn-sm">NO</button>
                                                    <button type="submit" class="btn btn-add btn-sm">YES</button>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
