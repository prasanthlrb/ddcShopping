@extends('admin.app')
@section('extra-css')
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/datatables.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/extensions/buttons.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/icheck/icheck.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/toggle/switchery.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/switch.css">
@endsection
@section('section')
<div class="content-wrapper">

    <div class="content-body">
     
   
<section id="column-selectors">
    <div class="row">
      <div class="col-12">
        
        <div class="card">
          <div class="card-header">
            
                <button id="open_model" data-backdrop="false" class="btn btn-success round btn-glow px-2" data-toggle="modal">Create Role</button>
         
            <div class="heading-elements">
               
              <ul class="list-inline mb-0">
                
                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                
              </ul>
            </div>
          </div>
          <div class="card-content collapse show">
            <div class="card-body card-dashboard">
             
              <table class="table table-striped table-bordered dataex-html5-selectors">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Role</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                @php ($x = 0) @endphp
                @foreach($role as $row)
                @php $x++ @endphp
                  <tr>
                    <td>{{$x}}</td>
                    <td>{{$row->role_name}}</td>
                    <td class="text-center" onclick="Edit({{$row->id}})"><i class="ft-edit"></i></td>
                    <td class="text-center" onclick="Delete({{$row->id}})"><i class="ft-trash-2"></i></td>
                  </tr>
                @endforeach 
                 
                </tbody>
                <tfoot>
                  <tr>
                    <th>S.No</th>
                    <th>Role</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> 
</div>
    </div>
  </div>
<script src="lc_switch.js" type="text/javascript"></script>
<link rel="stylesheet" href="lc_switch.css">
  <div class="modal fade text-left" id="role_model" tabindex="-1" role="dialog" aria-labelledby="myModalLabel8"
  aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header bg-primary white">
          <h4 class="modal-title white" id="myModalLabel8">Create Role</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="role_form" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id">
        <div class="modal-body">
          <div class="form-group row">
            <label class="col-md-3 label-control" for="Role">Role</label>
            <div class="col-md-6">
              <input type="text" id="role_name" class="form-control" placeholder="Role Name" name="role_name">
            </div>
          </div>
          
          <div class="form-group">
            <label>Select Crediencial :</label>
            <div class="row">
              <div class="col-md-4">
                  <div class="dropdown-item">
                    <input type="checkbox" name="vendor" id="vendor" class="switchery-xs" />
                    <label for="switchery4" class="card-title ml-1">vendor</label>
                  </div>
              </div>
              <div class="col-md-4">
                <div class="dropdown-item">
                  <input type="checkbox" name="vendor_edit_delete" id="vendor_edit_delete" class="switchery-xs" />
                  <label for="switchery4" class="card-title ml-1">vendor edit & delete</label>
                </div>
              </div>
              <div class="col-md-4">
                  <div class="dropdown-item">
                      <input type="checkbox" name="customer" id="customer" class="switchery-xs" />
                      <label for="switchery4" class="card-title ml-1">Customer</label>
                    </div>
                </div>
              <div class="col-md-4">
                  <div class="dropdown-item">
                      <input type="checkbox" name="customer_edit_delete" id="customer_edit_delete" class="switchery-xs" />
                      <label for="switchery4" class="card-title ml-1">Customer edit & delete</label>
                    </div>
                </div>
              <div class="col-md-4">
                  <div class="dropdown-item">
                      <input type="checkbox" name="role" id="role" class="switchery-xs" />
                      <label for="switchery4" class="card-title ml-1">Role</label>
                    </div>
                </div>

              <div class="col-md-4">
                  <div class="dropdown-item">
                      <input type="checkbox" name="role_edit_delete" id="role_edit_delete" class="switchery-xs" />
                      <label for="switchery4" class="card-title ml-1">Role edit & delete</label>
                    </div>
                </div>
              <div class="col-md-4">
                  <div class="dropdown-item">
                      <input type="checkbox" name="category" id="category" class="switchery-xs" />
                      <label for="switchery4" class="card-title ml-1">Category</label>
                    </div>
                </div>
              <div class="col-md-4">
                  <div class="dropdown-item">
                      <input type="checkbox" name="category_edit_delete" id="category_edit_delete" class="switchery-xs" />
                      <label for="switchery4" class="card-title ml-1">Category edit & delete</label>
                    </div>
                </div>
              <div class="col-md-4">
                  <div class="dropdown-item">
                      <input type="checkbox" name="subcategory" id="subcategory" class="switchery-xs" />
                      <label for="switchery4" class="card-title ml-1">SubCategory</label>
                    </div>
                </div>
              <div class="col-md-4">
                  <div class="dropdown-item">
                      <input type="checkbox" name="subcategory_edit_delete" id="subcategory_edit_delete" class="switchery-xs" />
                      <label for="switchery4" class="card-title ml-1">SubCategory edit & delete</label>
                    </div>
                </div>
              <div class="col-md-4">
                  <div class="dropdown-item">
                      <input type="checkbox" name="tag" id="tag" class="switchery-xs" />
                      <label for="switchery4" class="card-title ml-1">Tag</label>
                    </div>
                </div>
              <div class="col-md-4">
                  <div class="dropdown-item">
                      <input type="checkbox" name="tag_edit_delete" id="tag_edit_delete" class="switchery-xs" />
                      <label for="switchery4" class="card-title ml-1">Tag edit & delete</label>
                    </div>
                </div>
              <div class="col-md-4">
                  <div class="dropdown-item">
                      <input type="checkbox" name="coupon" id="coupon" class="switchery-xs" />
                      <label for="switchery4" class="card-title ml-1">Coupon</label>
                    </div>
                </div>
              <div class="col-md-4">
                  <div class="dropdown-item">
                      <input type="checkbox" name="coupon_edit_delete" id="coupon_edit_delete" class="switchery-xs" />
                      <label for="switchery4" class="card-title ml-1">Coupon edit & delete</label>
                    </div>
                </div>
              <div class="col-md-4">
                  <div class="dropdown-item">
                      <input type="checkbox" name="orders" id="orders" class="switchery-xs" />
                      <label for="switchery4" class="card-title ml-1">Orders</label>
                    </div>
                </div>
              <div class="col-md-4">
                  <div class="dropdown-item">
                      <input type="checkbox" name="orders_edit_delete" id="orders_edit_delete" class="switchery-xs" />
                      <label for="switchery4" class="card-title ml-1">Orders edit & delete</label>
                    </div>
                </div>
              <div class="col-md-4">
                  <div class="dropdown-item">
                      <input type="checkbox" name="products" id="products" class="switchery-xs" />
                      <label for="switchery4" class="card-title ml-1">Products</label>
                    </div>
                </div>
              <div class="col-md-4">
                  <div class="dropdown-item">
                      <input type="checkbox" name="products_edit_delete" id="products_edit_delete" class="switchery-xs" />
                      <label for="switchery4" class="card-title ml-1">Products edit & delete</label>
                    </div>
                </div>
              <div class="col-md-4">
                  <div class="dropdown-item">
                      <input type="checkbox" name="settings" id="settings" class="switchery-xs" />
                      <label for="switchery4" class="card-title ml-1">Settings</label>
                    </div>
                </div>
              <div class="col-md-4">
                  <div class="dropdown-item">
                      <input type="checkbox" name="reports" id="reports" class="switchery-xs" />
                      <label for="switchery4" class="card-title ml-1">Reports</label>
                    </div>
                </div>

              </div>
          </div>
        </div>
        </form>
        <div class="modal-footer">
          <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
          <button onclick="Save()" type="button" class="btn btn-outline-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('extra-js')

<script src="../../../app-assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script>
  <script src="../../../app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js"
  type="text/javascript"></script>
  <script src="../../../app-assets/vendors/js/tables/datatable/buttons.bootstrap4.min.js"
  type="text/javascript"></script>
  <script src="../../../app-assets/vendors/js/tables/jszip.min.js" type="text/javascript"></script>
  <script src="../../../app-assets/vendors/js/tables/pdfmake.min.js" type="text/javascript"></script>
  <script src="../../../app-assets/vendors/js/tables/vfs_fonts.js" type="text/javascript"></script>
  <script src="../../../app-assets/vendors/js/tables/buttons.html5.min.js" type="text/javascript"></script>
  <script src="../../../app-assets/vendors/js/tables/buttons.print.min.js" type="text/javascript"></script>
  <script src="../../../app-assets/vendors/js/tables/buttons.colVis.min.js" type="text/javascript"></script>
  <script src="../../../app-assets/js/scripts/tables/datatables-extensions/datatable-button/datatable-html5.js"
  type="text/javascript"></script>

  <script src="../../../app-assets/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
  <script src="../../../app-assets/vendors/js/forms/toggle/switchery.min.js" type="text/javascript"></script>
  <script src="../../../app-assets/js/scripts/dropdowns/dropdowns.js" type="text/javascript"></script>
  <script>

  var action_type;
  $('#open_model').click(function(){
    $('#role_model').modal('show');
    action_type = 1;
    $('#saveButton').text('Save');
    $('#myModalLabel8').text('Create role');
    $("#role_form")[0].reset();

$.each([ 'vendor', 'vendor_edit_delete','customer','customer_edit_delete','role','role_edit_delete','category','category_edit_delete','subcategory','subcategory_edit_delete','tag','tag_edit_delete','coupon','coupon_edit_delete','orders','orders_edit_delete','products','products_edit_delete','settings','reports' ], function( index, value ) {

  if ($('#'+value)[0].checked){ 
      $('#'+value).trigger('click').removeAttr("checked"); 
    }else{ 
      // nothing, already off
  }

});


  })
    function Save(){
      var formData = new FormData($('#role_form')[0]);
      if(action_type == 1){

        $.ajax({
                url : '/admin/roleSave',
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                dataType: "JSON",
                success: function(data)
                {
                  console.log(data);                
                  $("#role_form")[0].reset();
                  $('#role_model').modal('hide');
                  $('.table').load(location.href+' .table');
                  toastr.success('Category Store Successfully', 'Successfully Save');
                },error: function (data, errorThrown) {
          var errorData = data.responseJSON.errors;
            //console.log(errorData);
            //console.log(Object.keys(errorData).length);
            $.each(errorData, function(i, obj) {
              //console.log(obj[0]);
              //console.log(i);  
              toastr.error(obj[0]);
          });

                }

        });
      }else{
        $.ajax({
          url : '/admin/roleUpdate',
          type: "POST",
          data: formData,
          contentType: false,
          processData: false,
          dataType: "JSON",
          success: function(data)
                {
                  console.log(data);                
                  $("#role_form")[0].reset();
                  $('#role_model').modal('hide');
                  $('.table').load(location.href+' .table');
                  toastr.success('Category Store Successfully', 'Successfully Updated');
                },error: function (data, errorThrown) {
          var errorData = data.responseJSON.errors;
            //console.log(errorData);
            //console.log(Object.keys(errorData).length);
            $.each(errorData, function(i, obj) {
              //console.log(obj[0]);
              //console.log(i);  
              toastr.error(obj[0]);
          });

                }
      });
      }
      
    }

    function Edit(id){
      
      $.ajax({
        url : '/admin/roleEdit/'+id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
          $('#myModalLabel8').text('Update role');
          $('#saveButton').text('Save Change');
          $('input[name=role_name]').val(data.role_name);

$.each([ 'vendor', 'vendor_edit_delete','customer','customer_edit_delete','role','role_edit_delete','category','category_edit_delete','subcategory','subcategory_edit_delete','tag','tag_edit_delete','coupon','coupon_edit_delete','orders','orders_edit_delete','products','products_edit_delete','settings','reports' ], function( index, value ) {

  if (data[value] == 'on'){ 
    if ($('#'+value)[0].checked){ 
      // nothing
    }else{
      $('#'+value).trigger('click').attr("checked", "checked"); 
    }
  }
  else{ 
    if ($('#'+value)[0].checked){ 
      $('#'+value).trigger('click').removeAttr("checked"); 
    }else{ 
      // nothing, already off
    }
  }

  //alert( index + ": " + value );
});
         
          $('input[name=id]').val(data.id);
          $('#role_model').modal('show');
          action_type = 2;
        }
      });
    }
    
  function Delete(id){
    var r = confirm("Are you sure");
    if (r == true) {
      $.ajax({
        url : '/admin/roleDelete/'+id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
          toastr.success('role Delete Successfully', 'Successfully Delete');
          $('.table').load(location.href+' .table');
        }
      });
    } 
  }
    
</script>
  


@endsection