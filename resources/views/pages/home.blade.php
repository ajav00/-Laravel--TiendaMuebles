@extends('layouts.master')
@section('content')
    <div class="hero"></div>
    <section class="contenedor categorias">
        <h2 class="text-center">Categorías de Producto</h2>
        <div class="listado-categorias ">
            <div class="categoria">
                <img src="./img/categoria1.jpg" alt="Imagen Categoría">
                <a href="#">Oficina</a>
            </div>        
            <div class="categoria">
                <img src="./img/categoria2.jpg" alt="Imagen Categoría">
                <a href="#">Hogar</a>
            </div>        
            <div class="categoria">
                <img src="./img/categoria3.jpg" alt="Imagen Categoría">
                <a href="#">Cocina</a>
            </div>        
        </div>
    </section>

    <section class="sobre-nosotros">
        <div class="contenedor sobre-nosotros-grid">
            <div class="texto-nosotros">
                <h2>Sobre Nosotros</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, vero. Eum, corrupti optio nemo sit laborum distinctio voluptates assumenda culpa reprehenderit voluptatem non consectetur? Natus animi odio quia eligendi quos.</p>
            </div>
        </div>
    </section>
    <main class="contenido-principal contenedor">
        <h2 class="text-center">Nuestros productos</h2>
        <div class="listado-productos">
            <div class="producto">
                <img src="img/producto1.jpg" alt="Imagen Producto">
                <div class="texto-producto">
                    <h4>Producto 1</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam consectetur temporibus aliquid laboriosam numquam accusamus!</p>
                    <p class="precio">$1,000,000.00</p>
                    <a class="btn" href="#">Agregar al carrito</a>
                </div> <!-- Info Producto -->
            </div> <!-- Producto -->
            <div class="producto">
                <img src="img/producto2.jpg" alt="Imagen Producto">
                <div class="texto-producto">
                    <h4>Producto 2</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam consectetur temporibus aliquid laboriosam numquam accusamus!</p>
                    <p class="precio">$1,000,000.00</p>
                    <a class="btn" href="#">Agregar al carrito</a>
                </div> <!-- Info Producto -->
            </div> <!-- Producto -->
            <div class="producto">
                <img src="img/producto3.jpg" alt="Imagen Producto">
                <div class="texto-producto">
                    <h4>Producto 3</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam consectetur temporibus aliquid laboriosam numquam accusamus!</p>
                    <p class="precio">$1,000,000.00</p>
                    <a class="btn" href="#">Agregar al carrito</a>
                </div> <!-- Info Producto -->
            </div> <!-- Producto -->
            <div class="producto">
                <img src="img/producto4.jpg" alt="Imagen Producto">
                <div class="texto-producto">
                    <h4>Producto 4</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam consectetur temporibus aliquid laboriosam numquam accusamus!</p>
                    <p class="precio">$1,000,000.00</p>
                    <a class="btn" href="#">Agregar al carrito</a>
                </div> <!-- Info Producto -->
            </div> <!-- Producto -->
            <div class="producto">
                <img src="img/producto5.jpg" alt="Imagen Producto">
                <div class="texto-producto">
                    <h4>Producto 5</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam consectetur temporibus aliquid laboriosam numquam accusamus!</p>
                    <p class="precio">$1,000,000.00</p>
                    <a class="btn" href="#">Agregar al carrito</a>
                </div> <!-- Info Producto -->
            </div> <!-- Producto -->
            <div class="producto">
                <img src="img/producto6.jpg" alt="Imagen Producto">
                <div class="texto-producto">
                    <h4>Producto 6</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam consectetur temporibus aliquid laboriosam numquam accusamus!</p>
                    <p class="precio">$1,000,000.00</p>
                    <a class="btn" href="#">Agregar al carrito</a>
                </div> <!-- Info Producto -->
            </div> <!-- Producto -->
        </div> <!-- Contenedor Productos -->
    </main>
@stop