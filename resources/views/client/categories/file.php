<h1>Upload file</h1>
<form action="<?php echo route('category_upload') ?>" method="post" enctype="multipart/form-data">
    <div>
        <input type="file" name="photos" id="">
        <button type="submit">Them</button>
        <input type="hidden" name="_token" value="<?php echo csrf_token()?>">
    </div>
</form>