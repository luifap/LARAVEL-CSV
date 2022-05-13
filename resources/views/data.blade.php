        <!doctype html>
        <html lang="en">
        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- Bootstrap CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

            <title>ensayis</title>
        </head>
        <body>

            <table>

                <?php

                // use App\Models\Csv;
                // use App\Models\Podcast;

                // $csvs = Csv::all();
                // $podcast = Podcast::all();

                $tabla2 = [1,2,3,4,5,6,7];//['podcasts' => $podcast];
                $tabla1 = [1,2,7,4,5,0,7];//['csvs' => $csvs];

                $diferencias = array_diff($tabla2, $tabla1);
                foreach($diferencias as $value) {
                    $color="bgcolor='yellow'";

                    echo "<tr $color><td>$value</td></tr>";
                }

                ?>

            </table>

        {{-- <table class="table">
            <thead>
                <tr>
                    <th scope="col">variable </th>
                    <th scope="col">breakdown</th>
                    <th scope="col">breakdown_category</th>
                    <th scope="col">year</th>
                    <th scope="col">rd_value</th>
                    <th scope="col">units</th>
                    <th scope="col">footnotes</th>
                </tr>
            </thead>
            <tbody>






              @foreach ($diferencias as $key => $item)
                <tr>
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
        </table> --}}



            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        </body>
        </html>
