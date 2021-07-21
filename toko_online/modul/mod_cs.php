<!-- <h3>Customer Service</h3> -->
<!-- <hr/> -->
<?php 
$query = "SELECT isi FROM navigasi WHERE id_nav = 4 ";
$hasil = mysqli_query($conn, $query);
$data  = mysqli_fetch_array($hasil);

?>
<style type="text/css">
	footer img {
		/*width: 40px !important;
		height: auto;*/
		transform: translateY(-12px) translateX(-1px);
		display: inline-block;
		padding-right: 5px;
	}
	footer .list-inline li {
		overflow: hidden;
		padding-top: 25px;
	}
	footer .list-inline li p {
		float: left;
	}
</style>
<ul class="list-inline">
	<?php if(mysqli_num_rows($hasil) > 0): ?>
		<li><?php echo $data['isi']; ?></li>
	<?php else: ?>
		Belum ada data
	<?php endif; ?>
</ul>