
<style>
    .success { 
        color: #3c763d;  
        background: #dff0d8;  
        border: 1px solid #3c763d; 
        margin-bottom: 20px;
        font-size: 13px;
    } 
</style>

<?php  if (isset($success) && !empty($success)): ?>
    <div class="success">
            <p><?php echo "-".$success ?></p> 
    </div>
<?php endif ?>

