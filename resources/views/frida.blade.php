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

<center><h1 class="pintores">Frida Kahlo</h1>
    <img src="/images/frida.jpg" alt="15%" width= "15%"></center>
<div>
    <aside>
    FRIDA KAHLO (MAGDALENA CARMEN FRIDA KAHLO CALDERÓN) nació el 6 de julio de 1907 en la Ciudad de México
    A los dieciocho años Frida Kahlo sufrió un gravísimo accidente que la obligó a una larga convalecencia, durante la cual aprendió a pintar, y que influyó con toda probabilidad en la formación del complejo mundo psicológico que se refleja en sus obras. En 1929 contrajo matrimonio con el muralista Diego Rivera; tres años después sufrió un aborto que afectó en lo más hondo su delicada sensibilidad y le inspiró dos de sus obras más valoradas: Henry Ford Hospital y Frida y el aborto, cuya compleja simbología se conoce por las explicaciones de la propia pintora.
    En su búsqueda de las raíces estéticas de México, rasgo que compartió con Diego Rivera y los muralistas, Frida Kahlo realizó espléndidos retratos de niños y obras inspiradas en la iconografía mexicana anterior a la conquista, pero son las telas que se centran en ella misma y en su azarosa vida las que la han convertido en una figura destacada de la pintura mexicana del siglo XX.
    

    <center> <h3>Pintura más famosa</h3>
    <img src="/images/kahlo2.jpg" alt="15%" width= "15%"></center>
    </aside>

</div>
@stop
@section('footer')