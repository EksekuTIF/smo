<?php include "header.php"; ?>
<script>
     $(document).ready(function(){
    	$(".khs1").hide();
    	$('.transkipNS').hide();
    	$('.transkipNA').hide();
    	$('#req_tna').change(function() {
    		if($('#req_tna').is(':checked')) { $('.TA').removeAttr('disabled');;} else{ $('.TA').attr("disabled",true); }
    	});
    	$('input[name="alasan"]').change(function() {
   			if($('#rad').is(':checked')) { $('#raddll').removeAttr('disabled');} else{ $('#raddll').attr("disabled",true); }
	});

    });
   	function toggle(className, obj) {
    var $input = $(obj);
    if ($input.prop('checked')) $(className).show();
    else $(className).hide();
	}

    function empty()
    {
        //untuk mengosongkan semua data element yang ditambahkan 
        $(".khs").empty();
    }

    function append()
    {
        //untuk menambahkan element checkbox
        var i;
        var angka1 = $('#semester').val();
        for (i=1;i<=angka1;i++)
        {
            $(".khs").append("<input type=\"checkbox\" name=\"sem_krs[]\" value=\""+(i)+"\">"+(i) + "&nbsp;&nbsp;");
        }
    }

    function checkValidate()
    {
        // input untuk mengambil value dari textbox
        var input = $('#semester').val();
        // isNaN menguji data itu bukan angka
        if(isNaN(parseFloat(input)))
        {
            $('#isi').show();
            //$('#isi').text("Mohon Isi dengan Angka");
            $("#isi").append("<div class=\"alert alert-warning\">Semester dalam bentuk angka bung</div>");
            
        }else{
            $('#isi').empty();
            empty();
            append();
        } 
    }
 </script>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<form role="form" action="confirm.php" method="POST" enctype="multipart/form-data">
			<!--<form role="form" action="proInput.php?action=add" method="POST" enctype="multipart/form-data">-->
			<div class = "col-md-6">

				<div class="form-group"> 
					<label>
						Nama
					</label>
					<input required type="text" class="form-control" name="nama"/>
				</div>

				<div class="form-group"> 
					<label>
						NIM
					</label>
					<input required type="text" class="form-control" name="nim" />
				</div>

				<div class="form-group" id="smt" > 
					<label>
						Semester
					</label>
					<input required type="number" max="14" class="form-control" id="semester" onkeyup="checkValidate()" maxlength="2" name="sem"/>
					<br><p id="isi"></p>
				</div>

				<div class="form-group"> 
					<label>
						No HP
					</label>
					<input required type="text" class="form-control" name="no_hp" />
				</div>

				<div class="checkbox">
                        <label>
                          <input type="checkbox" onclick="toggle('.khs1', this)" name="req_khs">Pengrusan KHS
                        </label>
                </div>

                <div class="checkbox">
                        <label>
                          <input type="checkbox" onclick="toggle('.transkipNS', this)" name="req_tns">Transkrip Nilai Sementara
                        </label>
                </div>

                <div class="checkbox">
                        <label>
                          <input type="checkbox" onclick="toggle('.transkipNA', this)" name="req_tna" id="req_tna">Pengrusan Transkrip Nilai Akhir
                        </label>
                </div>
                	
                <div class="khs1"> 
                <br>
					<label>KHS Semester Yang Diambil</label><br>
                     <div class="khs"><input type="checkbox" name="sem_krs[]" value="1" >1</div>
                     
                </div>

                <div class="transkipNS">
                	<br>
                	<label>Alasan</label>
                <div class="radio">
				  <label><input type="radio" name="alasan" value="Untuk Syarat Kerja Praktek" checked>Untuk Syarat Kerja Praktek</label>
				</div>

				<div class="radio">
				  <label><input type="radio" name="alasan" value="Untuk Syarat Pengambilan Tugas Akhir(TA)">Untuk Syarat Pengambilan Tugas Akhir(TA)</label>
				</div>

				<div class="radio">
				  <label><input type="radio" name="alasan" value="Untuk Syarat Sidang Tugas Akhir(TA)">Untuk Syarat Sidang Tugas Akhir(TA)</label>
				</div>

				<div class="radio">
				  <label><input type="radio" name="alasan" value="Untuk Syarat Kelengkapan Beasiswa">Untuk Syarat Kelengkapan Beasiswa</label>
				</div>

				 <div class="radio">
				 	<label><input type="radio" name="alasan" id="rad"> Dll </label>
				    <input required type="text" class="form-control" id="raddll" disabled name="alasan" />
				 </div><!-- /.col-lg-6 -->
				 </div>
			</div>
			<div class="col-md-6">

				<div class="panel panel-default transkipNA">
				  <div class="panel-heading">Transkrip Nilai Akhir</div>
				  <div class="panel-body">
				  <!-- Start Content -->
				    <div class="form-group"> 
						<label>
							Tanggal Sidang
						</label>
						<input required type="date" class="form-control TA" name="tgl_sidang" disabled/>
					</div>

					 <div class="form-group"> 
						<label>
							Nomor Ijazah
						</label>
						<input required type="text" class="form-control TA" name="no_ijazah" disabled/>
					</div>

					 <div class="form-group"> 
						<label>
							Tanggal Ijazah
						</label>
						<input required type="date" class="form-control TA" name="tgl_ijazah" disabled=""/>
					</div>

					 <div class="form-group"> 
						<label>
							Judul TA Bahasa Indonesia
						</label>
						<textarea required class="form-control TA" rows="3" name="judul" disabled ></textarea>
					</div>

					 <div class="form-group"> 
						<label>
							Judul TA Bahasa Inggris
						</label>
						<textarea required class="form-control TA" rows="3" name="judul_en" disabled></textarea>
					</div>
					<!-- End Content -->
				  </div>
				</div>
			</div>

			<div class="col-md-12">
			  <section>
                	<code> 
                	Persyaratan Permohonan
                	<ol>
                		<li>Melampirkan scan KTM dan KRS dari semester awal sampai dengan akhir</li>
                		<li>Khusus Transkrip Nilai Akhir , scan Ijazah dan Transkrip Nilai Sementara setelah sidang ( Ada Nilai TA)</li>
					</ol>
                	</code>
                	<code>
                		Demikian Permohonan ini saya buat dan persyaratan Telah saya lengkapi
                	</code>
                </section>
                <br>

                <input type="submit" class="btn btn-primary" value="Buat Permohonan">
				<button class="btn btn-danger" type="reset">Reset</button>

			</div>
			</form>
			</div>
		</div>
		<div class="col-md-2">
		</div>
	

<?php include "footer.php";?>