<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>SIGMA CSV</title>
  </head>
  <body>
   <div class="container my-5">
       <h1 class="fs-5 fw-bold text-center">SIGMA CSV</h1>
       <div class="row">
           <div class="d-flex my-2">
               <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Importar CSV
                </button>

           </div>
           @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
           @endif
            <table class="table">
                <thead>
                    <tr>
                    {{-- <th scope="col">#</th> --}}
                    <th scope="col">CEDULA</th>
                    <th scope="col">NOMBRE COMPLETO</th>
                    <th scope="col">NOMBRE DEL CURSO</th>
                    <th scope="col">EXPERTO TEMÁTICO</th>
                    <th scope="col">RUTA ARCHIVO EN GOOGLE DRIVE</th>
                    <th scope="col">GUION LOCUCIÓN</th>
                    <th scope="col">CÓDIGO EMBEBIDO </th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($csvs as $key => $item)
                    <tr>
                      {{--   <th scope="row">{{ ++$key }}</th> --}}
                        <td>{{ $item->variable }}</td>
                        <td>{{ $item->breakdown }}</td>
                        <td>{{ $item->breakdown_category }}</td>
                        <td>{{ $item->year }}</td>
                        <td>{{ $item->rd_value }}</td>
                        <td>{{ $item->units }}</td>
                        <td>{{ $item->footnotes }}</td>
                    </tr>
                @endforeach
                </tbody>



            </table>
       </div>
   </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Importar CSV</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('import.csv') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="file" name="file" class="form-control">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
