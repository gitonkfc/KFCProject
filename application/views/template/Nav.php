<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Pilihan Menu</a>
  <ul>
	<li class="<?php if($_SERVER['REQUEST_URI'] == '/sgt/dasbor.php?p=dasbor'){echo 'active'; }else { echo ''; } ?>">
  		<a href="<?php echo base_url(). 'dashboard'?>"><i class="icon icon-home"></i> <span>Menu Utama</span></a>
  	</li>
  	<li>
    	<a href="<?php echo base_url(). 'dbwp'?>"><i class="icon icon-th"></i> <span>Database WP</span></a>
    </li>
    <?php if($this->session->userdata('level')=='manager'):?>
    <li>
    	<a href="<?php echo base_url(). 'tambah'?>"><i class="icon icon-plus"></i> <span>Form Tambah WP</span></a>
    </li>
    <li class="<?php if( $_SERVER['REQUEST_URI'] == "/sgt/dasbor.php?p=dbpetugas"){echo 'active'; }else { echo ''; } ?>">
      <a href="dasbor.php?p=dbpetugas"><i class="icon icon-user"></i> <span>Daftar Petugas</span></a>
    </li>
    <?php else:?>    
  </ul>
</div>
 <?php endif;?>
   </ul>
</div>