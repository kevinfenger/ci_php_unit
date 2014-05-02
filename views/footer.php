</div>
<?php if ( isset($total_tests) && isset($failed_tests) && isset($successful_tests)): ?>
    <?php if($failed_tests > 0): ?>  
        <h3 class='impt-danger'>
    <?php else: ?> 
        <h3 class='impt-success'>
    <?php print('CIPHPUnit ran ' . $total_tests . ' total tests ' . $failed_tests . ' of them failed ' . $successful_tests . ' of them succeeded');?> </h3>
    <?php endif; ?>
<?php endif; ?>
<br />
<br />
<br />
<br />
</body>
</html> 
