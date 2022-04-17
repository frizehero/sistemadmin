<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-medal icon-gradient bg-tempting-azure"></i>
                                    </div>
                                    <div>PERMINTAAN UANG MUKA OPERASIONAL
                                        <div class="page-title-subheading">LIST PINJAMAN UANG</div>
                                    </div>
                                </div>
                                <div class="page-title-actions">

                                <a href="<?php echo base_url('uangmuka_ops/tambahview'); ?>" class="mb-2 mr-2 btn btn-shadow btn-warning">Halaman Input</a>

                                <a href="<?php echo base_url('uangmuka_ops/tambahview'); ?>" class="mb-2 mr-2 btn btn-shadow btn-success">Tambah Data</a>
                                  
                                

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
                                        <th>Tanggal</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Job Number</th>
                                        <th>Klient</th>
                                        <th>Vessel/Barge</th>
                                        <th>Detail Job</th>
                                        <th>Deskripsi</th>
                                        <th>Nominal</th>
                                        <th>Nama Pemilik Rekening</th>
                                        <th>Bank</th>
                                        <th>No Rekening</th>
                                        <th>Cabang</th>
                                        <th>Keterangan</th>
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
                                        <td><?php echo $rowP->tanggal_uangmukaops;?></td>
                                        <td><?php echo $rowP->nik_pegawai;?></td>
                                        <td><?php echo $rowP->nama_pegawai;?></td>
                                        <td><?php echo $rowP->jobno;?></td>
                                        <td><?php echo $rowP->pt;?></td>
                                        <td><?php echo $rowP->vessel_bg;?></td>
                                        <td><?php echo $rowP->job_pekerjaannya;?></td>
                                        <td><?php echo $rowP->deskripsi_uangmukaops;?></td>
                                        <td><?php echo $rowP->nominal_uangmukaops;?></td>
                                        <td><?php echo $rowP->nama_pegawai;?></td>
                                        <td><?php echo $rowP->nama_list_bank;?></td>
                                        <td><?php echo $rowP->norek_bank;?></td>
                                        <td><?php echo $rowP->cabang_bank;?></td>
                                        <td><?php echo $rowP->ket_uangmukaops;?></td>
                                        <td>
                                            <a href="<?php echo base_url('uangmuka_ops/editview/'. encrypt_url($rowP->id_uangmukaops)); ?>" class="btn btn-primary">
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

                          <form action="<?php echo base_url('uangmuka_ops/hapus') ?>" method="POST" enctype="multipart/form-data">
                          <div class="modal-body">
                             <!--Modal body-->
                                <p class="text-semibold text-main"></p>
                                <p>Anda Yakin Ingin Menghapus <b><?php echo $rowP->nama_pegawai ?></b> ? </p>

                                <input name="id"  type="hidden" value="<?php echo $rowP->id_uangmukaops ?>" class="form-control">
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
                   

            