@extends('layouts.app')

@section('content')
    
  <div class="permissions">
    <div class="columns m-t-10  p-r-10 ">
      <div class="column">
        <h2 class="is-size-4 dash-title has-text-danger ">
          الادارة الصلاحيات
        </h2>
      </div>
      <div class="column">
        <a href="{{route('permissions.create')}}" class="button is-danger is-pulled-left">أنشاء صلاحية جديدة</a>
      </div>
    </div>
    <hr class="is-marginless">
    <div class="columns">
      <div class="column is-10 is-offset-1">
        <div class="card">
          <div class="card-header">
            <div class="card-header-title">
              الصلاحيات المتوفرة
            </div>
          </div>
          <div class="card-content">
            <table class="table is-fullwidth">
              <thead>
                <tr>
                  <th>ت</th>
                  <th>الاسم</th>
                  <th>الاسم الصريح</th>
                  <th>وصف التصريح</th>
                  <th>التحكم</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($permissions as $permission)
                    <tr>
                      <th>{{$permission->id}}</th>
                      <th>{{$permission->name}}</th>
                      <th>{{$permission->display_name}}</th>
                      <th>{{$permission->description}}</th>
                      <th>
                        <a href="{{route('permissions.show',$permission->id)}}" class="button is-outlined is-info">View</a>
                        <a href="{{route('permissions.edit',$permission->id)}}" class="button is-outlined is-success">Edit</a>
                        
                      </th>
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