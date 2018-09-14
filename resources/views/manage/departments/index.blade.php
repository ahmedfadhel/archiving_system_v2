@extends('layouts.app')

@section('content')
  <div class="departments">
    <div class="columns m-t-10  p-r-10 ">
      <div class="column">
        <h2 class="is-size-4 dash-title has-text-danger ">
          الادارة الاقسام
        </h2>
      </div>
      <div class="column">
        <a href="{{route('departments.create')}}" class="button is-danger is-pulled-left">أنشاء قسم جديد</a>
      </div>
    </div>
    <hr class="is-marginless">
    <div class="columns">
      <div class="column is-10 is-offset-1">
        <div class="card">
          <div class="card-header">
            <div class="card-header-title">
              <h3>
                ادارة الاقسام
              </h3>
            </div>
          </div>
          <div class="card-content">
            <table class="table is-fullwidth">
              <thead>
                <tr>
                  <th>ت</th>
                  <th>اسم القسم</th>
                  <th>وصف القسم</th>
                  <th>الفرع</th>
                  <th>التحكم</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($departments as $department)
                    <tr>
                    <td>{{$department->id}}</td>
                    <td>{{$department->name}}</td>
                    <td>{{$department->description}}</td>
                    <td>{{$department->branch->name}} / {{$department->branch->location->name}}</td>
                      <td>
                      <a href="{{route('departments.show',$department->id)}}" class="button is-info is-outlined">View</a>
                      <a href="{{route('departments.edit',$department->id)}}" class="button is-success is-outlined">Edit</a>
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