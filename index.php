<!DOCTYPE html>
 <html>
 <body>
 <div name="top" align="center">
 	<img src="images/top.jpg" width="1500" height="150"/>
 </div>
 <div name="middle" align="center">
 <table>
	  	<?php
		$server="us-cdbr-iron-east-03.cleardb.net";
		$user="b09646d04a4850";
		$pass="18a68973";
		$db="ad_091359118c42411";
		$conn=new mysqli($server, $user, $pass, $db);
		if($conn->connect_error){
			die("Connection Failed: ".$conn->connect_error);
		}
		$sql="select * from servicios";
		$result=$conn->query($sql);
		if($result->num_rows > 0){
			?>
			<tr>
				<th>Codigo</th>
				<th>Nombre</th>
				<th>Descripcion</th>
				<th>Imagen</th>
			</tr>
			<?php
			while($row=$result->fetch_assoc()){
				?>
				<tr>
					<td><?php echo $row['idAlumno']?></td>
					<td><?php echo $row['nombre']?></td>
					<td><?php echo $row['edad']?></td>
					<td><img src="<?php echo $row['imagen_servicio']?>"/></td>
				</tr>
				<?php
			}
		}
		else{
			echo "0 result";
		}
		$conn->close();
		?>
	  </table>
	 </div>
 <div name="bottom" align="center">
 	<img src="images/top.jpg" width="1500" height="150"/>
 </div>
  
 </body>
 </html>
