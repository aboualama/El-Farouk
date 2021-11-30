@extends('layouts/contentLayoutMaster')

@section('title', ' عرض بيانات الموظف')

@section('vendor-style')
<link rel="stylesheet" href="{{asset(mix('vendors/css/tables/datatable/dataTables.bootstrap4.min.css'))}}">
<link rel="stylesheet" href="{{asset(mix('vendors/css/tables/datatable/responsive.bootstrap4.min.css'))}}">
<link rel="stylesheet" href="{{asset(mix('vendors/css/tables/datatable/buttons.bootstrap4.min.css'))}}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/toastr.min.css')) }}"> 
<link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/sweetalert2.min.css')) }}">  
@endsection
@section('page-style')
  {{-- Page Css files --}}
  <link rel="stylesheet" href="{{ asset(mix('css/base/pages/app-invoice-list.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/pages/app-user.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/extensions/ext-component-toastr.css')) }}"> 
  <link rel="stylesheet" href="{{asset(mix('css/base/plugins/extensions/ext-component-sweet-alerts.css'))}}"> 
@endsection

@section('content')
<section class="app-user-view">
  <!-- User Card & Plan Starts -->
  <div class="row">
    <!-- User Card starts-->
    <div class="col-xl-9 col-lg-8 col-md-7">
      <div class="card user-card">
        <div class="card-body">
          <h1 class="mb-2">عرض بيانات الموظف</h1>
          <div class="row">
            <div class="col-xl-6 col-lg-12 d-flex flex-column justify-content-between border-container-lg">
              <div class="user-avatar-section">
                <div class="d-flex justify-content-start">
                  {{-- <img
                    class="img-fluid rounded"
                    src="{{asset('images/avatars/7.png')}}"
                    height="104"
                    width="104"
                    alt="User avatar"
                  /> --}}
                  <div class="d-flex flex-column ml-1">
                    <div class="user-info mb-1">
                      <h4 class="mb-0">{{$employee->full_name}}</h4>
                      <span class="card-text">  {{$employee->national_id}}</span>
                    </div> 
                    <div class="d-flex flex-wrap">
                      <a href="{{url('employee' , $employee->id)}}/edit" class="btn btn-primary">تعديل</a>
                      {{-- <button class="btn btn-outline-danger ml-1">Delete</button> --}}
                      <a href="javascript:;" class="btn btn-outline-danger ml-1 confirm confirm_row_{{$employee->id}}" onclick="confirmrow({{$employee->id}})" data-id="{{ $employee->id }}" data-location="10" data-route="employee" data-a_name="{{$employee->full_name}}"> حذف</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="d-flex align-items-center user-total-numbers">
                <div class="d-flex align-items-center mr-2">
                  <div class="color-box bg-light-primary">
                    <i data-feather="dollar-sign" class="text-primary"></i>
                  </div>
                  <div class="ml-1">
                    <h5 class="mb-0">23.3k</h5>
                    <small> الراتب الحالي</small>
                  </div>
                </div>
                <div class="d-flex align-items-center">
                  <div class="color-box bg-light-success">
                    <i data-feather="trending-up" class="text-success"></i>
                  </div>
                  <div class="ml-1">
                    <h5 class="mb-0">$99.87K</h5>
                    <small>الاجر السنوي </small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-12 mt-2 mt-xl-0">
              <div class="user-info-wrapper">
                <div class="d-flex flex-wrap">
                  <div class="user-info-title">
                    <i data-feather="user" class="mr-1"></i>
                    <span class="card-text user-info-title font-weight-bold mb-0">تاريخ الميلاد</span>
                  </div>
                  <p class="card-text mb-0">{{date("Y-m-d", strtotime($employee->birth_date)) }}</p>
                </div>
                <div class="d-flex flex-wrap my-50">
                  <div class="user-info-title">
                    <i data-feather="check" class="mr-1"></i>
                    <span class="card-text user-info-title font-weight-bold mb-0">النوع</span>
                  </div>
                  <p class="card-text mb-0">{{$employee->gender->name}}</p>
                </div>
                <div class="d-flex flex-wrap my-50">
                  <div class="user-info-title">
                    <i data-feather="star" class="mr-1"></i>
                    <span class="card-text user-info-title font-weight-bold mb-0">الحالة الاجتماعية</span>
                  </div>
                  <p class="card-text mb-0">{{$employee->social_status->name}}</p>
                </div>
                <div class="d-flex flex-wrap my-50">
                  <div class="user-info-title">
                    <i data-feather="flag" class="mr-1"></i>
                    <span class="card-text user-info-title font-weight-bold mb-0">محل الميلاد</span>
                  </div>
                  <p class="card-text mb-0"> {{ $employee->birth_address . ' - ' . $employee->birth_center . ' - ' . $employee->birth_city}} </p>
                </div>
                <div class="d-flex flex-wrap">
                  <div class="user-info-title">
                    <i data-feather="phone" class="mr-1"></i>
                    <span class="card-text user-info-title font-weight-bold mb-0">رقم الهاتف</span>
                  </div>
                  <p class="card-text mb-0">{{$employee->phones->first()->number}}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /User Card Ends-->

    <!-- Plan Card starts-->
    <div class="col-xl-3 col-lg-4 col-md-5">
      <div class="card plan-card border-primary">
        <div class="card-header d-flex justify-content-between align-items-center pt-75 pb-1">
          <h5 class="mb-0"> عرض بيانات المؤهل الحالي   </h5> 
        </div>
        <div class="card-body">
          <div class="badge badge-light-primary">{{$employee->qualification->first()->name}}</div>
          <ul class="list-unstyled my-1">
            <li>
              <div class="d-flex flex-wrap">
                <div class="user-info-title">
                  <span class="card-text user-info-title font-weight-bold mb-0 mr-1">  التخصص :</span> 
                </div>
                <p class="card-text mb-0">{{$employee->qualification->first()->pivot->qualification_major}}</p>
              </div>
            </li>
            <li class="my-25">
              <div class="d-flex flex-wrap">
                <div class="user-info-title">
                  <span class="card-text user-info-title font-weight-bold mb-0 mr-1">  الدرجة   :</span>
                </div>
                <p class="card-text mb-0">{{$employee->qualification->first()->pivot->qualification_degree}}</p>
              </div>
            </li>
            <li>
              <div class="d-flex flex-wrap">
                <div class="user-info-title">
                  <span class="card-text user-info-title font-weight-bold mb-0 mr-1">   الجهة :</span>
                </div>
                <p class="card-text mb-0">{{$employee->qualification->first()->pivot->qualification_source}}</p>
              </div>
            </li>
          </ul>
          <button class="btn btn-primary text-center btn-block">اضافة مؤهل جديد  </button> 
        </div>
      </div>
    </div>
  <!-- /Plan CardEnds -->
  </div>
  <!-- User Card & Plan Ends -->

  <!-- User Timeline & Permissions Starts -->
  <div class="row">
    <!-- information starts -->
    <div class="col-md-9">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title mb-2">الوظائف  </h4>
        </div>
        <div class="card-body">
          <ul class="timeline">
            <li class="timeline-item">
              <span class="timeline-point timeline-point-indicator"></span>
              <div class="timeline-event">
                <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                  <h6>12 Invoices have been paid</h6>
                  <span class="timeline-event-time">12 min ago</span>
                </div>
                <p>Invoices have been paid to the company.</p>
              </div>
            </li> 
            <li class="timeline-item">
              <span class="timeline-point timeline-point-info timeline-point-indicator"></span>
              <div class="timeline-event">
                <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                  <h6>Create a new project for client</h6>
                  <span class="timeline-event-time">2 days ago</span>
                </div>
                <p class="mb-0">Add files to new design folder</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- information Ends -->
    <!-- Plan Card starts-->
      <div class="col-xl-3 col-lg-4 col-md-5">
        <div class="card plan-card border-primary">
          <div class="card-header d-flex justify-content-between align-items-center pt-75 pb-1">
            <h5 class="mb-0"> عرض بيانات الوظيفة الحالية   </h5> 
          </div>
          <div class="card-body">
            <div class="badge badge-light-primary">{{$employee->jobs_history->first()->sub_group->functional_group->name}}</div>
            <ul class="list-unstyled my-1">
              <li>
                <div class="d-flex flex-wrap">
                  <div class="user-info-title">
                    <span class="card-text user-info-title font-weight-bold mb-0 mr-1">  المسمي الوظيفي :</span>
                  </div>
                  <p class="card-text mb-0">{{$employee->jobs_history->first()->job_function_name}}</p>
                </div>
              </li>
              <li class="my-25">
                <div class="d-flex flex-wrap">
                  <div class="user-info-title">
                    <span class="card-text user-info-title font-weight-bold mb-0 mr-1"> اسلوب شغل الوظيفة  :</span>
                  </div>
                  <p class="card-text mb-0">{{$employee->jobs_history->first()->job_style->name}}</p>
                </div>
              </li>
              <li>
                <div class="d-flex flex-wrap">
                  <div class="user-info-title">
                    <span class="card-text user-info-title font-weight-bold mb-0 mr-1">  الدرجة المالية :</span>
                  </div>
                  <p class="card-text mb-0">{{$employee->jobs_history->first()->financial_degree->name}}</p>
                </div>
              </li>
            </ul>
            <button class="btn btn-primary text-center btn-block">اضافة وظيفة جديدة  </button> 
          </div>
        </div>
      </div>
    <!-- /Plan CardEnds -->
  </div>
  <!-- User Timeline & Permissions Ends -->

  <!-- User Invoice Starts-->
  <div class="row invoice-list-wrapper">
    <div class="col-12">
      <div class="card">
        <div class="card-datatable table-responsive">
          <table class="invoice-list-table table">
            <thead>
              <tr>
                <th></th>
                <th>#</th>
                <th><i data-feather="trending-up"></i></th>
                <th>Client</th>
                <th>Total</th>
                <th class="text-truncate">Issued Date</th>
                <th>Balance</th>
                <th>Invoice Status</th>
                <th class="cell-fit">Actions</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- /User Invoice Ends-->
</section>
@endsection

@section('vendor-script')
<script src="{{asset(mix('vendors/js/extensions/moment.min.js'))}}"></script>
<script src="{{asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js'))}}"></script>
<script src="{{asset(mix('vendors/js/tables/datatable/datatables.bootstrap4.min.js'))}}"></script>
<script src="{{asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js'))}}"></script>
<script src="{{asset(mix('vendors/js/tables/datatable/responsive.bootstrap4.js'))}}"></script>
<script src="{{asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js'))}}"></script>
<script src="{{asset(mix('vendors/js/tables/datatable/buttons.bootstrap4.min.js'))}}"></script>
<script src="{{ asset(mix('vendors/js/extensions/sweetalert2.all.min.js')) }}"></script>  
<script src="{{ asset(mix('vendors/js/extensions/toastr.min.js')) }}"></script>   
<script src="{{ asset(mix('js/scripts/confirm-delete.js')) }}"></script>
@endsection
@section('page-script')
  {{-- Page js files --}}
  <script src="{{ asset(mix('js/scripts/pages/app-user-view.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/extensions/ext-component-sweet-alerts.js')) }}"></script>
@endsection
 