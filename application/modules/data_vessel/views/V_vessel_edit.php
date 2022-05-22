<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-medal icon-gradient bg-tempting-azure"></i>
                                    </div>
                                    <div>Ubah Data Vessel
                                        <div class="page-title-subheading">Silahkan Isi semua form di bawah ini dengan lengkap...</div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                  
                                 <a href="<?php echo base_url('data_vessel'); ?>" class="mb-2 mr-2 btn btn-shadow btn-success">Kembali</a>
                                </div>    </div>
                        </div>   
                        <div class="col-md-6">
                        <div class="main-card mb-3 card">

                            <form action="<?php echo base_url('data_vessel/edit') ?>" method="POST" enctype="multipart/form-data">
                                <div class="card-body">
                                    <h5 class="card-title"></h5>
                                    <form class="">
                                        <div class="form-row">
                                            <input name="id" value="<?php echo $tampil['id_vessel']?>" type="hidden" class="form-control">

                                             <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Nama Vessel</label>
                                                    <input name="nama_vessel" value="<?php echo $tampil['nama_vessel']?>" type="text" class="form-control">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Keterangan Vessel</label>
                                                    <input name="ket_vessel" value="<?php echo $tampil['ket_vessel']?>" type="text" class="form-control">
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