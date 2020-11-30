<?php
require_once 'conn.php';
$stmt_select=$conn->prepare('SELECT * FROM np');
$executed=$stmt_select->execute(); 
$row_select=$stmt_select->fetchAll(PDO::FETCH_ASSOC);


$stmt_selectB=$conn->prepare('SELECT * FROM npB');
$executedB=$stmt_selectB->execute(); 
$row_selectB=$stmt_selectB->fetchAll(PDO::FETCH_ASSOC);


$stmt_selecte=$conn->prepare('SELECT * FROM npe');
$executede=$stmt_selecte->execute(); 
$row_selecte=$stmt_selecte->fetchAll(PDO::FETCH_ASSOC);

$stmt_selectt=$conn->prepare('SELECT * FROM npt');
$executedt=$stmt_selectt->execute(); 
$row_selectt=$stmt_selectt->fetchAll(PDO::FETCH_ASSOC);

?>

<!--This table for editing the headings in headers  -->
<h1>LATEST NEWS</h1>
<table style="background-color: pink" cellpadding="5px" cellspacing="5px" width="100%" align="center" border="2px">
	<thead>
		<tr >
			<th>Sr. No.</th>
			<th>Heading</th>
			<th>Subheading</th>
			<th>Content</th>
		
		</tr>
	</thead>
	<tbody>
		<?php
		for($i=0;$i<count($row_select);$i++)
		{
		?>
<tr>
			<td><?php echo $i+1;?></td>
			<td><?php echo $row_select[$i]['head'];?></td>
			<td><?php echo $row_select[$i]['subhead'];?></td>
			<td><?php echo $row_select[$i]['content'];?></td>

			<td>
		<a href="edit.php?id=<?php echo $row_select[$i]['id'];?>"><button type="button">Edit</button></a>
				<!--Query String -->
				
			</td>
		</tr>
		<?php
		}
		?>
	</tbody>
</table>
<br><br>


<h1>Buisness NEWS</h1>

<table style="background-color: pink" cellpadding="5px" cellspacing="5px" width="100%" align="center" border="2px">
	<thead>
		<tr >
			<th>Sr. No.</th>
			<th>Heading</th>
			<th>Subheading</th>
			<th>Content</th>
		
		</tr>
	</thead>
	<tbody>
		<?php
		for($i=0;$i<count($row_selectB);$i++)
		{
		?>
<tr>
			<td><?php echo $i+1;?></td>
			<td><?php echo $row_selectB[$i]['head'];?></td>
			<td><?php echo $row_selectB[$i]['subhead'];?></td>
			<td><?php echo $row_selectB[$i]['content'];?></td>

			<td>
		<a href="editB.php?id=<?php echo $row_selectB[$i]['id'];?>"><button type="button">Edit</button></a>
				<!--Query String -->
				
			</td>
		</tr>
		<?php
		}
		?>
	</tbody>
</table>
<br><br>

<h1>Entertainment NEWS</h1>


<table style="background-color: pink" cellpadding="5px" cellspacing="5px" width="100%" align="center" border="2px">
	<thead>
		<tr >
			<th>Sr. No.</th>
			<th>Heading</th>
			<th>Subheading</th>
			<th>Content</th>
		
		</tr>
	</thead>
	<tbody>
		<?php
		for($i=0;$i<count($row_selecte);$i++)
		{
		?>
<tr>
			<td><?php echo $i+1;?></td>
			<td><?php echo $row_selecte[$i]['head'];?></td>
			<td><?php echo $row_selecte[$i]['subhead'];?></td>
			<td><?php echo $row_selecte[$i]['content'];?></td>

			<td>
		<a href="edite.php?id=<?php echo $row_selecte[$i]['id'];?>"><button type="button">Edit</button></a>
				<!--Query String -->
				
			</td>
		</tr>
		<?php
		}
		?>
	</tbody>
</table>
<br><br>
<h1>Technology NEWS</h1>


<table style="background-color: pink" cellpadding="5px" cellspacing="5px" width="100%" align="center" border="2px">
	<thead>
		<tr >
			<th>Sr. No.</th>
			<th>Heading</th>
			<th>Subheading</th>
			<th>Content</th>
		
		</tr>
	</thead>
	<tbody>
		<?php
		for($i=0;$i<count($row_selectt);$i++)
		{
		?>
<tr>
			<td><?php echo $i+1;?></td>
			<td><?php echo $row_selectt[$i]['head'];?></td>
			<td><?php echo $row_selectt[$i]['subhead'];?></td>
			<td><?php echo $row_selectt[$i]['content'];?></td>

			<td>
		<a href="editt.php?id=<?php echo $row_selectt[$i]['id'];?>"><button type="button">Edit</button></a>
				<!--Query String -->
				
			</td>
		</tr>
		<?php
		}
		?>
	</tbody>
</table>
