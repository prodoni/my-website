<?php require('code data/function.php'); ?>
<?php require('code data/html top.php'); ?>
        <a href="web make.php"><button>web make</button></a><br/>
        <a href="연습.php"><button>home</button></a><br/>
        <?php if(isset($_GET['id'])){ ?>
            <a href="web update.php?id=<?php echo $_GET['id']; ?>"><button id="button_">web update</button></a><br/><br/>
            <?php } ?>
       <form method="post" action = "web update_process.php">
        <input type="hidden" name="old_title" value="<?php echo $_GET['id']; ?>" />
        <input type="text" name="title" placeholder="write title." value="<?php title() ?>" style="width: 1000px; height: 50px; margin-bottom: 25px;"/><br/>
        <textarea name="contents" placeholder="write contents." style="width: 1000px; height: 1000px; margin-bottom: 25px;"><?php contents();?></textarea><br/>
        <input id="button" type="submit" value="문서 UPLOAD">
        </form>
<?php require('code data/html bottom.php'); ?>