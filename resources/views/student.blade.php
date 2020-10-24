<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Students</title>
  </head>
  <body>
      @include('navbar')
    @if ($layout == 'index')
        <div class="container-fluid mt-5">
            <div class="container-fluid mt-4">
            <div class="row justify-content-center">
                <section class="col-md-7">
                    @include('studentslist')
                </section>
                <section class="col"></section>
            </div>
        </div>
        </div>
    @elseif($layout == 'create')
        <div class="container-fluid mt-4 ">
            <div class="row">
                <section class="col-md-7">
                    @include('studentslist')
                </section>
                <section class="col md-5">
                    <div class="card mb-3">
                        <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTrESCsw7K70J-wdvPiZ8AbGe9Cftq00tsOFA&usqp=CAU" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Enter Student Info</h5>
                        </div>
                        <form action="{{ url('/store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                              <label>CNE</label>
                              <input name="cne" type="text" class="form-control"  placeholder="Enter CNE" required>
                            </div>
                            <div class="form-group">
                                <label>First Name</label>
                                <input name="firstname" type="text" class="form-control"  placeholder="Enter First Name" required>
                              </div>
                              <div class="form-group">
                                <label>Last Name</label>
                                <input name="lastname" type="text" class="form-control"  placeholder="Enter last Name" required>
                              </div>
                              <div class="form-group">
                                <label>Age</label>
                                <input name="age" type="text" class="form-control"   placeholder="Enter Age" required>
                              </div>
                              <div class="form-group">
                                <label>Speciality</label>
                                <input name="speciality" type="text" class="form-control"   placeholder="Enter Speciality" required>
                              </div>
                              <input type="submit" class="btn btn-info" value="Save">
                              <input type="reset" class="btn btn-warning" value="Reset">
                          </form>
                      </div>

                </section>
            </div>
        </div>
    @elseif($layout == 'show')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                    @include('studentslist')
                </section>
                <section class="col"></section>
            </div>
        </div>
    @elseif($layout == 'edit')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                        @include('studentslist')
                </section>
                <section class="col md-5">
                    <div class="card mb-3">
                        <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTrESCsw7K70J-wdvPiZ8AbGe9Cftq00tsOFA&usqp=CAU" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Edit Student Info</h5>
                          <form action="{{ url('/update/'.$student->id) }}" method="POST">
                            @csrf
                            <div class="form-group">
                              <label>CNE</label>
                              <input name="cne" type="text" class="form-control"  value="{{ $student->cne }}" required>
                            </div>
                            <div class="form-group">
                                <label>First Name</label>
                                <input name="firstname" type="text" class="form-control"  value="{{ $student->firstname }}" required>
                              </div>
                              <div class="form-group">
                                <label>Last Name</label>
                                <input name="lastname" type="text" class="form-control"  value="{{ $student->lastname }}" required>
                              </div>
                              <div class="form-group">
                                <label>Age</label>
                                <input name="age" type="text" class="form-control"   value="{{ $student->age }}" required>
                              </div>
                              <div class="form-group">
                                <label>Speciality</label>
                                <input name="speciality" type="text" class="form-control"   value="{{ $student->speciality }}" required>
                              </div>
                              <input type="submit" class="btn btn-info" value="Update">
                              <input type="reset" class="btn btn-warning" value="Reset">

                          </form>

                        </div>
                      </div>

                </section>
            </div>
        </div>
    @endif

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
