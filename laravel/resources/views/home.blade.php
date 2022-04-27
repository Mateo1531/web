@extends('layout')

@section('content')


<style>
        * {
      box-sizing: border-box;
    }

    .contenedor {
      max-width: 1200px;
      width: 90%;
      margin: auto;
    }

    /* --- --- CONTENEDOR PRINCIPAL --- --- */

    .contenido-principal {
      margin-bottom: 50px;
      display: flex;
      align-items: center;
    }

    .contenido-principal__imagen {
      vertical-align: top;
      margin-right: 20px;
      width: 50%;
      max-width: 550px;
    }

    .contenido-principal__contenedor {
      width: 50%;
    }

    .contenido-principal__titulo {
      font-weight: normal;
      font-size: 28px;
    }

    .contenido-principal__resumen {
      font-family: 'Open Sans', sans-serif;
      line-height: 30px;
      color: #CFCFCF;
    }

    /* --- --- CAROUSEL --- --- */
    .carousel__contenedor {
      position: relative;
    }

    .carousel__anterior,
    .carousel__siguiente {
      position: absolute;
      display: block;
      width: 30px;
      height: 30px;
      border: none;
      top: calc(50% - 35px);
      cursor: pointer;
      line-height: 30px;
      text-align: center;
      background: none;
      color: #fff;
      opacity: 20%;
    }

    .carousel__anterior:hover,
    .carousel__siguiente:hover {
      opacity: 100%;
    }

    .carousel__anterior {
      left: -30px;
    }

    .carousel__siguiente {
      right: -30px;
    }

    .carousel__lista {
      overflow: hidden;
    }

    .carousel__elemento {
      text-align: center;
    }

    .carousel__indicadores .glider-dot {
      display: block;
      width: 30px;
      height: 4px;
      background: #fff;
      opacity: .2;
      border-radius: 0;
    }

    .carousel__indicadores .glider-dot:hover {
      opacity: .5;
    }

    .carousel__indicadores .glider-dot.active {
      opacity: 1;
    }

    @media screen and (max-width: 800px) {
      body {
        padding: 40px 0;
        background-color: #ededed;
      }

      .contenido-principal {
        flex-direction: column;
      }

      .contenido-principal > * {
        width: 100%;
      }
    }
    .cursos{
        width: 80%;
        margin: auto;
        padding-top: 71px;

    }
    .logo{
      height: 200px;
      width: 200px;
      object-fit: cover;
    }
    .banner{
        width:600px;
        margin-left:30%;
        margin-right:30%;
    }
    .labelHome{
    line-height: 1.3;
    letter-spacing: -1px;
    font-weight: 700;
    margin-bottom: 26px;
    color: #0d6efd; 
    font-size: 2.9em;
  }
  .contenedor{
    position: relative;
    display: inline-block;
    text-align: center;
  }
  .bodyCurso{
    border-radius: 30px;
  }
</style>
<div style="height:74px; min-height: 5px;max-height: 100px; "></div>
<!-- <div  id="carouselExampleInterval" class="carousel slide banner" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="{{asset('/img/bannerPrincipal.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="{{asset('/img/baner2.jpg')}}" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> -->
    <!-- <div>
      <h2 data-animate="fadeInUp" class="labelHome">Con más de 20 años de experiencia en la Industria de Transportes.</h2>
    </div> -->

    
      <!-- <div id="carouselExampleFade" class="carousel slide carousel-fade carouselImg" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('img/bannerPrincipal.jpg')}}" alt="">
          </div>
          <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div> -->


    <section style="background-color: #ededed; height: 550px;" >
      <table style="margin: auto;">
        <tr>
          <!-- <td style="width: 50%;"">
           
            <div style=" margin: 20%; font-family: 'Trebuchet MS', sans-serif; font-weight: 200; font-size: 90px;" >
              <p>Habilidades para tu presente</p>
            </div>
            <div  style=" margin: 20%;">
              <p>Elige entre más de 183.000 cursos en vídeo y en línea con nuevo contenido cada mes</p>
            </div>
          </td> -->
          <!-- style=" font-family: 'Trebuchet MS', sans-serif; font-weight: 200; font-size: 90px;" -->
          <td >
            <div class="contenedor">
                <div >
                  <p style="position: absolute; top: 92px;font-size: 45px; font-weight: 800;font-family: fangsong;">Habilidades para tu presente</p>
                </div>
                <div  style=" width: 560px; position: absolute;; top: 189px;">
                  <p style=" font-size: 29px;font-family: fangsong;">Elige entre más de 183.000 cursos en vídeo y en línea con nuevo contenido cada mes</p>
              </div>
            </div>
            <div> <img  src="{{asset('img/preuba.png')}}" alt=""></div>
          </td>
        </tr>
      </table>
      <div>
       
      </div>
     
    </section>
    <section style=" height: 600px; background-color: #0d6efd!important;">
    <div class="owl-carousel owl-theme cursos">
      <div class="item"><div class="card bodyCurso" style="width: 18rem; ">
          <img class="logo" src="{{asset('img/php.png')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a  href="{{route ('indexCourse')}}" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="item"><div class="card bodyCurso" style="width: 18rem;">
        <img class="logo" src="{{asset('img/python.png')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class=" item"><div class="card bodyCurso" style="width: 18rem;">
        <img class="logo" src="{{asset('img/js.png')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class=" item"><div class="card bodyCurso" style="width: 18rem;">
          <img class="logo" src="{{asset('img/c#.png')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Soadssame quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class=" item"><div class="card bodyCurso" style="width: 18rem;">
          <img class="logo" src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>
        


    </section>

  <section style="background-color: #ededed; height: 550px;" >

  </section>

   

@endsection