<h2>Add New Product</h2>
<form action="7addnew.php" method="post" enctype="multipart/form-data">
Product name:<input type="text" name="Name" pattern="[a-zA-Z]{,10}"required="required"><br/>
Product price:<input type="text" name="Price" required="required"><br/>
Product decription:<input type="text" name="Description"><br/>
Product photo:<input type="file" name="Photo"required="required"><br/>
<input type="submit"><br/>
</form>