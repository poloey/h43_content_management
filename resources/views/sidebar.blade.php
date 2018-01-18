      <div class="col-md-4 sidebar">
        <div class="card">
          <div class="card-header">
            <h2>Categories</h2>
          </div>
          <div class="card-body">
            <ul class="list-group">
              @foreach ($categories as $category)
                <li class="list-group-item"> <a href="{{ route('category.show', ['id' => $category->id]) }}">{{$category->name}}</a> </li>
              @endforeach
            </ul>
          </div>
        </div>
        <div class="card mt-5">
          <div class="card-header">
            <h2>Author</h2>
          </div>
          <div class="card-body">
            <ul class="list-group">
              @foreach ($users as $user)
                <li class="list-group-item"> <a href="{{ route('author', ['id' => $user->id]) }}">{{$user->name}}</a> </li>
              @endforeach
            </ul>
          </div>
        </div>
        
      </div>

