<?php
    $method = $_SERVER['REQUEST_METHOD'];
    if ($method == 'POST')
    {
        $project = $_POST['zayso_project'];  
        update_option('zayso_project', $project);  

    }
    else
    {
        $project = get_option('zayso_project');
    }
?>
<div class="wrap">
    <h2>Zayso Admin Options <?php echo $_SERVER['REQUEST_METHOD']; ?> </h2>
    <form name="zayso_admin_options" method="post" action="">
        <label>Project</label><input type="text" size="30" name="zayso_project" value="<?php echo $project; ?>"/>
        <input type="submit" name="update" value="Update"/>
    </form>
</div>

