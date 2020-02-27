<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

    <title>Intern List</title>
  </head>
  <body>
    <div class="container">
        <div class="jumbotron jumbotron-fluid" style="margin-top:20px">
            <div class="container">
                <h3 class="display-4">Stajyer List</h3>
            </div>
        </div>
        
        <br>
        <table class="table" >
            <thead>
                <tr>
                <th scope="col">Sıra No</th>
                <th scope="col">Ad</th>
                <th scope="col">Soyad</th>
                <th scope="col">Okul</th>
                <th scope="col">Bölüm</th>
                <th scope="col">İl</th>
                <th scope="col">İlçe</th>
                <th scope="col">İşlem</th>
                </tr>
            </thead>
            <tbody>
            @foreach($interns as $intern)
                <tr>
                <th scope="row">{{ $intern->id }}</th>
                <td>{{ $intern->ad }}</td>
                <td>{{ $intern->soyad }}</td>
                <td>{{ $intern->okul }}</td>
                <td>{{ $intern->bolum }}</td>
                <td>{{ $intern->il }}</td>
                <td>{{ $intern->ilce }}</td>
                <td>
                   <i  style="display:inline-block;">
                        <form method="POST" action="{{ route('duzeltme.show', $intern->id) }}">
                            @csrf
                            @method("POST")
                                <input  type="submit" class="btn btn-warning" value="Düzelt">
                        </form>
                   </i> 
                   <i style="display:inline-block;">
                        <form method="POST" action="{{ route('listeleme.sil',$intern->id) }}">
                            @csrf
                            @method("DELETE")
                                <input type="submit" class="btn btn-danger" value="Sil">  
                        </form>
                   </i> 
                </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a class="btn btn-primary float-right" style="margin-bottom:10px" href="{{ route('index') }}"> Anasayfaya Dön</a>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>