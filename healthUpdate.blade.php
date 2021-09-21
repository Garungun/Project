<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Health Update</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>

<div class="container mt-2">

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mb-2">
            <h2>Health History</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('goats.updateHome') }}"> Back</a>

        </div>
    </div>
</div>


            <div class="results">
                @if(Session::get('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
                @endif

                @if(Session::get('fail'))
                <div class="alert alert-danger">
                    {{ Session::get('fail') }}
                </div>
                @endif
            </div>

<form action="{{ route('goats.healthUpdate') }}" method="POST" enctype="multipart/form-data">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Goat ID:</strong>         
                    <select class="form-control" id="goat_id" name="goat_id">
                    <option value="">--Select--</option>
                    @foreach($goats AS $goat)
                    <option value="{{ $goat->goatId }}">{{ $goat->goatId }}</option>
                    @endforeach
                    </select>
                    @error('goat_id')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Attitude:</strong>
                <input type="text" name="attitude" class="form-control" placeholder="Attitude">
               @error('attitude')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date Of Health:</strong>
                    <input type="date" name="dateOfHealth" class="form-control" placeholder="Date Of Health">
                    @error('dateOfHealth')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Staff:</strong>
                <input type="text" name="health_staff" class="form-control" placeholder="Staff">
               @error('health_staff')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
        </div>


        <button type="submit" class="btn btn-primary ml-3">Submit</button>
    </div>

</form>

</body>
</html>
