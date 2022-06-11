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
                                  
                                 <a href="<?php echo base_url('laporan_bgd'); ?>" class="mb-2 mr-2 btn btn-shadow btn-success">Kembali</a>
                                </div>    </div>
                        </div>  

                        <div class="row">
                        <div class="col-md-6">
                        <div class="main-card mb-3 card">

                             <form action="<?php echo base_url('laporan_bgd/tambah') ?>" method="POST" enctype="multipart/form-data">
                                <div class="card-body">
                                    <h5 class="card-title"></h5>
                                    <form class="">
                                        <div class="form-row">

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Job Number</label>
                                                    <input name="bgd_jobno"  type="text" value="<?php echo $tampil_jobnod;?>" class="form-control" readonly>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">LOT</label>
                                                    <input name="lot_bgd"  type="text" class="form-control">
                                                </div>
                                            </div>


                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Barge</label>

                                                    <select name ="barges_D02" class="multiselect-dropdown form-control">
                                                        <?php
                                                        foreach($pilbg AS $rowP) { ?>
                                                        <option value="<?php echo $rowP->nama_bg;?>" ><?php echo $rowP->nama_bg;?></option>

                                                        <?php }?>

                                                    </select>
                                                </div>
                                            </div>
                                                                        
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Tugboat</label>

                                                    <select name ="tugboat_D02" class="multiselect-dropdown form-control">
                                                        <?php
                                                        foreach($piltb AS $rowP2) { ?>
                                                        <option value="<?php echo $rowP2->nama_tb;?>" ><?php echo $rowP2->nama_tb;?></option>

                                                        <?php }?>

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">From</label>
                                                    <input name="from_D02"  type="date" class="form-control">
                                                </div>
                                            </div>
                                        
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">To</label>
                                                    <input name="to_D02"  type="date" class="form-control">
                                                </div>
                                            </div>

                                            
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Quantity (MT)</label>
                                                    <input name="quantity_D02"  type="text" class="form-control">
                                                </div>
                                            </div>

                                            
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Jetty</label>
                                                    <input name="jetty_D02"  type="text" class="form-control">
                                                </div>
                                            </div>

                                            
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Remark</label>
                                                     <textarea name="remark_D02" class="form-control"></textarea>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Surveyor</label>
                                                    <input name="surveyor_D02"  type="text" class="form-control">
                                                </div>
                                            </div>

                                            
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Sampler</label>
                                                    <input name="sampler_D02"  type="text" class="form-control">
                                                </div>
                                            </div>

                                            
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Detail</label>
                                                     <textarea name="notes_D02" class="form-control"></textarea>
                                                </div>
                                            </div>
                                            


                                            
                                        </div>

                                        <button class="mt-2 btn btn-primary"  type="submit" >Simpan Data</button>
                                   
                                </div>

                                </form>

                                </div>
                                </div>


                                
                                <div class="col-md-6"> 
                                    <div class="main-card mb-3 card">
                                        
                                         <form action="<?php echo base_url('data_bg/tambah') ?>" method="POST" enctype="multipart/form-data">
                                <div class="card-body">
                                    <h5 class="card-title"></h5>
                                    <form class="">
                                        <div class="form-row">

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Nama Barge</label>
                                                    <input name="nama_bg"  type="text" class="form-control">

                                                </div>
                                            </div>
                                            
                                        </div>


                                        <button class="mt-2 btn btn-primary"  type="submit" >Simpan Data</button>
                                    </form>


                            
                                </div>

                                <form action="<?php echo base_url('data_tb/tambah') ?>" method="POST" enctype="multipart/form-data">
                                <div class="card-body">
                                    <h5 class="card-title"></h5>
                                    <form class="">
                                        <div class="form-row">

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Nama Tug Boat</label>
                                                    <input name="nama_tb"  type="text" class="form-control">
                                                </div>
                                            </div>
                                        

                                            
                                        </div>

                                        <button class="mt-2 btn btn-primary"  type="submit" >Simpan Data</button>
                                    </form>


                                    



                                </div>

                               
                               </div> 


</div>