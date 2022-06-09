<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-medal icon-gradient bg-tempting-azure"></i>
                                    </div>
                                    <div>Laporan Pekerjaan Barge
                                        <div class="page-title-subheading">Job Number C02</div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                  
                                  <a href="<?php echo base_url('laporan_bgc/tambahview/'.encrypt_url($tampil_jobno)); ?>" class="mb-2 mr-2 btn btn-shadow btn-success">Tambah Data</a>

                                </div>    </div>
                        </div>

                        <?php tampilnotif()?>

                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                

                                <table style="width: 100%;" id="example"  class="table table-hover table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th width="20%">Job No</th>
                                        <th width="20%">LOT</th>
                                        <th width="20%">Barge</th>
                                        <th width="20%">Tugboat</th>
                                        <th width="20%">From</th>
                                        <th width="20%">To</th>
                                        <th width="20%">Quantity</th>
                                        <th width="20%">Jetty</th>
                                        <th width="20%">Remark</th>
                                        <th width="20%">Surveyor</th>
                                        <th width="20%">Sampler</th>
                                        <th width="20%">Detail</th>
                                        <th>Opsi</th>
                                       
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php  
                                    $no=1;
                                           
                                    foreach ($tampil AS $rowP ) { ?>
                                    <tr>
                                        <td><?php echo $no;?></td>
                                        <td><?php echo $rowP->bgc_jobno;?></td>
                                        <td><?php echo $rowP->lot_bgc;?></td>
                                        <td><?php echo $rowP->barges_C02;?></td>
                                        <td><?php echo $rowP->tugboat_C02;?></td>
                                        <td><?php echo date("d-m-Y",strtotime($rowP->from_C02))?></td>
                                        <td><?php echo date("d-m-Y",strtotime($rowP->to_C02))?></td>
                                        <td><?php echo $rowP->quantity_C02;?></td>
                                        <td><?php echo $rowP->jetty_C02;?></td>
                                        <td><?php echo $rowP->remark_C02;?></td>
                                        <td><?php echo $rowP->surveyor_C02;?></td>
                                        <td><?php echo $rowP->sampler_C02;?></td>
                                        <td><?php echo $rowP->notes_C02;?></td>
                                        <td>
                                            <a href="<?php echo base_url('laporan_bgc/editview/'. encrypt_url($rowP->id_lap_C02)); ?>" class="btn btn-primary">
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

                          <form action="<?php echo base_url('laporan_bgc/hapus') ?>" method="POST" enctype="multipart/form-data">
                          <div class="modal-body">
                             <!--Modal body-->
                                <p class="text-semibold text-main"></p>
                                <p>Anda Yakin Ingin Menghapus <b><?php echo $rowP->barges_C02 ?></b> ? </p>

                                <input name="id"  type="hidden" value="<?php echo $rowP->id_lap_C02 ?>" class="form-control">
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
                   

            