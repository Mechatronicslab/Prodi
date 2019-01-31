<section class="sidebar">
	<!-- Sidebar user panel -->
	<div class="user-panel">
		<div class="pull-left image">
			<img src="<?php echo base_url('assets/adminlte/dist/img/user2-160x160.jpg')?>" class="img-circle" alt="User Image">
		</div>
		<div class="pull-left info">
			<p><?php echo $user['name']?></p>
			<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
		</div>
	</div>

<ul class="sidebar-menu" data-widget="tree">
	<li class="header">MAIN NAVIGATION</li>
	<li class="active">
		<a href="<?php echo base_url(); ?>">
			<i class="fa fa-dashboard"></i> <span>Dashboard</span>
		</a>
	</li>


	<li class="treeview">
		<a href="#">
			<i class="fa fa-user-circle"></i>
			<span>Mahasiswa</span>
			<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
		</a>
		<ul class="treeview-menu">
			<li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> Kartu Rencana Studi (KRS)</a></li>
			<li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Kartu Hasil Studi (KHS)</a></li>
			<li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Input KRS Mahasiswa</a></li>
			<li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Data Mahasiswa</a></li>
		</ul>
	</li>

	<li class="treeview">
		<a href="#">
			<i class="fa fa-laptop"></i>
			<span>Program Studi</span>
			<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
		</a>
		<ul class="treeview-menu">
			<li><a href="<?php echo base_url('jadwal')?>"><i class="fa fa-circle-o"></i> Manajemen Jadwal</a></li>
			<li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Verivikasi Nilai Mahasiswa</a></li>
			<li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Daftar Nilai Dan Konversi</a></li>
			<li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Setting Jatah SKS</a></li>
		</ul>
	</li>
</ul>
</section>
