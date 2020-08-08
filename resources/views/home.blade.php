@extends('layout.layout')

@section('content')

<div id="mainH">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item ad1 active">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item ad2">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item ad3">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div id="containerM" class="container-fluid">
  <h3 style="font-weight: 700;">Empieza hoy tu camino al exito</h3>
  <p>Elije un curso para comenzar con el aprendizaje, preparate para el futuro!</p>

  <div id="carouselC" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselC" data-slide-to="0" class="active"></li>
      <li data-target="#carouselC" data-slide-to="1"></li>
      <li data-target="#carouselC" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="container" style="margin-top: 1%;">
          <div class="row justify-content-center">
            <div class="col-md">
              <div class="card">
                <img class="card-img-top" src="/img/BackA-min.jpg" alt="Card image cap" height="143">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    cards content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-md">
              <div class="card">
                <img class="card-img-top" src="/img/elearning-min.png" alt="Card image cap" height="143">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    cards content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-md">
              <div class="card">
                <img class="card-img-top" src="/img/BackB-min.jpg" alt="Card image cap" height="143">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    cards content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-md">
              <div class="card">
                <img class="card-img-top" src="/img/e-learning-system-min.jpeg" alt="Card image cap" height="143">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    cards content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-caption d-none d-md-block" style="color:#566573">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container" style="margin-top: 1%;">
          <div class="row justify-content-center">
            <div class="col-md">
              <div class="card">
                <img class="card-img-top" src="/img/BackA-min.jpg" alt="Card image cap" height="143">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    cards content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-md">
              <div class="card">
                <img class="card-img-top" src="/img/elearning-min.png" alt="Card image cap" height="143">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    cards content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-md">
              <div class="card">
                <img class="card-img-top" src="/img/BackB-min.jpg" alt="Card image cap" height="143">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    cards content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-md">
              <div class="card">
                <img class="card-img-top" src="/img/e-learning-system-min.jpeg" alt="Card image cap" height="143">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    cards content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-caption d-none d-md-block"  style="color:#566573">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselC" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselC" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<!-- Mobile Carousel -->

<div id="carouselCM" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselCM" data-slide-to="0" class="active"></li>
    <li data-target="#carouselCM" data-slide-to="1"></li>
    <li data-target="#carouselCM" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="container" style="padding: 0 12% 0 12%">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="card">
              <img class="card-img-top" src="/img/BackA-min.jpg" alt="Card image cap" height="143">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  cards content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-caption d-none d-md-block" style="color:#566573">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="card">
              <img class="card-img-top" src="/img/BackB-min.jpg" alt="Card image cap" height="143">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  cards content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-caption d-none d-md-block"  style="color:#566573">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="card">
              <img class="card-img-top" src="/img/e-learning-system-min.jpeg" alt="Card image cap" height="143">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  cards content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-caption d-none d-md-block"  style="color:#566573">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselCM" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselCM" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



</div>

@endsection