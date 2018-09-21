@extends('layouts.app')

@section('content')
  <div class="departments">
    <div class="columns m-t-10  p-r-10 ">
      <div class="column">
        <h2 class="is-size-4 dash-title has-text-danger ">
          الادارة الاقسام
        </h2>
      </div>
      <div class="column">
        <a href="{{route('departments.create')}}" class="button is-danger is-pulled-left">أنشاء قسم جديد</a>
      </div>
    </div>
    <hr class="is-marginless">
    <div class="columns">
      <div class="column is-10 is-offset-1">
        <div class="card">
          <div class="card-header">
            <div class="card-header-title">
              <h3>
                ادارة الاقسام
              </h3>
            </div>
          </div>
          <div class="card-content">
            {{-- Table Start --}}
          <b-table
            :data="departments" 
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

              <b-table-column field="description" label="وصف القسم" width="40" numeric>
                @{{ props.row.description}}
              </b-table-column>
              <b-table-column field="location" label=" المحافظة / الفرع" width="40" numeric>
                @{{ props.row.branch.name }} / @{{ props.row.branch.location.name }}
              </b-table-column>
              <b-table-column label="التحكم" width="40" numeric>  
                <a class="button is-info is-outlined" :href=`departments\/${props.row.id}`>View</a>
                <a class="button is-success is-outlined" :href=`departments\/${props.row.id}\/edit`>Edit</a>
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
        departments: {!! json_encode($departments) !!},
        hasMobileCards: true,
        isHoverable: true,
        perPage: 10,
        isPaginated: true,
        isPaginationSimple:true 
      }
    })
  </script>
@endsection