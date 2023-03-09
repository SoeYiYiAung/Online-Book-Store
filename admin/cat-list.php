<?php include("confs/auth.php") ?>
<!doctype html>
<html>
<head>
<title>Photo Gallery</title>
<style>
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
<h1>Category List</h1>
<ul class="menu">
<li><a href="book-list.php">Manage Books</a></li>
<li><a href="cat-list.php">Manage Categories</a></li>
<li><a href="orders.php">Manage Orders</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>

<?php
include("confs/config.php");
$result = mysqli_query($conn, "SELECT * FROM categories");
?>
<ul>
<?php 
while($row = mysqli_fetch_assoc($result)): 
?>
<li title="<?php echo $row['remark'] ?>">
 [<a href="cat-del.php?id=<?php echo $row['id'] ?>" class="del">del</a> ]
 [<a href="cat-edit.php?id=<?php echo $row['id'] ?>">edit</a> ]
<?php echo $row['name'] ?>
</li>
<?php endwhile; ?>
</ul>
<a href="cat-new.php" class="new">New Category</a>
</body>
</html>