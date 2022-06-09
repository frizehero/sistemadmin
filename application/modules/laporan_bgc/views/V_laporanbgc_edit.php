<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-medal icon-gradient bg-tempting-azure"></i>
                                    </div>
                                    <div>Ubah Laporan Barge
                                        <div class="page-title-subheading">Silahkan Isi semua form di bawah ini dengan lengkap...</div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                  
                                 <a href="<?php echo base_url('laporan_bgc'); ?>" class="mb-2 mr-2 btn btn-shadow btn-success">Kembali</a>
                                </div>    </div>
                        </div>   
                        <div class="col-md-6">
                        <div class="main-card mb-3 card">

                            <form action="<?php echo base_url('laporan_bgc/edit') ?>" method="POST" enctype="multipart/form-data">
                                <div class="card-body">
                                    <h5 class="card-title"></h5>
                                    <form class="">
                                        <div class="form-row">
                                            <input name="id" value="<?php echo $tampil['id_lap_C02']?>" type="hidden" class="form-control">

                                             <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Job Number</label>
                                                    <input name="bgc_jobno"  type="text" value="<?php echo $tampil['bgc_jobno'];?>" class="form-control" readonly>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">LOT</label>
                                                    <input name="lot_bgc" value="<?php echo $tampil['lot_bgc']?>" type="text" class="form-control">
                                                </div>
                                            </div>


                                             <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Barge</label>
                                                    <input name="barges_C02" value="<?php echo $tampil['barges_C02']?>" type="text" class="form-control">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Tugboat</label>
                                                    <input name="tugboat_C02" value="<?php echo $tampil['tugboat_C02']?>" type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">From</label>
                                                    <input name="from_C02" value="<?php echo $tampil['from_C02']?>" type="date" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">To</label>
                                                    <input name="to_C02" value="<?php echo $tampil['to_C02']?>" type="date" class="form-control">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Quantity</label>
                                                     <input name="quantity_C02" value="<?php echo $tampil['quantity_C02']?>" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                            <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Jetty</label>
                                                     <input name="jetty_C02" value="<?php echo $tampil['jetty_C02']?>" type="text" class="form-control">
                                                </div>
                                            </div>
                                            </div>

                                            <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Remark</label>
                                                     <textarea name="remark_C02" class="form-control"><?php echo $tampil['remark_C02']?></textarea>
                                                </div>
                                            </div>
                                            </div>

                                            <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Surveyor</label>
                                                     <input name="surveyor_C02" value="<?php echo $tampil['surveyor_C02']?>" type="text" class="form-control">
                                                </div>
                                            </div>
                                            </div>

                                            <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Sampler</label>
                                                     <input name="sampler_C02" value="<?php echo $tampil['sampler_C02']?>" type="text" class="form-control">
                                                </div>
                                            </div>
                                            </div>

                                            <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Detail</label>
                                                     <textarea name="notes_C02" class="form-control"><?php echo $tampil['notes_C02']?></textarea>
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