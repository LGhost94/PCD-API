<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Rooms
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <button class="btn btn-primary" data-toggle="modal" data-target="#modalInsertUser">New Room</button>
        </div>
        <div class="box-body">
          <table class="table table-bordered table-striped dt-responsive tabela">
            <thead>
              <tr>
                <th style="width: 10px;">#</th>
                <th>Room</th>
                <th>Nº Serie</th>
                <th style="width: 50px;">Operations</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Room 321</td>
                <td>#21234151</td>
                <td>
                  <div class="btn-group">
                    <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                    <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                  </div>
                </td>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Room 123</td>
                <td>#21234151</td>
                <td>
                  <div class="btn-group">
                    <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                    <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!--=================================
  =            Insert User            =
  ==================================-->
  
  <div id="modalInsertUser" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <form role="form" method="post" enctype="multipart/form-data">
        <div class="modal-header" style="background:#ff851b;color:white;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">New Booking</h4>
        </div>
        <div class="modal-body">
          <div class="box-body">
            <!-- Room Name -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-list-alt"></i></span>
                <input type="text" class="form-control input-lg" name="newName" placeholder="Room Name" required>
              </div>
            </div>
            <!-- Nº Série -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control input-lg" name="newSurname" placeholder="Nº Serie" required>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Register Room</button>
        </div>
        <?php
          $createUser=new ControllerUsers();
          $createUser->ctrCreateUser();
        ?>
      </form>
    </div>

  </div>
</div>