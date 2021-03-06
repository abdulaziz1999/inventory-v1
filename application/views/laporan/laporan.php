<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="ace-icon fa fa-home home-icon"></i>
					<a href="<?= base_url('admin'); ?>">Dashboard</a> 
				</li>
				<li class="active">Laporan Barang Masuk By Date</li>
				</ul>
		</div> 
<!-- Main content -->
        <section class='content'>
          <div class='row'>
                <div class='col-xs-12'>
                    <div class='box'>
                        <div class='box-header'>   
                            <h3 class='box-title'>Laporan Receiving</h3>
                            <div class='box box-primary'>
                                <form action="" method="get">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label>Tanggal Mulai</label>
                                                <input type="date" class="form-control form-control-sm form-control-alternative" name="s" value="<?= $this->input->get('s', TRUE) ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label>Tanggal Selesai</label>
                                                <input type="date" class="form-control form-control-sm form-control-alternative" name="e" value="<?= $this->input->get('e', TRUE) ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 text-left">
                                            <div class="form-group">
                                                <label style="color: white">-</label><br>
                                                <button type="submit" class="btn tampil btn-sm btn-round btn-primary">Tampil</button> 
                                                <a href="<?php echo site_url('laporan') ?>" class="btn btn-sm btn-round btn-default">Reset</a>
                                                <?php if($this->input->get('s') == true):?>
                                                <a href="<?php echo site_url('laporan/receiving_report/') ?><?= $this->input->get('s')?>/<?= $this->input->get('e')?>" class="btn btn-sm btn-round btn-warning fa fa-print" target="_blank">Print</a>
                                                <?php endif;?>
                                            </div>
                                        </div>
                                        <div class="col-lg-4"></div>
                                    </div>
                                </form>
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                    </div><!-- /.col -->
                </div>
                
                <div class="col-xs-12" style="padding-top: 15px">
                    <div class="clearfix">
						<div class="table-header">
                            Laporan Inventory : <?= $this->input->get('s') ." - ". $this->input->get('e')?>
						</div>
                        <div class="table-responsive">
                            <table class="table table-hover table-sm" id="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th> 
                                        <th>No Ref</th>
                                        <th>Nama Barang</th>
                                        <th>Remarks</th>
                                        <th>Jumlah</th>
                                        <th>Supplier</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
					</div>
                </div>
            </div><!-- /.row -->
        </section><!-- /.content -->