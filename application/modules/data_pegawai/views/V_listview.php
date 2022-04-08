<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-medal icon-gradient bg-tempting-azure"></i>
                                    </div>
                                    <div>Ubah Detail Data Pegawai 
                                        <div class="page-title-subheading">Ubah Data Pegawai, Silahkan Isi semua form di bawah ini dengan lengkap...</div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                  
                                 <a href="<?php echo base_url('data_pegawai'); ?>" class="mb-2 mr-2 btn btn-shadow btn-success">Kembali</a>
                                </div>    </div>
                        </div>   
                        <div class="row">
                        <div class="col-md-6">
                        <div class="main-card mb-3 card">

                            <form action="<?php echo base_url('data_pegawai/tambah_subbank') ?>" method="POST" enctype="multipart/form-data">
                                <div class="card-body">
                                    <h5 class="card-title"></h5>
                                    <form class="">
                                        <div class="form-row">
                                            <input name="id" value="<?php echo $tampil['id_data_pegawai']?>" type="hidden" class="form-control">


                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label class="">Nama Sub Bank</label>
                                                    <input name="nama_list_bank" type="text" class="form-control">
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
                                                    <label class="">Cabang Bank</label>
                                                    <input name="cabangbank_pegawai"  type="text" class="form-control">
                                                </div>
                                            </div>

                                            <button class="mt-2 btn btn-primary"  type="submit" >Simpan Data</button>


                                                </div>
                                            </div>
                                            
                                        </div>

                                        
                                    </form>
                                </div>

                                </form>

                                </div>
                            </div>

                            <div class="col-md-6">

                                <div class="main-card mb-3 card">
                            <div class="card-body">
                                

                                <table style="width: 100%;" id="example"  class="table table-hover table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th width="20%">No</th>
                                        <th width="20%">Nama Bank</th>
                                        <th width="20%">Norek Bank</th>
                                        <th width="20%">Cabang Bank</th>
                                        <th>Opsi</th>
                                        
                                       
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php  
                                    $no=1;
                                           
                                    foreach ($tampilist AS $rowP ) { ?>
                                    <tr>
                                        
                                        <td><?php echo $no;?></td>
                                        <td><?php echo $rowP->nama_list_data_pegawai;?></td>
                                        <td>        

                                           

                                            <button class="btn btn-warning" data-toggle="modal" data-target="#hapus<?php echo $no ?>">
                                            <i class="fa fa-trash fa-w-16"></i>
                                            </button>
                                    </td>

                                    </tr>

                                       <!-- Modal HAPUS -->
                    <div class="modal fade" id="hapus<?php echo $no ?>"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Hapus Data?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>

                          <form action="<?php echo base_url('data_pegawai/hapus') ?>" method="POST" enctype="multipart/form-data">
                          <div class="modal-body">
                             <!--Modal body-->
                                <p class="text-semibold text-main"></p>
                                <p>Anda Yakin Ingin Menghapus <b><?php echo $rowP->nama_list_data_pegawai ?></b> ? </p>

                                <input name="id"  type="hidden" value="<?php echo $rowP->id_list_data_pegawai ?>" class="form-control">
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">tutup</button>
                            <button class="btn btn-primary" type="submit" >Hapus</button>
                          </div>
                          </form>

                        </div>
                      </div>
                    </div>




                                    <?php $no++;} ?>
                                   
                                    
                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>

                            </div>
</div>

</div>