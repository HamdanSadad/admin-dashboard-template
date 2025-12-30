<?php
include __DIR__ . '/../views/azia/header.php';
include __DIR__ . '/../views/azia/topnav.php';
?>

<div class="az-content pd-y-20 pd-lg-y-30 pd-xl-y-40">
  <div class="container">
    <div class="az-content-left az-content-left-components">
      <div class="component-item">
        <label>UI Elements</label>
        <nav class="nav flex-column">
          <a href="elem-buttons.php" class="nav-link">Buttons</a>
          <a href="elem-dropdown.php" class="nav-link">Dropdown</a>
          <a href="elem-icons.php" class="nav-link">Icons</a>
        </nav>

        <label>Forms</label>
        <nav class="nav flex-column">
          <a href="form-elements.php" class="nav-link">Form Elements</a>
        </nav>

        <label>Charts</label>
        <nav class="nav flex-column">
          <a href="chart-chartjs.php" class="nav-link active">ChartJS</a>
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
        <span>Charts</span>
        <span>ChartJS Charts</span>
      </div>
      <h2 class="az-content-title">ChartJS Charts</h2>

      <div class="az-content-label mg-b-5">Bar Chart</div>
      <p class="mg-b-20">Below is the basic bar chart example.</p>

      <div class="row row-sm">
        <div class="col-sm-8 col-md-6 col-xl-4">
          <div class="az-content-label az-content-label-sm mg-b-15">Solid Color</div>
          <div class="ht-200 ht-lg-250"><canvas id="chartBar1"></canvas></div>
        </div><!-- col-6 -->
        <div class="col-sm-8 col-md-6 col-xl-4 mg-t-20 mg-md-t-0">
          <div class="az-content-label az-content-label-sm mg-b-15">With Transparency</div>
          <div class="ht-200 ht-lg-250"><canvas id="chartBar2"></canvas></div>
        </div><!-- col-6 -->
        <div class="col-sm-8 col-md-6 col-xl-4 mg-t-20 mg-xl-t-0">
          <div class="az-content-label az-content-label-sm mg-b-15">Using Gradient Color</div>
          <div class="ht-200 ht-lg-250"><canvas id="chartBar3"></canvas></div>
        </div><!-- col-6 -->
      </div><!-- row -->

      <hr class="mg-y-30">

      <div class="az-content-label mg-b-5">Horizontal Bar Chart</div>
      <p class="mg-b-20">Below is the horizontal bar chart example.</p>

      <div class="row row-sm">
        <div class="col-sm-8 col-md-6">
          <div class="chartjs-wrapper-demo"><canvas id="chartBar4"></canvas></div>
        </div><!-- col-6 -->
        <div class="col-sm-8 col-md-6 mg-t-20 mg-md-t-0">
          <div class="chartjs-wrapper-demo"><canvas id="chartBar5"></canvas></div>
        </div><!-- col-6 -->
      </div><!-- row -->

      <hr class="mg-y-30">

      <div class="az-content-label mg-b-5">Stacked Bar Chart</div>
      <p class="mg-b-20">Below are the vertical and horizontal bar chart example.</p>

      <div class="row row-sm">
        <div class="col-sm-8 col-md-6">
          <div class="chartjs-wrapper-demo"><canvas id="chartStacked1"></canvas></div>
        </div><!-- col-6 -->
        <div class="col-sm-8 col-md-6 mg-t-20 mg-md-t-0">
          <div class="chartjs-wrapper-demo"><canvas id="chartStacked2"></canvas></div>
        </div><!-- col-6 -->
      </div><!-- row -->

      <hr class="mg-y-30">

      <div class="row row-sm">
        <div class="col-sm-8 col-md-6">
          <div class="az-content-label mg-b-5">Line Chart</div>
          <p class="mg-b-20">Below is the basic line chart example.</p>
          <div class="chartjs-wrapper-demo"><canvas id="chartLine1"></canvas></div>
        </div><!-- col-6 -->
        <div class="col-sm-8 col-md-6 mg-t-20 mg-md-t-0">
          <div class="az-content-label mg-b-5">Area Chart</div>
          <p class="mg-b-20">Below is the basic area chart example.</p>
          <div class="chartjs-wrapper-demo"><canvas id="chartArea1"></canvas></div>
        </div><!-- col-6 -->
      </div><!-- row -->

      <hr class="mg-y-30">

      <div class="az-content-label mg-b-5">Pie &amp; Donut Chart</div>
      <p class="mg-b-20">Below are an example of data in a pie and donut chart.</p>

      <div class="d-md-flex">
        <div class="chartjs-wrapper-demo mg-b-20 mg-md-b-0 mg-md-r-30 mg-xl-r-40"><canvas id="chartPie"></canvas></div>
        <div class="chartjs-wrapper-demo"><canvas id="chartDonut"></canvas></div>
      </div>

    </div><!-- az-content-body -->
  </div><!-- container -->
</div><!-- az-content -->


<script src="<?= base_url('assets/azia/lib/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/azia/lib/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/azia/lib/ionicons/ionicons.js') ?>"></script>
<script src="<?= base_url('assets/azia/lib/chart.js/Chart.bundle.min.js') ?>"></script>

<script src="<?= base_url('assets/azia/js/azia.js') ?>"></script>
<script src="<?= base_url('assets/azia/js/chart.chartjs.js') ?>"></script>
<script src="<?= base_url('assets/azia/js/jquery.cookie.js') ?>"></script>

<?php
include __DIR__ . '/footer.php';
?>