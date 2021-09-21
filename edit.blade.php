<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Blog Post Form - Laravel 8 CRUD Tutorial</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>

<div class="container mt-2">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Post</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('goats.index') }}" enctype="multipart/form-data"> Back</a>
            </div>
        </div>
    </div>
   
  @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
  @endif
  
    <form action="{{ route('goats.update',$goat->goatId) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Father Goat ID:</strong>
                    <input type="text" name="fatherId" value="{{ $goat->fatherId }}" class="form-control" placeholder="Father Goat ID">
                    @error('fatherId')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Father Goat Name:</strong>
                    <input type="text" name="fatherGoatName" value="{{ $goat->fatherGoatName }}" class="form-control" placeholder="Father Goat Name">
                    @error('fatherGoatName')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Father Goat Name:</strong>                    
                    <select id="fatherGene" name="fatherGene" >                        
                        @if($goat->fatherGene == 'Anglonubian')
                            <option value="Anglonubian" selected>Anglonubian</option>
                            <option value="Boer">Boer</option>
                            <option value="Saanen">Saanen</option>
                            <option value="Laoshan">Laoshan</option>
                            <option value="Alpine">Alpine</option>
                            <option value="Toggenburg">Toggenburg</option>                            
                        @elseif($goat->fatherGene == 'Boer')
                            <option value="Anglonubian">Anglonubian</option>
                            <option value="Boer" selected>Boer</option>
                            <option value="Saanen">Saanen</option>
                            <option value="Laoshan">Laoshan</option>
                            <option value="Alpine">Alpine</option>
                            <option value="Toggenburg">Toggenburg</option>
                        @elseif($goat->fatherGene == 'Saanen')
                            <option value="Anglonubian">Anglonubian</option>
                            <option value="Boer">Boer</option>
                            <option value="Saanen" selected>Saanen</option>
                            <option value="Laoshan">Laoshan</option>
                            <option value="Alpine">Alpine</option>
                            <option value="Toggenburg">Toggenburg</option>
                            @elseif($goat->fatherGene == 'Laoshan')
                            <option value="Anglonubian">Anglonubian</option>
                            <option value="Boer">Boer</option>
                            <option value="Saanen">Saanen</option>
                            <option value="Laoshan" selected>Laoshan</option>
                            <option value="Alpine">Alpine</option>
                            <option value="Toggenburg">Toggenburg</option> 
                            @elseif($goat->fatherGene == 'Alpine')
                            <option value="Anglonubian">Anglonubian</option>
                            <option value="Boer">Boer</option>
                            <option value="Saanen">Saanen</option>
                            <option value="Laoshan">Laoshan</option>
                            <option value="Alpine" selected>Alpine</option>
                            <option value="Toggenburg">Toggenburg</option> 
                            @else
                            <option value="Anglonubian">Anglonubian</option>
                            <option value="Boer">Boer</option>
                            <option value="Saanen">Saanen</option>
                            <option value="Laoshan">Laoshan</option>
                            <option value="Alpine">Alpine</option>
                            <option value="Toggenburg" selected>Toggenburg</option>
                            @endif
                    </select> 
                    @error('fatherGene')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Mother Goat ID:</strong>
                    <input type="text" name="motherId" value="{{ $goat->motherId }}" class="form-control" placeholder="Mother Goat ID">
                    @error('motherId')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Mother Goat Name:</strong>
                    <input type="text" name="motherGoatName" value="{{ $goat->motherGoatName }}" class="form-control" placeholder="Mother Goat Name">
                    @error('motherGoatName')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Mother Gene:</strong>                    
                    <select id="motherGene" name="motherGene">
                    @if($goat->motherGene == 'Anglonubian')
                            <option value="Anglonubian" selected>Anglonubian</option>
                            <option value="Boer">Boer</option>
                            <option value="Saanen">Saanen</option>
                            <option value="Laoshan">Laoshan</option>
                            <option value="Alpine">Alpine</option>
                            <option value="Toggenburg">Toggenburg</option>                            
                        @elseif($goat->motherGene == 'Boer')
                            <option value="Anglonubian">Anglonubian</option>
                            <option value="Boer" selected>Boer</option>
                            <option value="Saanen">Saanen</option>
                            <option value="Laoshan">Laoshan</option>
                            <option value="Alpine">Alpine</option>
                            <option value="Toggenburg">Toggenburg</option>
                        @elseif($goat->motherGene == 'Saanen')
                            <option value="Anglonubian">Anglonubian</option>
                            <option value="Boer">Boer</option>
                            <option value="Saanen" selected>Saanen</option>
                            <option value="Laoshan">Laoshan</option>
                            <option value="Alpine">Alpine</option>
                            <option value="Toggenburg">Toggenburg</option>
                            @elseif($goat->motherGene == 'Laoshan')
                            <option value="Anglonubian">Anglonubian</option>
                            <option value="Boer">Boer</option>
                            <option value="Saanen">Saanen</option>
                            <option value="Laoshan" selected>Laoshan</option>
                            <option value="Alpine">Alpine</option>
                            <option value="Toggenburg">Toggenburg</option> 
                            @elseif($goat->motherGene == 'Alpine')
                            <option value="Anglonubian">Anglonubian</option>
                            <option value="Boer">Boer</option>
                            <option value="Saanen">Saanen</option>
                            <option value="Laoshan">Laoshan</option>
                            <option value="Alpine" selected>Alpine</option>
                            <option value="Toggenburg">Toggenburg</option> 
                            @else
                            <option value="Anglonubian">Anglonubian</option>
                            <option value="Boer">Boer</option>
                            <option value="Saanen">Saanen</option>
                            <option value="Laoshan">Laoshan</option>
                            <option value="Alpine">Alpine</option>
                            <option value="Toggenburg" selected>Toggenburg</option>
                            @endif
                    @error('motherGene')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Goat ID:</strong>
                    <input type="text" name="goatId" value="{{ $goat->goatId }}" class="form-control" placeholder="Goat ID">
                    @error('goatId')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Goat Name:</strong>
                    <input type="text" name="goatName" value="{{ $goat->goatName }}" class="form-control" placeholder="Goat Name">
                    @error('goatName')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Sex:</strong>
                    @if($goat->sex == 'male')
                        <input type="radio" id="male" name="sex" value="male" checked="checked">
                            <label for="male">Male</label>
                        <input type="radio" id="female" name="sex" value="female" >
                            <label for="female">Female</label>
                    @else
                        <input type="radio" id="male" name="sex" value="male">
                            <label for="male">Male</label>
                        <input type="radio" id="female" name="sex" value="female" checked="checked">
                            <label for="female">Female</label>
                    @endif    
                    @error('sex')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Gene:</strong>
                    <select id="gene" name="gene" value="{{ $goat->gene }}">
                    @if($goat->gene == 'Anglonubian')
                            <option value="Anglonubian" selected>Anglonubian</option>
                            <option value="Boer">Boer</option>
                            <option value="Saanen">Saanen</option>
                            <option value="Laoshan">Laoshan</option>
                            <option value="Alpine">Alpine</option>
                            <option value="Toggenburg">Toggenburg</option>                            
                        @elseif($goat->gene == 'Boer')
                            <option value="Anglonubian">Anglonubian</option>
                            <option value="Boer" selected>Boer</option>
                            <option value="Saanen">Saanen</option>
                            <option value="Laoshan">Laoshan</option>
                            <option value="Alpine">Alpine</option>
                            <option value="Toggenburg">Toggenburg</option>
                        @elseif($goat->gene == 'Saanen')
                            <option value="Anglonubian">Anglonubian</option>
                            <option value="Boer">Boer</option>
                            <option value="Saanen" selected>Saanen</option>
                            <option value="Laoshan">Laoshan</option>
                            <option value="Alpine">Alpine</option>
                            <option value="Toggenburg">Toggenburg</option>
                            @elseif($goat->gene == 'Laoshan')
                            <option value="Anglonubian">Anglonubian</option>
                            <option value="Boer">Boer</option>
                            <option value="Saanen">Saanen</option>
                            <option value="Laoshan" selected>Laoshan</option>
                            <option value="Alpine">Alpine</option>
                            <option value="Toggenburg">Toggenburg</option> 
                            @elseif($goat->gene == 'Alpine')
                            <option value="Anglonubian">Anglonubian</option>
                            <option value="Boer">Boer</option>
                            <option value="Saanen">Saanen</option>
                            <option value="Laoshan">Laoshan</option>
                            <option value="Alpine" selected>Alpine</option>
                            <option value="Toggenburg">Toggenburg</option> 
                            @else
                            <option value="Anglonubian">Anglonubian</option>
                            <option value="Boer">Boer</option>
                            <option value="Saanen">Saanen</option>
                            <option value="Laoshan">Laoshan</option>
                            <option value="Alpine">Alpine</option>
                            <option value="Toggenburg" selected>Toggenburg</option>
                            @endif
                    @error('gene')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Colour:</strong>
                    <input type="text" name="colour" value="{{ $goat->colour }}" class="form-control" placeholder="Colour">
                    @error('colour')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date Of Birth:</strong>
                    <input type="date" name="dateOfBirth" value="{{ $goat->dateOfBirth }}" class="form-control" placeholder="Date Of Birth">
                    @error('dateOfBirth')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Weight Of Birth:</strong>
                    <input type="text" name="weightOfBirth" value="{{ $goat->weightOfBirth }}" class="form-control" placeholder="Weight Of Birth">
                    @error('weightOfBirth')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Arrival Date:</strong>
                    <input type="date" name="arrivalDate" value="{{ $goat->arrivalDate }}" class="form-control" placeholder="Arrival Date">
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
                <div class="form-group">
                <img src="{{ Storage::url($goat->image) }}" height="200" width="200" alt="" />
                </div>
                </div>
            
            
            

            <button type="submit" class="btn btn-primary ml-3">Submit</button>
          
        </div>
   
    </form>
</div>

</body>
</html>