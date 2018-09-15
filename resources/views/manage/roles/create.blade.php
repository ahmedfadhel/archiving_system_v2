@extends('layouts.app')

@section('content')
    <div class="roles">
      <div class="columns m-t-10  p-r-10 ">
        <div class="column">
          <h2 class="is-size-4 dash-title has-text-danger ">
          الادارة  المستخدمين
          </h2>
        </div>
      </div>
      <hr class="is-marginless">
      <div class="columns m-t-10">
        <div class="column is-6 is-offset-3 is-full-mobile">
          <div class="card">
            <div class="card-header">
              <div class="card-header-title">
                <h2 class="is-size-5">
                  أنشاء دور جديد
                </h2>
              </div>
            </div>
            <div class="card-content">
              <form action="{{route('roles.store')}}" method="POST">
                  {{ csrf_field() }}
                <b-field 
                  custom-class="m-l-10" 
                  label="اسم الدور"
                  type="{{$errors->has('name')? 'is-danger':''}}"
                  message="{{$errors->has('name')? $errors->first('name'):''}}">
                  <b-input 
                    expanded              
                    type="text"
                    placeholder="الدور الجديد"
                    value=""
                    icon-pack="fa"
                    name="name">
                  </b-input>  
                </b-field>
                <b-field 
                  custom-class="m-l-10" 
                  label="اسم الدور بالغة العربيه"
                  type="{{$errors->has('display_name')? 'is-danger':''}}"
                  message="{{$errors->has('display_name')? $errors->first('display_name'):''}}">
                  <b-input 
                    expanded              
                    type="text"
                    placeholder="اسم الدور باللغة العربية"
                    value=""
                    icon-pack="fa"
                    name="display_name">
                  </b-input>  
                </b-field>
                <b-field 
                  custom-class="m-l-10" 
                  label="وصف الدور"
                  type="{{$errors->has('description')? 'is-danger':''}}"
                  message="{{$errors->has('description')? $errors->first('description'):''}}">
                  <b-input 
                    expanded              
                    type="text"
                    placeholder="وصف الدور"
                    value=""
                    icon-pack="fa"
                    name="description">
                  </b-input>  
                </b-field>
                <button class="button is-outlined is-danger is-fullwidth" type="submit">أنشاء</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

@section('scripts')
    <script>
      const app = new Vue({
        el:"#app",
        data:{

        }
      })
    </script>
@endsection