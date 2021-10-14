
<style>
    .error { 
        width: 92%;  
        margin: 0px auto;  
        padding: 5px;  
        border: 1px solid #a94442;  
        color: #a94442;  
        background: #f2dede;  
        border-radius: 5px;  
        text-align: left; 
        font-size: 12px;
    }
</style>

<?php  if (isset($error) && !empty($error)): ?>
         
    <div class="error">
        <?php foreach ($error as $msg) : ?> 
        <p style="margin-bottom: 0px;"><?php echo '-'.$msg ?></p> 
        <?php endforeach ?> 
    </div>

<?php endif ?>

