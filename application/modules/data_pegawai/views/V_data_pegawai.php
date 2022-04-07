<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-medal icon-gradient bg-tempting-azure"></i>
                                    </div>
                                    <div>Data Pegawai
                                        <div class="page-title-subheading">Data Pegawai PT. XXX </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">

                                <a href="<?php echo base_url('data_pegawai/tambahview'); ?>" class="mb-2 mr-2 btn btn-shadow btn-warning">Halaman Input</a>
                                  
                                  <a href="<?php echo base_url('data_pegawai/tambahview'); ?>" class="mb-2 mr-2 btn btn-shadow btn-success">Tambah Data</a>

                                </div>    </div>
                        </div>

                        <?php tampilnotif()?>

                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                

                                <table style="width: 100%;" id="example"  class="table table-hover table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Detail</th>
                                        <th>No</th>
                                        <th width="20%">NIK</th>
                                        <th width="20%">Nama</th>
                                        <th width="20%">Jabatan</th>
                                        <th width="20%">Telepon</th>
                                        <th width="20%">Email</th>
                                        <th width="20%">Bank</th>
                                        <th width="20%">Nomor Rekening</th>
                                        <th width="20%">Cabang Bank</th>
                                        <th width="20%">TTD Pegawai</th>
                                        <th>Opsi</th>
                                        
                                       
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php  
                                    $no=1;
                                           
                                    foreach ($tampil AS $rowP ) { ?>
                                    <tr>
                                        <td><button type="button" class="btn btn-warning">
                                            <i class="fa fa-search fa-w-16 fa-spin "></i>
                                            </button></td>
                                        <td><?php echo $no;?></td>
                                        <td><?php echo $rowP->nik_pegawai;?></td>
                                        <td><?php echo $rowP->nama_pegawai;?></td>
                                        <td><?php echo $rowP->ket_pegawai;?></td>
                                        <td><?php echo $rowP->telepon_pegawai;?></td>
                                        <td><?php echo $rowP->email_pegawai;?></td>
                                        <td><?php echo $rowP->bank_pegawai;?></td>
                                        <td><?php echo $rowP->norek_pegawai;?></td>
                                        <td><?php echo $rowP->cabangbank_pegawai;?></td>
                                        <td><?php echo $rowP->ttd_pegawai;?></td>
                                        
                                      
                                        <td>
                                            <a href="<?php echo base_url('data_pegawai/listview/'. encrypt_url($rowP->id_data_pegawai)); ?>" class="btn btn-success">
                                            <i class="fa fa-user fa-w-16"></i>
                                            </a>

                                            <a href="<?php echo base_url('data_pegawai/editview/'. encrypt_url($rowP->id_data_pegawai)); ?>" class="btn btn-primary">
                                            <i class="fa fa-pen fa-w-16"></i>
                                            </a>

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
                                <p>Anda Yakin Ingin Menghapus <b><?php echo $rowP->nama_pegawai ?></b> ? </p>

                                <input name="id"  type="hidden" value="<?php echo $rowP->id_data_pegawai ?>" class="form-control">
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
                   

            