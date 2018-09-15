@extends('layouts.app')

@section('content')
  <div class="users">
    <div class="columns m-t-10  p-r-10 ">
        <div class="column">
          <h2 class="is-size-4 dash-title has-text-danger ">
            معلومات المستخدم
          </h2>
        </div>
    </div>
    <hr class="is-marginless m-b-30">

    <div class="columns p-r-10">
      <div class="column is-6 is-offset-3">
        <div class="card">
          <div class="card-header">
          <div class="card-header-title">معلومات المستخدم : {{$user->name}}</div>
          </div>
          <div class="card-content is-paddingless">
            <ul>
              <li class="p-10">
                <span>
                  اسم المستخدم : 
                </span>
                {{$user->name}}
              </li>
              <li class="p-10">
                <span>
                  البريد الالكتروني : 
                </span>
                {{$user->email}}
              </li>
              <li class="p-10">
                دور المستخدم : 
                @foreach ($user->roles as $role)
                    <span>
                      {{$role->display_name}}
                    </span>
                @endforeach
              </li>
              <li class="p-10">
                  قسم / فرع / محافظة: 
                  <br>
                 {{$user->department->name}} / {{$user->department->branch->name}} / {{$user->department->branch->location->name}}
                </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scritps')

@endsection