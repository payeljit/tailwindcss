<div class="container">
    <header class="container-header">
        <div><span class="date"><?php the_date();?></span></div>
   <?php the_tags('<span class="tag"> ', '</span>');?>
    </header>
    
</div>
<?php

the_content();
?>
<h2>Comments</h2>
<?php

the_comment();

?>