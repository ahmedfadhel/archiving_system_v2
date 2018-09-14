@extends('layouts.app')
@section('content')
  <div class="branches">
    <div class="columns m-t-10  p-r-10 ">
        <div class="column">
          <h2 class="is-size-4 dash-title has-text-danger ">
            أنشاء فرع جديد
          </h2>
        </div>
    </div>
    <hr class="is-marginless m-b-30">
    <div class="columns p-r-10">
      <div class="column is-6 is-offset-3 ">
        <div class="card">
          <div class="card-header">
            <div class="card-header-title">
              معلومات الفرع الجديد
            </div>
          </div>
          <div class="card-content">
            <form action="{{ route('branches.store')}}" method="POST">
              {{ csrf_field() }}
              <b-field 
                
                custom-class="m-l-10" 
                label="اسم الفرع"
                type="{{$errors->has('name')? 'is-danger':''}}"
                message="{{$errors->has('name')? $errors->first('name'):''}}">
                <b-input 
                  expanded              
                  type="text"
                  placeholder="أسم الفرع الجديد"
                  value=""
                  name="name">
                </b-input>  
              </b-field>
              
              <b-field 
                custom-class="m-l-30"
                label="الموقع"
                type="{{$errors->has('location_id')? 'is-danger':''}}"
                message="{{$errors->has('location_id')? $errors->first('location_id'):''}}">
                
                <b-select 
                  placeholder="أختر موقع الفرع" 
                  expanded
                  v-model="location_id"
                  name="location_id">
                  <option
                    v-for="option in locations"
                    :value="option.id"
                    :key="option.id"
                    >
                    @{{ option.name }}
                  </option>
                </b-select>
              </b-field>
              
              <b-field
                
                custom-class="m-l-10" 
                label="رمز الفرع"
                type="{{$errors->has('brch_code')? 'is-danger':''}}"
                message="{{$errors->has('brch_code')? $errors->first('brch_code'):''}}">
                <b-input
                  @focus="setLocationCodeValue(location_id)"
                  @click="setLocationCodeValue(location_id)"
                  :readonly="readOnly"
                  expanded              
                  type="text"
                  placeholder="رمز الفرع الجديد"
                  :value="locationCode"
                  name="brch_code">
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
          locations : {!! json_encode($locations) !!},
          branches : {!! json_encode($branches) !!},
          errors: {!! $errors !!}
        },
        methods:{
          setLocationCodeValue(val){
            
            let location = this.locations.filter(el=>{
              return el.id === val
            })
            let count = this.branches.filter(el=>{
              return el.location_id == val
            });

          this.locationCode = location[0].loc_code + '-'+(count.length+1)
          this.readOnly = true
          }
        }
      })
    </script>
@endsection