<?php $this->load->view('template/Header');?>
<?php $this->load->view('template/Nav');?>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>Database Wajib Pajak</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Data Wajib Pajak</h5>
          </div>
          <div class="widget-content nopadding">
            <table id="wajibpajak" class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Kota</th>
                  <th>Kodepos</th>
                  <th>No. HP</th>
                  <th>Jenis Pelayanan</th>
                  <th>Tanggal Pelayanan</th>
                </tr>
              </thead>
              <tbody></tbody>
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
    $('#wajibpajak').DataTable({
        "ajax": {
            url : "<?php echo site_url("dbwp/data_wp") ?>",
            type : 'GET'
        },
    });
});
</script>
<? $this->load->view('template/Footer');?>