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
            <span style=" marg"></span>

{{--
            <div class="container">
                <button>Check</button>
                <h1>Result</h1>
            </div>

            <script>
                    let btnCheck = document.querySelector('button');
                    let result = document.querySelector('h1');
                    // let fruits1 = ['Apple', 'Orange', 'Mango', 'Kiwi', 'Grapes'];
                    // let fruits2 = ['Apple', 'Orange', 'mango', 'grapes', 'Kiwi'];
                    let fruits1 = [1,25,26,56,79];
                    let fruits2 = [1,25,26,79,56, 87];

                    btnCheck.addEventListener('click', () => {
                        // let myArray1 = fruits1.map(fruit => fruit.toLowerCase());
                        // let myArray2 = fruits2.map(fruit => fruit.toLowerCase());
                        fruits1.sort();
                        fruits2.sort();


                        let str1 = fruits1.toString();
                        let str2 = fruits2.toString();
                        let color ="bgcolor='yellow'".toString();
                        result.innerText = str1 == str2 ? 'Equal' : color 'Not Equal';
                    });
            </script> --}}



         <table class="table">
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



                <?php

                use App\Models\Csv;
                use App\Models\Podcast;

                $csvs = Csv::all();
                $podcasts = Podcast::all();



                foreach ($csvs as &$item) {
                    foreach ($podcasts as &$podcast) {
                        if ($item['cedula'] == $podcast['cedula']) {

                            if ($podcast['variable'] != $item['variable']) {
                                $item['variable_diferencia'] = $podcast['variable'];

                            }

                            if ($podcast['breakdown'] != $item['breakdown']) {
                                $item['breakdown_diferencia'] = $podcast['breakdown'];

                            }

                            if ($podcast['breakdown_category'] != $item['breakdown_category']) {
                                $item['breakdown_category_diferencia'] = $podcast['breakdown_category'];

                            }

                            if ($podcast['year'] != $item['year']) {
                                $item['year_diferencia'] = $podcast['year'];

                            }

                            if ($podcast['rd_value'] != $item['rd_value']) {
                                $item['rd_value_diferencia'] = $podcast['rd_value'];

                            }

                            if ($podcast['units '] != $item['units ']) {
                                $item['units _diferencia'] = $podcast['units '];

                            }

                            if ($podcast['footnotes'] != $item['footnotes']) {
                                $item['footnotes_diferencia'] = $podcast['footnotes'];

                            }
                            break;
                        }
                    }
                }

              ?>

               @foreach ($csvs as $key => $item)
                <tr>
                    <td @if($item->variable_diferencia) style="background-color: yellow;" @endif>{{ $item->variable }}</td>
                    <td @if($item->breakdown_diferencia) style="background-color: yellow;" @endif>{{ $item->breakdown }}</td>
                    <td @if($item->breakdown_category_diferencia) style="background-color: yellow;" @endif>{{ $item->breakdown_category }}</td>
                    <td @if($item->year_diferencia) style="background-color: yellow;" @endif>{{ $item->year }}</td>
                    <td @if($item->rd_value_diferencia) style="background-color: yellow;" @endif>{{ $item->rd_value}}</td>
                    <td @if($item->units_diferencia) style="background-color: yellow;" @endif>{{ $item->units}}</td>
                    <td @if($item->footnotes_diferencia) style="background-color: yellow;" @endif>{{ $item->footnotes}}</td>
                </tr>
            @endforeach
        </tbody>
        </table>



            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        </body>
        </html>
