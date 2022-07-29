<?php require('code data/function.php'); ?>
<?php require('code data/html top.php'); ?>
        <a href="연습.php"><button <?php if(isset($_GET['id'])){}else{?>id="button_"<?php };?>>web home</button></a><br/>
        <a href="web make.php"><button>web make</button></a><br/>
        <?php if(isset($_GET['id'])){ ?>
            <a href="web update.php?id=<?php echo $_GET['id']; ?>" class="buttons"><button>web update</button></a>
            <form method="post" action="web delete_process.php">
                <input type="hidden" name="id" value="<?=$_GET['id'];?>" />
                <button>web delete</button><br/><br/>
            <?php } ?>
       <?php contents();?>
    <?php require('code data/html bottom.php'); ?>