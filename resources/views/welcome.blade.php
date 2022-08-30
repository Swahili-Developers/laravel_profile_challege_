<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Profile</title>
  </head>
  <body class="">
    <div class="row">
        <div class="col-md-6 mx-auto m-5">
            <form action="{{url('save')}}" method="post">
              @csrf
              <input type="text" name="name" value="{{$detail->name}}" hidden>
              <input type="text" name="email" value="{{$detail->email}}" hidden>
              <input type="text" name="phone_no" value="{{$detail->phone_no}}" hidden>
                <div class="card mx-auto" style="width: 18rem;">
                    <div class="card-body">
                        <div class="d-flex justify-content-center p-4">
                            <img src="{{asset('img/avatar-icon.jpg')}}" width="150" height="150" alt="">  
                        </div>
                      <h5 class="card-title text-center">{{$detail->name}}</h5>
                      <h6 class="card-subtitle mb-2 text-muted text-center">{{$detail->email}}</h6>
                      <h6 class="card-subtitle mb-2 text-muted text-center">{{$detail->phone_no}}</h6>
                      <a href="{{url('/')}}" class="btn btn-danger m-4">back</a>
                      <input type="submit" class="btn btn-primary" value="Add Contact">

                    </div>
                  </div>
            </form>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>