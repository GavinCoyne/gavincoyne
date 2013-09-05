<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?= $title?></title>
        <?php 	foreach($scripts as $script)
        		{
        ?>
       				<script src="<?= 'media/js/'.$script?>" ></script>
        <?php 
        		}
        		foreach($CSSS as $CSS)
        		{
        ?>
       				<link rel="stylesheet" type="text/css" href="<?= 'media/css/'.$CSS?>" ></link>
        <?php 
        		}
        ?>
        <script type="text/javascript">
        
        </script>
    </head>
    <body>
    	
    	<div id="header-top"><?= $header?></div>
    	
    	<div id="publicNav" >
    		<?= $publicNav?>
    	</div>
    	<div id="controlNav" >
    		<?= $controlNav?>
    	</div>
    	<div id="Container" class="">
    		<?= $content?>
        </div>
       
    </body>
</html>