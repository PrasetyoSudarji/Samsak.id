<?php
	foreach ($infoUser as $key => $value) {
		# code...
	}
	echo "<form class='form-horizontal' method='POST' action='".base_url()."index.php/anggota/updateUserByKabKot'>
       	<input type='hidden' readonly class='form-control' name='inputId' id='inputId' value='".$value['id']."'>
		<div class='form-group'>
	        <label for='inputNama' class='control-label col-xs-2'> Nama Anggota</label>
	        <div class='col-xs-10'>
	            <input type='text' readonly class='form-control' name='inputNama' id='inputNama' value='".$value['nama']."'>
	        </div>
	    </div>
	    
	    <div class='form-group'>
		  	<label for='inputDojo' class='control-label col-xs-2'> Dojo </label>
		  	<div class='col-xs-10'>
		  	<select class='form-control' id='inputDojo' name='inputDojo'>";
			    foreach ($listDojo as $key => $value2) {
			    	# code...
			    	if($value['kode_dojo'] == $value2['kode_dojo']){
			    		echo "<option value='".$value2['kode_dojo']."' selected>".$value2['nama_dojo']."</option>";	
			    	}else{
			    		echo "<option value='".$value2['kode_dojo']."' >".$value2['nama_dojo']."</option>";	
			    	}
			    	
			    }
		  	echo "</select>
		  	</div>
		</div>

		<div class='form-group'>
		  	<label for='inputJabatan' class='control-label col-xs-2'> Jabatan </label>
		  	<div class='col-xs-10'>
		  	<select class='form-control' id='inputJabatan' name='inputJabatan'>";
			    $totalJabatan = count($listJabatan);
		  		for($i = 0;$i<$totalJabatan;$i++) {
		  			# code...
  					if($value['jabatan'] == $listJabatan[$i]){
	  					echo "<option value='".$listJabatan[$i]."' selected>".$listJabatan[$i]."</option>";
	  				}else{
	  					echo "<option value='".$listJabatan[$i]."'>".$listJabatan[$i]."</option>";
	  				}
		  		}
		  	echo "</select>
		  	</div>
		</div>

	    <div class='form-group'>
	        <div class='col-xs-offset-5 col-xs-7' >
	            <button type='submit' class='btn btn-primary' style='min-width: 20%;'> Update </button>
	        </div>
	    </div>
	</form>
	";
?>
