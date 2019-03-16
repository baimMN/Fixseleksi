<table class="table table-striped table-bordered initable table-hover col-9">
	 		<thead class="tabhead">
	 		<tr>
	 			<th>id</th>
	 			<th>nama category</th>
	 			<th >produk</th>
	 		</tr>
	 		</thead>
	<?php
	include "koneksi.php"; 
	$query=mysqli_query($co,"select name,id from categories");
	$i=1;
	while($t=mysqli_fetch_assoc($query)): 
	 ?>	

			<tr>
				<td><?php echo $i ?></td>
				<td><?php echo $t['name'] ?></td>
				<td>
				<?php 
					$query2= mysqli_query($co,"SELECT products.name FROM products where products.category_id='$t[id]'");
					while ($z=mysqli_fetch_assoc($query2)):
						echo "$z[name]"  
				 ?>,
				 <?php endwhile; ?>		 	
				</td>
			</tr>
		
		<?php $i++ ?>
	<?php endwhile; ?>
	</table>