<style>
  .modal-body {
    max-height: calc(70vh);
    overflow-y: auto;
  }
</style>




<!-- Vertical Wizard -->
<section class="vertical-wizard">
  <div class="bs-stepper vertical vertical-wizard-example">
    <div class="bs-stepper-header">
      <div class="step" data-target="#account-details-vertical">
        <button type="button" class="step-trigger">
          <span class="bs-stepper-box">1</span>
          <span class="bs-stepper-label">
            <span class="bs-stepper-title">البيانات الاساسية </span>
            <span class="bs-stepper-subtitle">  مثل : الاسم والرقم القومي</span>
          </span>
        </button>
      </div>
      <div class="step" data-target="#personal-info-vertical">
        <button type="button" class="step-trigger">
          <span class="bs-stepper-box">2</span>
          <span class="bs-stepper-label">
            <span class="bs-stepper-title"> المعلومات الشخصية</span>
            <span class="bs-stepper-subtitle">مثل : الحالة الاجتماعية والصحية</span>
          </span>
        </button>
      </div>
      <div class="step" data-target="#address-step-vertical">
        <button type="button" class="step-trigger">
          <span class="bs-stepper-box">3</span>
          <span class="bs-stepper-label">
            <span class="bs-stepper-title">العنوان</span>
            <span class="bs-stepper-subtitle">   محل الميلاد / محل الاقامة</span>
          </span>
        </button>
      </div>
      <div class="step" data-target="#job-info-vertical">
        <button type="button" class="step-trigger">
          <span class="bs-stepper-box">4</span>
          <span class="bs-stepper-label">
            <span class="bs-stepper-title"> بيانات وظيفية</span>
            <span class="bs-stepper-subtitle">  مثل : الوظيفة الحالية والدرجة المالية</span>
          </span>
        </button>
      </div>
      <div class="step" data-target="#social-links-vertical">
        <button type="button" class="step-trigger">
          <span class="bs-stepper-box">5</span>
          <span class="bs-stepper-label">
            <span class="bs-stepper-title"> بيانات التواصل </span>
            <span class="bs-stepper-subtitle">  مثل : ارقام التليفون | البريد الاليكتروني  </span>
          </span>
        </button>
      </div>
    </div>
    <div class="bs-stepper-content">
      <form id="form">
        @csrf
        <input type="hidden" value="employee" id="url">  


        <div id="account-details-vertical" class="content">
          <div class="content-header">
            <h5 class="mb-0">البيانات الاساسية  </h5>
            <small class="text-muted">   مثل : الاسم والرقم القومي.</small>
          </div>
 
          <div class="content-body">
            <div class="row">
    
              <div class="col-12">
                <div class="divider divider-left divider-secondary">
                  <div class="divider-text text-secondary"> الاسم بالكامل</div>
                </div>   
                <div class="row">  
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="first_name">  الاسم الاول</label> 
                      <input type="text" class="form-control" name="first_name" id="first_name" placeholder=" الإسم الأول" required  />  
                    </div>
                  </div> 
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="last_name"> إسم الأب </label> 
                      <input  type="text" id="last_name" class="form-control" name="last_name" placeholder="إسم الأب" required>  
                    </div>
                  </div> 
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="middle_name"> إسم الجد</label> 
                      <input type="text" class="form-control" name="middle_name" id="middle_name" placeholder=" إسم الجد" required  />  
                    </div>
                  </div>   
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="family_name"> لقب العائلة </label> 
                      <input  type="text" id="family_name" class="form-control" name="family_name" placeholder="لقب العائلة" required>  
                    </div>
                  </div>     
                </div> 
              </div>  
  
              <div class="col-md-12">  
                <div class="row">  
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="national_id"> الرقم القومي</label> 
                      <input type="number" class="form-control" name="national_id" id="national_id" placeholder="27012013456789" required  />  
                    </div>
                  </div>   
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="gender"> النوع</label> 
                      <input type="text" class="form-control" name="gender" id="gender" placeholder=" ذكر / أنثي" required >  
                    </div>
                  </div>    
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="birth_date"> تاريخ الميلاد  </label> 
                      <input  type="text" id="birth_date" class="form-control flatpickr-basic" name="birth_date" placeholder="YYYY-MM-DD" required >  
                    </div>
                  </div>    
                </div> 
              </div> 
            </div>
          </div>
          <div class="d-flex justify-content-between next_prev">
            <button class="btn btn-outline-secondary btn-prev" disabled>
              <i data-feather="arrow-right" class="align-middle mr-sm-25 mr-0"></i>
              <span class="align-middle d-sm-inline-block d-none">السابق</span>
            </button>
            <button class="btn btn-primary btn-next">
              <span class="align-middle d-sm-inline-block d-none">التالي</span>
              <i data-feather="arrow-left" class="align-middle ml-sm-25 ml-0"></i>
            </button>
          </div>
        </div>


        <div id="personal-info-vertical" class="content">
          <div class="content-header">
            <h5 class="mb-0"> المعلومات الشخصية</h5>
            <small class="text-muted">ادخال المعلومات الشخصية.</small>
          </div> 
          <div class="content-body">
            <div class="row"> 



              <div class="col-md-12"> 
                <div class="row">  
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="social_status"> الحالة الاجتماعية </label> 
                      <select class="form-control" name="social_status"  id="social_status" required> 
                        <option value="">.........  </option>
                        <option  value="اعزب">اعزب</option> 
                        <option  value="متزوج">متزوج</option> 
                        <option  value="ارمل">ارمل</option> 
                        <option  value="مطلق">مطلق</option> 
                        <option  value="متزوج ويعول">متزوج ويعول</option>   
                        <option  value="ارمل ويعول">ارمل ويعول</option>  
                        <option  value="مطلق ويعول">مطلق ويعول</option>  
                      </select>
                    </div>
                  </div>  
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="health_status"> الحالة الصحية </label> 
                      <select class="form-control" name="health_status"  id="health_status" required> 
                        <option value="">.........  </option>
                        <option  value="سليم">سليم</option>   
                        <option  value="ضمن نسبة 5%">ضمن نسبة 5%</option> 
                      </select>
                    </div>
                  </div>     
                </div> 
              </div>    
       
              <div class="col-md-12 invoice-repeater" id="children_repeater" style="display: none">  
               
                  <div class="divider divider-left divider-secondary">
                    <div class="divider-text text-secondary">  بيانات الاطفال    </div>
                  </div>  
             
                <div data-repeater-list="children">
                  <div data-repeater-item>
                    <div class="row d-flex align-items-end">
                      <div class="col-md-5 col-12">
                        <div class="form-group">
                          <label for="child_name"> الاسم</label>
                          <input type="text" class="form-control" id="child_name" name="child_name" aria-describedby="child_name" placeholder="أحمد" />
                        </div>
                      </div>
    
                      <div class="col-md-3 col-12">
                        <div class="form-group">
                          <label for="child_gender">النوع</label>
                          <select class="form-control" id="child_gender" name="child_gender" aria-describedby="child_gender" required> 
                            <option value="">.........  </option>
                            <option  value="ذكر">ذكر</option> 
                            <option  value="انثي">انثي</option>  
                          </select>
                        </div>
                      </div>
    
                      <div class="col-md-3 col-12">
                        <div class="form-group">
                          <label for="child_brith">تاريخ الميلاد</label>
                          <input type="text" class="form-control flatpickr-basic" id="child_brith" name="child_brith" aria-describedby="child_brith" placeholder="YYYY-MM-DD" /> 
                        </div>
                      </div>
     
    
                      <div class="col-md-1 col-12 ">
                        <div class="form-group">
                          <button class="btn btn-danger text-nowrap px-1" data-repeater-delete type="button">
                            <i data-feather="trash-2" class="mr-25"></i> 
                          </button>
                        </div>
                      </div>
                    </div>
                    <hr />
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <button class="btn btn-icon btn-success" type="button" data-repeater-create style="float: left">
                      <i data-feather="plus" class="mr-25"></i>
                      <span>  اضافة طفل جديد</span>
                    </button>
                  </div>
                </div>
              </div>


              <div class="col-md-12"> 
                <div class="row">  
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="military_treatment">  المعاملة العسكرية </label> 
                      <select class="form-control" name="military_treatment"  id="military_treatment" required> 
                        <option value="">.........  </option>
                        <option  value="معاف مؤقت">معاف مؤقت</option> 
                        <option  value="معاف نهائي">معاف نهائي</option> 
                        <option  value="مؤجل تجنيده">مؤجل تجنيده</option> 
                        <option  value="انهي الخدمة">انهي الخدمة</option> 
                      </select>
                    </div>
                  </div>    
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="military_summons"> الاستدعاء  </label> 
                      <textarea class="form-control" id="military_summons" name="military_summons"></textarea> 
                    </div>
                  </div>     
                </div> 
              </div>   

            </div> 
          </div>
          <div class="d-flex justify-content-between next_prev">
            <button class="btn btn-primary btn-prev">
              <i data-feather="arrow-right" class="align-middle mr-sm-25 mr-0"></i>
              <span class="align-middle d-sm-inline-block d-none">السابق</span>
            </button>
            <button class="btn btn-primary btn-next">
              <span class="align-middle d-sm-inline-block d-none">التالي</span>
              <i data-feather="arrow-left" class="align-middle ml-sm-25 ml-0"></i>
            </button>
          </div>
        </div>



        <div id="address-step-vertical" class="content">
          <div class="content-header">
            <h5 class="mb-0">العنوان</h5> 
            <small class="text-muted">اضافة محل الميلاد / محل الاقامة.</small>
          </div> 
          <div class="content-body">
            <div class="row">
              <div class="col-md-12"> 
                <div class="divider divider-left divider-secondary">
                  <div class="divider-text text-secondary"> محل الميلاد  </div>
                </div>   
                <div class="row">  
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="birth_address"> العنوان    </label> 
                      <input type="text" class="form-control" name="birth_address" id="birth_address" placeholder="5 شارع الجيش">  
                    </div>
                  </div>    
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="birth_center"> مركز / قسم  </label> 
                      <input type="text" id="birth_center" class="form-control" name="birth_center" placeholder="المنتزة أول" >  
                    </div>
                  </div>  
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="birth_city"> المحافظة  </label> 
                      <input type="text" id="birth_city" class="form-control" name="birth_city" placeholder="الاسكندرية" >  
                    </div>
                  </div>    
                </div> 
              </div>  
              <div class="col-md-12"> 
                <div class="divider divider-left divider-secondary">
                  <div class="divider-text text-secondary"> محل الاقامة  </div>
                </div>   
                <div class="row">  
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="residence_address"> العنوان    </label> 
                      <input type="text" class="form-control" name="residence_address" id="residence_address" placeholder="1 شارع الشهداء">  
                    </div>
                  </div>    
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="residence_center"> مركز / قسم  </label> 
                      <input type="text" id="residence_center" class="form-control" name="residence_center" placeholder="دسوق">  
                    </div>
                  </div>  
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="residence_city"> المحافظة  </label> 
                      <input type="text" id="residence_city" class="form-control" name="residence_city" placeholder="طنطا">  
                    </div>
                  </div>       
                </div> 
              </div>  
            </div> 
          </div>

          <div class="d-flex justify-content-between next_prev">
            <button class="btn btn-primary btn-prev">
              <i data-feather="arrow-right" class="align-middle mr-sm-25 mr-0"></i>
              <span class="align-middle d-sm-inline-block d-none">السابق</span>
            </button>
            <button class="btn btn-primary btn-next">
              <span class="align-middle d-sm-inline-block d-none">التالي</span>
              <i data-feather="arrow-left" class="align-middle ml-sm-25 ml-0"></i>
            </button>
          </div>
        </div>



        <div id="job-info-vertical" class="content">
          <div class="content-header">
            <h5 class="mb-0">البيانات الوظيفية  </h5>
            <small class="text-muted">   مثل : الاسم والرقم القومي.</small>
          </div>
 
          <div class="content-body">
            <div class="row">
    
              <div class="col-12">
                <div class="divider divider-left divider-secondary">
                  <div class="divider-text text-secondary"> الاسم بالكامل</div>
                </div>   

                <div class="row">    
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="status">المجموعة الوظيفية </label>
                      <select class="form-control" name="category_id" id="category" > 
                        <option  value="">.........  </option>
                        {{-- @foreach ($categories as $category) 
                          <option value="{{$category->id}}">{{$category->name}}</option> 
                        @endforeach --}}
                      </select>
                    </div> 
                  </div> 
    
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="role"> المجموعة النوعية</label>
                      <select class="form-control" name="custody_type_id" id="type"> 
                        <option  value=""> اختار المجموعة الوظيفية اولا</option>
                      </select>
                    </div> 
                  </div> 
    
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="role">  المسمى الوظيفى </label>
                      <select class="form-control" name="custody_type_id" id="type"> 
                        <option  value=""> اختار المسمى الوظيفى </option>
                      </select>
                    </div> 
                  </div>  
                </div> 
              </div>  
  
              <div class="col-md-12">  
                <div class="row">  
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="national_idd"> الرقم القومي</label> 
                      <input type="number" class="form-control" name="national_idd" id="national_idd" placeholder="27012013456789" required  />  
                    </div>
                  </div>   
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="gender"> النوع</label> 
                      <input type="text" class="form-control" name="gender" id="gender" placeholder=" ذكر / أنثي" required disabled>  
                    </div>
                  </div>    
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="birth_dated"> تاريخ الميلاد  </label> 
                      <input  type="text" id="birth_dated" class="form-control flatpickr-basic" name="birth_dated" placeholder="YYYY-MM-DD" required disabled>  
                    </div>
                  </div>    
                </div> 
              </div> 
            </div>
          </div>
          <div class="d-flex justify-content-between next_prev">
            <button class="btn btn-primary btn-prev">
              <i data-feather="arrow-right" class="align-middle mr-sm-25 mr-0"></i>
              <span class="align-middle d-sm-inline-block d-none">السابق</span>
            </button>
            <button class="btn btn-primary btn-next">
              <span class="align-middle d-sm-inline-block d-none">التالي</span>
              <i data-feather="arrow-left" class="align-middle ml-sm-25 ml-0"></i>
            </button>
          </div>
        </div>



        <div id="social-links-vertical" class="content">
          <div class="content-header">
            <h5 class="mb-0">   بيانات التواصل</h5>
            <small class="text-muted">مثل : ارقام التليفون | البريد الاليكتروني.</small>
          </div>
          <div class="content-body">
            <div class="row"> 
              <div class="col-12">
                <div class="row">   
                  <div class="col-md-12"> 
                    <div class="divider divider-left divider-secondary">
                      <div class="divider-text text-secondary"> ارقام التليفونات </div>
                    </div>   
                    <div class="row">  
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="cell1"> رقم الهاتف / واتساب</label> 
                          <input type="number" class="form-control" name="cell[]" id="cell1" placeholder="01223456789">  
                        </div>
                      </div>    
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="cell2"> رقم اخر </label> 
                          <input  type="number" id="cell2" class="form-control" name="cell[]" placeholder="01223456789">  
                        </div>
                      </div>     
                    </div> 
                  </div>  
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                    <label class="form-label" for="vertical-twitter">Twitter</label>
                    <input type="text" id="vertical-twitter" class="form-control" placeholder="https://twitter.com/abc" />
                  </div>
                  <div class="form-group col-md-6">
                    <label class="form-label" for="vertical-facebook">Facebook</label>
                    <input type="text" id="vertical-facebook" class="form-control" placeholder="https://facebook.com/abc" />
                  </div>
                </div> 
              </div> 
            </div> 
          </div> 
          <div class="d-flex justify-content-between next_prev">
            <button class="btn btn-primary btn-prev">
              <i data-feather="arrow-right" class="align-middle mr-sm-25 mr-0"></i>
              <span class="align-middle d-sm-inline-block d-none">السابق</span>
            </button>
            <button id="add_new_employee" class="btn btn-success btn-submit">
              <span class="align-middle d-sm-inline-block d-none">  حفظ </span> 
              <i data-feather="save" class="align-middle ml-sm-25 ml-0"></i>
            </button>
          </div>
        </div> 


      </form> 
    </div>
  </div>
</section> 
 