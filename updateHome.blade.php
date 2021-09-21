<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>

    <div class="container mt-2">
  
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-center mb-2">
                    <h2>Update Goat Data</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('goats.index') }}"> Back</a>
                </div>
                <div class="pull-center">
                    <a class="btn btn-primary" href="{{ route('goats.vaccination') }}"> vaccineUpdate</a>
                </div>
                <div class="pull-center">
                    <a class="btn btn-primary" href="{{ route('goats.breed') }}"> updateBreed</a>
                </div>
                <div class="pull-center">
                    <a class="btn btn-primary" href="{{ route('goats.weight') }}"> updateWeight</a>
                </div>
                <div class="pull-center">
                    <a class="btn btn-primary" href="{{ route('goats.health') }}"> healthUpdate</a>
                </div>
                <div class="pull-center">
                    <a class="btn btn-primary" href="{{ route('goats.medical') }}"> medicalUpdate</a>
                </div>
            </div>
        </div>
                        
        
    </div>
   


</body>
</html>