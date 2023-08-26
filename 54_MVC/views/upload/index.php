<h1>Uploads</h1>
<form action="<?= get_defined_constants()['BASE_PATH'] ?>/upload" method="post" enctype="multipart/form-data">
    <label for="receipt">Upload your receipt</label>
    <input type="file" name="receipt" id="receipt" />
    <button type="submit">Upload</button>
</form>