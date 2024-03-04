<?php if($_settings->chk_flashdata('success')): ?>

<script>
	alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
</script>


<?php endif;?>
<style>
.info-box-icon{
		background-image: linear-gradient(to bottom right, #4169E1, #87CEFA, #00BFFF);
	}
</style>
<h1 class="text-white" align=center>Selamat Datang di Visualuxe</h1>
<hr>
<div class="row justify-content-center">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
			
              <span class="info-box-icon elevation-1"><i class="fas fa-images"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Album</span>
                <span class="info-box-number">
                  <?php echo $conn->query("SELECT * FROM album_list where delete_f = 0 and user_id = '{$_settings->userdata('id')}'")->num_rows ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon  elevation-1"><i class="fas fa-image"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Foto</span>
                <span class="info-box-number">
                <?php echo $conn->query("SELECT * FROM `images` where delete_f = 0 and user_id = '{$_settings->userdata('id')}'")->num_rows ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

        </div>
