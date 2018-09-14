@extends('layouts.app')
@section('content')
    
  <div class="locations">
      <div class="columns m-t-10  p-r-10 ">
        <div class="column">
          <h2 class="is-size-4 dash-title has-text-danger ">
            أنشاء موقع جديد
          </h2>
        </div>
    </div>
    <hr class="is-marginless m-b-30">
    <div class="columns p-r-10">
      <div class="column is-6 is-offset-3 ">
        <div class="card">
          <div class="card-header">
            <div class="card-header-title">
              معلومات الموقع الجديد
            </div>
          </div>
          <div class="card-content">
            <form action="{{ route('locations.store')}}" method="POST">
              {{ csrf_field() }}
              <b-field 
                
                custom-class="m-l-10" 
                label="اسم الموقع"
                type="{{$errors->has('name')? 'is-danger':''}}"
                message="{{$errors->has('name')? $errors->first('name'):''}}">
                <b-input 
                  expanded              
                  type="text"
                  placeholder="أسم الموقع الجديد"
                  value=""
                  name="name">
                </b-input>  
              </b-field>
  
              <b-field
                
                custom-class="m-l-10" 
                label="رمز الموقع"
                type="{{$errors->has('loc_code')? 'is-danger':''}}"
                message="{{$errors->has('loc_code')? $errors->first('loc_code'):''}}">
                <b-input
                 
                  :readonly="readOnly"
                  expanded              
                  type="text"
                  placeholder="رمز الموقع الجديد"
                  :value="locationCode"
                  name="loc_code">
                </b-input>  
              </b-field>
              <button class="button is-danger is-outlined is-fullwidth m-t-20" type="submit">أنشاء</button>
            </form>
          </div>
        </div>
      </div>
  </div>

@endsection
@section('scripts')
<script>
    const app = new Vue({
      el: "#app",
      data: {
        readOnly: false,
        location_id: [],
        locationCode: '',
      
  
      },
    
    })
  </script>
@endsection