<?php
include __DIR__ . '/header.php';
include __DIR__ . '/topnav.php';
?>

<div class="az-content pd-y-20 pd-lg-y-30 pd-xl-y-40">
  <div class="container">
    <div class="az-content-left az-content-left-components">
      <div class="component-item">

        <label>UI Elements</label>
        <nav class="nav flex-column">
          <a href="elem-buttons.php" class="nav-link">Buttons</a>
          <a href="elem-dropdown.php" class="nav-link active">Dropdown</a>
          <a href="elem-icons.php" class="nav-link">Icons</a>
        </nav>

        <label>Forms</label>
        <nav class="nav flex-column">
          <a href="form-elements.php" class="nav-link">Form Elements</a>
        </nav>

        <label>Charts</label>
        <nav class="nav flex-column">
          <a href="chart-chartjs.php" class="nav-link">ChartJS</a>
        </nav>

        <label>Tables</label>
        <nav class="nav flex-column">
          <a href="table-basic.php" class="nav-link">Basic Tables</a>
        </nav>

      </div><!-- component-item -->

    </div><!-- az-content-left -->
    <div class="az-content-body pd-lg-l-40 d-flex flex-column">
      <div class="az-content-breadcrumb">
        <span>Components</span>
        <span>UI Elements</span>
        <span>Dropdown</span>
      </div>
      <h2 class="az-content-title">Dropdown</h2>

      <div class="az-content-label mg-b-5">Basic Example</div>
      <p class="mg-b-20">Wrap the dropdown’s toggle (your button or link) and the dropdown menu within .dropdown, or another element that declares position relative. Dropdowns can be triggered from link or button elements to better fit your potential needs.</p>

      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown Menu
        </button>
        <div class="dropdown-menu tx-13" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>

      <hr class="mg-y-40">

      <div class="az-content-label mg-b-5">Dropup</div>
      <p class="mg-b-20">Trigger dropdown menus above elements by adding dropup class to the parent element.</p>

      <div class="dropdown dropup">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropup Menu
        </button>
        <div class="dropdown-menu tx-13">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>

      <hr class="mg-y-40">

      <div class="az-content-label mg-b-5">Dropright</div>
      <p class="mg-b-20">Trigger dropdown menus above elements by adding dropright class to the parent element.</p>

      <div class="dropdown dropright">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="droprightMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropright Menu
        </button>
        <div class="dropdown-menu tx-13" aria-labelledby="droprightMenuButton">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>

      <hr class="mg-y-40">

      <div class="az-content-label mg-b-5">Dropleft</div>
      <p class="mg-b-20">Trigger dropdown menus above elements by adding dropleft class to the parent element.</p>

      <div class="dropdown dropleft">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropleftMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropright Menu
        </button>
        <div class="dropdown-menu tx-13" aria-labelledby="dropleftMenuButton">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>

      <hr class="mg-y-40">

      <div class="az-content-label mg-b-5">Active Menu Item</div>
      <p class="mg-b-20">Add active class to items in the dropdown to style them as active.</p>

      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown Menu
        </button>
        <div class="dropdown-menu tx-13">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item active" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>

      <hr class="mg-y-40">

      <div class="az-content-label mg-b-5">Disabled Menu Item</div>
      <p class="mg-b-20">Add disabled class to items in the dropdown to style them as disabled.</p>

      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown Menu
        </button>
        <div class="dropdown-menu tx-13">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item disabled" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>

      <hr class="mg-y-40">

      <div class="az-content-label mg-b-5">Dropdown Header</div>
      <p class="mg-b-20">Add a header to label sections of actions in any dropdown menu.</p>

      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown Menu
        </button>
        <div class="dropdown-menu tx-13">
          <h6 class="dropdown-header tx-uppercase tx-11 tx-bold tx-inverse tx-spacing-1">Dropdown header</h6>
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>

      <hr class="mg-y-40">

      <div class="az-content-label mg-b-5">Dropdown Divider</div>
      <p class="mg-b-20">Separate groups of related menu items with a divider.</p>

      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown Menu
        </button>
        <div class="dropdown-menu tx-13">
          <h6 class="dropdown-header tx-uppercase tx-11 tx-bold tx-inverse tx-spacing-1">Dropdown header</h6>
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Separated link</a>
        </div>
      </div>

      <div class="ht-40"></div>
    </div><!-- az-content-body -->
  </div><!-- container -->
</div><!-- az-content -->


<script src="<?= base_url('assets/azia/lib/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/azia/lib/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/azia/lib/ionicons/ionicons.js') ?>"></script>
<script src="<?= base_url('assets/azia/js/jquery.cookie.js') ?>"></script>

<script src="<?= base_url('assets/azia/js/azia.js') ?>"></script>
<script>
  $(function() {
    'use strict'

  });
</script>

<?php
include __DIR__ . '/footer.php';
?>