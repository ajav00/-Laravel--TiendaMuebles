@extends('layouts.master')
@section('content')
    <main class="contenido-principal contenedor">
        <h2 class="text-center">Contacto</h2>

        <form class="formulario">
            <fieldset>
                <legend>Tus Datos</legend>

                <div class="campo">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" placeholder="Tu Nombre" required>
                </div>

                <div class="campo">
                    <label for="asunto">Asunto:</label>
                    <input type="text" id="asunto" placeholder="Tu Asunto">
                </div>

                <div class="campo">
                    <label for="email">Email:</label>
                    <input type="email" id="email" placeholder="Tu Email">
                </div>

                <div class="campo">
                    <label for="tel">Teléfono:</label>
                    <input type="tel" id="tel" placeholder="Tu Teléfono">
                </div>

                <div class="campo">
                    <label for="mensaje">Mensaje:</label>
                    <textarea id="mensaje" cols="30" rows="10"></textarea>
                </div>
            </fieldset>
            <fieldset>
                <legend>País</legend>
                <div class="campo">
                    <label for="pais">País:</label>
                    <select id="pais">
                        <option value="">-- Seleccione --</option>
                        <option value="MX">México</option>
                        <option value="PR">Perú</option>
                        <option value="CO">Colombia</option>
                        <option value="AR">Argentina</option>
                        <option value="EC">España</option>
                        <option value="CH">Chile</option>
                    </select>
                </div>
            </fieldset>
            <fieldset>
                <legend>Información Extra</legend>
                <div class="campo">
                    <label for="cliente">Cliente:</label>
                    <input type="radio" id="cliente" name="tipo" value="cliente">
                </div>
                <div class="campo">
                    <label for="proovedor">Proovedor:</label>
                    <input type="radio" id="proovedor" name="tipo" value="proovedor">
                </div>
                <div class="campo">
                    <label for="categoria">Categoria de Interés:</label>
                    <input type="categoria" list="categorias" name="categorias">
                    <datalist id="categorias">
                        <option value="Cocina">
                        <option value="Exterior">
                        <option value="Recamaras">
                        <option value="Oficina">
                        <option value="Televisión">
                    </datalist>
                </div>
            </fieldset>
            <input class="btn" type="submit" value="Enviar Formulario" >
        </form>
        
    </main>
    @stop