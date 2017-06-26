    <h1> hellow weka your sign up   </h1>
    <!--
<h2>
@if(Session::has('success'))
  {{Session::get('success')}}
@endif
</h2> -->

 {!! Form::open(['url' => '/registeraction' , 'method'=>'POST']) !!}

     {!!Form::label("name","name")!!}
     {!!Form::text("name")!!}
     @if($errors->has('name')) <p>{{$errors->first('name')}}</p>@endif
     <br><br>

     {!!Form::label("email","E-Mail")!!}
     {!!Form::email("email")!!}
      @if($errors->has('email')) <p>{{$errors->first('email')}}</p>@endif
<br><br>
     {!!Form::label("password","Password")!!}
     {!!Form::password("password")!!}
      @if($errors->has('password')) <p>{{$errors->first('password')}}</p>@endif

<br><br>
     {!!Form::label("cpassword","Confirm password")!!}
     {!!Form::password("cpassword")!!}

      @if($errors->has('cpassword')) <p>{{$errors->first('cpassword')}}</p>@endif
     <br>

     {!!Form::submit("Regester")!!}
{!! Form::close() !!}