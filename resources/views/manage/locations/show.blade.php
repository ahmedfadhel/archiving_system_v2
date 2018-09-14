@extends('layouts.app')
@section('content')
    
  <div class="locations">
    <div class="columns m-t-10  p-r-10 ">
        <div class="column">
          <h2 class="is-size-4 dash-title has-text-danger ">
            معلومات الموقع
          </h2>
        </div>
    </div>
    <hr class="is-marginless m-b-30">
    <div class="columns p-r-10">
      <div class="column is-6 is-offset-3">
        <div class="card">
          <div class="card-header">
            <div class="card-header-title">
                <h3 class="is-size-5">تفاصيل الموقع</h3>
            </div>
          </div>
          <div class="card-content is-paddingless">
            <ul>
              <li class="p-10">
                <span>
                  اسم الموقع : 
                </span>
                {{$location->name}}
              </li>
              <li class="p-10">
                <span>
                  رمز الموقع : 
                </span>
                {{$location->loc_code}}
              </li>
              <li class="p-10">
                <span>
                  فروع الموقع : 
                </span>
                
                  @foreach ($location->branch as $branch)
                    <span >
                      <a href="{{route('branches.show',['id'=>$branch->id])}}">{{$branch->name}}</a>
                    </span>
                  @endforeach
                
                
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection