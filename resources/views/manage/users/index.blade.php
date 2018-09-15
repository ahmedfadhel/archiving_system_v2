@extends('layouts.app')

@section('content')
    <div class="users">
      <div class="columns m-t-10  p-r-10 ">
        <div class="column is-full-mobile">
          <h2 class="is-size-4 dash-title has-text-danger ">
          الادارة  المستخدمين
          </h2>
        </div>
        <div class="column is-full-mobile">
          <a href="{{route('users.create')}}" class="button is-danger is-pulled-left">أنشاء مستخدم جديد</a>
        </div>
      </div>
      <div class="is-clearfix"></div>
      <hr class="is-marginless">
      <div class="columns m-t-10">
        <div class="column is-10 is-offset-1 is-full-mobile">
          <div class="card">
            <div class="card-header">
              <div class="card-header-title">
                جدول المتسخدمين
              </div>
            </div>
            <div class="card-content table-container">
              <table class="table is-fullwidth">
                <thead>
                  <tr>
                    <th>ت</th>
                    <th>الاسم</th>
                    <th>البريد الالكتروني</th>
                    
                    <th>الدور</th>
                    <th> التحكم</th>
                  </tr>
                </thead>
                <tbody> 
                  @foreach ($users as $user)
                      <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                          @foreach ($user->roles as $info)
                            {{$info->display_name}}
                          @endforeach
                        </td>
                        <td>
                            <a href="{{route('users.show',$user->id)}}" class="button is-outlined is-info">View</a>
                            <a href="{{route('users.edit',$user->id)}}" class="button is-outlined is-success">Edit</a>
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