<?php
include "koneksi.php"; 
include "tampilkan_data.php"; 

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=mahasiswa.xls");

?>
<html>
    <head>
    </head>
    <body>
        <div class="block-content collapse in">
            <div class="span12">
  				<table class="table">
					<thead>
						<tr>
						    <th>Id</th>
						    <th>Nama Mahasiswa</th>
						    <th>Prodi</th>
						</tr>
					</thead>
						<tbody>
                            <?php
                                while($data = mysqli_fetch_assoc($proses)){
                            ?>
						    <tr>
						        <td><?php echo $data['id'] ?></td>
						        <td><?php echo $data['nama_mahasiswa'] ?></td>
						        <td><?php echo $data['prodi'] ?></td>
						    </tr>
                            <?php
                                }
                            ?>
						</tbody>
				</table>
            </div>
        </div>                     
</body>
</html>