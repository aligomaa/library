
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    


    <h1> hellow weka login form </h1>
{!! Form::open(['url' => '/loginaction' , 'method'=>'POST', 'class' => 'form-bootstrap']) !!}
    {!!Form::label("namelabel","User Name")!!}
     {!!Form::text("emailtext")!!}<br><br>
    @if($errors->has('emailtext')) <p>{{$errors->first('emailtext')}}</p>@endif

      {!!Form::label("passwordlabel","Password")!!}
     {!!Form::password("passwordtext")!!}<br><br>
@if($errors->has('passwordtext')) <p>{{$errors->first('passwordtext')}}</p>@endif
     
     {!!Form::submit("log IN")!!}
{!! Form::close() !!}
<a href="{{URL::to("register")}}"> <input type="button" name="register" value="register"> </a>