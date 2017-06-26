<h1> hellow weka edit this book  </h1>


 {!! Form::open(['url' => '/books/'.$book->id , 'method'=>'PUT']) !!}

     {!!Form::label("name","name")!!}
     {!!Form::text("name",$book->name)!!}
  @if($errors->has('name')) <p>{{$errors->first('name')}}</p>@endif
     <br><br>

     {!!Form::label("author","author")!!}
     {!!Form::text("author",$book->author_id)!!}
      @if($errors->has('author')) <p>{{$errors->first('author')}}</p>@endif
      <br><br>

     {!!Form::label("price","price")!!}
     {!!Form::text("price",$book->price)!!}
      @if($errors->has('price')) <p>{{$errors->first('price')}}</p>@endif
<br><br>

     {!!Form::label("section","section")!!}
     {!!Form::text("section" ,$book->section_id)!!}
      @if($errors->has('section')) <p>{{$errors->first('section')}}</p>@endif   
     <br>
     {!!Form::submit("Save")!!}
    
{!! Form::close() !!}
 
{{$names}}
