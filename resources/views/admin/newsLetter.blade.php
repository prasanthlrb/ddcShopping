@extends('admin.app')
@section('extra-css')

<link rel="stylesheet" type="text/css" href="../../../app-assets/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/datatables.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/icheck/icheck.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/selects/select2.min.css">
  <style>
    
  .select2-container--default .select2-selection--multiple {
    min-height: 40px !important;
    padding: 5px 8px !important;
    border-color: #D9D9D9 !important;
    width: 279px!important;
}
  </style>
@endsection
@section('section')
<div class="content-wrapper">

  <div class="content-body">   
   
<section id="column-selectors">
    <div class="row">
      <div class="col-12">
        
        <div class="card">
          <div class="card-header">
            
                <button id="open_model" data-backdrop="false" class="btn btn-success round btn-glow px-2" data-toggle="modal">Create NewsLetter</button>
            
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
                    <th>Message</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                @php ($x = 0) @endphp
                @foreach($newsletter as $row)
                @php $x++ @endphp
                  <tr>
                    <td>{{$x}}</td>
                    <td>{{$row->title}}</td>
                    <td>{{$row->message}}</td>
                    <td>{{$row->news_letter_status}}</td>
                    <td class="text-center" onclick="Edit({{$row->id}})"><i class="ft-edit"></i></td>
                    <td class="text-center" onclick="Delete({{$row->id}})"><i class="ft-trash-2"></i></td>
                  </tr>
                @endforeach   
                </tbody>
                <tfoot>
                  <tr>
                    <th>S No</th>
                    <th>Title</th>
                    <th>Message</th>
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

  <div class="modal fade text-left" id="news_model" tabindex="-1" role="dialog" aria-labelledby="myModalLabel8"
  aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-primary white">
          <h4 class="modal-title white" id="myModalLabel8">Create NewsLetter</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="form" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id">
        <div class="modal-body">
          <div class="form-group row">
            <label class="col-md-3 label-control" for="projectinput1">Title</label>
            <div class="col-md-9">
              <input type="text" id="title" class="form-control" placeholder="Enter your News letter title"
              name="title">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-3 label-control" for="projectinput1">Message</label>
            <div class="col-md-9">
              <textarea class="form-control" row="10" name="message" id="message"></textarea>
            </div>
          </div>
          <div class="form-group row">
                <label class="col-md-3 label-control" for="projectinput6">Status</label>
                <div class="col-md-9">
                  <select id="news_letter_status" name="news_letter_status" class="form-control">
                    <option selected="" value="0">All Users</option>
                    <option value="1">Particular Users</option>
                  
                  </select>
                </div>
              </div>
           <!-- <div class="row">
             <div class="col-md-6">
              <div class="dropdown-item">
                <span class="skin skin-futurico">
                  <input value="0" type="radio" name="news_letter_status" id="news_letter_status" checked>
                <label for="radio1" class="ml-1"> All Users</label>
                </span>
              </div>
             </div>
             <div class="col-md-6">
              <div class="dropdown-item">
                <span class="skin skin-futurico">
                  <input value="1" type="radio" name="news_letter_status" class="mr-1" id="news_letter_status">
                  <label for="radio2" class="ml-1"> Particular Users</label>
                </span>
              </div>
             </div>
           </div> -->
             
          <div class="form-group row">
            <div class="text-bold-600 font-medium-2 col-md-12">
              Select User
            </div>
          </div>
          <div class="form-group row">
            <select style="width:100%" id="email" name="email[]" class="select2 form-control col-md-12" multiple="multiple">
              <optgroup label="Register User">
                <option value="AK">Alaska</option>
                <option value="HI">Hawaii</option>
                <option value="CA">California</option>
                <option value="NV">Nevada</option>
                <option value="OR">Oregon</option>
                <option value="WA">Washington</option>
              </optgroup>              
            </select>
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
<script src="../../../app-assets/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
<script src="../../../app-assets/js/scripts/tables/datatables/datatable-basic.js" type="text/javascript"></script>
<script src="../../../app-assets/vendors/js/forms/select/select2.full.min.js" type="text/javascript"></script>
<script src="../../../app-assets/js/scripts/forms/select/form-select2.js" type="text/javascript"></script>
  
<script>
  var action_type;
  $('#open_model').click(function(){
    $("#form")[0].reset();
    
    $("#email option[selected]").removeAttr("selected");    

    $('#news_model').modal('show');
    action_type = 1;
    $('#saveButton').text('Save');
    $('#myModalLabel8').text('Create NewsLetter');
  })
    function Save(){
      var formData = new FormData($('#form')[0]);
      if(action_type == 1){

      $.ajax({
          url : '/admin/newsSave',
          type: "POST",
          data: formData,
          contentType: false,
          processData: false,
          dataType: "JSON",
          success: function(data)
          {
            console.log(data);                
            $("#form")[0].reset();
            $('.table').load(location.href+' .table');
            toastr.success('NewsLetter Store Successfully', 'Successfully Save');
            $('#news_model').modal('hide');
            location.reload();
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
          url : '/admin/newsUpdate',
          type: "POST",
          data: formData,
          contentType: false,
          processData: false,
          dataType: "JSON",
          success: function(data)
          {
            console.log(data);                
            $("#form")[0].reset();
            $('.table').load(location.href+' .table');
            toastr.success('NewsLetter Update Successfully', 'Successfully Update');
            $('#news_model').modal('hide');
            location.reload();
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

    function Edit(id){
      
      $.ajax({
        url : '/admin/newsEdit/'+id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
        
          $('#myModalLabel8').text('Update NewsLetter');
          $('#saveButton').text('Save Change');
          $('input[name=title]').val(data[0].title);
          $('textarea[name=message]').val(data[0].message);
          $('select[name=news_letter_status]').val(data[0].news_letter_status);
          $('input[name=id]').val(id);

          get_news_select(data[0].id);

// var values=data[1].email;
// alert(values);
// $.each(values.split(","), function(i,e){
//     $("#email option[value='" + e + "']").prop("selected", true);
// });

          $('#news_model').modal('show');
          action_type = 2;
        }
      });
    }

function get_news_select(id)
{
    $.ajax({        
        url : '/admin/get_news_select/'+id,
        type: "GET",
        success: function(data)
        {
           $('#email').html(data);
        }
   });
}

     function Delete(id){
      var r = confirm("Are you sure");
      if (r == true) {
      $.ajax({
        url : '/admin/newsDelete/'+id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
          toastr.success('Category Delete Successfully', 'Successfully Delete');
          $('.zero-configuration').load(location.href+' .zero-configuration');
        }
      });
    } 
     }
    
</script>
  <link href="../../../app-assets/vendors/css/tables/datatable/datatables.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/icheck/icheck.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/selects/select2.min.css">
  <style>
    span.select2.select2-container.select2-container--default.select2-container--focus {
      width: 100% !important;
      padding: 10px;
  }
  </style>
@endsection
