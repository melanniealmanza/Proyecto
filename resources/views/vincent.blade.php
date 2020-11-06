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

<center><h1 class="pintores">Vincent van Gogh</h1>
<img src="/images/Vincent.jpg" alt="10%" width= "15%"></center>
<div>
    <aside>
    Año de Nacimiento : 1853 <br>
    Año de la Muerte : 1890 <br>
    País : Los Países Bajos <br>
    

    Van Gogh nació en 1853 y creció en Holanda. Fue criado en una familia religiosa con su padre siendo un ministro. Cuando terminó sus estudios, Vincent siguió la profesión de su tío y se convirtió en un comerciante de arte aprendiendo el comercio en Holanda y luego trabajando en Inglaterra y Francia. 
    En 1880, a 27 años de edad, Van Gogh entró en el Académie Royale des Beaux-Arts en Bruselas, Bélgica. El invierno siguiente, viviendo en Amsterdam, Vincent se enamoró, su corazón se había roto, y comenzó a pintar. Los próximos años se traduciría en poco éxito tanto en el amor y el arte.
    Después de tan sólo diez años de pintura y producir unas 900 pinturas, Vincent van Gogh se quitó la vida en 1890. Nunca apreciado en su tiempo, no tendría mucho tiempo para que el mundo del arte a reconocer el genio que perdieron. Veinte años después de su muerte, había espectáculos conmemorativos de sus trabajos por todo el mundo – que influyen en las generaciones de artistas por venir. <br>

    <center><h3>Pintura más famosa</h3>
    <img src="/images/gogh.jpg" alt="10%" width= "10%"></center>
    
    </aside>

</div>
@stop
@section('footer')