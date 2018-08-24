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
                        <h5>Registrasi Petugas Pajak</h5>
                    </div>                     <div class="widget-content nopadding">

                        <form action="<?php echo base_url(). 'dbpetugas/simpan_petugas'?>" method="post" class="form-horizontal" id="WPForm">
                            <fieldset> <!-- First Page Form -->
                            	                            <div class="control-group">
                                <label class="control-label">NIP</label>
                                <div class="controls">
                                    <input type="text" onKeyup="ucfirst(this)" id="nip" name="nip" class="form-control"placeholder="NIP"/>
                                </div>
                            <div class="control-group">
                                <label class="control-label">Nama Depan</label>
                                <div class="controls">
                                    <input type="text" onKeyup="ucfirst(this)" id="nama_depan" name="nama_depan" class="form-control"placeholder="Nama Depan"/>
                                </div>
                            </div>
                                                        <div class="control-group">
                                <label class="control-label">Nama Belakang</label>
                                <div class="controls">
                                    <input type="text" onKeyup="ucfirst(this)" id="nama_belakang" name="nama_belakang" class="form-control" placeholder="Nama Belakang"/>
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
                                <select name='level' class="select2 form-control custom-select">
                                                <option>Select Jabatan</option>
                                                <option value="karyawan">karyawan</option>
                                                <option value="manager">manager</option>
                                </select>
                            </div>
                                 <div class="control-group">
                                <label class="control-label">Printer</label>
                                <div class="controls">
                                <select name='nama_printer' class="select2 form-control custom-select">
                                    <option> Select Printer</option>
                                                <option value="Receiptprinter1">Receiptprinter1</option>
                                                <option value="Receiptprinter2">Receiptprinter2</option>
                                                <option value="Receiptprinter2">Receiptprinter3</option>
                                                <option value="Receiptprinter3">Receiptprinter4</option>

                                </select>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Username</label>
                                <div class="controls">
                                    <input type="text" name="username" id="username" class="form-control" placeholder="username">
                                </div>
                            </div>


                                                                <div class="finals">
                                        <button type="submit" name="save" class="btn btn-large btn-primary btn-submit">Submit</button>
                                    </div>
                                                                </fieldset> <!-- End Page Form -->
                                                                	</form>	

	<?php $this->load->view('template/Footer');?>