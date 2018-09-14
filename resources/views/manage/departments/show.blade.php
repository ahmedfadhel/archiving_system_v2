@extends('layouts.app')

@section('content')
    <div class="departments">
        <div class="columns m-t-10  p-r-10 ">
            <div class="column">
                <h2 class="is-size-4 dash-title has-text-danger ">
                   معلومات القسم
                </h2>
            </div>
        </div>
    </div>
    <hr class="is-marginless m-b-30">
    <div class="columns p-r-10">
        <div class="column is-6 is-offset-3">
            <div class="card">
                <div class="card-header">
                    <div class="card-header-title">
                        تفاصيل قسم : الحوالات
                    </div>
                </div>
                <div class="card-cotent">
                    <ul>
                        <li class="p-10">
                            <span>
                            اسم القسم : 
                            </span>
                            {{$department->name}}
                        </li>
                        <li class="p-10">
                            <span>
                            وصف القسم : 
                            </span>
                            {{$department->description}}
                        </li>
                        <li class="p-10">
                            <span>
                            فرع القسم : 
                            </span>
                            <span >
                            <a href="{{route('branches.show',$department->branch->id)}}"> {{$department->branch->name}} / {{$department->branch->location->name}}</a>
                            </span>
                            
                            
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    
@endsection