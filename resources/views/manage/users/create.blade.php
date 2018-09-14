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
            <div class="card-content">
              <form>
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