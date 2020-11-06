
<?php $__env->startSection('title', 'Hola'); ?>

<?php $__env->startSection('header'); ?>
##parent-placeholder-594fd1615a341c77829e83ed988f137e1ba96231##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('navbar'); ?>
##parent-placeholder-c63e3c1cfa2ff651ad4cfadea3e21265ffcf8ca3##
Barra de navegacion
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>

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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pintores\resources\views/davinci.blade.php ENDPATH**/ ?>