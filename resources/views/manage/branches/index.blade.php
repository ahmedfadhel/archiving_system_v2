@extends('layouts.app')

@section('content')
  <div class="branches">
      <div class="columns m-t-10  p-r-10 ">
          <div class="column">
            <h2 class="is-size-4 dash-title has-text-danger ">
              الادارة الفروع
            </h2>
            
          </div>
          <div class="column">
            <a href="{{route('branches.create')}}" class="button is-danger is-pulled-left">أنشاء فرع جديد</a>
          </div>
      </div>
      <hr>
      <div class="columns">
        <div class="column is-10 is-offset-1">
           <div class="card">
             <div class="card-header">
               <h3 class="card-header-title">
                 الفروع
               </h3>
             </div>
             <div class="card-content">
               <table class="table is-fullwidth">
                 <thead>
                   <tr>
                     <th>ت</th>
                     <th>ألاسم</th>
                     <th>رمز الفرع</th>
                     <th>الموقع</th>
                     <th>التحكم</th>
                   </tr>
                 </thead>
                 <tbody>
                   @foreach ($branches as $branch)
                       <tr>
                         <td>{{$branch->id}}</td>
                         <td>{{$branch->name}}</td>
                         <td>{{$branch->brch_code}}</td>
                         <td>{{$branch->location->name}}</td>
                         <td>
                           <a href="{{route('branches.show',['id'=>$branch->id])}}" class="button is-info is-outlined">View</a>
                           <a href="{{route('branches.edit',['id'=>$branch->id])}}" class="button is-success is-outlined">Edit</a>
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

@section('scripts')
    
@endsection