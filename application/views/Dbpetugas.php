<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Database Petugas</a> </div>
    <h1 align="center">Database Petugas</h1>
  </div>


  <div class="container-fluid">

    <hr>
    <?php echo $regpetugas;?>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
          <h5>Data Petugas</h5>
        </div>
        <div class="widget-content nopadding">

          <table id="petugas" class="table table-bordered table-striped">
            <thead>
              <tr>
               <th>Nama Depan</th>
               <th>Nama Belakang</th>
               <th>Username</th>
               <th>Petugas</th>
               <th>NIP</th>
               <th>Printer</th>
               <th>Sunting Akun</th>
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
</div>
<link rel="stylesheet" type="text/css" href="assets/datatables/datatables.min.css"/>
<script type="text/javascript" src="assets/datatables/datatables.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#petugas').DataTable({
        "ajax": {
            url : "<?php echo site_url("dbpetugas/data_petugas") ?>",
            type : 'GET'
        },
    });
});
</script>
<?php $this->load->view('template/Footer');?>