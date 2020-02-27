<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Intern List</title>
  </head>
  <body>
    <div class="container">
        <div class="jumbotron jumbotron-fluid" style="margin-top:20px">
            <div class="container">
                <h3 class="display-4">{{ $interns->ad }} Bilgilerini Güncelle</h3>
            </div>
        </div>
        <!-- Form  -->
        <form method="POST" action="{{ route('duzeltme.update', $interns->id) }}" >
            @csrf
            @method('PUT')
          <div class="form-row">
             <div class="form-group col-md-6">
                <label for="ad">Ad</label>
                <input type="text" name="ad" class="form-control" id="ad" value="{{ $interns->ad }}">
              </div>
              <div class="form-group col-md-6">
                <label for="soyad">Soyad</label>
                <input type="text" name="soyad" class="form-control" id="soyad"  value="{{ $interns->soyad }}">
              </div>
            </div>
          <div class="form-row">
            <div class="form-group col-md-6">
                <label for="okul">Okul</label>
                <input type="text" name="okul" class="form-control" id="okul"  value="{{ $interns->okul }}">
            </div>
            <div class="form-group col-md-6">
                <label for="bolum">Bölüm</label>
                <input type="text" name="bolum" class="form-control" id="bolum"  value="{{ $interns->bolum }}">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
                <label for="il">İl</label>
                <input type="text" name="il" class="form-control" id="il"  value="{{ $interns->il }}">
            </div>
            <div class="form-group col-md-6">
                <label for="ilce">İlçe</label>
                <input type="text" name="ilce" class="form-control" id="ilce" value="{{ $interns->ilce }}">
            </div>
          </div>
          <form method="POST" action="{{ route('duzeltme.update',$interns->id) }}">
                      @csrf
                      @method("PUT")
                          <input type="submit" class="btn btn-danger" value="Güncelle">  
                   </form>
            
        </form>
        <a class="btn btn-success float-right" href="{{ route('listeleme') }}">Listeleye Dön</a>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>