<?php foreach($dt_info as $u){ ?>
<head>
<script>
var form = document.getElementById("form-id");
document.getElementById("your-id").addEventListener("click", function () {
  form.submit();
});
</script>
</head>
 <div class="modal-dialog">
                                    <div class="modal-content">
                                  <form id="form-id" action="http://localhost/wisata/index.php/data_info/simpaninfo" method="post" enctype="multipart/form-data">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="tambahLabel">Edit Info</h4>
                                        </div>

                                        <div class="modal-body">
                                        <input type="hidden" name="id_info" value="<?php echo $u->id; ?>">
                                        <div class="form-group">
                                            <label>Gambar </label>
                                            <div class="box-body pad">
                                         <input id="gambar" name="gambar" class="form-control" type="file" rows="1" cols="73" required><?php echo $u->gambar; ?></input>
                                         </div>

                

                                         <div class="form-group">
                            <label>Judul</label>
                            <div class="box-body pad">
                                <textarea id="judul" name="judul" class="form_control" type="text" rows="1" cols="73" required><?php echo $u->judul; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Isi</label>
                            <div class="box-body pad">
                                <textarea id="isi" name="isi" class="form_control" type="text" rows="1" cols="73" required><?php echo $u->isi; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tanggal</label>
                            <div class="box-body pad">
                            <input type="date" name="tanggal">
                            <?php echo $u->tanggal; ?>
                                <!-- <textarea id="tanggal" name="tanggal" class="form_control" type="date" rows="1" cols="73" required></textarea> -->
                            </div>
                        </div>


                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button id="your-id" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                   </form>
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            
                            <?php } ?>