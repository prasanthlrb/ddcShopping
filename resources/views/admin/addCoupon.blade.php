@extends('admin.app')
@section('extra-css')
<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/pickers/daterange/daterangepicker.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/pickers/pickadate/pickadate.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/pickers/daterange/daterange.css">
  @endsection
@section('section')
<div class="content-wrapper">
<div class="content-body">
        <section id="horizontal-form-layouts">
                <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                        <h4 class="card-title" id="horz-layout-basic">Coupon Generate</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                          <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                          
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>

                          </ul>
                        </div>
                      </div>
                      <form id="coupon_form" method="POST">
                      {{ csrf_field() }}
                      <input type="hidden" value="{{ Request::segment(3) }}" name="id" id="id">
                      <div class="card-content collpase show">
                        <div class="card-body">
                          <form class="form form-horizontal">
                            <div class="form-body">
                              
                              <h4 class="form-section"><i class="ft-clipboard"></i> Coupons</h4>
                              <div class="form-group row">
                                <label class="col-md-3 label-control" for="projectinput5">Coupon Code</label>
                                <div class="col-md-9">
                                  <input type="text" class="form-control" placeholder="Enter your coupon code"
                                  name="coupon_code" id="coupon_code">
                                </div>
                              </div>
                                                            
                              <div class="form-group row">
                                <label class="col-md-3 label-control" for="projectinput9">Description</label>
                                <div class="col-md-9">
                                  <textarea rows="5" class="form-control" name="description" id="description" placeholder="Term & Conditions"></textarea>
                                </div>
                              </div>
                            
                         
                                    <h4 class="form-section"><i class="la la-eye"></i> Coupon Usage Range</h4>
                                    <div class="row">
                                      <div class="col-md-6">
                                        <div class="form-group row">
                                          <label class="col-md-3 label-control" for="userinput1">Start Date</label>
                                          <div class="input-group col-md-9">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text">
                                                    <span class="la la-calendar-o"></span>
                                                  </span>
                                                </div>
                                                <input name="start_date" id="start_date" type='text' class="form-control pickadate-select-year" placeholder="Select Year"
                                                />
                                              </div>
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="form-group row">
                                          <label class="col-md-3 label-control" for="userinput2">Expire Date</label>
                                          <div class="input-group col-md-9">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text">
                                                    <span class="la la-calendar-o"></span>
                                                  </span>
                                                </div>
                                                <input name="end_date" id="end_date" type='text' class="form-control pickadate-select-year" placeholder="Select Year"
                                                />
                                              </div>
                                        </div>
                                      </div>
                                    </div>
                                    <h4 class="form-section"><i class="la la-eye"></i> General</h4>
                                    <div class="row">
                                      <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="projectinput7">Discount type</label>
                                              <div class="col-md-9">
                                                <select onchange="discounttype()" id="discount_type" name="discount_type" class="form-control">
                                                  <option value="0" selected="" disabled="">Select the Discount type</option>
                                                  <option value="1">Discount from product</option>
                                                  <option value="2">% Discount from product</option>
                                                  <option value="3">Discount from total cart</option>
                                                  <option value="4">% Discount from total cart</option>
                                                </select>
                                              </div>
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="form-group row">
                                          <label class="col-md-3 label-control" for="userinput2">Amount</label>
                                          <div class="col-md-9">
                                            <input type="text" id="amount" name="amount" class="form-control border-primary" placeholder="Enter the discount Amount"
                                           >
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div id="productshow" class="row">
                                      <div class="col-md-6">
                                        <div class="form-group row">
                                          <label class="col-md-3 label-control" for="userinput3">Select the Product</label>
                                          <div class="col-md-9">
                                            <select id="product_id" name="product_id" class="form-control">
                                          <option value="none" selected="" disabled="">Select one</option>
                                          @foreach ($product as $product1)
                                            <option value="{{$product1->id}}">{{$product1->product_name}}</option>
                                          @endforeach
                                        </select>
                                          </div>
                                        </div>
                                      </div>
                                 
                                    </div>
                                    <h4 class="form-section"><i class="ft-mail"></i> Usage Limits</h4>
                                    <div class="row">
                                      <div class="col-md-6">
                                        <div class="form-group row">
                                          <label class="col-md-3 label-control" for="userinput5">Usage limit per Coupons</label>
                                          <div class="col-md-9">
                                            <input class="form-control border-primary" type="text" placeholder="Enter coupon limit" id="limit_per_coupon" name="limit_per_coupon">
                                          </div>
                                        </div>
                                    </div>
                                        <div class="col-md-6">
                                        <div class="form-group row">
                                          <label class="col-md-3 label-control" for="userinput6">Usage limit per user</label>
                                          <div class="col-md-9">
                                            <input name="limit_per_user" id="limit_per_user" class="form-control border-primary" type="text" placeholder="enter per user limit">
                                          </div>
                                        </div>
                                    </div>
                                    </div>
                                  </div>
                            </form>
                            <div class="form-actions">
                              <button type="button" class="btn btn-warning mr-1">
                                <i class="ft-x"></i> Cancel
                              </button>
                              <button type="button" onclick="Save()" class="btn btn-primary">
                                <i class="la la-check-square-o"></i> Save
                              </button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
               
             
                
              </section> 
                
         
           
            
</div>
</div>

@endsection
@section('extra-js')
<script src="../../../app-assets/vendors/js/pickers/pickadate/picker.js" type="text/javascript"></script>
<script src="../../../app-assets/vendors/js/pickers/pickadate/picker.date.js" type="text/javascript"></script>
<script src="../../../app-assets/vendors/js/pickers/pickadate/picker.time.js" type="text/javascript"></script>
<script src="../../../app-assets/vendors/js/pickers/pickadate/legacy.js" type="text/javascript"></script>
<script src="../../../app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js"
type="text/javascript"></script>
<script src="../../../app-assets/vendors/js/pickers/daterange/daterangepicker.js"
type="text/javascript"></script>
<script src="../../../app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js"
type="text/javascript"></script>


<script>

$("#productshow").hide();
function discounttype(){
  var discount_type = $("#discount_type").val();
  if(discount_type == 1 || discount_type == 2){
    $("#productshow").show();
    $('input[name=product_id]').val('');
  }
  else{
    $("#productshow").hide();
  }
}

  var id = $("#id").val();

  $.ajax({
        url : '/admin/CouponEdit/'+id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
          $('input[name=coupon_code]').val(data.coupon_code);
          $('textarea[name=description]').val(data.description);
          $('input[name=start_date]').val(data.start_date);
          $('input[name=end_date]').val(data.end_date);
          $('select[name=discount_type]').val(data.discount_type);
          $('select[name=product_id]').val(data.product_id);
          $('input[name=amount]').val(data.amount);
          $('input[name=limit_per_user]').val(data.limit_per_user);
          $('input[name=limit_per_coupon]').val(data.limit_per_coupon);
          $('input[name=id]').val(data.id);

  if(data.discount_type == 1 || data.discount_type == 2){
    $("#productshow").show();
  }
  else{
    $("#productshow").hide();
  }

          $('#user_model').modal('show');
          action_type = 2;
        }
      });

  if(id==""){
    function Save(){
      var formData = new FormData($('#coupon_form')[0]);
      $.ajax({
          url : '/admin/CouponSave',
          type: "POST",
          data: formData,
          contentType: false,
          processData: false,
          dataType: "JSON",
          success: function(data)
          {
            console.log(data);                
            $("#coupon_form")[0].reset();
            //$('.table').load(location.href+' .table');
            toastr.success('Coupon Store Successfully', 'Successfully Save');
            window.location.href="/admin/coupon/";
          },
          error: function (data, errorThrown) {
            var errorData = data.responseJSON.errors;
            $.each(errorData, function(i, obj) {
              toastr.error(obj[0]);
            });
          }
      });
    }
  }
  else{

      function Save(){
      var formData = new FormData($('#coupon_form')[0]);
      $.ajax({
          url : '/admin/CouponUpdate',
          type: "POST",
          data: formData,
          contentType: false,
          processData: false,
          dataType: "JSON",
          success: function(data)
          {
            console.log(data);                
            $("#coupon_form")[0].reset();
            //$('.table').load(location.href+' .table');
            toastr.success('Coupon Updated Successfully', 'Successfully Update');
            window.location.href="/admin/coupon/";
          },
          error: function (data, errorThrown) {
            var errorData = data.responseJSON.errors;
            $.each(errorData, function(i, obj) {
              toastr.error(obj[0]);
            });
          }
      });
    }


  }




    
</script>

@endsection