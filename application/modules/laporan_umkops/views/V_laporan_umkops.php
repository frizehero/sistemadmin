<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-medal icon-gradient bg-tempting-azure"></i>
                                    </div>
                                    <div>LAPORAN KEUANGAN PERMINTAAN UANG MUKA OPERASIONAL
                                        <div class="page-title-subheading">Berikut Permintaan Uang Muka Operasional</div>
                                    </div>
                                </div>
                                <div class="page-title-actions">

                                <a href="<?php echo base_url('laporan_umkops/tambahview'); ?>" class="mb-2 mr-2 btn btn-shadow btn-warning">Halaman Input</a>

                                <a href="<?php echo base_url('laporan_umkops/tambahview'); ?>" class="mb-2 mr-2 btn btn-shadow btn-success">Tambah Data</a>
                                  
                                

                                </div>    </div>
                        </div>

                        <?php tampilnotif()?>

                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                
                                <table style="width: 100%;" id="example"  class="table table-hover table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th width="2%">Detail</th>
                                        <th width="2%">No</th>
                                        <th>Petty Cash No</th>
                                        <th>Advance Date</th>
                                        <th>Submitted by</th>
                                        <th>Description</th>
                                        <th>Job No</th>
                                        <th>Est Job Completed</th>
                                        <th>Payment Rp</th>
                                        <th>Account Name</th>
                                        <th>Bank Name</th>
                                        <th>Bank Account Number</th>
                                        <th>Closing Date</th>
                                        <th>Petty Cash No</th>
                                        <th width="15%">Opsi</th>
                                       
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
                                        <td><?php echo $rowP->nopc_umkops;?></td>
                                        <td><?php echo date("d-m-Y",strtotime($rowP->tgl_mintaumkops))?></td>
                                        <td><?php echo $rowP->nama_umkops;?></td>
                                        <td><?php echo $rowP->deskripsi_umkops;?></td>
                                        <td><?php echo $rowP->jobno_umkops;?></td>
                                        <td><?php echo $rowP->estjob_umkops;?></td>
                                        <td><?php echo $rowP->nominal_umkops;?></td>
                                        <td><?php echo $rowP->namarek_umkops?></td>
                                        <td><?php echo $rowP->bankrek_umkops;?></td>
                                        <td><?php echo $rowP->norek_umkops;?></td>
                                        <td><?php echo date("d-m-Y",strtotime($rowP->tgl_lunas_umkops))?></td>
                                        <td><?php echo $rowP->nopc_lunas_umkops;?></td>
                                       
                                        
                                       
                                        <td>
                                            <a href="<?php echo base_url('laporan_umkops/editview/'. encrypt_url($rowP->id_laporan_umkops)); ?>" class="btn btn-primary">
                                            <i class="fa fa-pen fa-w-16"></i>
                                            </a>

                                        <button class="btn btn-warning" data-toggle="modal" data-target="#hapus<?php echo $no ?>">
                                        <i class="fa fa-trash fa-w-16"></i>
                                        </button?>

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

                          <form action="<?php echo base_url('laporan_umkops/hapus') ?>" method="POST" enctype="multipart/form-data">
                          <div class="modal-body">
                             <!--Modal body-->
                                <p class="text-semibold text-main"></p>
                                <p>Anda Yakin Ingin Menghapus <b><?php echo $rowP->nama_umkops ?></b> ? </p>

                                <input name="id"  type="hidden" value="<?php echo $rowP->id_laporan_umkops ?>" class="form-control">
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
                   

            