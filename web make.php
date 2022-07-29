<?php require('code data/function.php'); ?>
<?php require('code data/html top.php'); ?>
        <a href="web make.php"><button  id="button_">web make</button></a><br/>
        <a href="연습.php"><button>home</button></a><br/><br/>
       <form method="post" action = "web make_process.php">
        <input type="text" name="title" placeholder="제목을 입력하세요." style="width: 1000px; height: 50px; margin-bottom: 25px;"/><br/>
        <textarea name="contents" placeholder="문서내용을 입력하세요." style="width: 1000px; height: 1000px; margin-bottom: 25px;"></textarea></br>
        <input id="button" type="submit" value="문서 UPLOAD">
        </form>
<?php require('code data/html bottom.php'); ?>