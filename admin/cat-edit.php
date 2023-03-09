<!doctype html>
<html>
<head>
<title>Photo Gallery</title>
<style>
form label {
display: block;
margin-top: 8px;
}

ul.menu {
list-style: none;
margin: 0;
padding: 0;
overflow: hidden;
background: #16A085;
}
ul.menu li {
float: left;
border-right: 1px solid #1ABC9C;
}
ul.menu a {
display: block;
padding: 10px 20px;
text-decoration: none;
color: #fff;
}
ul.menu a:hover {
background: #1ABC9C;
}
</style>
<link rel="stylesheet" href="css/style.css">
</head>

<body>
<h1>Edit Category</h1>
<ul class="menu">
<li><a href="book-list.php">Manage Books</a></li>
<li><a href="cat-list.php">Manage Categories</a></li>
<li><a href="orders.php">Manage Orders</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>

<?php
include("confs/config.php");
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM categories WHERE id = $id");
$row = mysqli_fetch_assoc($result);
?>
<form action="cat-update.php" method="post">

<input type="hidden" name="id" value="<?php echo $row['id'] ?>">

<label for="name">Category Name</label>
<input type="text" name="name" id="name"
value="<?php echo $row['name'] ?>">

<label for="remark">Remark</label>
<textarea name="remark"
id="remark"><?php echo $row['remark'] ?></textarea>

<br><br>
<input type="submit" value="Update Category">
</form>
</body>
</html>