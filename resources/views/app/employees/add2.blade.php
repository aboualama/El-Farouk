<form id="jquery-val-form">  
                
  <div class="tab-content">
    <!-- Account Tab starts -->
    <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel"> 
      <div class="row"> 

        <input type="hidden" value="custody" id="url">  

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
                <label for="join_date">تاريخ التوظيف </label> 
                <input  type="text" id="join_date" class="form-control flatpickr-basic" name="join_date" placeholder="YYYY-MM-DD" required>  
              </div>
            </div>    
          </div> 
        </div> 

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


        <div class="col-md-12"> 
          <div class="divider divider-left divider-secondary">
            <div class="divider-text text-secondary"> محل الميلاد  </div>
          </div>   
          <div class="row">  
            <div class="col-md-6">
              <div class="form-group">
                <label for="birth_address"> العنوان    </label> 
                <input type="text" class="form-control" name="birth_address" id="birth_address" placeholder="1 شارع الشهداء">  
              </div>
            </div>    
            <div class="col-md-3">
              <div class="form-group">
                <label for="birth_city"> المحافظة  </label> 
                <input type="text" id="birth_city" class="form-control" name="birth_city" placeholder="القاهرة" disabled>  
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


        <div class="col-md-12"> 
          <div class="divider divider-left divider-secondary">
            <div class="divider-text text-secondary"> محل الاقامة  </div>
          </div>   
          <div class="row">  
            <div class="col-md-9">
              <div class="form-group">
                <label for="birth_address"> العنوان    </label> 
                <input type="text" class="form-control" name="birth_address" id="birth_address" placeholder="1 شارع الشهداء">  
              </div>
            </div>    
            <div class="col-md-3">
              <div class="form-group">
                <label for="birth_city"> المحافظة  </label> 
                <input type="text" id="birth_city" class="form-control" name="birth_city" placeholder="القاهرة">  
              </div>
            </div>       
          </div> 
        </div>  


        <div class="col-md-12"> 
          <div class="divider divider-left divider-secondary">
            <div class="divider-text text-secondary"> المؤهل الدراسي  </div>
          </div>   
          <div class="row">  
            <div class="col-md-6">
              <div class="form-group">
                <label for="qualification_name"> الاسم المؤهل    </label> 
                <input type="text" class="form-control" name="birth_address" id="birth_address" placeholder="بكالوريوس تجارة">  
              </div>
            </div>    
            <div class="col-md-3">
              <div class="form-group">
                <label for="qualification_date"> التاريخ  </label> 
                <input type="text" id="date_qualification" class="form-control" name="date_qualification" placeholder="2015">  
              </div>
            </div>  
            <div class="col-md-3"> 
              <div class="form-group">
                <label for="qualification_round">  الدور </label> 
                <select class="form-control" name="qualification_round"  id="qualification_round" required> 
                  <option value="">.........  </option>
                  <option  value="first">الاول</option> 
                  <option  value="second">الثاني</option>    
                </select>
              </div>
            </div>       
          </div> 
          <div class="row">  
            <div class="col-md-6">
              <div class="form-group">
                <label for="qualification_source"> جهة الاصدار    </label> 
                <input type="text" class="form-control" name="qualification_source" id="qualification_source" placeholder="جامعة الاسكندرية - كلية التجارة">  
              </div>
            </div>    
            <div class="col-md-3">
              <div class="form-group">
                <label for="qualification_degree"> درجة المؤهل  </label> 
                <input type="text" id="qualification_degree" class="form-control" name="qualification_degree" placeholder="امتياز">  
              </div>
            </div>  
            <div class="col-md-3"> 
              <div class="form-group">
                <label for="qualification_major"> التخصص   </label> 
                <input type="text" id="qualification_major" class="form-control" name="qualification_major" placeholder="اقتصاد ">  
              </div>
            </div>       
          </div> 
        </div>       

        <div class="col-md-12"> 
          <div class="row">    
          </div> 
        </div>    
        <div class="col-md-12"> 
          <div class="row">  
            <div class="col-md-4">
              <div class="form-group">
                <label for="social_status"> الحالة الاجتماعية </label> 
                <select class="form-control" name="social_status"  id="social_status" required> 
                  <option value="">.........  </option>
                  <option  value="single">single</option> 
                  <option  value="married">married</option> 
                  <option  value="divorced">divorced</option> 
                  <option  value="widow">widow</option> 
                </select>
              </div>
            </div>  
            <div class="col-md-4">
              <div class="form-group">
                <label for="health_status"> الحالة الصحية </label> 
                <select class="form-control" name="health_status"  id="health_status" required> 
                  <option value="">.........  </option>
                  <option  value="single">single</option> 
                  <option  value="married">married</option> 
                  <option  value="divorced">divorced</option> 
                  <option  value="widow">widow</option> 
                </select>
              </div>
            </div>  
            <div class="col-md-4">
              <div class="form-group">
                <label for="military_treatment">  المعاملة العسكرية </label> 
                <select class="form-control" name="military_treatment"  id="military_treatment" required> 
                  <option value="">.........  </option>
                  <option  value="single">single</option> 
                  <option  value="married">married</option> 
                  <option  value="divorced">divorced</option> 
                  <option  value="widow">widow</option> 
                </select>
              </div>
            </div>     
          </div> 
        </div>    
  
        <div class="col-md-12"> 
          <div class="row">  
            <div class="col-md-4">
              <div class="form-group">
                <label for="social_status"> الحالة الاجتماعية </label> 
                <select class="form-control" name="social_status"  id="social_status" required> 
                  <option value="">.........  </option>
                  <option  value="single">single</option> 
                  <option  value="married">married</option> 
                  <option  value="divorced">divorced</option> 
                  <option  value="widow">widow</option> 
                </select>
              </div>
            </div>   
            <div class="col-md-4">
              <div class="form-group">
                <label for="city"> عدد الاولاد </label> 
                <input  type="text" id="city" class="form-control" name="city" placeholder="المدينة" required>  
              </div>
            </div>     
          </div> 
        </div>  
        
        <div class="col-12 ">
          <button type="submit" id="submit" class="btn btn-primary mb-1 mb-sm-0 mr-0 mr-sm-1">   
            <span>أضافة</span>
          </button> 
        </div>
            
      </div> 
    </div> 


  </div>
</form> 