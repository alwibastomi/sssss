<?php 
if ($alert == 'sukses') { ?>
  <script type="text/javascript">
    window.location = "<?= site_url('User') ?>";
  </script>
<?php }?>
<!-- Top Bar Start -->

<!-- Top Bar End -->


<!-- ========== Left Sidebar Start ========== -->

<!-- Left Sidebar End -->



<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
  <!-- Start content -->
  <div class="content">
    <div class="container">


      <div class="row">
        <div class="col-sm-12">
          <div class="card-box table-responsive">

            <div class="dropdown pull-right">
              <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                <i class="zmdi zmdi-more-vert"></i>
              </a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?= site_url('Penulis/tambah'); ?>">Tambah User</a></li>
              </ul>
            </div>

            <h4 class="header-title m-t-0 m-b-30">List User</h4>
            <!-- class  dt-responsive -->
            <table id="datatable-responsive" class="table table-striped table-bordered nowrap datatable-ku" data-func="user" data-meth="penulis_datatable" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Email</th>
                  <th>Nama Lengkap</th>
                  <th>Level</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>
              </tbody>
            </table>
          </div>
        </div><!-- end col -->
      </div>
      <!-- end row -->

    </div> <!-- container -->

  </div> <!-- content -->

