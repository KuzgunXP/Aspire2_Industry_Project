<?php
// STD702 s00009622 Natalia Iudina 08.06.2021
?>


<!-- Horizontal Form -->
<div class="box box-info">
  <div class="box-header with-border">
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <!-- <form class="form-horizontal" method="post"> -->
<div class="wrapper">
  <form class="form-horizontal" action="<?php echo WEB_ROOT; ?>api/process.php?cmd=holiday" method="post">
    <div class="box-body">
      <div class="form-group">
        <label for="" class="">Holiday Date</label>
        <div class="col-sm-8">
		<span id="sprytf_date">
          <input type="text" class="form-control input-sm" name="date" placeholder="yyyy-mm-dd">
		  <!-- <span class="textfieldRequiredMsg">Date is required.</span> -->
		</span>
        </div>
      </div>

      <div class="form-group">
        <label for="inputPassword3" class="col-sm-4 control-label">Holiday Reason</label>
        <div class="col-sm-8">
		<span id="sprytf_reason">
          <input type="text" class="form-control input-sm" name="reason" placeholder="Holiday reason" req>
		  <span class="textfieldRequiredMsg">Reason is required.</span>
		  <!-- <span class="textfieldMinCharsMsg">Reason must specify at least 8 characters.</span> -->
		</span>
        </div>
      </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      <button type="submit" class="btn btn-dark mt-2">Add Holiday</button>
    </div>
    <!-- /.box-footer -->
  </form>
</div>
</div>
<!-- /.box -->
<script>

</script>
