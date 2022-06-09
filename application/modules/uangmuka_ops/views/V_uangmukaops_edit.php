<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-medal icon-gradient bg-tempting-azure"></i>
                                    </div>
                                    <div>Ubah Data Ruangan
                                        <div class="page-title-subheading">Ubah Data Ruangan, Silahkan Isi semua form di bawah ini dengan lengkap...</div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                  
                                 <a href="<?php echo base_url('uangmuka_ops'); ?>" class="mb-2 mr-2 btn btn-shadow btn-success">Kembali</a>
                                </div>    </div>
                        </div>   
                        <div class="col-md-6">
                        <div class="main-card mb-3 card">

                            <form action="<?php echo base_url('uangmuka_ops/edit') ?>" method="POST" enctype="multipart/form-data">
                                <div class="card-body">
                                    <h5 class="card-title"></h5>
                                    <form class="">
                                        <div class="form-row">
                                            <input name="id" value="<?php echo $tampil['id_uangmukaops']?>" type="hidden" class="form-control">

                                             <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Tanggal</label>
                                                    <i class="fa fa-calendar fa-w-16"></i>
                                                    <input name="tanggal_uangmukaops"  value="<?php echo $tampil['tanggal_uangmukaops']?>" type="date" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">NIK</label>
                                                    <input name="nik_pegawai" value="<?php echo $tampil['nik_pegawai']?>" type="text" class="form-control">
                                                </div>
                                            </div>

                                            
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Nama</label>
                                                    <input name="nama_pegawai" value="<?php echo $tampil['nama_pegawai']?>" type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Job Number</label>
                                                    <input name="jobno" value="<?php echo $tampil['jobno']?>" type="text" class="form-control">
                                                </div>
                                            </div>


                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Klient</label>
                                                    <input name="pt" value="<?php echo $tampil['pt']?>" type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Vessel/Barges</label>
                                                    <input name="vessel_bg" value="<?php echo $tampil['vessel_bg']?>" type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Detail Job</label>
                                                    <input name="job_pekerjaannya" value="<?php echo $tampil['job_pekerjaannya']?>" type="text" class="form-control">
                                                </div>
                                            </div>


                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Deskripsi</label>
                                                    <input name="deskripsi_uangmukaops" value="<?php echo $tampil['deskripsi_uangmukaops']?>" type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Nominal</label>
                                                    <input name="nominal_uangmukaops" value="<?php echo $tampil['nominal_uangmukaops']?>" type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">NIK Pemilik Rekening</label>
                                                    <input name="nik_pegawai" value="<?php echo $tampil['nik_pegawai']?>" type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Nama Pemilik Rekening</label>
                                                    <input name="nama_pegawai" value="<?php echo $tampil['nama_pegawai']?>" type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Bank</label>
                                                    <input name="nama_list_bank" value="<?php echo $tampil['nama_list_bank']?>" type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Nomor Rekening</label>
                                                    <input name="norek_bank" value="<?php echo $tampil['norek_bank']?>" type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Cabang</label>
                                                    <input name="cabang_bank" value="<?php echo $tampil['cabang_bank']?>" type="text" class="form-control">
                                                </div>
                                            </div>


                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Keterangan</label>
                                                    <input name="ket_uangmukaops" value="<?php echo $tampil['ket_uangmukaops']?>" type="text" class="form-control">
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