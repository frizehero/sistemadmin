<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-medal icon-gradient bg-tempting-azure"></i>
                                    </div>
                                    <div>Tambah Data Job D02
                                        <div class="page-title-subheading">Silahkan Isi semua form di bawah ini dengan lengkap...</div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                  
                                 <a href="<?php echo base_url('jobmasuk_d'); ?>" class="mb-2 mr-2 btn btn-shadow btn-success">Kembali</a>
                                </div>    </div>
                        </div>   
                        <div class="col-md-6">
                        <div class="main-card mb-3 card">

                            <form action="<?php echo base_url('jobmasuk_d/tambah') ?>" method="POST" enctype="multipart/form-data">
                                <div class="card-body">
                                    <h5 class="card-title"></h5>
                                    <form class="">
                                        <div class="form-row">

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Job Number</label>
                                                    <input name="jobno_D02"  type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Kategori Job</label>
                                                    <input name="jobkode" value="D02" type="text" class="form-control" readonly>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Shipper</label>


                                                    <select name="shipper_D02"  class="multiselect-dropdown form-control">
                                                        <?php
                                                        foreach($pilshipper AS $rowP) { ?>
                                                        <option value="<?php echo $rowP->nama_shipper;?>" ><?php echo $rowP->nama_shipper;?></option>

                                                        <?php }?>
                                                        </select>
                                                </div>
                                            </div>

                                            
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Klient</label>


                                                    <select name="pt_D02"  class="multiselect-dropdown form-control">
                                                        <?php
                                                        foreach($pilpt AS $rowP) { ?>
                                                        <option value="<?php echo $rowP->nama_klien;?>" ><?php echo $rowP->nama_klien;?></option>

                                                        <?php }?>

                                                    </select>


                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Vessel</label>

                                                    <select name="vessel_bg_D02"  class="multiselect-dropdown form-control">

                                                        <?php
                                                        foreach($pilvessel AS $rowP) { ?>
                                                        <option value="<?php echo $rowP->nama_vessel;?>" ><?php echo $rowP->nama_vessel;?></option>

                                                        <?php }?>
                                                        </select>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">ETA</label>
                                                     <textarea name="eta_D02" class="form-control"></textarea>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Lokasi</label>
                                                    <input name="lokasi_D02"  type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Tujuan</label>
                                                    <input name="tujuan_D02"  type="text" class="form-control">
                                                </div>
                                            </div>


                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Initial</label>
                                                    <input name="initial_D02"  type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Final</label>
                                                    <input name="final_D02"  type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Quantity</label>
                                                    <input name="quantity_D02"  type="text" class="form-control">
                                                </div>
                                            </div>


                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Status Job</label>
                                                    <input name="statusjob_D02"  type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <button class="mt-2 btn btn-primary"  type="submit" >Simpan Data</button>
                                    </form>
                                </div>

                                </form>

                                </div>
                            </div>




</div>