@extends('layouts.master')
@section('title', 'Hola')

@section('header')
@parent
@stop

@section('navbar')
@parent
Barra de navegacion
@stop
@section('contenido')

<center><h1 class="pintores">Michelangelo Buonarroti</h1>
    <img src="/images/miguel.jpg" alt="15%" width= "15%"></center>
<div>
    <aside>
    Michelangelo Buonarroti (Caprese, 6 de marzo de 1475-Roma, 18 de febrero de 1564), conocido en español como Miguel Ángel, fue un arquitecto, escultor y pintor italiano renacentista, considerado uno de los más grandes artistas de la historia tanto por sus esculturas como por sus pinturas y obra arquitectónica.1​ Desarrolló su labor artística a lo largo de más de setenta años entre Florencia y Roma, que era donde vivían sus grandes mecenas, la familia Médici de Florencia y los diferentes papas romanos. <br>

Fue el primer artista occidental del que se publicaron dos biografías en vida: Le vite de' più eccellenti pittori, scultori e architettori, de Giorgio Vasari, publicada en 1550 en su primera edición, en la cual fue el único artista vivo incluido,2​ y Vita de Michelangelo Buonarroti, escrita en 1553 por Ascanio Condivi, pintor y discípulo de Miguel Ángel, que recoge los datos facilitados por el mismo Buonarroti.
    
    <center> <h3>Pintura más famosa</h3>
    <img src="/images/manos.jpg" alt="15%" width= "15%"></center>
    </aside>

</div>
@stop
@section('footer')