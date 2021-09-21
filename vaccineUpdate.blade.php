<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vaccine Update</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
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
                <strong>Type Of Vaccine:</strong>                
                <select id="typeOfVaccine" name="typeOfVaccine">
                        <option value="">--Select--</option>
                        <option value="Blackleg Vaccine">Blackleg Vaccine</option>
                        <option value="Haemorrhagic septicemia Vaccine">Haemorrhagic septicemia Vaccine</option>
                        <option value="Antrax Vaccine">Antrax Vaccine</option>
                        <option value="Sore Mouth Vaccine">Sore Mouth Vaccine</option>
                        <option value="Brucellosis Vaccine">Brucellosis Vaccine</option>
                    </select> 
               @error('typeOfVaccine')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date Of Vaccine:</strong>
                    <input type="date" name="dateOfVaccine" class="form-control" placeholder="Date Of Vaccine">
                    @error('dateOfVaccine')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
        </div>        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Staff:</strong>
                <input type="text" name="vaccine_staff" class="form-control" placeholder="Staff">
               @error('vaccine_staff')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
        </div>          
                        
        <button type="submit" class="btn btn-primary ml-3">Submit</button>
    </div>
   
</form>

</body>
</html>