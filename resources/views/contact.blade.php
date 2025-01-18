<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<a href="{{URL::to('/index')}}">Index</a>
    <h1>Contact Us</h1>
    <div class="card mt-5">
        <div class="card-body">
            @session('success')
            <div class="alert alert-success" role="alert">{{$value}}</div>
            @endsession
    <form method="post" action="{{ URL::to('/store') }}" enctype="multipart/form-data">
        @csrf 
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name">@error('name')<div class="form-text text-danger">
        {{ $message }}</div>@enderror<br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" >@error('email')<div class="form-text text-danger">{{$message}}</div>
        @enderror<br>

        <label for="message">Message:</label><br>
        <textarea id="message" name="message"></textarea>@error('message')<div class="form-text text-danger">{{$message}}</div>
        @enderror<br>

        <label for="image">Select Image:</label><br>
        <input type="file" name="image" >@error('image')<div class="form-text text-danger">{{$message}}</div>@enderror<br><br>

        <input type="submit" value="Submit">
    </form>
        </div>
    </div>
</body>
</html>