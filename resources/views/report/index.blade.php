<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-6 mx-auto">
                <h3 class="text-center">Internship Program</h3>
                <form class="mt-4" method="POST" action="{{route('report.store')}}">
                    @csrf
                    <div class="mt-4 mb-3">
                        <select class="form-select" name="roll_no" aria-label="Default select example">
                            <option selected>Roll No</option>
                            <option value="5CS-8">
                                5CS 8
                            </option>
                            <option value="5CS-22">
                                5CS 22
                            </option>
                            <option value="5CS-34">
                                5CS 34
                            </option>
                            <option value="5CS-45">
                                5CS 45
                            </option>
                            <option value="5CS-69">
                                5CS 69
                            </option>
                          </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Date</label>
                        <input type="date" class="form-control" name="date">
                      </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Name</label>
                      <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Task</label>
                        <input type="text" class="form-control" name="task">
                      </div>

                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Reflection</label>
                      <textarea name="reflection" id="" cols="30" rows="10" class="form-control"></textarea>
                      </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
