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
      <div class="step" data-target="#social-links-vertical">
        <button type="button" class="step-trigger">
          <span class="bs-stepper-box">4</span>
          <span class="bs-stepper-label">
            <span class="bs-stepper-title"> بيانات الحالة </span>
            <span class="bs-stepper-subtitle">   مثل : بيانات الحالة العسكرية </span>
          </span>
        </button>
      </div>
      <div class="step" data-target="#job-info-vertical">
        <button type="button" class="step-trigger">
          <span class="bs-stepper-box">5</span>
          <span class="bs-stepper-label">
            <span class="bs-stepper-title"> بيانات وظيفية</span>
            <span class="bs-stepper-subtitle">  مثل : الوظيفة الحالية والدرجة المالية</span>
          </span>
        </button>
      </div>
    </div>
    <div class="bs-stepper-content">
      <form id="jquery-val-form">
        <input type="hidden" value="employee" id="url">  
        <div id="account-details-vertical" class="content">
          <div class="content-header">
            <h5 class="mb-0">البيانات الاساسية  </h5>
            <small class="text-muted">   مثل : الاسم والرقم القومي.</small>
          </div>
 
          <div class="row">
   
            <div class="col-12">
              <div class="divider divider-left divider-secondary">
                <div class="divider-text text-secondary"> الاسم بالكامل</div>
              </div>   
              <div class="row">  
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="first_name">  الاسم الاول</label> 
                    <input type="number" class="form-control" name="first_name" id="first_name" placeholder=" الإسم الأول" required  />  
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
                    <input type="text" class="form-control" name="gender" id="gender" placeholder=" ذكر / أنثي" required disabled>  
                  </div>
                </div>    
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="birth_date"> تاريخ الميلاد  </label> 
                    <input  type="text" id="birth_date" class="form-control flatpickr-basic" name="birth_date" placeholder="YYYY-MM-DD" required disabled>  
                  </div>
                </div>    
              </div> 
            </div> 
          </div>
          <div class="d-flex justify-content-between">
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
          <div class="row">
            <div class="col-12">
              <div class="divider divider-left divider-secondary">
                <div class="divider-text text-secondary"> الاسم بالكامل</div>
              </div>   
              <div class="row">  
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="first_name">  الاسم الاول</label> 
                    <input type="number" class="form-control" name="first_name" id="first_name" placeholder=" الإسم الأول" required  />  
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
                    <input type="text" class="form-control" name="gender" id="gender" placeholder=" ذكر / أنثي" required disabled>  
                  </div>
                </div>    
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="birth_date"> تاريخ الميلاد  </label> 
                    <input  type="text" id="birth_date" class="form-control flatpickr-basic" name="birth_date" placeholder="YYYY-MM-DD" required disabled>  
                  </div>
                </div>    
              </div> 
            </div> 
          </div> 
          <div class="d-flex justify-content-between">
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
                    <label for="birth__center"> المحافظة  </label> 
                    <input type="text" id="birth__center" class="form-control" name="birth__center" placeholder="المنتزة أول" >  
                  </div>
                </div>  
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="birth_city"> المحافظة  </label> 
                    <input type="text" id="birth_city" class="form-control" name="birth_city" placeholder="الاسكندرية" disabled>  
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

          <div class="d-flex justify-content-between">
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
            <h5 class="mb-0">Social Links</h5>
            <small>Enter Your Social Links.</small>
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
          <div class="row">
            <div class="form-group col-md-6">
              <label class="form-label" for="vertical-google">Google+</label>
              <input type="text" id="vertical-google" class="form-control" placeholder="https://plus.google.com/abc" />
            </div>
            <div class="form-group col-md-6">
              <label class="form-label" for="vertical-linkedin">Linkedin</label>
              <input type="text" id="vertical-linkedin" name="linkedin" class="form-control" placeholder="https://linkedin.com/abc" />
            </div>
          </div>
          <div class="d-flex justify-content-between">
            <button class="btn btn-primary btn-prev">
              <i data-feather="arrow-right" class="align-middle mr-sm-25 mr-0"></i>
              <span class="align-middle d-sm-inline-block d-none">السابق</span>
            </button>
            <button class="btn btn-success btn-submit">حفظ</button>
          </div>
        </div> 
        <div id="job-info-vertical" class="content">
          <div class="content-header">
            <h5 class="mb-0">البيانات الاساسية  </h5>
            <small class="text-muted">   مثل : الاسم والرقم القومي.</small>
          </div>
 
          <div class="row">
   
            <div class="col-12">
              <div class="divider divider-left divider-secondary">
                <div class="divider-text text-secondary"> الاسم بالكامل</div>
              </div>   
              <div class="row">  
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="first_name">  الاسم الاول</label> 
                    <input type="number" class="form-control" name="first_name" id="first_name" placeholder=" الإسم الأول" required  />  
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
                    <input type="text" class="form-control" name="gender" id="gender" placeholder=" ذكر / أنثي" required disabled>  
                  </div>
                </div>    
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="birth_date"> تاريخ الميلاد  </label> 
                    <input  type="text" id="birth_date" class="form-control flatpickr-basic" name="birth_date" placeholder="YYYY-MM-DD" required disabled>  
                  </div>
                </div>    
              </div> 
            </div> 
          </div>
          <div class="d-flex justify-content-between">
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
      </form> 
    </div>
  </div>
</section>
<!-- /Vertical Wizard -->
