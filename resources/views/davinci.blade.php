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

<center><h1 class="pintores">Leonardo Da Vinci</h1>
    <img src="/images/davinci.jpg" alt="15%" width= "15%"></center>
<div>
    <aside>
    Leonardo da Vinci nació el 15 de abril de 1452 <br>
  
    Leonardo da Vinci se convirtió en pintor, escultor, ingeniero, inventor, músico, escritor y arquitecto, y se le consideraba un gran genio.
    Fue aceptado en el gremio de pintores de Florencia en 1472 y abrió su propio taller de pintura y escultura, así que su fama comenzó a crecer y le encargaban muchos trabajos diferentes y muy importantes.
    Murió el 2 de mayo de 1519 en Francia.
    
    <center> <h3>Pintura más famosa</h3>
    <img src="/images/cena.jpg" alt="15%" width= "15%"></center>
    </aside>

</div>
@stop
@section('footer')