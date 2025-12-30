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
          <a href="elem-buttons.php" class="nav-link active">Buttons</a>
          <a href="elem-dropdown.php" class="nav-link">Dropdown</a>
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
        <span>Buttons</span>
      </div>
      <h2 class="az-content-title">Buttons</h2>

      <div class="az-content-label mg-b-5">Theme Buttons</div>
      <p class="mg-b-20">Predefined button styles, each serving its own semantic purpose.</p>

      <div class="row row-xs wd-xl-80p">
        <div class="col-sm-6 col-md-3"><button class="btn btn-az-primary btn-block">Primary</button></div>
        <div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0"><button class="btn btn-az-secondary btn-block">Secondary</button></div>
        <div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0"><button class="btn btn-gray-500 btn-block">Light</button></div>
        <div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0"><button class="btn btn-gray-700 btn-block">Dark</button></div>
      </div><!-- row -->

      <table class="table az-table-reference">
        <thead>
          <tr>
            <th class="wd-40p">Class Reference</th>
            <th class="wd-60p">Values</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><code class="pd-0 bg-transparent">class="btn btn-az-[value]"</code></td>
            <td>primary | secondary | light | dark</td>
          </tr>
        </tbody>
      </table>

      <hr class="mg-y-30">

      <div class="az-content-label mg-b-5">Bootstrap Buttons</div>
      <p class="mg-b-20">Predefined button styles, each serving its own semantic purpose.</p>

      <div class="row row-xs wd-xl-80p">
        <div class="col-sm-6 col-md-3"><button class="btn btn-primary btn-block">Primary</button></div>
        <div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0"><button class="btn btn-secondary btn-block">Secondary</button></div>
        <div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0"><button class="btn btn-success btn-block">Success</button></div>
        <div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0"><button class="btn btn-warning btn-block">Warning</button></div>
        <div class="col-sm-6 col-md-3 mg-t-10"><button class="btn btn-danger btn-block">Danger</button></div>
        <div class="col-sm-6 col-md-3 mg-t-10"><button class="btn btn-info btn-block">Info</button></div>
        <div class="col-sm-6 col-md-3 mg-t-10"><button class="btn btn-light btn-block">Light</button></div>
        <div class="col-sm-6 col-md-3 mg-t-10"><button class="btn btn-dark btn-block">Dark</button></div>
      </div><!-- row -->

      <table class="table az-table-reference">
        <thead>
          <tr>
            <th class="wd-40p">Class Reference</th>
            <th class="wd-60p">Values</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><code class="pd-0 bg-transparent">class="btn btn-[value]"</code></td>
            <td>primary | secondary | success | warning | danger | info | light | dark</td>
          </tr>
        </tbody>
      </table>

      <hr class="mg-y-30">

      <div class="az-content-label mg-b-5">Outline Buttons</div>
      <p class="mg-b-20">Predefined button styles, each serving its own semantic purpose.</p>

      <div class="row row-xs wd-xl-80p">
        <div class="col-sm-6 col-md-3"><button class="btn btn-outline-indigo btn-block">Primary</button></div>
        <div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0"><button class="btn btn-outline-primary btn-block">Secondary</button></div>
        <div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0"><button class="btn btn-outline-light btn-block">Light</button></div>
        <div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0"><button class="btn btn-outline-dark btn-block">Dark</button></div>
      </div><!-- row -->

      <table class="table az-table-reference">
        <thead>
          <tr>
            <th class="wd-40p">Class Reference</th>
            <th class="wd-60p">Values</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><code class="pd-0 bg-transparent">class="btn btn-outline-[value]"</code></td>
            <td>indigo | primary | secondary | success | warning | danger | info | light | dark</td>
          </tr>
        </tbody>
      </table>

      <hr class="mg-y-30">

      <div class="az-content-label mg-b-5">Rounded Buttons</div>
      <p class="mg-b-20">Predefined button styles, each serving its own semantic purpose.</p>

      <div class="row row-xs wd-xl-80p">
        <div class="col-sm-6 col-md-3"><button class="btn btn-indigo btn-rounded btn-block">Primary</button></div>
        <div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0"><button class="btn btn-outline-indigo btn-rounded btn-block">Primary</button></div>
        <div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0"><button class="btn btn-primary btn-rounded btn-block">Secondary</button></div>
        <div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0"><button class="btn btn-outline-primary btn-rounded btn-block">Secondary</button></div>
      </div><!-- row -->

      <hr class="mg-y-30">

      <div class="az-content-label mg-b-5">Button with Icons</div>
      <p class="mg-b-20">A basic button with added icons.</p>

      <div class="row row-xs wd-xl-80p">
        <div class="col-sm-6 col-md-3"><button class="btn btn-indigo btn-with-icon btn-block"><i class="typcn typcn-folder"></i> Folder</button></div>
        <div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0"><button class="btn btn-primary btn-with-icon btn-block"><i class="typcn typcn-mail"></i> Mail</button></div>
        <div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0"><button class="btn btn-success btn-with-icon btn-block"><i class="typcn typcn-edit"></i> Edit</button></div>
      </div><!-- row -->

      <hr class="mg-y-30">

      <div class="az-content-label mg-b-5">Icon Buttons</div>
      <p class="mg-b-20">A button variant for using only icons.</p>

      <div class="btn-icon-list">
        <button class="btn btn-indigo btn-icon"><i class="typcn typcn-folder"></i></button>
        <button class="btn btn-primary btn-icon"><i class="typcn typcn-calendar-outline"></i></button>
        <button class="btn btn-success btn-icon"><i class="typcn typcn-document-add"></i></button>
        <button class="btn btn-info btn-icon"><i class="typcn typcn-arrow-back-outline"></i></button>
      </div>

      <hr class="mg-y-30">

      <div class="az-content-label mg-b-5">Dropdown Buttons</div>
      <p class="mg-b-20">A button variant for using only icons.</p>

      <div class="row row-xs wd-xl-80p">
        <div class="col-sm-6 col-md-3">
          <button data-toggle="dropdown" class="btn btn-indigo btn-block">Dropdown <i class="icon ion-ios-arrow-down tx-11 mg-l-3"></i></button>
          <div class="dropdown-menu">
            <a href="" class="dropdown-item">Profile</a>
            <a href="" class="dropdown-item">Activity Logs</a>
            <a href="" class="dropdown-item">Account Settings</a>
            <a href="" class="dropdown-item">Logout</a>
          </div><!-- dropdown-menu -->
        </div>
        <div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0">
          <button data-toggle="dropdown" class="btn btn-primary btn-block">Dropdown <i class="icon ion-ios-arrow-down tx-11 mg-l-3"></i></button>
          <div class="dropdown-menu">
            <a href="" class="dropdown-item">Profile</a>
            <a href="" class="dropdown-item">Activity Logs</a>
            <a href="" class="dropdown-item">Account Settings</a>
            <a href="" class="dropdown-item">Logout</a>
          </div><!-- dropdown-menu -->
        </div>
      </div><!-- row -->

      <hr class="mg-y-30">

      <div class="az-content-label mg-b-5">Button Groups</div>
      <p class="mg-b-20">Group a series of buttons together on a single line with the button group.</p>

      <div class="row row-sm">
        <div class="col-lg-4">
          <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-secondary pd-x-25 active">Left</button>
            <button type="button" class="btn btn-secondary pd-x-25">Center</button>
            <button type="button" class="btn btn-secondary pd-x-25">Right</button>
          </div>
        </div><!-- col-4 -->
        <div class="col-lg-2 mg-t-20 mg-lg-t-0">
          <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-secondary btn-icon active"><i class="typcn typcn-media-play-outline"></i></button>
            <button type="button" class="btn btn-secondary btn-icon"><i class="typcn typcn-media-pause-outline"></i></button>
            <button type="button" class="btn btn-secondary btn-icon"><i class="typcn typcn-media-stop-outline"></i></button>
          </div>
        </div><!-- col-2 -->
        <div class="col-lg-4 mg-t-20 mg-lg-t-0">
          <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-indigo btn-icon active"><i class="typcn typcn-media-play-outline"></i></button>
            <button type="button" class="btn btn-primary btn-icon"><i class="typcn typcn-media-pause-outline"></i></button>
            <button type="button" class="btn btn-primary btn-icon"><i class="typcn typcn-media-stop-outline"></i></button>
          </div>
        </div><!-- col-4 -->
      </div><!-- row -->
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