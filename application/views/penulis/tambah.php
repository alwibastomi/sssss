<div class="br-mainpanel">
      <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="index.html">Bracket</a>
          <a class="breadcrumb-item" href="#">UI ELements</a>
          <span class="breadcrumb-item active">Cards</span>
        </nav>
      </div>


      <div class="br-pagebody">
        <div class="br-section-wrapper">
          <div class="container" >
            <h4 style="text-align: center;">Tambah Data</h4>
        <form method="post" action="form-validation.html" data-parsley-validate>

          <div class="wd-300">
            <div class="d-flex mg-b-30">

              <div class="form-group">
                <label>Firstname: <span class="tx-danger"></span></label>
                <input type="text" name="firstname" class="form-control wd-600" placeholder="Enter firstname" required>
              </div><!-- form-group -->
             
            </div><!-- d-flex -->
              <div class="d-flex-2">
                <div id="slWrapper" class="parsley-select wd-600">
                  <select class="form-control select2" data-placeholder="Choose one"
                  data-parsley-class-handler="#slWrapper"
                  data-parsley-errors-container="#slErrorContainer" required>
                    <option label="Choose one"></option>
                    <option value="Firefox">Firefox</option>
                    <option value="Chrome">Chrome</option>
                    <option value="Safari">Safari</option>
                    <option value="Opera">Opera</option>
                    <option value="Internet Explorer">Internet Explorer</option>
                  </select>
                  <div id="slErrorContainer"></div>
                </div>
                
              </div>
            <button type="submit" class="btn btn-info mt-2">Validate Form</button>
            <button type="submit" class="btn btn-danger mt-2">Back</button>
          </div>
        </form>
         </div><!-- br-section-wrapper -->
      </div><!-- b
