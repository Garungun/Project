<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Medical Update</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>

<div class="container mt-2">
  
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mb-2">
            <h2>Medical Examination</h2>
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
   
<form action="{{ route('goats.medicalUpdate') }}" method="POST" enctype="multipart/form-data">
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
                    <strong>Date Of Medical Examination:</strong>
                    <input type="date" name="dateExamination" class="form-control" placeholder="Date Of Medical Examination">
                    @error('dateExamination')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Type Of Disease:</strong>                
                <select id="typeOfDisease" name="typeOfDisease">
                        <option value="">--Select--</option>
                        <option value="Blackleg">Blackleg</option>
                        <option value="Haemorrhagic septicemia">Haemorrhagic septicemia</option>
                        <option value="Antrax">Antrax</option>
                        <option value="Sore Mouth">Sore Mouth</option>
                        <option value="Brucellosis">Brucellosis</option>
                    </select> 
               @error('typeOfDisease')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
        </div>        
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Result:</strong>
                    <input type="radio" id="pass" name="result" value="pass">
                    <label for="pass">Pass</label>
                    <input type="radio" id="not pass" name="result" value="not pass">
                    <label for="not pass">Not Pass</label>                    
                    @error('result')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        
                        
        <button type="submit" class="btn btn-primary ml-3">Submit</button>
    </div>
   
</form>

</body>
</html>