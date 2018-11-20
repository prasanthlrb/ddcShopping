@extends('vendor.include.app')
@section('content')
<div class="app-content content">
        <div class="content-wrapper">
          <div class="content-body">
              <div class="row">
<div class="col-lg-6 col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Orders</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <ul class="nav flex-column wrap-border">              
                <li class="nav-item">
                  <a class="nav-link active"><i class="la la-caret-right"></i><i class="la la-heart6 float-right"></i> Sales by date</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link"><i class="la la-caret-right"></i><i class="la la-heart6 float-right"></i> Sales by Product</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link"><i class="la la-caret-right"></i><i class="la la-heart6 float-right"></i> Sales by category</a>
                </li>                
              </ul>
            </div>
          </div>
        </div>
      </div>
<div class="col-lg-6 col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Products</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <ul class="nav flex-column wrap-border">              
                <li class="nav-item">
                  <a class="nav-link active"><i class="la la-caret-right"></i><i class="la la-heart6 float-right"></i> Product Stock</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
              </div>
          </div>
        </div>
</div>
      @endsection