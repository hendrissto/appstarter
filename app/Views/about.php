<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('MyAsset/style.css');?>">
    <title>Hendri Susanto</title>
  </head>
  <body>
    
    <!-- Navbar-->

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="/">Hendri Susanto</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-link active" href="/">Home <span class="sr-only">(current)</span></a>
                <a class="nav-link" href="profil">Profil</a>
                <a class="nav-link" href="#">Work</a>
                <a class="btn btn-primary tombol" href="about">About</a>
            </div>
            </div>
        </div>
    </nav>

    <!-- Akhir  Navbar-->
    



    <div class="container">
        

        <div class="row workingspace">
            <div class="col-lg-6">
                <img src="<?= base_url('MyAsset/img/workingspace.png');?>" alt="workingspace" class="img-fluid">
            </div>
            <div class="col-lg-5">
                <h3>Allow <span>Me</span> To Introduce <span>My Self</span></h3>
                <p>Bekerja dengan suasana hati yang cerah</p>
                <a href="" class="btn btn-primary tombol">Detail</a>
            </div>
        </div>

        <section class="testimonial">
            <div class="row justify-content-center quote">
                <div class="col-lg-8">
                    <h5>"Bekerja dengan kasih sayang"</h5>
                </div>
            </div>
    
            <div class="row justify-content-center">
                <div class="col-lg-6 justify-content-center d-flex">
                    <figure class="figure">
                        <img src="<?= base_url('MyAsset/img/img1.png');?>" class="figure-img img-fluid rounded-circle" alt="...">
                    </figure>
                    <figure class="figure">
                        <img src="<?= base_url('MyAsset/img/img1.png');?>" class="figure-img img-fluid rounded-circle utama" alt="...">
                        <figcaption class="figure-caption">
                            <h5>Sunny y</h5>
                            <p>Designer</p>
                        </figcaption>
                    </figure>
                    <figure class="figure">
                        <img src="<?= base_url('MyAsset/img/img1.png');?>" class="figure-img img-fluid rounded-circle" alt="...">
                    </figure>
                </div>
            </div>
        </section>
    
        <div class="row footer">
            <div class="col text-center">
                <p>Made in Hendri</p>
            </div>
        </div>

    </div>

    





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>