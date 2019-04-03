<?php  
    $this->load->view('main2/header');
    $this->load->view('main2/navbar');
?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Hasil Analisa</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="col-lg-12">
            	<table class="table table-stripped">
            		<thead>
	            		<tr>
	            			<th>Audiotory</th>
	            			<th>Kinestetic</th>
	            			<th>Visual</th>
	            		</tr>
            		</thead>
            		<tbody>
            			<tr>
            				<td><?php echo $persenA."%"; ?></td>
            				<td><?php echo $persenK."%"; ?></td>
            				<td><?php echo $persenV."%"; ?></td>
            			</tr>
            		</tbody>
            	</table>
            </div>
            <hr>
            <div class="col-lg-12">
            	<h3><b><u>Saran Untuk Metode Pembelajaran</u></b></h3>
            	<ul>
            		<?php foreach ($saran as $s) : ?>
						<li><?php echo $s->keterangan; ?></li>
					<?php endforeach; ?>
            	</ul>
            </div>
        </div>
        <!-- /#page-wrapper -->

    <?php  
        $this->load->view('main2/footer');
    ?>