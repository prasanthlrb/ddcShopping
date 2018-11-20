<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Uploading images in Laravel with DropZone</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('/dropzone/dropzone.css') }}">
   <style>
    #my-dropzone .message {
        font-family: "Segoe UI Light", "Arial", serif;
        font-weight: 600;
        color: #0087F7;
        font-size: 1.5em;
        letter-spacing: 0.05em;
    }
    
    .dropzone {
        border: 2px dashed #0087F7;
        background: white;
        border-radius: 5px;
        min-height: 300px;
        padding: 90px 0;
        vertical-align: baseline;
    }
   </style>

   
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-10 offset-sm-1">
            <h2 class="page-heading">Upload your Images <span id="counter"></span></h2>
            <form method="post" action="{{ url('/images-save') }}"
                  enctype="multipart/form-data" class="dropzone" id="my-dropzone">
                {{ csrf_field() }}
                <input type="hidden" name="personal" value="4000">
                <div class="dz-message">
                    <div class="col-xs-8">
                        <div class="message">
                            <p>Drop files here or Click to Upload</p>
                        </div>
                    </div>
                </div>
                <div class="fallback">
                    <input type="file" name="file" multiple>
                </div>
                
            </form>
        </div>
        <button class="btn btn-success" id="testSubmit">Submit</button>
    </div>
</div>


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{ url('/dropzone/dropzone.js') }}"></script>
    <script src="{{ url('/dropzone/config-dropzone.js') }}"></script>
</html>