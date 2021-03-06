<?php
// STD702 s00009622 Natalia Iudina 08.06.2021
?>

<?php
$records = getHolidayRecords();
?>

    <h5 class="pb-3"><i class="fas fa-circle ui-text p-2 fs-6"></i>Active Holidays</h5>
    <table class="table user-text table-bordered">
      <tr>
        <th style="width: 10px">#</th>
        <th>Date</th>
        <th>Reason</th>
        <th>Action</th>
      </tr>
      <?php
	  $idx = 1;
	  foreach($records as $rec) {
	  	extract($rec);
	  ?>
      <tr>
        <td><?php echo $idx++; ?></td>
        <td><?php echo $hdate; ?></a></td>
        <td><?php echo $hreason; ?></td>
        <td><a href="javascript:deleteHoliday('<?php echo $hid ?>');">Delete<i class="fas fa-trash p-2"></i></a></td>
      </tr>
      <?php } ?>
    </table>

  <!-- /.box-body -->
  <div class="box-footer clearfix">
    <?php
    // echo generateHolidayPagination();
    ?> </div>

<!-- /.box -->
<script language="javascript">
function deleteHoliday(hid) {
	if(confirm('Deleting holiday.\n\nAre you sure you want to proceed ?')) {
		window.location.href = '<?php echo WEB_ROOT; ?>api/process.php?cmd=hdelete&hId='+hid;
	}
}

</script>
