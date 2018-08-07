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
                        <form action="<?php echo base_url(). 'tambah/simpan'?>" method="post" class="form-horizontal" id="WPForm">
                            <fieldset> <!-- First Page Form -->
                            <div class="control-group">
                                <label class="control-label">Nama Lengkap</label>
                                <div class="controls">
                                    <input type="text" onKeyup="ucfirst(this)" id="nama" name="nama" class="form-control" placeholder="Nama anda"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Alamat</label>
                                <div class="controls">
                                    <textarea name="alamat" onKeyup="ucfirst(this)" id="alamat" class="form-control" placeholder="Alamat anda"></textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Kecamatan</label>
                                <div class="controls">
                                    <input type="text" name="kec" onKeyup="ucfirst(this)" id="kec" class="form-control" placeholder="Kecamatan">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Kota</label>
                                <div class="controls">
                                    <input type="text" onKeyup="ucfirst(this)" name="kota" id="kota" class="form-control" placeholder="Kota">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Kode Pos</label>
                                <div class="controls">
                                    <input type="text" onkeypress="return hanyaAngka(event)" maxlength="5" name="kodepos" id="kodepos" class="form-control" placeholder="75683">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">No. Handphone</label>
                                <div class="controls">
                                    <input type="tel" onkeypress="return hanyaAngka(event)" maxlength="12" name="phone" id="phone" class="form-control" placeholder="Nomor telpon anda"/>
                                </div>
                            </div>
                            <div class="wizard-buttons">
                                <button type="button" class="btn btn-previous">Previous</button>
                                <button type="button" class="btn btn-next">Next</button>
                            </div>
                            </fieldset> <!-- End Page Form -->
                            <fieldset>
                                <div class="control-group">
                                    <div class="controls radio-group">

                                        <?php foreach($jenis_pelayanan as $pelayanan){ ?>
                                        <label class="button turquoise not-active">
                                            <span><?php echo $pelayanan['no_pel'];?></span><?php echo $pelayanan['nama_pel'];?> <input type="radio" id="no_pel" name="no_pel" value="<?php echo $pelayanan['nama_pel'];?>"></label>
                                        <?php }?>
                                    </div>
                                </div>
                                <div class="wizard-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="button" name="verif" class="btn btn-next" id="submit_btn">Next</button>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="control-group">
                                    <div class="jumbotron text-center">
                                        <div class="widget-title">
                                            <h4>  Konfirmasi Data Wajib Pajak</h4>
                                        </div>
                                        <div class="widget-content">
                                            <table class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Labels</th>
                                                        <th>Markup</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><span class="label">Nama</span></td>
                                                        <td><span id="confirm_firstname"> </span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="label">Alamat</span></td>
                                                        <td><span id="confirm_address"> </span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="label">Kota</span></td>
                                                        <td><span id="confirm_city"> </span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="label">No. HP</span></td>
                                                        <td><span id="confirm_phone"> </span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="label">Jenis Pelayanan</span></td>
                                                        <td><span id="confirm_pel"> </span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!--  <div class="widget-content">
                                            <p>Nama : <span id="confirm_firstname"> </span></p>
                                            <p>Alamat : <span id="confirm_address"> </span></p>
                                            <p>Kota : <span id="confirm_city"> </span></p>
                                            <p>No. HP : <span id="confirm_phone"> </span></p>
                                            <p>Jenis Pelayanan : <span id="confirm_pel"> </span></p>
                                        </div> -->
                                    </p>
                                    <div class="finals">
                                        <button type="button" class="btn btn-primary btn-large">Cetak</button>
                                        <button type="button" class="btn btn-previous btn-large">Mundur</button>
                                        <input type="submit" name="save" class="btn btn-large btn-primary btn-submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </fieldset>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>


<?php $this->load->view('template/Footer');?>