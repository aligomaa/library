<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">



<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
	<br>
  
  <a href='{!! url('books'); !!}'> <button class="btn btn-primary">
            <span class="glyphicon glyphicon-remove"></span>
                 Books
          </button></a>

            <a href='{!! url('users'); !!}'> <button class="btn btn-primary">
            <span class="glyphicon glyphicon-remove"></span>
                 Users
          </button></a>
  <div style="margin-left:70%; margin-top:-35px;">
    
      <a href='{!! url('sections'); !!}'> <button class="btn btn-primary">
            <span class="glyphicon glyphicon-remove"></span>
                 Sections
          </button></a>

            <a href='{!! url('authors'); !!}'> <button class="btn btn-primary">
            <span class="glyphicon glyphicon-remove"></span>
                Authors
          </button></a>

            <a href='{!! url(''); !!}'> <button class="btn btn-primary">
            <span class="glyphicon glyphicon-remove"></span>
                logout 
          </button></a>
</div>
</nav>


@if(Auth::check())
   {{Auth::getUser()->name}}
          @endif
          