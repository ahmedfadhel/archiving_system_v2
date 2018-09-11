<form method="POST" action="{{route('login')}}">
        {{ csrf_field() }}
    {{-- Email Enter data Field --}}
    <b-field label="البريد الالكتروني"
        type="{{$errors->has('email')? 'is-danger':''}}"
        message="{{$errors->has('email')? 'البريد الالكتروني غير صحيح':''}}">
        <b-input 
            type="email"
            placeholder="البريد الالكتروني"
            value=""
            name="email">
        </b-input>  
    </b-field>
    {{-- Password Enter data Field --}}
    <b-field 
        label="كلمة المرور"
        type="{{$errors->has('password')? 'is-danger':''}}"
        message="{{$errors->has('password')? 'كلمة المرور غير صحيحة':' '}}">
        <b-input  
            placeholder="كلمة المرور" 
            name="password" 
            type="password" ></b-input>
    </b-field>
    <button type="submit" class="button is-danger is-outlined">تسجيل الدخول</button>
</form>