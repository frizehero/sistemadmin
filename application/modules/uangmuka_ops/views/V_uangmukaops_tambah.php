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
                                  
                                 <a href="<?php echo base_url('uangmuka_ops'); ?>" class="mb-2 mr-2 btn btn-shadow btn-success">Kembali</a>
                                </div>    </div>
                        </div>  
                        <div class="row">
                        <div class="col-md-6">
                        <div class="main-card mb-3 card">

                            <form action="<?php echo base_url('uangmuka_ops/tambah') ?>" method="POST" enctype="multipart/form-data">
                                <div class="card-body">
                                    <h5 class="card-title"></h5>
                                    <form class="">
                                        <div class="form-row">

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Tanggal</label>
                                                    <input name="tanggal_uangmukaops"  type="text" class="form-control">
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">NIK</label>

                                                    <select name ="nik_pegawai" class="multiselect-dropdown form-control">
                                                        <?php
                                                        foreach($pilnik AS $rowP) { ?>
                                                        <option value="<?php echo $rowP->nik_pegawai;?>" ><?php echo $rowP->nik_pegawai;?></option>

                                                        <?php }?>

                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Nama</label>
                                                    <input name="nama_pegawai"  type="text" class="form-control">

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
                                                    <label class="">Klient</label>
                                                    <input name="pt"  type="text" class="form-control">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Vessel/Barge</label>
                                                     <input name="vessel_bg" type="text" class="form-control">
                                                </div>
                                            </div>


                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Detail Job</label>
                                                    <input name="job_pekerjaannya"  type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Deskripsi</label>
                                                    <input name="deskripsi_uangmukaops"  type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Nominal</label>
                                                    <input name="nominal_uangmukaops"  type="text" class="form-control">
                                                </div>
                                            </div>


                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">NIK Pemilik Rekening</label>
                                                    <input name="nik_pegawai"  type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Nama Pemilik Rekening</label>
                                                    <input name="nama_pegawai"  type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Bank</label>
                                                    <input name="nama_list_bank"  type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Nomor Rekening</label>
                                                    <input name="norek_bank"  type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Cabang</label>
                                                    <input name="cabang_bank"  type="text" class="form-control">
                                                </div>
                                            </div>


                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Keterangan</label>
                                                    <input name="ket_uangmukaops"  type="text" class="form-control">
                                                </div>
                                            </div>

                                        </div>

                                        <button class="mt-2 btn btn-primary"  type="submit" >Simpan Data</button>
                                    </form>
                                </div>

                                </form>

                                </div>
                            </div>

                        <div class="col-md-6">
                            


                            <div class="main-card mb-3 card">

                            <form action="<?php echo base_url('uangmuka_ops/tambah') ?>" method="POST" enctype="multipart/form-data">
                                <div class="card-body">
                                    <h5 class="card-title"></h5>
                                    <form class="">
                                        <div class="form-row"> 

                                           
                                        Nama                : 
                                        <br> 
                                        Satus UMK Terakhir  :
                                        <br>
                                        Jatuh Tempo         :
                                        <br>
                                        Nominal             :


                                            
                                            

                                        </div>

                                    </form>
                                </div>

                                </form>

                                </div>
                            </div>

                        </div>
</div> 


</div>