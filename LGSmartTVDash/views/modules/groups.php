<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Groups
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalInsertUser">New Group</button>
      </div>
      <div class="box-body">
        <table class="table table-bordered table-striped dt-responsive tabela">
          <thead>
            <tr>
              <th style="width: 10px;">#</th>
              <th>Group</th>
              <th style="width: 50px;">Operations</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Floor 1</td>
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
            <td>Floor 2</td>
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
  =            New Group Modal            =
  ==================================-->
  
  <div id="modalInsertUser" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <form role="form" method="post" enctype="multipart/form-data">
          <div class="modal-header" style="background:#ff851b;color:white;">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">New Group</h4>
          </div>
          <div class="modal-body">
            <div class="box-body">
              <!-- Name -->
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-list-alt"></i></span>
                  <input type="text" class="form-control input-lg" name="newName" placeholder="Group Name" required>
                </div>
              </div>
              <!-- Rooms -->
              <div class="form-group">
                <label>Multiple</label>
                <select class="form-control select2" multiple="multiple" data-placeholder="Select a State"
                style="width: 100%;">
                <option>Alabama</option>
                <option>Alaska</option>
                <option>California</option>
                <option>Delaware</option>
                <option>Tennessee</option>
                <option>Texas</option>
                <option>Washington</option>
              </select>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Create Group</button>
        </div>
        <?php
        $createUser=new ControllerUsers();
        $createUser->ctrCreateUser();
        ?>
      </form>
      <script>
        $('.select2').select2();
      </script>
    </div>
  </div>
</div>