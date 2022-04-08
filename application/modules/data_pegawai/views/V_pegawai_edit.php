<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-medal icon-gradient bg-tempting-azure"></i>
                                    </div>
                                    <div>Ubah Data Pegawai
                                        <div class="page-title-subheading">Ubah Data Ruangan, Silahkan Isi semua form di bawah ini dengan lengkap...</div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                  
                                 <a href="<?php echo base_url('data_pegawai'); ?>" class="mb-2 mr-2 btn btn-shadow btn-success">Kembali</a>
                                </div>    </div>
                        </div>   
                        <div class="col-md-6">
                        <div class="main-card mb-3 card">

                            <form action="<?php echo base_url('data_pegawai/edit') ?>" method="POST" enctype="multipart/form-data">
                                <div class="card-body">
                                    <h5 class="card-title"></h5>
                                    <form class="">
                                        <div class="form-row">
                                            <input name="id" value="<?php echo $tampil['id_data_pegawai']?>" type="hidden" class="form-control">


                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">NIK</label>
                                                    <input name="nik_pegawai" value="<?php echo $tampil['nik_pegawai']?>" type="text" class="form-control">
                                                </div>
                                            </div>

                                             <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Nama Lengkap</label>
                                                    <input name="nama_pegawai" value="<?php echo $tampil['nama_pegawai']?>" type="text" class="form-control">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Jabatan</label>
                                                    <input name="ket_pegawai" value="<?php echo $tampil['ket_pegawai']?>" type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Telepon</label>
                                                    <input name="telepon_pegawai" value="<?php echo $tampil['telepon_pegawai']?>" type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Email</label>
                                                    <input name="email_pegawai" value="<?php echo $tampil['email_pegawai']?>" type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">BANK</label>
                                                    <input name="bank_pegawai" value="<?php echo $tampil['bank_pegawai']?>" type="text" class="form-control">
                                                </div>

                                            </div>

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Nomor Rekening</label>
                                                    <input name="norek_pegawai" value="<?php echo $tampil['norek_pegawai']?>" type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Cabang Bank</label>
                                                    <input name="cabangbank_pegawai" value="<?php echo $tampil['cabangbank_pegawai']?>" type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Tanda Tangan</label>
                                                    <input name="ttd_pegawai" value="<?php echo $tampil['ttd_pegawai']?>" type="text" class="form-control">
                                                </div>
                                            </div>




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