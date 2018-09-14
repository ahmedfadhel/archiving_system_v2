@extends('layouts.app')
@section('content')
<div class="locations">
    <div class="columns m-t-10  p-r-10 ">
        <div class="column">
          <h2 class="is-size-4 dash-title has-text-danger ">
            الادارة المواقع
          </h2>
          
        </div>
        <div class="column">
          <a href="{{route('locations.create')}}" class="button is-danger is-pulled-left">أنشاء فرع جديد</a>
        </div>
    </div>
    <hr>
    <div class="columns">
      <div class="column is-10 is-offset-1">
         <div class="card">
           <div class="card-header">
             <h3 class="card-header-title">
               المواقع
             </h3>
           </div>
           <div class="card-content">
             <table class="table is-fullwidth">
               <thead>
                 <tr>
                   <th>ت</th>
                   <th>ألاسم</th>
                   <th>رمز الموقع</th>
                   <th>الفروع</th>
                   <th>التحكم</th>
                 </tr>
               </thead>
               <tbody>
                 @foreach ($locations as $location)
                     <tr>
                      <td>{{$location->id}}</td>
                      <td>{{$location->name}}</td>
                      <td>{{$location->loc_code}}</td>
                      <td>
                        <ul>
                          @foreach ($location->branch as $branch)
                            <li>
                              <a href="{{route('branches.show',['id'=>$branch->id])}}">{{$branch->name}}</a>
                            </li> 
                          @endforeach

                        </ul>
                        
                      </td>
                      <td>
                        <a href="{{route('locations.show',['id'=>$location->id])}}" class="button is-info is-outlined">View</a>
                        <a href="{{route('locations.edit',['id'=>$location->id])}}" class="button is-success is-outlined">Edit</a>
                      </td>
                     </tr>
                 @endforeach
               </tbody>
             </table>
           </div>
         </div>
      </div>
    </div>
</div>
@endsection