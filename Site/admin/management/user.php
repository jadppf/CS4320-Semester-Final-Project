<?php
#Start the session
session_start();
if(!isset($_SESSION['username']) or $_SESSION['category'] != 'admin') {
	header('Location: ../../login.php');
}

?>

<?php include('../config/setup.php'); ?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $page['title'].' | '.$site_title; ?></title>
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<?php include('../config/css.php'); ?>
		<?php include('../config/js.php'); ?>
				
	</head>
	<body>
		<?php include('../'.D_TEMPLATE.'/navigation.php'); ?>
		<div class="container">
			<h1>All users:</h1>
			<table class="table able-bordered">
				<tr>
					<th>user_id</th>
					<th>UserName</th>
					<th>PID</th>
					<th>AccountEmail</th>
					<th>Hashword</th>
					<th>isActive</th>
					<th>Category</th>
				</tr>
				
				<?php
					$query = "SELECT * From user_info";
					$result = mysqli_query($dbc, $query);
					while($table_user = mysqli_fetch_assoc($result)) {
						?>
						<tr>
							<td><?php echo $table_user['user_id']; ?></td>
							<td><?php echo $table_user['UserName']; ?></td>
							<td><?php echo $table_user['PID']; ?></td>
							<td><?php echo $table_user['AccountEmail']; ?></td>
							<td><?php echo $table_user['Hashword']; ?></td>
							<td><?php echo $table_user['isActive']; ?></td>
							<td><?php echo $table_user['Category']; ?></td>
						</tr>				
						<?php
					}
				
				
				?>
				
			</table>
			
			<button>Create New User</button>
			<button>Disable User</button>
			<button>Delete User</button>
		</div>
	
		<?php include('../'.D_TEMPLATE.'/footer.php'); ?>

	</body>
</html>