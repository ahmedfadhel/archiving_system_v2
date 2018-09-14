@extends('layouts.app')

@section('content')
    <div class="users">
      <div class="columns m-t-10  p-r-10 ">
        <div class="column">
          <h2 class="is-size-4 dash-title has-text-danger ">
          الادارة  المستخدمين
          </h2>
        </div>
        <div class="column">
          <a href="{{route('users.create')}}" class="button is-danger is-pulled-left">أنشاء مستخدم جديد</a>
        </div>
      </div>
      <hr class="is-marginless">
      <div class="columns">
        <div class="column is-10 is-offset-1">
          <div class="card">
            <div class="card-header">
              <div class="card-header-title">
                جدول المتسخدمين
              </div>
            </div>
            <div class="card-content">
              <table class="table is-fullwidth">
                <thead>
                  <tr>
                    <th>ت</th>
                    <th>الاسم</th>
                    <th>البريد الالكتروني</th>
                    <th> التحكم</th>
                  </tr>
                </thead>
                <tbody> 
                  @foreach ($users as $user)
                      <tr>
                        <th>{{$user->id}}</th>
                        <th>{{$user->name}}</th>
                        <th>{{$user->email}}</th>
                        <th>
                            <a href="{{route('users.show',$user->id)}}" class="button is-outlined is-info">View</a>
                            <a href="{{route('users.edit',$user->id)}}" class="button is-outlined is-success">Edit</a>
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