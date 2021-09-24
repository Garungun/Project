
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Blog Post Form - Laravel 8 CRUD Tutorial</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>

<div class="container mt-2">
  
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mb-2">
            <h2>Add New Goat</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('goats.index') }}"> Back</a>
        </div>
    </div>
</div>
   
  @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
  @endif
   
<form action="{{ route('goats.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Father Goat ID:</strong>
                <input type="text" name="fatherId" class="form-control" placeholder="Father Goat ID" value="{{ old('fatherId') }}"> 
               @error('fatherId')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Father Goat Name:</strong>
                <input type="text" name="fatherGoatName" class="form-control" placeholder="Father Goat Name" value="{{ old('fatherGoatName') }}">
               @error('fatherGoatName')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
        </div>    
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Father Gene:</strong>                    
                    <select id="fatherGene" name="fatherGene" class="form-control">
                        <option value="">--Select--</option>
                        <option value="Anglonubian" @if (old('fatherGene') == "Anglonubian") {{ 'selected' }} @endif>Anglonubian</option>
                        <option value="Boer" @if (old('fatherGene') == "Boer") {{ 'selected' }} @endif>Boer</option>
                        <option value="Saanen" @if (old('fatherGene') == "Saanen") {{ 'selected' }} @endif>Saanen</option>
                        <option value="Laoshan" @if (old('fatherGene') == "Laoshan") {{ 'selected' }} @endif>Laoshan</option>
                        <option value="Alpine" @if (old('fatherGene') == "Alpine") {{ 'selected' }} @endif>Alpine</option>
                        <option value="Toggenburg" @if (old('fatherGene') == "Toggenburg") {{ 'selected' }} @endif>Toggenburg</option>
                    </select> 
                    @error('fatherGene')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Mother Goat ID:</strong>
                    <input type="text" name="motherId" class="form-control" placeholder="Mother Goat ID" value="{{ old('motherId') }}">
                    @error('motherId')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Mother Goat Name:</strong>
                    <input type="text" name="motherGoatName" class="form-control" placeholder="Mother Goat Name" value="{{ old('motherGoatName') }}">
                    @error('motherGoatName')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Mother Gene:</strong>                    
                    <select id="motherGene" name="motherGene" class="form-control">
                        <option value="">--Select--</option>
                        <option value="Anglonubian" @if (old('motherGene') == "Anglonubian") {{ 'selected' }} @endif>Anglonubian</option>
                        <option value="Boer" @if (old('motherGene') == "Boer") {{ 'selected' }} @endif>Boer</option>
                        <option value="Saanen" @if (old('motherGene') == "Saanen") {{ 'selected' }} @endif>Saanen</option>
                        <option value="Laoshan" @if (old('motherGene') == "Laoshan") {{ 'selected' }} @endif>Laoshan</option>
                        <option value="Alpine" @if (old('motherGene') == "Alpine") {{ 'selected' }} @endif>Alpine</option>
                        <option value="Toggenburg" @if (old('motherGene') == "Toggenburg") {{ 'selected' }} @endif>Toggenburg</option>
                    </select> 
                    @error('motherGene')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Goat ID:</strong>
                    <input type="text" name="goatId" class="form-control" placeholder="Goat ID" value="{{ old('goatId') }}">
                    @error('goatId')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Goat Name:</strong>
                    <input type="text" name="goatName" class="form-control" placeholder="Goat Name" value="{{ old('goatName') }}">
                    @error('goatName')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Sex: </strong>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="male" name="sex" value="male" @if (old('sex') == "male") {{ 'checked' }} @endif>
                        <label for="male" class="form-check-label">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="female" name="sex" value="female" @if (old('sex') == "female") {{ 'checked' }} @endif>
                        <label class="form-check-label" for="female" >Female</label>
                    </div>                    
                    @error('sex')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Gene:</strong>
                    <select id="gene" name="gene" class="form-control">
                        <option value="">--Select--</option>
                        <option value="Anglonubian" @if (old('gene') == "Anglonubian") {{ 'selected' }} @endif>Anglonubian</option>
                        <option value="Boer" @if (old('gene') == "Boer") {{ 'selected' }} @endif>Boer</option>
                        <option value="Saanen" @if (old('gene') == "Saanen") {{ 'selected' }} @endif>Saanen</option>
                        <option value="Laoshan" @if (old('gene') == "Laoshan") {{ 'selected' }} @endif>Laoshan</option>
                        <option value="Alpine" @if (old('gene') == "Alpine") {{ 'selected' }} @endif>Alpine</option>
                        <option value="Toggenburg" @if (old('gene') == "Toggenburg") {{ 'selected' }} @endif>Toggenburg</option>
                    </select> 
                    @error('gene')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Colour:</strong>
                    <input type="text" name="colour" class="form-control" placeholder="Colour" value="{{ old('colour') }}">
                    @error('colour')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date Of Birth:</strong>
                    <input type="date" name="dateOfBirth" class="form-control" placeholder="Date Of Birth" value="{{ old('dateOfBirth') }}">
                    @error('dateOfBirth')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Weight Of Birth:</strong>
                    <input type="text" name="weightOfBirth" class="form-control" placeholder="Weight Of Birth" value="{{ old('weightOfBirth') }}">
                    @error('weightOfBirth')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Arrival Date:</strong>
                    <input type="date" name="arrivalDate" class="form-control" placeholder="Arrival Date" value="{{ old('arrivalDate') }}">
                    @error('arrivalDate')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Goat Image:</strong>
                 <input type="file" name="image" class="form-control" placeholder="Goat Title" value="{{ old('image') }}">
                @error('image')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary ml-3">Submit</button>
    </div>
   
</form>

</body>
</html>