@extends('layouts.app')

@section('content')
    <div class="departments">
        <div class="columns m-t-10  p-r-10 ">
            <div class="column">
                <h2 class="is-size-4 dash-title has-text-danger ">
                 أنشاء الاقسام جديد
                </h2>
            </div>
        </div>
        <hr class="is-marginless m-b-30">
        <div class="columns p-r-10">
            <div class="column is-6 is-offset-3">
                <div class="card">
                    <div class="card-header">
                        <div class="card-header-title">
                            معلومات القسم الجديد
                        </div>
                    </div>
                    <div class="card-content">
                        <form action="{{route('departments.store')}}" method="POST">
                            {{ csrf_field() }}
                        <b-field 
                            custom-class="m-l-10" 
                            label="اسم القسم"
                            type="{{$errors->has('name')? 'is-danger':''}}"
                            message="{{$errors->has('name')? $errors->first('name'):''}}">
                            <b-input 
                            expanded              
                            type="text"
                            placeholder="أسم القسم الجديد"
                            value=""
                            name="name">
                            </b-input>  
                        </b-field>

                        <b-field 
                            custom-class="m-l-10" 
                            label="وصف القسم"
                            type="{{$errors->has('description')? 'is-danger':''}}"
                            message="{{$errors->has('description')? $errors->first('description'):''}}">
                            <b-input 
                            expanded              
                            maxlength="200" 
                            type="textarea"
                            placeholder="معلومات تقوم بوصف طبيعة عمل القسم"
                            value=""
                            name="description">
                            </b-input>  
                        </b-field>

                        <b-field 
                        custom-class="m-l-30"
                        label="الموقع"
                        type="{{$errors->has('branch_id')? 'is-danger':''}}"
                        message="{{$errors->has('branch_id')? $errors->first('branch_id'):''}}">
                        
                            <b-select 
                            placeholder="أختر موقع الفرع" 
                            expanded
                            v-model="branch_id"
                            name="branch_id">
                                <option
                                    v-for="option in branches"
                                    :value="option.id"
                                    :key="option.id"
                                    >
                                    @{{ option.name }}
                                </option>
                            </b-select>
                        </b-field>
                        <button class="button is-outlined is-danger" type="submit">انشاء</button>
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
                branches : {!! json_encode($branches)!!},
                branch_id:''
            }
        })
    </script>
@endsection