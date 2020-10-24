
   <div class="card mb-3">
        <img class="card-img-top" src="https://ec.europa.eu/education/sites/education/files/keycompetences-event.png" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title">Students List</h5>
        <p class="card-text">Info</p>
        <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">CNE</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Age</th>
                <th scope="col">Speciality</th>
                <th scope="col">Operations</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
              <tr>
                <td>{{ $student->cne }}</td>
                <td>{{ $student->firstname }}</td>
                <td>{{ $student->lastname }}</td>
                <td>{{ $student->age }}</td>
                <td>{{ $student->speciality }}</td>
                <td>
                    <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ url('/destroy/'.$student->id) }}" method="POST">

                        <button type="submit" class="btn btn-danger">Delete</button>
                        @csrf
                        @method('DELETE')

                      </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>

        </div>

    </div>




