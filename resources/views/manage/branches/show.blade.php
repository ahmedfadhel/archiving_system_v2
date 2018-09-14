@extends('layouts.app')

@section('content')
  <div class="branches">
    <div class="columns m-t-10  p-r-10 ">
        <div class="column">
          <h2 class="is-size-4 dash-title has-text-danger ">
            معلومات الفرع
          </h2>
        </div>
    </div>
    <hr class="is-marginless m-b-30">
    <div class="columns p-r 10">
      <div class="column is-6 is-offset-3">
        <div class="card">
          <div class="card-header">
            <div class="card-header-title">
                <h3 class="is-size-5">تفاصيل الفرع</h3>
            </div>
          </div>
          <div class="card-content is-paddingless">
            <ul>
              <li class="p-10">
                <span>
                  اسم الفرع : 
                </span>
                {{$branch->name}}
              </li>
              <li class="p-10">
                <span>
                  رمز الفرع : 
                </span>
                {{$branch->brch_code}}
              </li>
              <li class="p-10">
                <span>
                  موقع الفرع : 
                </span>
                {{$branch->location->name}}
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection