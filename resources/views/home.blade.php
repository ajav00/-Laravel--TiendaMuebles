@extends('layouts.master')
@section('content')
    <div class="bloques">
        <div class="bloques__grid">
            <div class="bloque">
                <div class="bloque__contenido">
                    <h2 class="bloque__heading">Novedades</h2>
                    <p class="bloque__texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis excepturi dicta laborum obcaecati.</p>
                </div>
            </div>
            <div class="bloque"></div>
            <div class="bloque">
                <div class="bloque__contenido">
                    <h2 class="bloque__heading">Sobre Nosotros</h2>
                    <p class="bloque__texto">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci magni animi minima.</p>
                </div>
            </div>
            <div class="bloque"></div>
        </div>
    </div>

    <section class="nosotros contenedor">
        <h2 class="nosotros__heading">¿Qué nos diferencian?</h2>
        <div class="nosotros__grid">
            <div class="nosotros__bloque">
                <img src="./img/original.png" alt="imagen icono" class="nosotros__imagen">
                <h3 class="nosotros__bloque-heading">Original</h3>
                <p class="nosotros__bloque-texto">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis voluptas porro explicabo temporibus?
                </p>
            </div>
            <div class="nosotros__bloque">
                <img src="./img/tiempo.png" alt="imagen icono" class="nosotros__imagen">
                <h3 class="nosotros__bloque-heading">Novedades</h3>
                <p class="nosotros__bloque-texto">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati, quaerat?</p>
            </div>
            <div class="nosotros__bloque">
                <img src="./img/coleccion.png" alt="imagen icono" class="nosotros__imagen">
                <h3 class="nosotros__bloque-heading">Colecciones</h3>
                <p class="nosotros__bloque-texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, molestias!</p>
            </div>
        </div>
    </section>


    <section class="escuela">
        <h2 class="escuela__heading">Nuestra Ubicación</h2>
        <p class="escuela__texto">Lorem ipsum dolor sit amet.</p>
        <a href="#" class="escuela__enlace">Más información</a>
    </section>

    
@stop