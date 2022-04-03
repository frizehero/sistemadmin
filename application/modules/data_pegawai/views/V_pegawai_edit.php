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
                                                    <label class="">Nama Pegawai</label>
                                                    <input name="nama_pegawai" value="<?php echo $tampil['nama_pegawai']?>" type="text" class="form-control">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Keterangan Pegawai</label>
                                                    <input name="ket_pegawai" value="<?php echo $tampil['ket_pegawai']?>" type="text" class="form-control">
                                                </div>
                                            </div>

                                        
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">NIK Pegawai</label>
                                                    <input name="nik_pegawai" value="<?php echo $tampil['nik_pegawai']?>" type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Telepon Pegawai</label>
                                                    <input name="telepon_pegawai" value="<?php echo $tampil['telepon_pegawai']?>" type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Alamat Pegawai</label>
                                                    <input name="rumah_pegawai" value="<?php echo $tampil['rumah_pegawai']?>" type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Email</label>
                                                    <input name="email_pegawai" value="<?php echo $tampil['email_pegawai']?>" type="text" class="form-control">
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