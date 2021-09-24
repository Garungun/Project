

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Goat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>

<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Goat</h2>
            </div>
            <div class="pull-right md-2">
                <a class="btn btn-success" href="{{ route('goats.create') }}"> Create New Post</a>
                <a class="btn btn-primary" href="{{ route('goats.updateHome') }}"> Update</a>                
            </div><br>            
        </div>
        <div class="col-md-4">
        <form action="{{ route('goats.seacrh') }}" method="get">
            <div class="input-group">
                <input type="search" name="search" class="form-control">
                <span class="input-group-prepend">
                    <button type="submit" class="btn btn-primary">Search</button>
                </span>
            </div>
        </form>
        </div>
        
    </div>
    <br>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Goat ID</th>
            <th>Image</th>
            <th>Name</th>
            <th>Gene</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($goats as $goat)
        <tr>
            <td>{{ $goat->goatId }}</td>
            <td><img src="{{ Storage::url($goat->image) }}" height="75" width="75" alt="" /></td>
            <td>{{ $goat->goatName }}</td>
            <td>{{ $goat->gene }}</td>
            <td>
                <form action="{{ route('goats.destroy',$goat->goatId) }}" method="POST">
    
                    <a class="btn btn-primary" href="{{ route('goats.edit',$goat->goatId) }}">Edit</a>
                    
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                
            </td>
        </tr>
        @endforeach
        
    </table>
    {{ $goats->links() }}
</div>
</body>

</html>

