

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Goat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <script src="{{ asset('js/jquery-3.6.0.min.js')}}" type="text/javascript"></script>
</head>
<body>

<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Goat</h2>
            </div>
            <div class="pull-right md-2">
                <a class="btn btn-primary" href="{{ route('goats.vaccination') }}"> vaccineUpdate</a>
                <a class="btn btn-primary" href="{{ route('goats.updateHome') }}"> Update</a>                
            </div><br>            
        </div>
        <div class="col-md-4">
        <form action="{{ route('goats.search') }}" method="get">
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

   <form action="" method="post">
    @csrf
    <table class="table table-bordered">
        <thead>
        <tr>
            <th><input type="checkbox" class="selectall"></th>
            <th>Goat ID</th>
            <th>Image</th>
            <th>Name</th>
            <th>Gene</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($goats as $goat)
        <tr>
            <td><input type="checkbox" name="ids[]" class="selectbox" value="{{$goat->goatId }}"> </td>
            <td>{{ $goat->goatId }}</td>
            <td><img src="{{ Storage::url($goat->image) }}" height="75" width="75" alt="" /></td>
            <td>{{ $goat->goatName }}</td>
            <td>{{ $goat->gene }}</td>            
        </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            <th><input type="checkbox" class="selectall2"></th>
            <th>Goat ID</th>
            <th>Image</th>
            <th>Name</th>
            <th>Gene</th>
        </tr>
        </tfoot>
        
    </table>
    {{ $goats->links() }}
    <script type="text/javascript">
    $('.selectall').click(function(){
        $('.selectbox').prop('checked', $(this).prop('checked'));
        $('.selectall2').prop('checked', $(this).prop('checked'));
    })
    $('.selectall2').click(function(){
        $('.selectbox').prop('checked', $(this).prop('checked'));
        $('.selectall').prop('checked', $(this).prop('checked'));
    })
    $('.selectbox').click(function(){
        var total = $('.selectbox').length;
        var number = $('.selectbox:checked').length;
        if(total == number){
            $('.selectall').prop('checked', true);
            $('.selectall2').prop('checked', true);
        } else{
            $('.selectall').prop('checked', false);
            $('.selectall2').prop('checked', false);
        }        
    })
    </script>
</div>
</body>

</html>

