<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" >Pintores</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo e(action('Pintores@menu')); ?>">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo e(action('Pintores@frida')); ?>">Frida Kahlo</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo e(action('Pintores@vincent')); ?>"> Vincent Van Gogh</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo e(action('Pintores@davinci')); ?>"> Leonardo Da Vinci</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo e(action('Pintores@miguel')); ?>"> Michelangelo Buonarroti</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo e(action('Pintores@pablo')); ?>"> Pablo Picasso</a>
      </li>
        </div>
      </li>
    </ul>
  </div>
</nav><?php /**PATH C:\laragon\www\pintores\resources\views/includes/navbar.blade.php ENDPATH**/ ?>