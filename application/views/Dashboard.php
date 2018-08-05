<?php $this->load->view('template/Header')?>
<?php $this->load->view('template/Nav')?>
<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lg span3"> <a href="dasbor.php?p=dbwp"> <i class="icon-th"></i> Database Daftar Wajib Pajak</a> </li>
        <?php if($this->session->userdata('level')=='manager'):?>
        <li class="bg_lo span3"> <a href="dasbor.php?p=tambah"> <i class="icon-th-list"></i> Pembuatan Form Baru </a> </li>
        <?php else:?>  
      </ul>
    </div>
     <?php endif;?>
           </ul>
    </div>

<!--End-Action boxes-->    
    <hr/>
    <div class="row-fluid">
    </div>
  </div>
</div>
<?php $this->load->view('template/Footer')?>