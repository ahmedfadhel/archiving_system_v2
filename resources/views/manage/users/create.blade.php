@extends('layouts.app')

@section('content')
    <div class="users">
      <div class="columns m-t-10  p-r-10 ">
        <div class="column">
          <h2 class="is-size-4 dash-title has-text-danger ">
          الادارة  المستخدمين
          </h2>
        </div>
      </div>
      <hr class="is-marginless">
      <div class="columns m-t-30">
        <div class="column is-6 is-offset-3 is-full-mobile" >
          <div class="card">
            <div class="card-header">
              <div class="card-header-title">
                أضافة مستخدم جديد
              </div>
            </div>
            <div class="card-content p-b-100">
              <form action="{{route('users.store')}}" method="POST">
                  {{ csrf_field() }}
                <b-field 
                  custom-class="m-l-10" 
                  label="اسم المستخدم"
                  type="{{$errors->has('name')? 'is-danger':''}}"
                  message="{{$errors->has('name')? $errors->first('name'):''}}">
                    <b-input 
                    expanded              
                    type="text"
                    placeholder="أسم المستخدم الجديد"
                    value=""
                    name="name">
                    </b-input>  
                </b-field>
                <b-field 
                  custom-class="m-l-10" 
                  label="البريد الالكتروني"
                  type="{{$errors->has('email')? 'is-danger':''}}"
                  message="{{$errors->has('email')? $errors->first('email'):''}}">
                    <b-input 
                    expanded              
                    type="text"
                    placeholder="البريد الالكتروني"
                    value=""
                    name="email">
                    </b-input>  
                </b-field>
                <b-field 
                  custom-class="m-l-10" 
                  label="كلمة المرور"
                  type="{{$errors->has('password')? 'is-danger':''}}"
                  message="{{$errors->has('password')? $errors->first('password'):''}}">
                    <b-input 
                    expanded              
                    type="password"
                    placeholder="كلمة المرور"
                    value=""
                    name="password"
                    password-reveal
                    icon-pack="fa"
                    class="eye">
                    </b-input>  
                </b-field>
                <b-field 
                  custom-class="m-l-10" 
                  label="تأكيد كلمة المرور"
                  type="{{$errors->has('password_confirmation')? 'is-danger':''}}"
                  message="{{$errors->has('password_confirmation')? $errors->first('password'):''}}">
                    <b-input 
                    expanded              
                    type="password"
                    placeholder="تأكيد كلمة المرور"
                    value=""
                    name="password_confirmation"
                    password-reveal
                    icon-pack="fa"
                    class="eye">
                    </b-input>  
                </b-field>
                <b-field 
                custom-class="m-l-30"
                label="القسم / الفرع / المحافظة"
                type="{{$errors->has('department_id')? 'is-danger':''}}"
                message="{{$errors->has('department_id')? $errors->first('department_id'):''}}">
                
                    <b-select 
                    placeholder="أختر موقع الفرع" 
                    expanded
                    v-model="department_id"
                    name="department_id">
                        <option
                            v-for="option in departments"
                            :value="option.id"
                            :key="option.id"
                            >
                            @{{ option.name }} / @{{branches[option.name]}}
                        </option>
                    </b-select>
                </b-field>
                
                <b-field 
                custom-class="m-l-30"
                label="الدور"
                type="{{$errors->has('role')? 'is-danger':''}}"
                message="{{$errors->has('role')? $errors->first('role'):''}}">
                
                    <b-select 
                    placeholder="أختر موقع الفرع" 
                    expanded
                    v-model="role"
                    name="role">
                        <option
                            v-for="option in roles"
                            :value="option.id"
                            :key="option.id"
                            >
                            @{{ option.name }}
                        </option>
                    </b-select>
                </b-field>
                <button class="button is-outlined is-danger is-fullwidth m-t-40" type="submit">أنشاء</button>
              </form>
              {{$errors}}
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
          departments: {!! json_encode($departments) !!},
          branches: {!! json_encode($branches) !!},
          roles: {!! json_encode($roles) !!},
          department_id: '',
          role:''
        }
      })
    </script>
@endsection