<!-- Edit Mail -->
    <div class="modal fade" id="editMailModal_<?php echo $cqrow['idCorreo']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <?php
        $id = $cqrow['idCorreo'];
        $ec=mysqli_query($conn,"select * from correo where idCorreo=$id");
        $ecrow=mysqli_fetch_array($ec);
        ?>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <center><h4 class="modal-title" id="myModalLabel">Editar Correo</h4></center>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                <div class="container-fluid">
                    <form role="form" method="POST" action="addmail.php" enctype="multipart/form-data">
                        <div class="container-fluid">
                        <div style="height:15px;"></div>
                        <div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Destinario:</span>
                            <input type="text" style="width:400px; text-transform:capitalize;" class="form-control" name="destinario" required>
                        </div>
                        <div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Emisor:</span>
                            <input type="text" style="width:400px; text-transform:capitalize;" class="form-control" name="emisor" required>
                        </div>
                        <div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Fecha:</span>
                            <input type="date" style="width:400px; text-transform:capitalize;" class="form-control" name="fecha" required>
                        </div>
                        <div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Servidor SMTP:</span>
                            <input type="text" style="width:400px; text-transform:capitalize;" class="form-control" name="smtp" required>
                        </div>
                        <div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Asunto:</span>
                            <input type="text" style="width:400px; text-transform:capitalize;" class="form-control" name="asunto" required>
                        </div>
                        <div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Contenido:</span>
                            <textarea style="width:400px; text-transform:capitalize;" class="form-control" name="contenido" required></textarea>
                        </div>
                        <div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Empresa:</span>
                            <select style="width:400px;" class="form-control" name="idEmpresa">
                                <?php
                                    $emp=mysqli_query($conn,"select * from empresa");
                                    while($emprow=mysqli_fetch_array($emp)){
                                        ?>
                                            <option value="<?php echo $emprow['idEmpresa']; ?>"><?php echo $emprow['nombre']; ?></option>
                                        <?php
                                    }
                                ?>
                            </select>
                        </div>            
                        </div>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Delete Product -->
    <div class="modal fade" id="deletMailModal_<?php echo $cqrow['idCorreo']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <center><h4 class="modal-title" id="myModalLabel">Borrar correo</h4></center>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                <div class="container-fluid">
                    <?php
                        $id = $cqrow['idCorreo'];
                        $dc=mysqli_query($conn,"select * from correo where idCorreo=$id");
                        $dcrow=mysqli_fetch_array($dc);
                    ?>
                    <h5><center>Correo: <strong><?php echo $dcrow['asunto']." ".$dcrow['destinatario']; ?></strong></center></h5>
                    <form role="form" method="POST" action="deletecorreo.php<?php echo '?id='.$id; ?>">
                </div>                 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- /.modal -->