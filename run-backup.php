<?PHP
`./backup.sh`;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Backup</title>
<style>
.alert {
  padding: 20px;
  background-color: #1aff1a;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
</head>
<body>

<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Success!</strong> Backup Done.
</div>

</body>
</html>
