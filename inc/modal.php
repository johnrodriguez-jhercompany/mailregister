    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="index.php">Logout</a>
                </div>
            </div>
        </div>
    </div>


<!-- Add Mail -->
    <div class="modal fade" id="newMailModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <center><h4 class="modal-title" id="myModalLabel">Nuevo Correo</h4></center>
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


