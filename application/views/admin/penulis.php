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




<div class="br-mainpanel bg-white">
    


    <div class="container">


      <div class="row">
        <div class="col-sm-12">
          <div class="container-fluid">


  <!-- Page Heading -->
  
  <!--  <h1 class="h3 mb-4 text-gray-800">Artikel</h1> -->

  
  <div class="card" style="border: none;">
    <div class="card-body" style="height: 600px; ">
      <div class="row ">
        <div class="col-lg-12" >
          <h3 class="text-center">Iklan</h3>
       <a href="<?= site_url('user/tambah') ?>" class="btn btn-primary btn-tambah mb-3">Tambah<i class="fa fa-plus ml-2" aria-hidden="true"></i></a>
      
      <!-- id="tableactiviti" tablehead  -->
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
        
      </div>
     
      
    </div>
  </div>
  
  

</div>
<!-- /.container-fluid -->

          
        

  





              
                  
            </div>

          </div>

        </div>

                

    