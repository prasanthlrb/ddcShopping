@extends('vendor.include.app')
@section('extra-css')
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
            
                <button id="open_model" data-backdrop="false" class="btn btn-success round btn-glow px-2" data-toggle="modal">Create Tag</button>
            
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
                    <th>Tag</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                 
                @php ($x = 0) @endphp
                @foreach($tag as $row)
                @php $x++ @endphp
                  <tr>
                    <td>{{$x}}</td>
                    <td>{{$row->tag}}</td>
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
                    <th>Tag</th>
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

  <div class="modal fade text-left" id="tag_model" tabindex="-1" role="dialog" aria-labelledby="myModalLabel8"
  aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-primary white">
          <h4 class="modal-title white" id="myModalLabel8">Create Tag</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="tag_form" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id">
        <div class="modal-body">
          <div class="form-group row">
            <label class="col-md-3 label-control" for="projectinput1">Tag Name</label>
            <div class="col-md-9">
              <input type="text" class="form-control" placeholder="Enter the Tag"
              name="tag" id="tag">
            </div>
          </div>
          <div class="form-group row">
                <label class="col-md-3 label-control" for="projectinput6">Tag Status</label>
                <div class="col-md-9">
                  <select id="status" name="status" class="form-control">
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
    $('#tag_model').modal('show');
    action_type = 1;
    $('#saveButton').text('Save');
    $('#myModalLabel8').text('Create Tag');
  })
    function Save(){
      var formData = new FormData($('#tag_form')[0]);
      if(action_type == 1){

        $.ajax({
                url : '/vendor/tagSave',
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                dataType: "JSON",
                success: function(data)
                {                
                    $("#tag_form")[0].reset();
                    $('#tag_model').modal('hide');
                    $('.zero-configuration').load(location.href+' .zero-configuration');
                    toastr.success('Tag Store Successfully', 'Successfully Save');
                },
          error: function (data, errorThrown) {
            var errorData = data.responseJSON.errors;
            $.each(errorData, function(i, obj) {
              toastr.error(obj[0]);
            });
          }
            });
      }else{
        $.ajax({
          url : '/vendor/tagUpdate',
          type: "POST",
          data: formData,
          contentType: false,
          processData: false,
          dataType: "JSON",
          success: function(data)
          {
            console.log(data);
              $("#tag_form")[0].reset();
              $('#tag_model').modal('hide');
              $('.zero-configuration').load(location.href+' .zero-configuration');
              toastr.success('Tag Update Successfully', 'Successfully Update');
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
        url : '/vendor/tagEdit/'+id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
          $('#myModalLabel8').text('Update Tag');
          $('#saveButton').text('Save Change');
          $('input[name=tag]').val(data.tag);
          $('input[name=id]').val(id);
          $('select[name=status]').val(data.status);
          $('#tag_model').modal('show');
          action_type = 2;
        }
      });
    }
     function Delete(id){
      var r = confirm("Are you sure");
      if (r == true) {
      $.ajax({
        url : '/vendor/tagDelete/'+id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
          toastr.success('Tag Delete Successfully', 'Successfully Delete');
          $('.zero-configuration').load(location.href+' .zero-configuration');
        }
      });
    } 
     }
    
</script>
@endsection