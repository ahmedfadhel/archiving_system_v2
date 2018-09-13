@extends('layouts.app')

@section('content')

   <div class="columns m-t-100">
       <div class="column is-half is-offset-one-quarter">
           <div class="card">
                <div class="card-header">
                    <div class="card-header-title is-centered">
                        <h3 class="title has-text-grey">Login</h3>
                    </div>
                </div>
                <div class="card-content">
                    <div class="avatar-box has-text-centered">
                        <figure class="avatar">
                            <img class="is-rounded" src="{{asset('img/logo-0-3-2.png')}}">
                        </figure>
                        @include('partials._loginForm')
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
            
        })
    </script>
@endsection
