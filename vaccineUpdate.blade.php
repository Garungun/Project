<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vaccine Update</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container mt-2">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mb-2">
            <h2>Vaccine Update</h2>
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

<form action="{{ route('goats.vaccineUpdate') }}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="form-group row">
        <table class="table">
            <thead>
            <tr>
                <th>Goat ID</th>
                <th>Type Of Vaccine</th>
                <th>Date Of Vaccine</th>
                <th>Staff</th>
                <th><a href="javascritp:;" class="btn btn-info addRow">+</a></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <select name="goat_id[]" class="form-control" id="goat_id" >
                        <option value="">--Select--</option>
                        @foreach($goats AS $goat)
                        <option value="{{ $goat->goatId }}" {{ (collect(old('goat_id'))->contains($goat->goatId)) ? 'selected':'' }}>{{ $goat->goatId }}</option>
                        @endforeach                        
                    </select>
                    @error('goat_id.*')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </td>
                <td>
                    <select name="typeOfVaccine[]" class="form-control" id="typeOfVaccine" >
                        <option value="">--Select--</option>
                        <option value="Blackleg Vaccine" {{ (collect(old('typeOfVaccine'))->contains("Blackleg Vaccine")) ? 'selected':'' }}>Blackleg Vaccine</option>
                        <option value="Haemorrhagic septicemia Vaccine" {{ (collect(old('typeOfVaccine'))->contains("Haemorrhagic septicemia Vaccine")) ? 'selected':'' }}>Haemorrhagic septicemia Vaccine</option>
                        <option value="Antrax Vaccine" {{ (collect(old('typeOfVaccine'))->contains("Antrax Vaccine")) ? 'selected':'' }}>Antrax Vaccine</option>
                        <option value="Sore Mouth Vaccine" {{ (collect(old('typeOfVaccine'))->contains("Sore Mouth Vaccine")) ? 'selected':'' }}>Sore Mouth Vaccine</option>
                        <option value="Brucellosis Vaccine" {{ (collect(old('typeOfVaccine'))->contains("Brucellosis Vaccine")) ? 'selected':'' }}>Brucellosis Vaccine</option>                        
                    </select>
                    @error('typeOfVaccine.*')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </td>
                <td>
                    <input type="date" name="dateOfVaccine[]" class="form-control" placeholder="Date Of Vaccine" value="{{ (old('dateOfVaccine.*')) }}">
                    @error('dateOfVaccine.*')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror                    
                </td>
                <td>
                    <input type="text" name="vaccine_staff[]" class="form-control" placeholder="Staff" value="{{ (old('vaccine_staff.*')) }}">
                    @error('vaccine_staff.*')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </td>
                <td><a href="javascritp:;" class="btn btn-danger deleteRow">-</a></td>
            </tr>
            </tbody>
        </table>
        </div>
        <button type="submit" class="btn btn-primary ml-3">Submit</button>
    </form>
</div>
<script>
    $('thead').on('click', '.addRow', function(){
        var tr = '<tr>'+
        '<td>'+
            '<select name="goat_id[]" class="form-control" id="goat_id" >'+
                '<option value="">--Select--</option>'+
                '@foreach($goats AS $goat)'+
                '<option value="{{ $goat->goatId }}" {{ (collect(old("goat_id"))->contains($goat->goatId)) ? "selected":"" }}>{{ $goat->goatId }}</option>'+
                '@endforeach'+
            '</select>'+
            '@error("goat_id.*")'+
                '<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>'+
            '@enderror'+
        '</td>'+
        '<td>'+
            '<select name="typeOfVaccine[]" class="form-control" id="typeOfVaccine" >'+
                '<option value="">--Select--</option>'+
                '<option value="Blackleg Vaccine" {{ (collect(old("typeOfVaccine.*"))->contains("Blackleg Vaccine")) ? "selected":"" }}>Blackleg Vaccine</option>'+
                '<option value="Haemorrhagic septicemia Vaccine" {{ (collect(old("typeOfVaccine.*"))->contains("Haemorrhagic septicemia Vaccine")) ? "selected":"" }}>Haemorrhagic septicemia Vaccine</option>'+
                '<option value="Antrax Vaccine" {{ (collect(old("typeOfVaccine.*"))->contains("Antrax Vaccine")) ? "selected":"" }}>Antrax Vaccine</option>'+
                '<option value="Sore Mouth Vaccine" {{ (collect(old("typeOfVaccine.*"))->contains("Sore Mouth Vaccine")) ? "selected":"" }}>Sore Mouth Vaccine</option>'+
                '<option value="Brucellosis Vaccine" {{ (collect(old("typeOfVaccine.*"))->contains("Brucellosis Vaccine")) ? "selected":"" }}>Brucellosis Vaccine</option>'+
            '</select>'+
            '@error("typeOfVaccine.*")'+
                '<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>'+
            '@enderror'+
        '</td>'+            
        '<td><input type="date" name="dateOfVaccine[]" class="form-control" placeholder="Date Of Vaccine" value="{{ (old("dateOfVaccine.*")) }}">'+
            '@error("dateOfVaccine.*")'+
                '<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>'+
            '@enderror'+
        '</td>'+
        '<td><input type="text" name="vaccine_staff[]" class="form-control" placeholder="Staff" value="{{ (old("vaccine_staff.*")) }}">'+
            '@error("vaccine_staff.*")'+
                '<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>'+
            '@enderror'+
        '</td>'+
        '<td><a href="javascritp:;" class="btn btn-danger deleteRow">-</a></td>'+
      '</tr>';

      $('tbody').append(tr);
    });
    $('tbody').on('click', '.deleteRow', function(){
        $(this).parent().parent().remove();
    });
</script>
</body>
</html>     