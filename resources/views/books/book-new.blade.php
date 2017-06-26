 <h1> hellow weka  Add new book  </h1>


 {!! Form::open(['url' => 'books' , 'method'=>'POST' , 'files' => true ]) !!}

     {!!Form::label("name","name")!!}
     {!!Form::text("name")!!}
  @if($errors->has('name')) <p>{{$errors->first('name')}}</p>@endif
     <br><br>

     {!!Form::label("price","price")!!}
     {!!Form::text("price")!!}
      @if($errors->has('price')) <p>{{$errors->first('price')}}</p>@endif
<br><br>

 

{!!Form::label("section","section")!!}
     {!!Form::text("section")!!}
      @if($errors->has('section')) <p>{{$errors->first('section')}}</p>@endif
<br><br>

{!!Form::label("author","author")!!}
     {!!Form::text("author")!!}
      @if($errors->has('author')) <p>{{$errors->first('author')}}</p>@endif
<br><br>

{!!Form::label("image","image")!!}
     {!!Form::file("image")!!}
      @if($errors->has('image')) <p>{{$errors->first('image')}}</p>@endif
<br><br>
     {!!Form::submit("Save")!!}
{!! Form::close() !!}