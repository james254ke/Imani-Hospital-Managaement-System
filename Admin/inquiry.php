

<?php 	include 'includes/header.php' ?>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 bg-warning"style="height: 100px;">
            <h2 class="text-center text-uppercase " style="padding:25px;color: white;">Inquiries</h2>
        </div>
    </div>
</div>

<div class="container">
	<table class=" table table-striped">
		<thead>
			<tr>
				<th scope="col">id</th>
				<th scope="col">Name</th>
				<th scope="col">Phone</th>
				<th scope="col">Email</th>
				<th scope="col">Messages</th>
				<th scope="col">Creation Date</th>
				<th scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
<?php 	

//db connectionf for looping items in the table
$no=1;

$contactdbz=mysqli_connect("localhost","root","","hmsbd");
$contactloop=mysqli_query($contactdbz,"SELECT *FROM contacts");

while ($looprow=mysqli_fetch_array($contactloop)) {
 ?>



		<tr>
			<th scope="row"><?= $no ?></th>
			<td><?php echo $looprow['Name'] ?></td>
			<td> <?php 	echo $looprow['Phone'] ?></td>
			<td> <?php echo $looprow['Email'] ?></td>
			<td> <?php echo $looprow['Message'] ?></td>
			<td> <?php echo $looprow['Creation_date'] ?></td>
			<td>
				     <a href="deleteinquiry.php?we_deletecontact=<?php echo $looprow['id'] ?>"onClick="return confirm('Are you sure you want to delete?')"class="btn btn-transparent btn-xs tooltips" tooltip-placement="top" tooltip="Remove"><i class="fa fa-times fa fa-white"></i></a>
				

			</td>



		</tr>
		<?php $no++; }?>
		</tbody>
	</table>
	


</div>







<?php 	include 'includes/footer.php' ?>