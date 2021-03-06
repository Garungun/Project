@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="https://unpkg.com/feather-icons"></script>
    <script src="js/bootstrap.js"></script>
    <script src="path/to/dist/feather.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://getbootstrap.com/docs/5.0/examples/carousel/carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="resources/css/style.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="{{ asset('js/jquery-3.6.0.min.js')}}" type="text/javascript"></script>

<style>
    .header{
        padding: 10px;
        margin-top: 20px;
        text-align: center;
    }
    .profile_image {
     margin: 2em;
     }
    .profile_image img {
     border-radius: 50%;
    }
    .container{
     margin-top: auto;
    }
    .row{
        position:relative;
        right: 10px;
    }
    tr:hover {background-color: #80C2B6;}
    .h2{
        margin-top: 50px;
    }
</style>
<head>
    <meta charset="UTF-8">
    <title>?????????????????????????????????</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-2">
   <div class="header">
    <h2>?????????????????????????????????</h2>
   </div>

    <div class="col">
    <div class="row">
        <div class="col-md-8 ">
        <form method="post">
        @csrf
        @method('DELETE')
        
        <button formaction="{{ route('goats.deleteall') }}" type="submit" class="btn btn-danger">Delete All Selected</button>
   
        </div>
        <div class="col-md-4">
        <form action="{{ route('goats.search')}}" method="get">
            <div class="input-group">
                <input type="search" name="search" class="form-control">
                <span class="input-group-prepend">
                    <button type="submit" class="btn btn-primary">???????????????</button>
                </span>
            </div>
        </form>
        </div>

    </div>
    </div>
    <br>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    
    <div class="container mt-2">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th><input type="checkbox" class="selectall"></th>
                <th>????????????????????????????????????????????????</th>
                <th>??????????????????</th>
                <th>????????????????????????</th>
                <th>??????????????????</th>
                <th width="280px">Action</th>

            </tr>
        </thead>    
        <tbody>
            @foreach ($goats as $goat)
            <tr>
                <td><input type="checkbox" name="ids[]" class="selectbox" value="{{$goat->goatId}}"> </td>
                <td>{{ $goat->goatId }}</td>
                <td><img src="{{ Storage::url($goat->image) }}" height="75" width="75" alt="" /></td>
                <td>{{ $goat->goatName }}</td>
                <td>{{ $goat->gene }}</td>
                <td>
                        <a class="btn btn-primary" href="{{ route('goats.edit',$goat->goatId) }}">Edit</a>
                        <button formaction="{{ route('goats.destroy',$goat->goatId) }}" type="submit" class="btn btn-danger">Delete</button>  
 
                </td>
            </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th><input type="checkbox" class="selectall2"></th>
                <th>????????????????????????????????????????????????</th>
                <th>??????????????????</th>
                <th>????????????????????????</th>
                <th>??????????????????</th>
                <th width="280px">Action</th>
            </tr>
            </tfoot>
        </table>
    </form>
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
