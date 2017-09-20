<?php
require_once(dirname(__FILE__) . '/../../config.php');
defined('MOODLE_INTERNAL') || die;
echo $OUTPUT->header();

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>fetching data</title>
  </head>
  <body>
<?php
$context = context_system::instance();
if(has_capability('local/email:viewpage', $context)){
  echo "yes has capability";
}
else{
  echo "no do not have capability";
}
//require_capability('local/email:viewpage', $context);
 ?>
    <div class="row pull-right">
   <button><a href="http://localhost/moodle/local/email/index.php"><b>add user</b></a></button>
 </div>

 <?php require_capability('local/email:viewpage', $context); ?>
<center>    <table border="2" style="width:50%">
  <tr><h1>USER DETAILS</h1></tr>
  <tr>
    <th>id</th>
    <th>name</th>
    <th>email</th>
    <th>password</th>
    <th>mobile</th>
    <th>address</th>
    <th>action</th>
  </tr>
  <?php
    $result = $DB->get_records_sql('SELECT * FROM {registration}');
    //print_r($result);

		foreach($result as $record){
	?>
	<tr>
		<td><?php   echo $record->id; ?></td>
    <td><?php   echo $record->name; ?></td>
		<td><?php echo $record->email; ?></td>
    <td><?php echo $record->password; ?></td>
      <td><?php echo $record->mobile; ?></td>
    <td><?php echo $record->address; ?></td>
    <td><a href="delete.php?modp=delete&id=<?php echo $record->id;?>">delete</a></td>
	</tr>
	<?php
		}
	?><!--end of foreach-->

</table></center>
  </body>
  <?php echo $OUTPUT->footer(); ?>
</html>
