<div class="left_menu"> 
		<ul>
			<li><input type="button" value="Dashboard" onclick="showdash()"/></li>
			<li><input type="button" name="product" value="Products" onclick="showtpro()"/>
				<ul>
					<li><a href="addProduct.php">Add Product</a></li>
					<li><a href="deleteProduct.php">Delete Product</a></li>
					<li><a href="updateProduct.php">Update Proudct</a></li>
				</ul>
			</li>
			<li><input type="button" value="Category"/>
				<ul>
					<li><a href="addCategory.php">Add Category</a></li>
					<li><a href="#">Delete Category</a></li>
					<li><a href="#">Update Category</a></li>
				</ul>
			</li>
			<li><input type="button" value="Orders"/>
				<ul>
					<li><a href="adminPendingOrder.php">Pending Orders</a></li>
					<li><a href="adminDeliveredOrder.php">Delivered Orders</a></li>
				</ul>
			</li>
			<li><input type="button" value="Users"/></li>
			<li><a href="logout.php"><input type="button" value="Logout"/></a></li>
		</ul>
	</div>