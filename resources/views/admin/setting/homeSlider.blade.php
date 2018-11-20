@extends('admin.app')
@section('extra-css')
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/datatables.min.css">
 
  
@endsection
@section('section')
<div class="content-wrapper">

    <div class="content-body">
     
   
<section id="column-selectors">
    <div class="row">
      <div class="col-12">
        
        <div class="card">
          <div class="card-header">
            
                <button id="open_model" data-backdrop="false" class="btn btn-success round btn-glow px-2" data-toggle="modal">Create Slider</button>
            
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
             
              <table class="table table-striped table-bordered zero-configuration">
                <thead>
                  <tr>
                    <th>S No</th>
                    <th>Title</th>                   
                    <th>Slider Image</th>                   
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($home_slider as $row)
                  <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->title}}</td>
                    <td><img style="width: 200px;height:50px;" src="{{asset('upload_slider/').'/'.$row->image}}" alt=""></td>
                    
                    <td class="text-center" onclick="Edit({{$row->id}})">
                      @if($row->status == 0)
                      <i class="ft-check-circle text-success"></i>
                      @else
                      <i class="ft-slash text-danger"></i>
                      @endif
                    </td>
                    <td class="text-center" onclick="Edit({{$row->id}})"><i class="ft-edit"></i></td>
                    <td class="text-center" onclick="Delete({{$row->id}})"><i class="ft-trash-2"></i></td>
                  </tr>
                @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <th>S No</th>
                    <th>Title</th>                   
                    <th>Slider Image</th>                   
                    <th>Status</th>
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

  <div class="modal fade text-left" id="slider_model" tabindex="-1" role="dialog" aria-labelledby="myModalLabel8"
  aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-primary white">
          <h4 class="modal-title white" id="myModalLabel8">Create brand</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="slider_form" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="id">
        <div class="modal-body">
          <div class="form-group row">
            <label class="col-md-3 label-control">Title</label>
            <div class="col-md-9">
              <input type="text" class="form-control" placeholder="Enter your Title"
              name="title" id="title">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-3 label-control">Sub Title</label>
            <div class="col-md-9">
              <input type="text" class="form-control" placeholder="Enter your Sub Title"
              name="sub_title" id="sub_title">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-3 label-control">Price</label>
            <div class="col-md-9">
              <input type="text" class="form-control" placeholder="Enter your Price"
              name="price" id="price">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-3 label-control">Url</label>
            <div class="col-md-9">
              <input type="text" class="form-control" placeholder="Enter your Url"
              name="url" id="url">
            </div>
          </div>
          <div class="form-group row">
                <label class="col-md-3 label-control" for="projectinput6">Position</label>
                <div class="col-md-9">
                  <select id="position" name="position" class="form-control">
                    <option selected value="">Select</option>
                    <option value="1">Left</option>
                    <option value="2">Right</option>
                  
                  </select>
                </div>
              </div>
          <div class="form-group row">
            <label class="col-md-3 label-control" for="projectinput1">Slider Image</label>
            <div class="col-md-9">
              <input type="hidden" name="image1" id="image1">
              <input type="file" class="form-control" placeholder="Enter your Image"
              name="image" id="image">
            </div>
          </div>
          <div class="form-group row">
                <label class="col-md-3 label-control" for="projectinput6">Status</label>
                <div class="col-md-9">
                  <select name="status" class="form-control">
                    <option selected="" value="0">Active</option>
                    <option value="1">Deactive</option>
                  
                  </select>
                </div>
              </div>
          
        </div>
        </form>
        <div class="modal-footer">
          <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-outline-primary" onclick="Save()" id="saveButton">Save</button>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('extra-js')

<script src="../../../app-assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script>

 
  <script src="../../../app-assets/js/scripts/tables/datatables/datatable-basic.js"
  type="text/javascript"></script>
<script>
  var action_type;
  $('#open_model').click(function(){
    $('#slider_model').modal('show');
    $("#slider_form")[0].reset();
    action_type = 1;
    $('#saveButton').text('Save');
    $('#myModalLabel8').text('Create Slider');
  })
    function Save(){
      var formData = new FormData($('#slider_form')[0]);
      if(action_type == 1){

        $.ajax({
                url : '/admin/sliderSave',
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                dataType: "JSON",
                success: function(data)
                {                
                    $("#slider_form")[0].reset();
                    $('#slider_model').modal('hide');
                    $('.zero-configuration').load(location.href+' .zero-configuration');
                    toastr.success('Slider Store Successfully', 'Successfully Save');
                },error: function (data, errorThrown) {
                var errorData = data.responseJSON.errors;
                    $.each(errorData, function(i, obj) {
                        toastr.error(obj[0]);
                    });
                }
            });
      }else{
        $.ajax({
          url : '/admin/sliderUpdate',
          type: "POST",
          data: formData,
          contentType: false,
          processData: false,
          dataType: "JSON",
          success: function(data)
          {
                console.log(data);
                $("#slider_form")[0].reset();
                $('#slider_model').modal('hide');
                $('.zero-configuration').load(location.href+' .zero-configuration');
                toastr.success('Slider Update Successfully', 'Successfully Update');
          },error: function (data, errorThrown) {
          var errorData = data.responseJSON.errors;
            $.each(errorData, function(i, obj) {
              toastr.error(obj[0]);
            });
          }
      });
      }
      
    }

    function Edit(id){
      
      $.ajax({
        url : '/admin/sliderEdit/'+id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
          $('#myModalLabel8').text('Update Slider');
          $('#saveButton').text('Save Change');
          $('input[name=title]').val(data.title);
          $('input[name=image1]').val(data.image);
          $('input[name=sub_title]').val(data.sub_title);
          $('input[name=url]').val(data.url);
          $('input[name=price]').val(data.price);
          $('input[name=id]').val(id);
          $('select[name=status]').val(data.status);
          $('select[name=position]').val(data.position);
          $('#slider_model').modal('show');
          action_type = 2;
        }
      });
    }
     function Delete(id){
      var r = confirm("Are you sure");
      if (r == true) {
      $.ajax({
        url : '/admin/sliderDelete/'+id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
          toastr.success('Slider Delete Successfully', 'Successfully Delete');
          $('.zero-configuration').load(location.href+' .zero-configuration');
        }
      });
    } 
     }
    
</script>
@endsection