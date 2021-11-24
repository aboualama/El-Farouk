
        <table class="table table-bordered">
            <thead>
              <tr>
                <th class="text-center"> الاسم الاول</th>
                <th class="text-center"> النوع</th>
                <th class="text-center"> الحالة الصحية</th>
                <th class="text-center"> الحالة الاجتماعية</th>
                <th class="text-center"> الحالة العسكرية</th>
                <th class="text-center"> رقم الهاتف</th>
                <th class="text-center"> المؤهل</th>
              </tr>
            </thead>
            <tbody>
  
              @foreach ($employee as $record) 
                  <tr>
                    <td>{{$record->first_name}}</td> 
                    <td>{{$record->gender->name}}</td>  
                    <td>{{$record->health_status->name}}</td>   
                    <td>{{$record->social_status->name}}</td>  
                    <td>{{$record->military_treatment->name}}</td>  
                    <td>
                        @foreach($record->phones as $phone)
                         {{ $phone->number }} -  
                        @endforeach
                    </td>   
                    <td>
                        @foreach($record->qualification as $qualification)
                         {{ $qualification->name }} 
                        @endforeach
                    </td>   
                  </tr>
              @endforeach
            
            </tbody>
          </table>