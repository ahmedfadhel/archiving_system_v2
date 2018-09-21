@extends('layouts.app')

@section('content')
    <div class="roles">
      <div class="columns m-t-10  p-r-10 ">
        <div class="column">
          <h2 class="is-size-4 dash-title has-text-danger ">
            الادارة  الادوار
          </h2>
        </div>
        <div class="column">
          <a href="{{route('roles.create')}}" class="button is-danger is-pulled-left">أنشاء دور جديدة</a>
        </div>
      </div>
      <hr class="is-marginless">
      <div class="columns m-t-30">
        <div class="column is-10 is-offset-1">
          <div class="card">
            <div class="card-header">
              <div class="card-header-title">الادوار المتوفرة</div>
            </div>
            <div class="card-content">
              {{-- Table Start --}}
            <b-table
              :data="roles" 
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

                <b-table-column field="display_name" label="وصف القسم" width="40" numeric>
                  @{{ props.row.display_name}}
                </b-table-column>
                <b-table-column field="description" label=" وصف التصريح" width="40" numeric>
                    @{{ props.row.description}}
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
        roles: {!! json_encode($roles) !!},
        hasMobileCards: true,
        isHoverable: true,
        perPage: 10,
        isPaginated: true,
        isPaginationSimple:true 
      }
    })
  </script>
@endsection