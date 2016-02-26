<?php
include "config/connect.php";
include "proInput.php";
$nim = $_REQUEST['nim'];
$nama = $_REQUEST['nama'];
$sem = $_REQUEST['sem'];
$no_hp = $_REQUEST['no_hp'];
$date = date("Y-m-d");
addMhs($nim, $nama, $sem, $no_hp);

		
include "header.php";
?>

<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<div class = "col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading">Data Anda</div>
					<div class="panel-body">
					<!-- Start Content -->
					<div class="table-responsive">
 						<table class="table table-striped">
                                                    <tr>
                                                        <td>NIM</td>
                                                        <td><?php echo $nim; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nama</td>
                                                        <td><?php echo $nama; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Semester</td>
                                                        <td><?php echo $sem; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>No Hp</td>
                                                        <td><?php echo $no_hp; ?></td>
                                                    </tr>
 							
    					</table>
					</div>
					</div>
			</div>
                    <?php
                    if(isset($_REQUEST['req_khs']))
                        {
			$krs = $_REQUEST['sem_krs'];
			$data = implode(",",$krs);
			$date = date("Y-m-d");
			addKhs($nim, $data, $date);
                        ?>
                    <div class="panel panel-default">
				<div class="panel-heading">Semester Yang Akan Anda Ambil</div>
					<div class="panel-body">
					<!-- Start Content -->
                                        <h4><?php 
                                            
                                            
                                            $dataCount = count($krs);
                                            
                                            if ($dataCount<2)
                                            {
                                                echo $data;
                                            }else{
                                            for($i=0;$i<$dataCount-1;$i++)
                                            {
                                                echo $krs[$i].", ";
                                            }
                                            echo " dan ".$krs[$dataCount-1];
                                            }

                                        
                                            ?>
                                        </h4>
					
					</div>
					</div>
                         <?php  } ?>
			</div>
                <div class = "col-md-6">
                    <?php 
                    if(isset($_REQUEST['req_tns'])){
			$alasan = $_REQUEST['alasan'];
			
			addTNS($nim, $sem, $alasan, $date);
                    ?>
                    <div class="panel panel-default">
				<div class="panel-heading">Anda Mengajukan Permohonan Transkip Nilai </div>
					<div class="panel-body">
					<!-- Start Content -->
					<div class="table-responsive">
                                            <h4>Dengan Alasan <?= $alasan; ?> </h4>
					</div>
					</div>
			</div>
                   <?php } ?>
                    <?php
                    if (isset($_REQUEST['req_tna']))
                    {
                       $tgl_sidang  = $_REQUEST['tgl_sidang'];
                       $no_ijazah   = $_REQUEST['no_ijazah'];
                       $tgl_ijazah  = $_REQUEST['tgl_ijazah'];
                       $judul       = $_REQUEST['judul'];
                       $judul_en    = $_REQUEST['judul_en'];
                       addTNA($tgl_sidang, $no_ijazah, $tgl_ijazah, $judul, $judul_en);
                       
                   ?>
                    <div class="panel panel-default">
				<div class="panel-heading">Pengajuan Transkip Nilai Akhir</div>
					<div class="panel-body">
					<!-- Start Content -->
					<div class="table-responsive">
 						<table class="table table-striped">
                                                    <tr>
                                                        <td>Tangal Sidang</td>
                                                        <td><?php echo $nim; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>No Ijazah </td>
                                                        <td><?php echo $nama; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tanggal Ijazah</td>
                                                        <td><?php echo $sem; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Judul TA Bahasa Indonesia </td>
                                                        <td><?php echo $no_hp; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Judul TA Bahasa Inggris</td>
                                                        <td><?php echo $no_hp; ?></td>
                                                    </tr>
 							
    					</table>
					</div>
					</div>
			</div>
               <?php } ?>
                 </div>
            <div class="col-md-12">
			  <section>
                	<code> 
                	
                	
                	<code>
                		Data Anda Telah Terinput , Mohon Tunggu 3 Hari kemudian atau silahkan anda cek di Menu Cari Data
                	</code>
                </section>
                <br>
                
                <input type="submit" class="btn btn-primary" value="Buat Permohonan" name="Simpan">
				

			</div>
	</div>
</div>

<?php include "footer.php"; ?>