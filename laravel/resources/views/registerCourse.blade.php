@extends('layout')

@section('content')

<div style="height:74px; min-height: 5px;max-height: 100px; "></div>

<div>
    <div class="card">
        <div class="mx-auto">
            <!-- <div class="card-header  ">
                Nuevo curso
            </div> -->
            <div class="mb-3 card-body">
               
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nombre del curso</label>
                    <input type="text" class="form-control" id="nameCourse" placeholder="name@example.com">
                    <p class="mb-3 card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
                
                <div class="mb-3">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Seleccione una categoria</option>
                        <option value="1">Desarrollo web</option>
                        <option value="2">Informatica y software</option>
                        <option value="3">Diseño</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tiempo de duracion</label>
                    <input type="text" class="form-control" id="durationTime" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Temario del curso</label>
                    <textarea class="form-control" id="description" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Descripcion del curso</label>
                    <textarea class="form-control" id="description" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Default file input example</label>
                    <input class="form-control" type="file" id="formFile">
                </div>
                <a href="{{route('createCourse')}}" class="btn btn-primary">Crear curso</a>
            </div>
           
        </div>

    </div>
</div>

@endsection