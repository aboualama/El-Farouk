 

@extends('layouts/contentLayoutMaster')

@section('title', 'بيانات المدرسة')


@section('vendor-style') 
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/toastr.min.css')) }}"> 
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/sweetalert2.min.css')) }}">  
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/pickadate/pickadate.css')) }}">  
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/wizard/bs-stepper.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
@endsection

@section('page-style') 
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/extensions/ext-component-toastr.css')) }}"> 
  <link rel="stylesheet" href="{{asset(mix('css/base/plugins/extensions/ext-component-sweet-alerts.css'))}}"> 
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-flat-pickr.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-pickadate.css')) }}"> 
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-wizard.css')) }}">
@endsection 
 

@section('content') 

   
<div class="row">
  <div class="col-md-12">
    <section class="app-user-edit">
      <div class="card">
        <div class="card-body"> 
          <div class="tab-content"> 
            <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel"> 
              <div class="row"> 
                <div class="col-md-12"  id="section_inputs">   
                  <div class="row"> 
                    <section id="divider-text-position" style="width: 98%; margin: auto;">
                      <div class="row">
                        <div class="col-md-12"> 
                            <div class="divider divider-left divider-secondary">
                              <div class="divider-text text-secondary">أقسام العهدة</div>
                            </div>   
                        </div>
                      </div>
                    </section> 
                  </div>    
                  <div class="row">  
                  </div>  
                  <div >
                    <button type="submit" class="btn btn-secondary btn-block waves-effect waves-float waves-light" data-toggle="modal" data-target="#category">  
                      أضافة بيانات موظف جديد
                    </button> 
                  </div> 
                </div>   
              </div>  
            </div>  
          </div>
        </div>
      </div>
    </section> 
  </div>
 
  
</div>
 
 
 

<!-- Modal category -->
<div class="modal fade text-left" id="category" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true" >
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title text-secondary" id="myModalLabel17">أضافة بيانات موظف جديد</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">   
          <div class="row">   
            <div class="col-12">
              <div class="card"> 
                <div class="card-body">
                  @include('app.employees.add')
                </div>
              </div>
            </div> 
          </div> 
        </div> 
    </div>
  </div>
</div> 
<!-- Modal category-->
  
@endsection


@section('vendor-script')
  <script src="{{ asset(mix('vendors/js/extensions/sweetalert2.all.min.js')) }}"></script>  
  <script src="{{ asset(mix('vendors/js/extensions/toastr.min.js')) }}"></script>   
  <script src="{{ asset(mix('js/scripts/confirm-delete.js')) }}"></script> 
  <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.date.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.time.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/pickadate/legacy.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/wizard/bs-stepper.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
@endsection  


@section('page-script') 
  <script src="{{ asset(mix('js/scripts/extensions/ext-component-sweet-alerts.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/forms/pickers/form-pickers.js')) }}"></script> 
  <script src="{{ asset(mix('js/scripts/forms/form-wizard.js')) }}"></script>
  
  <script> 
    $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});

    
  // change national_id
  $('#national_id').on("keyup", function (e) {
      e.stopPropagation(); 
      var city = {"01": 'القاهرة', "02": 'الاسكندرية', "03": 'بورسعيد', "04": 'السويس', "11": 'دمياط', "12": 'الدقهليه', "13": 'الشرقية', "14": 'الدقهليه', "15": 'كفر الشيخ',  "16": 'الغربيه', "17": 'المنوفيه', "18": 'البحيره', "19": 'الاسماعليه', "21": 'الجيزه', "22": 'بنى سويف', "23": 'الفيوم', "24": 'المنيا', "25": 'اسيوط', "26": 'سوهاج', "27": 'قنا', "28": 'اسوان', "29": 'الاقصر', "31": 'البحر الاحمر', "32": 'الوادى الجديد', "33": 'مطروح', "34": 'شمال سيناء', "35": 'جنوب سيناء', "88": 'خارج الجمهورية', }; 
      var id = $('#national_id').val();
      var gender = id.substring(13, 1); 
      var year = parseInt((id.substring(0, 1) == 2) ? 1900 : 2000) + parseInt(id.substring(1, 3)); 
      var month = id.substring(3, 5);
      var day = id.substring(5, 7);
      var code = id.substring(7, 9);

      if($(this).val().length > 13)
      {
        $('#gender').val((gender % 2 == 0) ? 'انثي' : 'ذكر');
        $('#birth_city').val(city[code]);
        $('#birth_date').val(year + '-' + month + '-' + day);
      }else{
        $('#gender').val('');
        $('#birth_city').val('');
        $('#birth_date').val('');
      }  
    }); 
 
	
 
	

    // $(document).on('click', '#submit', function (e) {
    //   e.preventDefault(); 
    //   if($('#jquery-val-form').valid()) {  
    //     var url = $("#url").val(); 
    //     var formData = new FormData($('#jquery-val-form')[0]); 
    //     $.ajax({
    //         type: 'post',
    //         enctype: 'multipart/form-data',
    //         url: url,
    //         data: formData,
    //         processData: false,
    //         contentType: false,
    //         cache: false,
    //         success: function (data) {  
    //                 toastr['success'](
    //                       'تم اضافة عهدة جديدة بنجاح ',
    //                       '  العهدة  ' ,
    //                       {
    //                         closeButton: true,
    //                         tapToDismiss: false, 
    //                         positionClass: 'toast-top-right',
    //                         rtl: 'rtl'
    //                       }
    //                     );   
    //             $('#category').val("");
    //             $('#type').empty();
    //             $('#type').append('<option> اختار نوع العهدة اولا</option>');
    //             $('.clear_form').fadeOut();     
    //         }, error: function (xhr) {

    //         }
    //     });
        
    //   }
    // });
        
  
  </script>   

@endsection
 