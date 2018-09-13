@extends('layouts.app')

@section('content')
  <div class="dashboard">
    <div class="columns m-t-10  p-r-10 ">
        <div class="column">
            <h2 class="is-size-4 dash-title has-text-danger ">
                الادارة العامة
            </h2>
        </div>
    </div>
    <div class="columns is-desktop">
        <div class="column">
            <div class="info-box p-10 ">
                <div class="hero is-primary has-border-radius">
                    <div class="hero-body has-text-centered">
                        عدد المستخدمين
                        <p>
                            {{count($users)}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="info-box p-10 ">
                <div class="hero is-primary has-border-radius">
                    <div class="hero-body has-text-centered">
                        عدد  الادوار 
                        <p>
                            {{count($roles)}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="info-box p-10 ">
                <div class="hero is-primary has-border-radius">
                    <div class="hero-body has-text-centered">
                        عدد الصلاحيات
                       
                        <p>
                            {{count($permissions)}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="info-box p-10 ">
                <div class="hero is-primary has-border-radius">
                    <div class="hero-body has-text-centered">
                        عدد الفروع
                        
                        <p>
                            100
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="info-box p-10 ">
                <div class="hero is-primary has-border-radius">
                    <div class="hero-body has-text-centered">
                        عدد الاقسام
                       
                        <p>
                            100
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="columns p-10 is-desktop">
        <div class="column">
            <div class="card">
                <div class="card-header p-10">
                    <h3 class="is-size-5">المستخدمين</h3>
                </div>
                <div class="card-content">
                    <b-table :data="users" :columns="columns" :isBordered="isBordered"></b-table>
                </div>
            </div>
            
        </div>
        <div class="column">
            <div class="card">
                <div class="card-header p-10">
                    <h3 class="is-size-5">الادوار</h3>
                </div>
                <div class="card-content">
                    <b-table :data="roles" :columns="roleColumns" :isBordered="isBordered"></b-table>
                </div>
            </div>
            
        </div>
    </div>
  </div>
  <hr>
  <div class="columns p-10 is-desktop">
        <div class="column">
            <div class="card">
                <div class="card-header p-10">
                    <h3 class="is-size-5">الصلاحيات</h3>
                </div>
                <div class="card-content">
                    <b-table :data="permissions" :columns="roleColumns" :isBordered="isBordered"></b-table>
                </div>
            </div>
            
        </div>
  </div>
@endsection

@section('scripts')
    <script>
        const mainApp = new Vue({
            el:'#app',
            
            data:{
                users: {!! json_encode($users) !!},
                roles: {!! json_encode($roles) !!},
                permissions: {!! json_encode($permissions) !!},
                columns:[
                {
                    field: 'id',
                    label: 'ID',
                    width: '40',
                    numeric: true
                },
                {
                    field: 'name',
                    label: 'Full Name',
                },
                {
                    field: 'email',
                    label: 'Email'
                }
            ],
            roleColumns:[
                {
                    field: 'id',
                    label: 'ID',
                    width: '40',
                    numeric: true
                },
                {
                    field: 'name',
                    label: 'Full Name',
                },
                {
                    field: 'description',
                    label: 'Description'
                }
            ]
            ,
            isBordered:true
                
        }
    })
    </script>
@endsection
