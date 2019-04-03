<?php  
    $this->load->view('main2/header');
    $this->load->view('main2/navbar');
?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Jawablah Soal Dibawah ini</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <form method="POST" action="<?php echo base_url('C_user/hasilKonsul'); ?>">
                <div class="col-lg-12">
                    <h5><b><u>1. Kecepatan Berbicara</u></b></h5>
                    <?php foreach ($soal1 as $s1) : ?>
                        <input type="hidden" name="nosoal1" value="<?php echo $s1->nosoal; ?>">
                        <input type="radio" name="s1" value="<?php echo $s1->nilai; ?>"> <?php echo $s1->pertanyaan; ?><br>
                    <?php endforeach; ?>
                </div>
                <div class="col-lg-12">
                    <br>
                    <h5><b><u>2. Dalam Hal Mengatakan Sesuatu</u></b></h5>
                    <?php foreach ($soal2 as $s2) : ?>
                        <input type="hidden" name="nosoal2" value="<?php echo $s2->nosoal; ?>">
                        <input type="radio" name="s2" value="<?php echo $s2->nilai; ?>"> <?php echo $s2->pertanyaan; ?><br>
                    <?php endforeach; ?>
                </div>
                <div class="col-lg-12">
                    <br>
                    <h5><b><u>3. Mengingat Sesuatu</u></b></h5>
                    <?php foreach ($soal3 as $s3) : ?>
                        <input type="hidden" name="nosoal3" value="<?php echo $s3->nosoal; ?>">
                        <input type="radio" name="s3" value="<?php echo $s3->nilai; ?>"> <?php echo $s3->pertanyaan; ?><br>
                    <?php endforeach; ?>
                </div>
                <div class="col-lg-12">
                    <br>
                    <h5><b><u>4. Kesan Pada Kejadian</u></b></h5>
                    <?php foreach ($soal4 as $s4) : ?>
                        <input type="hidden" name="nosoal4" value="<?php echo $s4->nosoal; ?>">
                        <input type="radio" name="s4" value="<?php echo $s4->nilai; ?>"> <?php echo $s4->pertanyaan; ?><br>
                    <?php endforeach; ?>
                </div>
                <div class="col-lg-12">
                    <br>
                    <h5><b><u>5. Hal yang Disukai</u></b></h5>
                    <?php foreach ($soal5 as $s5) : ?>
                        <input type="hidden" name="nosoal5" value="<?php echo $s5->nosoal; ?>">
                        <input type="radio" name="s5" value="<?php echo $s5->nilai; ?>"> <?php echo $s5->pertanyaan; ?><br>
                    <?php endforeach; ?>
                </div>
                <div class="col-lg-12">
                    <br>
                    <h5><b><u>6. Cara Memperhatikan Orang</u></b></h5>
                    <?php foreach ($soal6 as $s6) : ?>
                        <input type="hidden" name="nosoal6" value="<?php echo $s6->nosoal; ?>">
                        <input type="radio" name="s6" value="<?php echo $s6->nilai; ?>"> <?php echo $s6->pertanyaan; ?><br>
                    <?php endforeach; ?>
                </div>
                <div class="col-lg-12">
                    <br>
                    <h5><b><u>7. Cara Menghafal Sesuatu</u></b></h5>
                    <?php foreach ($soal7 as $s7) : ?>
                        <input type="hidden" name="nosoal7" value="<?php echo $s7->nosoal; ?>">
                        <input type="radio" name="s7" value="<?php echo $s7->nilai; ?>"> <?php echo $s7->pertanyaan; ?><br>
                    <?php endforeach; ?>
                </div>
                <div class="col-lg-12">
                    <br>
                    <h5><b><u>8. Ketika Berbicara Menjelaskan</u></b></h5>
                    <?php foreach ($soal8 as $s8) : ?>
                        <input type="hidden" name="nosoal8" value="<?php echo $s8->nosoal; ?>">
                        <input type="radio" name="s8" value="<?php echo $s8->nilai; ?>"> <?php echo $s8->pertanyaan; ?><br>
                    <?php endforeach; ?>
                </div>
                <div class="col-lg-12">
                    <br>
                    <h5><b><u>9. Hal yang Mengganggu</u></b></h5>
                    <?php foreach ($soal9 as $s9) : ?>
                        <input type="hidden" name="nosoal9" value="<?php echo $s9->nosoal; ?>">
                        <input type="radio" name="s9" value="<?php echo $s9->nilai; ?>"> <?php echo $s9->pertanyaan; ?><br>
                    <?php endforeach; ?>
                </div>
                <div class="col-lg-12">
                    <br>
                    <h5><b><u>10. Ketertarikan Pada Sesuatu</u></b></h5>
                    <?php foreach ($soal10 as $s10) : ?>
                        <input type="hidden" name="nosoal10" value="<?php echo $s10->nosoal; ?>">
                        <input type="radio" name="s10" value="<?php echo $s10->nilai; ?>"> <?php echo $s10->pertanyaan; ?><br>
                    <?php endforeach; ?>
                </div>
                <div class="col-lg-12">
                    <br>
                    <h5><b><u>11. Cara Menganalisa Sesuatu</u></b></h5>
                    <?php foreach ($soal11 as $s11) : ?>
                        <input type="hidden" name="nosoal11" value="<?php echo $s11->nosoal; ?>">
                        <input type="radio" name="s11" value="<?php echo $s11->nilai; ?>"> <?php echo $s11->pertanyaan; ?><br>
                    <?php endforeach; ?>
                </div>
                <div class="col-lg-12">
                    <br>
                    <h5><b><u>12. Hal-hal yang Menyulitkan</u></b></h5>
                    <?php foreach ($soal12 as $s12) : ?>
                        <input type="hidden" name="nosoal12" value="<?php echo $s12->nosoal; ?>">
                        <input type="radio" name="s12" value="<?php echo $s12->nilai; ?>"> <?php echo $s12->pertanyaan; ?><br>
                    <?php endforeach; ?>
                </div>
                <div class="col-lg-12">
                    <br>
                    <h5><b><u>13. Hal yang Membuat Terkesan</u></b></h5>
                    <?php foreach ($soal13 as $s13) : ?>
                        <input type="hidden" name="nosoal13" value="<?php echo $s13->nosoal; ?>">
                        <input type="radio" name="s13" value="<?php echo $s13->nilai; ?>"> <?php echo $s13->pertanyaan; ?><br>
                    <?php endforeach; ?>
                </div>
                <div class="col-lg-12">
                    <br>
                    <h5><b><u>14. Kecenderungan Memulai Kalimat Opini</u></b></h5>
                    <?php foreach ($soal14 as $s14) : ?>
                        <input type="hidden" name="nosoal14" value="<?php echo $s14->nosoal; ?>">
                        <input type="radio" name="s14" value="<?php echo $s14->nilai; ?>"> <?php echo $s14->pertanyaan; ?><br>
                    <?php endforeach; ?>
                </div>
                <div class="col-lg-12">
                    <br>
                    <h5><b><u>15. Hal yang Disukai Ketika Diajar Guru</u></b></h5>
                    <?php foreach ($soal15 as $s15) : ?>
                        <input type="hidden" name="nosoal15" value="<?php echo $s15->nosoal; ?>">
                        <input type="radio" name="s15" value="<?php echo $s15->nilai; ?>"> <?php echo $s15->pertanyaan; ?><br>
                    <?php endforeach; ?>
                </div>
                <div class="col-lg-12">
                    <br>
                    <h5><b><u>16. Memilih Kondisi Tidur</u></b></h5>
                    <?php foreach ($soal16 as $s16) : ?>
                        <input type="hidden" name="nosoal16" value="<?php echo $s16->nosoal; ?>">
                        <input type="radio" name="s16" value="<?php echo $s16->nilai; ?>"> <?php echo $s16->pertanyaan; ?><br>
                    <?php endforeach; ?>
                </div>
                <div class="col-lg-12">
                    <br>
                    <h5><b><u>17. Hal yang Diamati Saat Menonton Film</u></b></h5>
                    <?php foreach ($soal17 as $s17) : ?>
                        <input type="hidden" name="nosoal17" value="<?php echo $s17->nosoal; ?>">
                        <input type="radio" name="s17" value="<?php echo $s17->nilai; ?>"> <?php echo $s17->pertanyaan; ?><br>
                    <?php endforeach; ?>
                </div>
                <div class="col-lg-12">
                    <br>
                    <h5><b><u>18. Ketika Memilih Produk</u></b></h5>
                    <?php foreach ($soal18 as $s18) : ?>
                        <input type="hidden" name="nosoal18" value="<?php echo $s18->nosoal; ?>">
                        <input type="radio" name="s18" value="<?php echo $s18->nilai; ?>"> <?php echo $s18->pertanyaan; ?><br>
                    <?php endforeach; ?>
                </div>
                <div class="col-lg-12">
                    <br>
                    <h5><b><u>19. Ketika Merakit Alat Elektronik</u></b></h5>
                    <?php foreach ($soal19 as $s19) : ?>
                        <input type="hidden" name="nosoal19" value="<?php echo $s19->nosoal; ?>">
                        <input type="radio" name="s19" value="<?php echo $s19->nilai; ?>"> <?php echo $s19->pertanyaan; ?><br>
                    <?php endforeach; ?>
                </div>
                <div class="col-lg-12">
                    <br>
                    <h5><b><u>20. Hal yang Membuat Terkesan</u></b></h5>
                    <?php foreach ($soal20 as $s20) : ?>
                        <input type="hidden" name="nosoal20" value="<?php echo $s20->nosoal; ?>">
                        <input type="radio" name="s20" value="<?php echo $s20->nilai; ?>"> <?php echo $s20->pertanyaan; ?><br>
                    <?php endforeach; ?>
                </div>
                <div class="col-lg-12">
                    <br>
                    <input type="submit" class="btn btn-info btn-sm" value="Lihat Hasil" name="lihat">
                    <br><br>
                </div>
                </form>
            </div>
            
        </div>
        <!-- /#page-wrapper -->

    <?php  
        $this->load->view('main2/footer');
    ?>