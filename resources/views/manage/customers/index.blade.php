@extends('layouts.app')

@section('content')
  <div class="customers">
    <div class="columns m-t-10  p-r-10 ">
      <div class="column">
        <h2 class="is-size-4 dash-title has-text-danger ">
          الادارة الزبائن
        </h2>
      </div>
      <div class="column">
        <a href="{{route('departments.create')}}" class="button is-danger is-pulled-left">أنشاء زبون جديد</a>
      </div>
    </div>
    <hr class="is-marginless">
    <div class="columns">
      <div class="column is-10 is-offset-1">
        <div class="card">
          <div class="card-header">
            <div class="card-header-title">
              <h2 class="is-size-5">
                 الزبائن
              </h2>
            </div>
          </div>
          <div class="card-content">
            <table class="table is-fullwidth">
              <thead>
                <th>ت</th>
                <th>الاسم</th>
                <th>الوصف</th>
                <th>التحكم</th>
              </thead>
              <tbody>
                @foreach ($customers as $customer)
                  <tr>
                    <td>{{$customer->id}}</td>
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->descrption}}</td>
                    <td>
                     <a href="{{route('customers.show',$customer->id)}}" class="button is-outlined">View</a>
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