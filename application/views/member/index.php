<section class="hero-section">
    <div class="hero-slider owl-carousel">
        <div class="hs-item set-bg" data-setbg="assets/images/Member_W1.jpg" style="width: 100%; height: 500px; background-size: cover; background-position: center;">
        </div>
        <div class="hs-item set-bg" data-setbg="assets/images/Member_W2.jpg" style="width: 100%; height: 500px; background-size: cover; background-position: center;">
        </div>
		<div class="hs-item set-bg" data-setbg="assets/images/Member_W3.jpg" style="width: 100%; height: 500px; background-size: cover; background-position: center;">
        </div>
		<div class="hs-item set-bg" data-setbg="assets/images/Member_W4.jpg" style="width: 100%; height: 500px; background-size: cover; background-position: center;">
        </div>
		<div class="hs-item set-bg" data-setbg="assets/images/Member_W5.jpg" style="width: 100%; height: 500px; background-size: cover; background-position: center;">
        </div>
    </div>
</section>

<head>
    <link rel="stylesheet" href="<?= base_url('assets/css/certificate.css'); ?>">
</head>
<section class="recent-game-section spad set-bg" data-setbg="img/recent-game-bg.png">
		<div class="container">
			<div class="section-title">
				<div class="cata new">HTG</div>
				<h2>CERTIFICATE</h2>
			</div>
				<div class="container col-lg-4 col-md-6">
					<div class="recent-game-item">
						<div class="rgi-thumb set-bg" data-setbg="assets/images/CERTIFICATE.png">
						</div>
						<div class="rgi-content">
							<h5>Order Of The Heritage:</h5>
							<p>HTG THEKING(F7)</p>
							<p>HTG Fhantomy</p>
							<p>HTG Gogodan</p>
							<p>HTG XYZUROO</p>
							<p>HTG Azelioo</p>
						</div>
					</div>	
				</div>
			</div>
		</div>
      <head>
    <link rel="stylesheet" href="<?= base_url('assets/css/fhancerti.css'); ?>">
</head>
<section class="recent-game-section spad set-bg" data-setbg="img/recent-game-bg.png">
		<div class="container">
				<div class="container col-lg-4 col-md-6">
					<div class="recent-game-fhan">
						<div class="rgi-fhan set-bg" data-setbg="assets/images/FhanCerti.png">
						</div>
						<div class="rgi-content">
							<h5>Survivor MVP:</h5>
							<p>HTG Fhantomy</p>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</section>
<head>
    <link rel="stylesheet" href="<?= base_url('assets/css/member.css'); ?>">
</head>
<div class="container">
	<div class="row mt-5">
		<div class="col mt-4">
      <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">


      <div class="row mt-3">
         <div class="col-md-8">

		 <link rel="stylesheet" href="<?= base_url('assets/css/tambah.css'); ?>">

			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
			  Tambah Data Member
			</button>
			

			<!-- awal flashdata -->
			<?php if($this->session->flashdata('flash')) : ?>
				<div class="row mt-3">
					<div class="col md-8">
					<div class="alert alert-success alert-dismissible fade show" role="alert">
					Data Member<strong> Berhasil </strong><?= $this->session->flashdata('flash');?>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
					</div>
				</div>
				<?php endif; ?>
			<!-- akhir flashdata -->


			<div class="row mt-3">
				<div class="col-mt-6">
				  <form action="" method="post">
					<div class="input-group">
					 <input type="text" class="form-control" placeholder="Cari data member..." name="keyword">
					 <div class="input-group-append">
					 <h7 type="text" class="form-control" data-bs-toggle="modal" data-bs-target="#exampleModal">47/50</h7>
					  <button class="btn btn-primary" type="submit">Cari</button>	
					 </div>
					</div> 
				  </form>
				</div>
			</div>


			<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Member</h5>
			        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			      <div class="modal-body">
			        <form action="<?= base_url('member') ?>" method="post">
			        <div class="form group">
			        	<label for="Nickname">Nickname</label>
			        	<input type="text" name="Nickname" class="form-control" id="Nickname" placeholder="Masukan Nickname">
					<small class="form-text text-danger"><?= form_error('Nickname') ?></small>
				</div>

			        <div class="form group">
			        	<label for="Role">Role</label>
			        	<input type="text" name="Role"class="form-control" id="Role" placeholder="Masukan Role">
					   <small class="form-text text-danger"><?= form_error('Role') ?></small>
			        </div>

			        <div class="form group">
			        	<label for="Rank">Rank</label>
			        	<input type="numeric" name="Rank" class="form-control" id="Rank" placeholder="Masukan Rank">
					   <small class="form-text text-danger"><?= form_error('Rank') ?></small>
			        </div>

			        <div class="form group">
			        	<label for="User">User</label>
			        	<select class="form-select" id="User" name="User">
						<option value="">Pilihan</option>
						<?php foreach($user as $u):?>
						<option><?php echo $u['namaUser']; ?></option>
						<?php endforeach; ?>
					</select>
					<small class="form-text text-danger"><?= form_error('User') ?></small>
				</div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary">Save changes</button>
			      </div>
			      </form>
			    </div>
			  </div>
			</div>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Nickname</th>
      <th scope="col">Role</th>
      <th scope="col">Rank</th>
      <th scope="col">User</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($member as $mb): ?>
    	<tr>
    		<th scope="row"><?=$mb['Nickname']; ?></th>
    		<td><?=$mb['Role']; ?></td>
    		<td><?=$mb['Rank']; ?></td>
    		<td><?=$mb['User']; ?></td>
    		<td>
    			<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal<?=$mb['id'];?>">
			  Ubah
			</button>
    			<a href="<?= base_url(); ?>member/hapus/<?= $mb['id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin');">Hapus</a>
    		</td>
    	</tr>
        <?php endforeach;?>
  </tbody>
</table>
		</div>
	</div>
</div>


<!-- awal modal edit -->
<?php $no = 0 ; foreach ($member as $mb): $no++; ?>
    <div class="modal fade" id="editModal<?=$mb['id'];?>" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="editModalLabel">form Edit Data</h5>
			        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			      <div class="modal-body">
              <?=form_open_multipart('member/ubah'); ?>
              <input type="hidden" name="id" value="<?=$mb['id']; ?>">
			        <div class="form group">
			        	<label for="Nickname">Nickname</label>
			        	<input type="text" name="Nickname" class="form-control" value="<?=$mb['Nickname']; ?>" id="Nickname" placeholder="Masukan Nickname" readonly>
			        </div>

			        <div class="form group">
			        	<label for="Role">Role</label>
			        	<input type="text" name="Role"class="form-control" value="<?=$mb['Role']; ?>"id="Role" placeholder="Masukan Role">
			        </div>

			        <div class="form group">
			        	<label for="Rank">Rank</label>
			        	<input type="numeric" name="Rank" class="form-control" value="<?=$mb['Rank']; ?>"id="Rank" placeholder="Masukan Rank">
			        </div>

			        <div class="form group">
			        	<label for="User">User</label>
					   <select class="form-select" id="User" name="User">
						<option value="">Pilihan</option>
						<?php foreach($user as $u):?>
						<option><?php echo $u['namaUser']; ?></option>
						<?php endforeach; ?>
					</select>   	
				</div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary">Ubah</button>
			      </div>
			    </form>
			    </div>
			  </div>
			</div>
		<?php endforeach;  ?>

<head>
    <link rel="stylesheet" href="<?= base_url('assets/css/footermember.css'); ?>">
</head>
		<section class="footer-top-section">
		<div class="container">
			<div class="footer-top-bg">
				<img src="assets/images/maskot.png" alt="">
			</div>
			<div class="row">
				<div class="col-lg-4">
					<div class="footer-logo text-white">
						<img src="assets/images/DBDmember.png" alt="">
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="footer-widget mb-5 mb-md-0">
						<h4 class="fw-title">Top Member Heritage</h4>
						<div class="latest-blog">
							<div class="lb-item">
								<div class="lb-thumb set-bg" data-setbg="assets/images/FubukiPyologo.jpg"></div>
								<div class="lb-content">
									<div class="lb-date">FubukiPyo</div>
									<p>HTG Fubuki</p>
									<p>Leader</p>
								</div>
							</div>
							<div class="lb-item">
								<div class="lb-thumb set-bg" data-setbg="assets/images/Miawlogo.jpg"></div>
								<div class="lb-content">
									<div class="lb-date">Miaw</div>
									<p>HTG MiawNyaw</p>
									<p>Co-Leader</p>
								</div>
							</div>
							<div class="lb-item">
								<div class="lb-thumb set-bg" data-setbg="assets/images/Fhantomylogo.jpeg"></div>
								<div class="lb-content">
									<div class="lb-date">Fhantomy72</div>
									<p>HTG Fhantomy</p>
									<p>MVP Heritage</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="footer-widget">
						<div class="top-comment">
							<div class="tc-item">
								<div class="tc-thumb set-bg" data-setbg="assets/images/Order.png"></div>
								<div class="tc-content">
									<p>KingPredator</P>
									<div class="tc-date">HTG F7</div>
									<div class="tc-date">Order Of The Heritage</div>
								</div>
							</div>
							<div class="tc-item">
								<div class="tc-thumb set-bg" data-setbg="assets/images/Order.png"></div>
								<div class="tc-content">
									<p>Gogodan</P>
									<div class="tc-date">HTG Gogodan</div>
									<div class="tc-date">Order Of The Heritage</div>
								</div>
							</div>
							<div class="tc-item">
								<div class="tc-thumb set-bg" data-setbg="assets/images/Order.png"></div>
								<div class="tc-content">
									<p>Rayhan</p>
									<div class="tc-date">HTG XYZUROO</div>
									<div class="tc-date">Order Of The Heritage</div>
								</div>
							</div>
							<div class="tc-item">
								<div class="tc-thumb set-bg" data-setbg="assets/images/Order.png"></div>
								<div class="tc-content">
									<p>Azelioo</P>
									<div class="tc-date">HTG Azelioo</div>
									<div class="tc-date">Order Of The Heritage</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<!-- akhir modal edit -->
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>