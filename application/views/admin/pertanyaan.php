<?php 
$this->load->view('main/header');
$this->load->view('main/navbar');
?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Data Pertanyaan</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <!-- <h1 class="page-header" id="demo">Data Ruang</h1> -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#ModalAdd"><span class="fa fa-plus"></span> Add</a>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="myTable">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Kode</th>
                                <th>No. Soal</th>
                                <th>Nama</th>
                                <th>Nilai</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="show_data">

                        </tbody>
                    </table>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-6 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->

<!-- /#wrapper -->

<!-- MODAL ADD -->
<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header btn-success">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Add Data</h3>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Kode</label>
                        <div class="col-xs-9">
                            <input name="kode_add" id="kode1" class="form-control" type="text">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >No. Soal</label>
                        <div class="col-xs-9">
                            <input name="nosoal_add" id="nosoal1" class="form-control" type="number">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Pertanyaan</label>
                        <div class="col-xs-9">
                            <input name="pertanyaan_add" id="pertanyaan1" class="form-control" type="text">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Gaya Belajar</label>
                        <div class="col-xs-9">
                            <select class="form-control" name="nilai_add" id="nilai1">
                                <option value="A">Auditory</option>
                                <option value="V">Visual</option>
                                <option value="K">Kinestetic</option>
                            </select>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-success" id="btn_simpan">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--END MODAL ADD-->

<!-- MODAL EDIT -->
<div class="modal fade" id="ModalUpdate" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header btn-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Update Data</h3>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Kode</label>
                        <div class="col-xs-9">
                            <input name="kode_edit" id="kode2" class="form-control" type="text" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >No. Soal</label>
                        <div class="col-xs-9">
                            <input name="nosoal_edit" id="nosoal2" class="form-control" type="number">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-xs-3" >Pertanyaan</label>
                        <div class="col-xs-9">
                            <input name="pertanyaan_edit" id="pertanyaan2" class="form-control" type="text">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Gaya Belajar</label>
                        <div class="col-xs-9">
                            <select class="form-control" name="nilai_edit" id="nilai2">
                                <option value="A">Auditory</option>
                                <option value="V">Visual</option>
                                <option value="K">Kinestetic</option>
                            </select>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info" id="btn_update">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--END MODAL EDIT-->

<!--MODAL HAPUS-->
<div class="modal fade" id="ModalDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header btn-danger">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">

                    <input type="hidden" name="kode" id="textkode" value="">
                    <div class="alert alert-warning"><p>Apakah Anda yakin ingin menghapus data ini?</p></div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button class="btn btn-danger" id="btn_hapus">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--END MODAL HAPUS-->

<?php 
$this->load->view('main/footer');
?>

<script type="text/javascript">
    $(document).ready(function(){  
        //pemanggilan fungsi tampil data.
        //tampil_data(); 

        var rownumber = 0;
        var tableajax = $('#myTable').DataTable({
        	responsive: true,
            ajax: '<?php echo base_url("C_pertanyaan/getAjax") ?>',
            columns: [
             { 
                data: null,
                render: function(data,type,row){
                    rownumber++;
                    return rownumber;
                }
             },
             { data: 'kode' },
             { data: 'nosoal' },
             { data: 'pertanyaan' },
             { data: 'nilai' },
             {
              data: null,
              render: function ( data, type, row ) {
                var ret = '<a href="javascript:;" class="btn btn-info btn-sm item_edit" data="'+row.kode+'">Update</a>';
                ret+= '<a href="javascript:;" class="btn btn-danger btn-sm item_hapus" data="'+row.kode+'">Delete</a>';
                return ret;
               }
             }
             ]
        });

        //Add Barang
        $('#btn_simpan').on('click',function(){
            var kode=$('#kode1').val();
            var nosoal=$('#nosoal1').val();
            var pertanyaan=$('#pertanyaan1').val();
            var nilai=$('#nilai1').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('C_pertanyaan/add')?>",
                dataType : "JSON",
                data : {kode:kode, nosoal:nosoal, pertanyaan:pertanyaan, nilai:nilai},
                success: function(data){
                    $('[name="kode_add"]').val("");
                    $('[name="nosoal_add"]').val("");
                    $('[name="pertanyaan_add"]').val("");
                    $('[name="nilai_add"]').val("");
                    $('#ModalAdd').modal('hide');
                    // tampil_data();
                    rownumber=0;
                    tableajax.ajax.reload();
                }
            });
            return false;
        });

        //GET UPDATE
        $('#show_data').on('click','.item_edit',function(){
            var id=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('C_pertanyaan/where')?>",
                dataType : "JSON",
                data : {id:id},
                success: function(data){
                    $.each(data,function(kode, pertanyaan, nilai){
                        $('#ModalUpdate').modal('show');
                        $('[name="kode_edit"]').val(data.kode);
                        $('[name="nosoal_edit"]').val(data.nosoal);
                        $('[name="pertanyaan_edit"]').val(data.pertanyaan);
                        $('[name="nilai_edit"]').val(data.nilai);
                    });
                }
            });
            return false;
        });

        //Update Proses
        $('#btn_update').on('click',function(){
            var kode=$('#kode2').val();
            var nosoal=$('#nosoal2').val();
            var pertanyaan=$('#pertanyaan2').val();
            var nilai=$('#nilai2').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('C_pertanyaan/update')?>",
                dataType : "JSON",
                data : {kode:kode, nosoal:nosoal, pertanyaan:pertanyaan, nilai:nilai},
                success: function(data){
                    $('[name="kode_edit"]').val("");
                    $('[name="nosoal_edit"]').val("");
                    $('[name="pertanyaan_edit"]').val("");
                    $('[name="nilai_edit"]').val("");
                    $('#ModalUpdate').modal('hide');
                    // tampil_data();
                    rownumber=0;
                    tableajax.ajax.reload();
                }
            });
            return false;
        });


        //GET HAPUS
        $('#show_data').on('click','.item_hapus',function(){
            var id=$(this).attr('data');
            $('#ModalDelete').modal('show');
            $('[name="kode"]').val(id);
        });

        //Hapus Barang
        $('#btn_hapus').on('click',function(){
            var kode=$('#textkode').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('C_pertanyaan/delete')?>",
                dataType : "JSON",
                data : {kode: kode},
                success: function(data){
                    $('#ModalDelete').modal('hide');
                    // tampil_data();
                    rownumber=0;
                    tableajax.ajax.reload();
                }
            });
            return false;
        });

    });

</script>

</body>

</html>
