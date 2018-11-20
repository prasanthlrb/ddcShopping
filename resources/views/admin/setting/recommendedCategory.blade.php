@extends('admin.app')
@section('extra-css')


  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/icheck/icheck.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/selects/select2.min.css">
  <style>
    
  /* .select2-container--default .select2-selection--multiple {
    min-height: 40px !important;
    padding: 5px 8px !important;
    border-color: #D9D9D9 !important;
    width: 279px!important;
} */
  </style>
@endsection
@section('section')
<div class="content-wrapper">
<div class="content-body">
        <section id="horizontal-form-layouts">
                <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                       
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                          <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                          
                          </ul>
                        </div>
                      </div>
                      <div class="card-content collpase show">
                        <div class="card-body">
                          <form class="form form-horizontal" method="POST" action="/admin/recommendedCategoryUpdate">
                            {{ csrf_field() }}
                            
                            <div class="form-body">
                              <h4 class="form-section"><i class="ft-user"></i> Top 5 Recommended</h4>
                             <input type="hidden" id="id" name="id" value="1">

                              <div class="form-group row">
                                <label class="col-md-2 label-control" for="projectinput2">Category Ids</label>
<div class="col-md-10">
    <select style="width:100% !important;" id="category_ids" name="category_ids[]" class="select2 form-control col-md-12" multiple="multiple">
        <optgroup label="Register Categories">
    <?php $arraydata=array(); ?>
    @foreach($data as $data1)
        <?php $arraydata[]=''.$data1->category_ids.''; ?>
    @endforeach
    @foreach($Category as $cat)
        @if(in_array($cat->id, $arraydata))
        <option selected="true" value="{{$cat->id}}">{{$cat->cat_name}}</option>
        @else
        <option value="{{$cat->id}}">{{$cat->cat_name}}</option> 
        @endif
    @endforeach
        </optgroup>  
    </select>
</div>
                              </div>  

                            </div>

                             <button type="submit" class="btn btn-primary">
                                <i class="la la-check-square-o"></i> Update
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
<script src="../../../app-assets/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
<script src="../../../app-assets/vendors/js/forms/select/select2.full.min.js" type="text/javascript"></script>
<script src="../../../app-assets/js/scripts/forms/select/form-select2.js" type="text/javascript"></script>

@endsection
