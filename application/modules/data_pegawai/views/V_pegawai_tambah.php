<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-medal icon-gradient bg-tempting-azure"></i>
                                    </div>
                                    <div>Tambah Data Pegawai
                                        <div class="page-title-subheading">Tambah Data Pegawai, Silahkan Isi semua form di bawah ini dengan lengkap...</div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                  
                                 <a href="<?php echo base_url('data_pegawai'); ?>" class="mb-2 mr-2 btn btn-shadow btn-success">Kembali</a>
                                </div>    </div>
                        </div>   
                        <div class="col-md-6">
                        <div class="main-card mb-3 card">

                            <form action="<?php echo base_url('data_pegawai/tambah') ?>" method="POST" enctype="multipart/form-data">
                                <div class="card-body">
                                    <h5 class="card-title"></h5>
                                    <form class="">
                                        <div class="form-row">

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">NIK</label>
                                                    <input name="nik_pegawai"  type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Nama Lengkap</label>
                                                    <input name="nama_pegawai"  type="text" class="form-control">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Jabatan</label>
                                                    <select name="ket_pegawai" class="multiselect-dropdown form-control">
                                                        <?php  
                                                         foreach ($piljabatan AS $rowP ) { ?>
                                                        <option value="<?php echo $rowP->id_data_divisi;?>"><?php echo $rowP->nama_data_divisi;?></option>
                                                        <?php }?>

                                                    </select>
                                                </div>
                                            </div>


                                             <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Telepon</label>
                                                    <input name="telepon_pegawai"  type="text" class="form-control">
                                                </div>
                                            </div>


                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Email</label>
                                                    <input name="email_pegawai"  type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Bank</label>
                                                    <input name="bank_pegawai"  type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Nomor Rekening</label>
                                                    <input name="norek_pegawai"  type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Cabnag Bank</label>
                                                    <input name="cabangbank_pegawai"  type="text" class="form-control">
                                                </div>
                                            </div>

                                             <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Tanda Tangan</label>
                                                    <input name="ttd_pegawai"  type="text" class="form-control">
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