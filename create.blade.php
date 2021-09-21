<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Blog Post Form - Laravel 8 CRUD Tutorial</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
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
                <input type="text" name="fatherId" class="form-control" placeholder="Father Goat ID">
               @error('fatherId')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Father Goat Name:</strong>
                <input type="text" name="fatherGoatName" class="form-control" placeholder="Father Goat Name">
               @error('fatherGoatName')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
        </div>    
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Father Gene:</strong>                    
                    <select id="fatherGene" name="fatherGene">
                        <option value="">--Select--</option>
                        <option value="Anglonubian">Anglonubian</option>
                        <option value="Boer">Boer</option>
                        <option value="Saanen">Saanen</option>
                        <option value="Laoshan">Laoshan</option>
                        <option value="Alpine">Alpine</option>
                        <option value="Toggenburg">Toggenburg</option>
                    </select> 
                    @error('fatherGene')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Mother Goat ID:</strong>
                    <input type="text" name="motherId" class="form-control" placeholder="Mother Goat ID">
                    @error('motherId')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Mother Goat Name:</strong>
                    <input type="text" name="motherGoatName" class="form-control" placeholder="Mother Goat Name">
                    @error('motherGoatName')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Mother Gene:</strong>                    
                    <select id="motherGene" name="motherGene">
                        <option value="">--Select--</option>
                        <option value="Anglonubian">Anglonubian</option>
                        <option value="Boer">Boer</option>
                        <option value="Saanen">Saanen</option>
                        <option value="Laoshan">Laoshan</option>
                        <option value="Alpine">Alpine</option>
                        <option value="Toggenburg">Toggenburg</option>
                    </select> 
                    @error('motherGene')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Goat ID:</strong>
                    <input type="text" name="goatId" class="form-control" placeholder="Goat ID">
                    @error('goatId')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Goat Name:</strong>
                    <input type="text" name="goatName" class="form-control" placeholder="Goat Name">
                    @error('goatName')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Sex:</strong>
                    <input type="radio" id="male" name="sex" value="male">
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="sex" value="female">
                    <label for="female">Female</label>                    
                    @error('sex')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Gene:</strong>
                    <select id="gene" name="gene">
                        <option value="">--Select--</option>
                        <option value="Anglonubian">Anglonubian</option>
                        <option value="Boer">Boer</option>
                        <option value="Saanen">Saanen</option>
                        <option value="Laoshan">Laoshan</option>
                        <option value="Alpine">Alpine</option>
                        <option value="Toggenburg">Toggenburg</option>
                    </select> 
                    @error('gene')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Colour:</strong>
                    <input type="text" name="colour" class="form-control" placeholder="Colour">
                    @error('colour')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date Of Birth:</strong>
                    <input type="date" name="dateOfBirth" class="form-control" placeholder="Date Of Birth">
                    @error('dateOfBirth')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Weight Of Birth:</strong>
                    <input type="text" name="weightOfBirth" class="form-control" placeholder="Weight Of Birth">
                    @error('weightOfBirth')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Arrival Date:</strong>
                    <input type="date" name="arrivalDate" class="form-control" placeholder="Arrival Date">
                    @error('arrivalDate')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Goat Image:</strong>
                 <input type="file" name="image" class="form-control" placeholder="Goat Title">
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