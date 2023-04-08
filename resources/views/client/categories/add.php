<h1>them danh muc</h1>
<form action="<?php echo route('category.add') ?>" method="post">
    <div>
        <input type="text" name="name" placeholder="ten danh muc">
        <button type="submit">Them</button>
        <input type="hidden" name="_token" value="<?php echo csrf_token()?>">
    </div>
</form>