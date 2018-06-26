<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Bookings
    </h1>
    <ol class="breadcrumb">
      <li><a href="dashboard"><i class="fa fa-dashboard"></i>Dashboard</a></li>
      <li class="active">Utilizadores</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalInsertUser">New Booking</button>
      </div>
      <div class="box-body">
        <table class="table table-bordered table-striped dt-responsive tabelag">
          <thead>
            <tr>
              <th style="width: 10px;">#</th>
              <th>Name</th>
              <th>Surname</th>
              <th>Status</th>
              <th>Check-In</th>
              <th>Check-Out</th>
              <th>Created By</th>
              <th style="width: 50px;">Operations</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Richard</td>
              <td>Smith</td>
              <td><p hidden>b</p><button class="btn btn-success btn-xs">Check-In</button></td>
              <td>21-06-2018 12:00:00</td>
              <td>21-06-2018 09:00:00</td>
              <td>José</td>
              <td>
                <div class="btn-group">
                  <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                  <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                </div>
              </td>
            </tr>
            <tr>
              <td>1</td>
              <td>Richard</td>
              <td>Smith</td>
              <td><p hidden>a</p><button class="btn btn-primary btn-xs">Waiting</button></td>
              <td>21-06-2018 12:00:00</td>
              <td>21-06-2018 09:00:00</td>
              <td>José</td>
              <td>
                <div class="btn-group">
                  <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                  <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                </div>
              </td>
            </tr>
            <tr>
              <td>1</td>
              <td>Richard</td>
              <td>Smith</td>
              <td><p hidden>c</p><button class="btn btn-default btn-xs">Check-Out</button></td>
              <td>21-06-2018 12:00:00</td>
              <td>21-06-2018 09:00:00</td>
              <td>José</td>
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

<!--===========================================
=            Generate XML and Book            =
============================================-->


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
            <!-- Name -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-list-alt"></i></span>
                <input type="text" class="form-control input-lg" name="newName" placeholder="Name" required>
              </div>
            </div>
            <!-- Surname -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control input-lg" name="newSurname" placeholder="Surname" required>
              </div>
            </div>
            <!-- Check-In/Check-Out -->
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-calendar-check-o"></i>
                </div>
                <input type="text" class="form-control pull-right" id="reservationtime" name="newCheckIn">
              </div>
            </div>
            <!-- Room -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                <select class="form-control input-lg" name="newRoom">
                  <option value="">Room</option>
                  <option value="Administrador">Room 1</option>
                  <option value="Motorista">Room 2</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <button type="submit" name="newBook" class="btn btn-primary">Book!</button>
        </div>
        <?php
        $book=new ControllerBookings();
        $book->ctrBook();
        ?>
      </form>
    </div>

  </div>
</div>