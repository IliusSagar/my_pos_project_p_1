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
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">View Customer</h3></div>
                                    <div class="panel-body">
                                        
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Name</label>
                                                <p>{{ $single->name }}</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Email</label>
                                                <p>{{ $single->email }}</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Phone</label>
                                                <p>{{ $single->phone }}</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Address</label>
                                                <p>{{ $single->address }}</p>
                                            </div>
                                         
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">NID NO.</label>
                                                
                                                 @if($single->nid_no == NULL)
		                                         NONE
		                                         @else
		                                         	<p>{{ $single->nid_no }}</p>
		                                         @endif
                                            </div>

                                            
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">City</label>
                                                <p>{{ $single->city }}</p>
                                            </div>
                                            <div class="form-group">
                                            	<img style="height: 80px; width: 80px;" src="{{ URL::to($single->photo) }}">
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