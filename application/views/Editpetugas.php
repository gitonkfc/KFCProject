<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
    </div>
    <!--End-breadcrumbs-->
    <!--Action boxes-->
    <div class="container-fluid"><hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title">
                        <h5>Form Pendaftaran Wajib Pajak Baru</h5>
                    </div>                     <div class="widget-content nopadding">
                    	<?php foreach($user as $u){?>
                        <form action="<?php echo base_url(). 'dbpetugas/update'?>" method="post" class="form-horizontal" id="WPForm">
                            <fieldset> <!-- First Page Form -->
                            	                            <div class="control-group">
                                <label class="control-label">NIP</label>
                                <div class="controls">
                                	<input type="hidden" value="<?php echo($u->id_akun) ?>" onKeyup="ucfirst(this)" id="id_akun" name="id_akun" class="form-control"/>
                                    <input type="text" value="<?php echo($u->nip) ?>" onKeyup="ucfirst(this)" id="nip" name="nip" class="form-control"/>
                                </div>
                            <div class="control-group">
                                <label class="control-label">Nama Depan</label>
                                <div class="controls">
                                    <input type="text" value="<?php echo $u->nama_depan ?>" onKeyup="ucfirst(this)" id="nama_depan" name="nama_depan" class="form-control"/>
                                </div>
                            </div>
                                                        <div class="control-group">
                                <label class="control-label">Nama Belakang</label>
                                <div class="controls">
                                    <input type="text" value="<?php echo $u->nama_belakang ?>" onKeyup="ucfirst(this)" id="nama_belakang" name="nama_belakang" class="form-control" placeholder="Nama Belakang"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Password</label>
                                <div class="controls">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password"></textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Jabatan</label>
                                <div class="controls">
                                    <input type="text" value="<?php echo $u->level ?>" name="level" id="level" class="form-control" placeholder="jabatan">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Username</label>
                                <div class="controls">
                                    <input type="text" value="<?php echo $u->username ?>" name="username" id="username" class="form-control" placeholder="username">
                                </div>
                            </div>


                                                                <div class="finals">
                                        <button type="submit" name="save" class="btn btn-large btn-primary btn-submit">Submit</button>
                                    </div>
                                                                </fieldset> <!-- End Page Form -->
                                                                	<?php } ?>
                                                                	</form>	

	<?php $this->load->view('template/Footer');?>