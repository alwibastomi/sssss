<div class="br-mainpanel">
  <div class="pd-30">
    <h4 class="tx-gray-800 mg-b-5">Dashboard</h4>
    <p class="mg-b-0">Do big things with Bracket, the responsive bootstrap 4 admin template.</p>
  </div><!-- d-flex -->

  <div class="br-pagebody mg-t-5 pd-x-30">
    <?php
    $aa = 0;
    if ($aa == 0){ ?>

    <?php } ?>
    <div class="row row-lg justify-content-lg-center">
      <div class="col-sm-6 text-center justify-content-lg-center">
        <p class="text-white bg-danger">Akun Anda Banned dikarenakan 2 akun aktif bersamaan</p>
      </div>
    </div><!-- row -->

    <div class="row row-sm mg-t-20">
      <div class="col-sm-6 col-lg-6">
        <div class="card shadow-base bd-0">
          <div class="card-header bg-transparent d-flex justify-content-between align-items-center">
            <h6 class="card-title tx-uppercase tx-12 mg-b-0">Informasi Akun</h6>
            <span class="tx-12 tx-uppercase">-</span>
          </div><!-- card-header -->
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col-3 tx-12">Email</div><!-- col-3 -->
              <div class="col-9">
                <div class="rounded-0 mg-b-0">
                  <div class="wd-50p lh-3">: <?= $email ?></div>
                </div><!-- progress -->
              </div><!-- col-9 -->
            </div><!-- row -->
            <div class="row align-items-center">
              <div class="col-3 tx-12">Pertanyaan</div><!-- col-3 -->
              <div class="col-9">
                <div class="rounded-0 mg-b-0">
                  <div class="wd-50p lh-3">: Lala iku koncone lolo</div>
                </div><!-- progress -->
              </div><!-- col-9 -->
            </div><!-- row -->
            <div class="row align-items-center mt-4">
              <div class="col-3 tx-12"><a href="#profile" class="btn btn-oblong btn-info bd-2 pt-0 pb-0"> Ubah </a></div><!-- col-3 -->
            </div><!-- row -->
            <div class="row align-items-center">
              <div class="col-3 tx-12">Password</div><!-- col-3 -->
              <div class="col-9">
                <div class="rounded-0 mg-b-0">
                  <div class="wd-50p lh-3">: <?= $password ?></div>
                </div><!-- progress -->
              </div><!-- col-9 -->
            </div><!-- row -->
          </div><!-- card-body -->
        </div><!-- card -->
      </div><!-- col-4 -->

      <div class="col-sm-6 col-lg-6">
        <div class="card shadow-base bd-0">
          <div class="card-header bg-transparent d-flex justify-content-between align-items-center">
            <h6 class="card-title tx-uppercase tx-12 mg-b-0">Informasi akun</h6>
            <span class="tx-12 tx-uppercase">-</span>
          </div><!-- card-header -->
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col-4 tx-12">Tanggal Buat Akun</div><!-- col-3 -->
              <div class="col-8">
                <div class="rounded-0 mg-b-0">
                  <div class="wd-50p lh-3">: 12/12/1945</div>
                </div><!-- progress -->
              </div><!-- col-9 -->
            </div><!-- row -->
            <div class="row align-items-center">
              <div class="col-4 tx-12">Status</div><!-- col-3 -->
              <div class="col-8">
                <div class="rounded-0 mg-b-0">
                  <div class="wd-50p lh-3">: Aktif</div>
                </div><!-- progress -->
              </div><!-- col-9 -->
            </div><!-- row -->
            <div class="row align-items-center">
              <div class="col-4 tx-12">Tanggal Berakhir</div><!-- col-3 -->
              <div class="col-8">
                <div class="rounded-0 mg-b-0">
                  <div class="wd-50p lh-3">: 12/12/3000</div>
                </div><!-- progress -->
              </div><!-- col-9 -->
            </div><!-- row -->
            <div class="row align-items-center mt-5">
              <div class="col-12 tx-12 text-center"><a href="#profile" class="btn btn-oblong btn-info bd-2 pt-1 pb-1 pl-5 pr-5"> Perpanjang Akun </a></div><!-- col-3 -->
            </div><!-- row -->
          </div><!-- card-body -->
        </div><!-- card -->
      </div><!-- col-4 -->
    </div><!-- row -->

    <div class="row row-sm justify-content-md-center mt-5">
      <div class="col-12">
        <p class="text-white bg-info p-3">Note Peringatan :</p>
      </div>
    </div><!-- row -->

  </div><!-- br-pagebody -->

