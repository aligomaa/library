<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">



<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
	<br>
  
  <a href='{!! url('book-new'); !!}'> <button class="btn btn-primary">
            <span class="glyphicon glyphicon-remove"></span>
                Add new  Book
          </button></a>            
</div>
</nav>


  <table class="table table-bordered table-inverse">
  <thead>
    <tr>
      <th>ID</th>
      <th>book Name</th>
      <th>Author</th>
      <th>Section</th>
      <th>Price</th>
      <th>Image</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
      @foreach($books as $book)
    <tr>
      <td>{{$book->bid}}</td>
      <td>{{$book->name}}</td>
      <td>{{$book->aname}}</td>
      <td>{{$book->sname}}</td>
      <td>{{$book->price}}</td>
      <td>
    <img src="{{asset($book->image)}}"/>
      </td>
      <td>  

 {{Form::open(['url'=>'books/'.$book->bid.'/edit' , 'method'=>'get'])}}
          <button class="btn btn-success">
           Edit
          </button>
          {{Form::close()}}     
</td>
<td>
         {{Form::open(['url'=>'books/'.$book->bid,'method'=>'delete'])}}
          <button class="btn btn-danger">
         
            Delete
          </button>
          {{Form::close()}}
        </td>
    </tr>
   @endforeach
  </tbody>
</table>