<?php  
    foreach ($alertas as $key => $alerta) {
        foreach($alerta as $message) {
?>
    <div class="alerta alerta__<?php echo $key; ?>"><?php echo $message; ?></div>
<?php 
        }
    }
?>