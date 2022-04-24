<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-medal icon-gradient bg-tempting-azure"></i>
                                    </div>
                                    <div>Permintaan Uang Muka Operasional
                                        <div class="page-title-subheading">Silahkan Isi semua form uang muka operasional dengan lengkap</div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                  
                                 <a href="<?php echo base_url('laporan_umkops'); ?>" class="mb-2 mr-2 btn btn-shadow btn-success">Kembali</a>
                                </div>    </div>
                        </div>  
                        <div class="row">
                        <div class="col-md-6">
                        <div class="main-card mb-3 card">

                            <form action="<?php echo base_url('laporan_umkops/tambah') ?>" method="POST" enctype="multipart/form-data">
                                <div class="card-body">
                                    <h5 class="card-title"></h5>
                                    <form class="">
                                        <div class="form-row">

                                            

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Petty Cash No</label>
                                                    <input name="nopc_umkops" type="text" class="form-control">
                                                </div>
                                            </div>

                                            
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Advance Date</label>
                                                    <input name="tgl_mintaumkops"  type="text" class="form-control">
                                                </div>
                                            </div>


                                             <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Submitted By</label>
                                                    <input name="nama_umkops"  type="text" class="form-control">
                                                </div>
                                            </div>


                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Description</label>
                                                    <input name="deskripsi_umkops"  type="text" class="form-control">
                                                </div>
                                            </div>

                                        </div>

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Job Number</label>
                                                    <select name ="jobno" class="multiselect-dropdown form-control">
                                                        <?php
                                                        foreach($piljobno AS $rowP) { ?>
                                                        <option value="<?php echo $rowP->jobno;?>" ><?php echo $rowP->jobno;?></option>


                                                        <?php }?>

                                                        <?php
                                                        foreach($piljobnod AS $rowP2) { ?>
                                                        <option value="<?php echo $rowP2->jobno_D02;?>"><?php echo $rowP2->jobno_D02;?></option>
                                                        

                                                        <?php }?>

                                                    </select>
                                                </div>
                                            </div>

                                           
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Est. Job Completed</label>
                                                    <input name="estjob_umkops"  type="text" class="form-control">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Payment Rp</label>
                                                     <input name="nominal_umkops" type="text" class="form-control">
                                                </div>
                                            </div>


                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Account Name</label>
                                                    <input name="namarek_umkops"  type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Bank Name</label>
                                                    <input name="bankrek_umkops"  type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Bank Account Number</label>
                                                    <input name="norek_umkops"  type="text" class="form-control">
                                                </div>
                                            </div>


                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Closing Date</label>
                                                    <input name="tgl_lunas_umkops"  type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Petty Cash No</label>
                                                    <input name="nopc_lunas_umkops"  type="text" class="form-control">
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


</div>