<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-medal icon-gradient bg-tempting-azure"></i>
                                    </div>
                                    <div>Tambah Data Laporan Barge
                                        <div class="page-title-subheading">Silahkan Isi semua form di bawah ini dengan lengkap...</div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                  
                                 <a href="<?php echo base_url('laporan_bgc'); ?>" class="mb-2 mr-2 btn btn-shadow btn-success">Kembali</a>
                                </div>    </div>
                        </div>   
                        <div class="col-md-6">
                        <div class="main-card mb-3 card">

                            <form action="<?php echo base_url('laporan_bgc/tambah') ?>" method="POST" enctype="multipart/form-data">
                                <div class="card-body">
                                    <h5 class="card-title"></h5>
                                    <form class="">
                                        <div class="form-row">

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Barge</label>
                                                    <input name="barges_C02"  type="text" class="form-control">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Tugboat</label>
                                                    <input name="tugboat_C02"  type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">From</label>
                                                    <input name="from_C02"  type="text" class="form-control">
                                                </div>
                                            </div>

                                        
                                        
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">To</label>
                                                    <input name="to_C02"  type="text" class="form-control">
                                                </div>
                                            </div>

                                            
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Quantity (MT)</label>
                                                    <input name="quantity_C02"  type="text" class="form-control">
                                                </div>
                                            </div>

                                            
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Jetty</label>
                                                    <input name="jetty_C02"  type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Remark</label>
                                                     <textarea name="remark_C02" class="form-control"></textarea>
                                                </div>
                                            </div>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Surveyor</label>
                                                    <input name="surveyor_C02"  type="text" class="form-control">
                                                </div>
                                            </div>

                                            
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Sampler</label>
                                                    <input name="sampler_C02"  type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Detail</label>
                                                     <textarea name="notes_C02" class="form-control"></textarea>
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