@extends('layouts.app')

@section('content')

	<div class="content-page">
<div class="content">
              <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Welcome !</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">EAP</a></li>
                                    <li class="active">Software</li>
                                </ol>
                            </div>
                        </div>

                        <!-- Start Widget -->
                        <div class="row">
                            <!-- Basic example -->
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <div class="panel panel-primary">
                                    <div class="panel-heading"><h3 class="panel-title text-white">View Supplier</h3></div>
                                    <div class="panel-body">
                                        
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Name</label>
                                                <p>{{ $supplier->name }}</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Email</label>
                                                <p>{{ $supplier->email }}</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Phone</label>
                                                <p>{{ $supplier->phone }}</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Address</label>
                                                <p>{{ $supplier->address }}</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Type</label>
                                                <p>{{ $supplier->type }}</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Shop</label>
                                                <p>{{ $supplier->shop }}</p>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">City</label>
                                                <p>{{ $supplier->city }}</p>
                                            </div>
                                            <div class="form-group">
                                            	<img style="height: 80px; width: 80px;" src="{{ URL::to($supplier->photo) }}">
                                                <label for="exampleInputPassword1">Photo</label>
                                                
                                            </div>
                                                                                        
                                           
                                    
                                    </div><!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col-->


                        </div>
                    </div> <!-- container -->
                               
                </div> <!-- content -->
         </div>

         

@endsection