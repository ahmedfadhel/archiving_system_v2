@extends('layouts.app')

@section('content')
    <div class="roles">
      <div class="columns m-t-10  p-r-10 ">
        <div class="column">
          <h2 class="is-size-4 dash-title has-text-danger ">
            الادارة  الادوار
          </h2>
        </div>
        <div class="column">
          <a href="{{route('roles.create')}}" class="button is-danger is-pulled-left">أنشاء دور جديدة</a>
        </div>
      </div>
      <hr class="is-marginless">
      <div class="columns m-t-30">
        <div class="column is-10 is-offset-1">
          <div class="card">
            <div class="card-header">
              <div class="card-header-title">الادوار المتوفرة</div>
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
                  @foreach ($roles as $role)
                    <tr>
                      <th>{{$role->id}}</th>
                      <th>{{$role->name}}</th>
                      <th>{{$role->display_name}}</th>
                      <th>{{$role->description}}</th>
                      <th>
                        <a href="{{route('roles.show',$role->id)}}" class="button is-outlined is-info">View</a>
                        <a href="{{route('roles.edit',$role->id)}}" class="button is-outlined is-success">Edit</a>
                        
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