@extends('layouts.app')

@section('content')
    <div class="users">
      <div class="columns m-t-10  p-r-10 ">
        <div class="column is-full-mobile">
          <h2 class="is-size-4 dash-title has-text-danger ">
          الادارة  المستخدمين
          </h2>
        </div>
        <div class="column is-full-mobile">
          <a href="{{route('users.create')}}" class="button is-danger is-pulled-left">أنشاء مستخدم جديد</a>
        </div>
      </div>
      <div class="is-clearfix"></div>
      <hr class="is-marginless">
      <div class="columns m-t-10">
        <div class="column is-10 is-offset-1 is-full-mobile">
          <div class="card">
            <div class="card-header">
              <div class="card-header-title">
                جدول المتسخدمين
              </div>
            </div>
            <div class="card-content table-container">
              {{-- Start Table --}}
              <b-table
                :data="users" 
                :mobile-cards="hasMobileCards"
                :hoverable="isHoverable"
                :paginated="isPaginated"
                :per-page="perPage"
                :pagination-simple="isPaginationSimple"> 
                
                <template slot-scope="props" >
                  <b-table-column field="id" label="ت" width="40" numeric>
                    @{{ props.row.id }} 
                  </b-table-column>

                  <b-table-column field="name" label="الاسم" width="40" numeric>
                    @{{ props.row.name }}  
                  </b-table-column>

                  <b-table-column field="email" label="البريد الالكتروني" width="40" numeric>
                    @{{ props.row.email}}
                  </b-table-column>
                  <b-table-column field="role" label="الدور" width="40" numeric>
                      @{{ props.row.description}}
                      <ul>
                        <li v-for="role in props.row.roles">
                        @{{role.name}}
                        </li>
                      </ul>
                  </b-table-column>
                  <b-table-column field="department" label="القسم" width="40" numeric>
                    <span v-if="props.row.department">@{{props.row.department.name}}</span>
                    <span v-else>/</span>
                  </b-table-column>
                  <b-table-column label="التحكم" width="40" numeric>  
                    <a class="button is-info is-outlined is-fullwidth m-b-5" :href=`roles\/${props.row.id}`>View</a>
                    <a class="button is-success is-outlined is-fullwidth" :href=`roles\/${props.row.id}\/edit`>Edit</a>
                  </b-table-column>
                </template>
            </b-table>
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
        users: {!! json_encode($users) !!},
        hasMobileCards: true,
        isHoverable: true,
        perPage: 10,
        isPaginated: true,
        isPaginationSimple:true 
      }
    })
  </script>
@endsection