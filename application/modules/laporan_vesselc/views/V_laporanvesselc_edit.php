<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-medal icon-gradient bg-tempting-azure"></i>
                                    </div>
                                    <div>Ubah Data Laporan Vessel
                                        <div class="page-title-subheading">Silahkan Isi semua form di bawah ini dengan lengkap...</div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                  
                                 <a href="<?php echo base_url('laporan_vesselc'); ?>" class="mb-2 mr-2 btn btn-shadow btn-success">Kembali</a>
                                </div>    </div>
                        </div>   
                        <div class="col-md-6">
                        <div class="main-card mb-3 card">

                            <form action="<?php echo base_url('laporan_vesselc/edit') ?>" method="POST" enctype="multipart/form-data">
                                <div class="card-body">
                                    <h5 class="card-title"></h5>
                                    <form class="">
                                        <div class="form-row">
                                            <input name="id" value="<?php echo $tampil['id_lapvessel_C02']?>" type="hidden" class="form-control">

                                             <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">LOT</label>
                                                    <input name="lotv_C02" value="<?php echo $tampil['lotv_C02']?>" type="text" class="form-control">
                                                </div>
                                            </div>

                                             <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Barge</label>
                                                    <input name="bargesv_C02" value="<?php echo $tampil['bargesv_C02']?>" type="text" class="form-control">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Tugboat</label>
                                                    <input name="tugboatv_C02" value="<?php echo $tampil['tugboatv_C02']?>" type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">From</label>
                                                    <input name="fromv_C02" value="<?php echo $tampil['fromv_C02']?>" type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">To</label>
                                                    <input name="tov_C02" value="<?php echo $tampil['tov_C02']?>" type="text" class="form-control">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Quantity</label>
                                                     <input name="quantityv_C02" value="<?php echo $tampil['quantityv_C02']?>" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                            <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Jetty</label>
                                                     <input name="jettyv_C02" value="<?php echo $tampil['jettyv_C02']?>" type="text" class="form-control">
                                                </div>
                                            </div>
                                            </div>

                                            <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Remark</label>
                                                     <textarea name="remarkv_C02" class="form-control"><?php echo $tampil['remarkv_C02']?></textarea>
                                                </div>
                                            </div>
                                            </div>

                                            <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Surveyor</label>
                                                     <input name="surveyorv_C02" value="<?php echo $tampil['surveyorv_C02']?>" type="text" class="form-control">
                                                </div>
                                            </div>
                                            </div>

                                            <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Sampler</label>
                                                     <input name="samplerv_C02" value="<?php echo $tampil['samplerv_C02']?>" type="text" class="form-control">
                                                </div>
                                            </div>
                                            </div>

                                            <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Detail</label>
                                                     <textarea name="notesv_C02" class="form-control"><?php echo $tampil['notesv_C02']?></textarea>
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