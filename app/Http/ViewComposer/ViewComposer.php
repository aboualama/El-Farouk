<?php 

namespace App\Http\ViewComposer;

use DB;
use Carbon\Carbon; 
use App\Models\Year;   
use App\Models\Category;
use App\Models\Setting;  
use App\Models\OtherSetting;
use App\Models\SchoolRecord;
use App\Models\StudentCount;
use Alkoumi\LaravelHijriDate\Hijri;
use Illuminate\Contracts\View\View;

class ViewComposer {


    
    public function compose(View $view) {
  

		$view->with('settings', Setting::first()); 
 

    }
}
 
