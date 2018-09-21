@extends('layouts.app')

@section('content')
  <div class="branches">
      <div class="columns m-t-10  p-r-10 ">
          <div class="column">
            <h2 class="is-size-4 dash-title has-text-danger ">
              الادارة الفروع
            </h2>
            
          </div>
          <div class="column">
            <a href="{{route('branches.create')}}" class="button is-danger is-pulled-left">أنشاء فرع جديد</a>
          </div>
      </div>
      <hr>
      <div class="columns">
        <div class="column is-10 is-offset-1">
           <div class="card">
             <div class="card-header">
               <h3 class="card-header-title">
                 الفروع
               </h3>
             </div>
             <div class="card-content">
               {{-- Table Start --}}
                <b-table
                  :data="branches" 
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

                    <b-table-column field="brch_code" label="رمز الفرع" width="40" numeric>
                      @{{ props.row.brch_code}}
                    </b-table-column>
                    <b-table-column field="location" label="المحافظة" width="40" numeric>
                        @{{ props.row.location.name }}
                      </b-table-column>
                    <b-table-column label="التحكم" width="40" numeric>  
                      <a class="button is-info is-outlined" :href=`branches\/${props.row.id}`>View</a>
                      <a class="button is-success is-outlined" :href=`branches\/${props.row.id}\/edit`>Edit</a>
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
          branches: {!! json_encode($branches) !!},
          hasMobileCards: true,
          isHoverable: true,
          perPage: 10,
          isPaginated: true,
          isPaginationSimple:true 
        }
      })
    </script>
@endsection