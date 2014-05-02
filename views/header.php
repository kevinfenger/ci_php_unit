<html>
<head>
<title>CIPHP Unit</title>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
<style type="text/css">
.test-container hr.bottom { border-top:1px dashed #000; border-bottom:none; border-left:none; border-right:none; margin-bottom:25px } 
.test-case-holder { margin:2px 5px 3px 15px ; border-left: 3px solid #eee; padding: 10px}
.test-case-holder-danger { background-color: #f2dede; border-color: #d9534f; }
.test-case-holder-ok { background-color: #dff0d8; border-color: #3C7A23; }
.assert-holder-danger { margin-left: 25px; } 
.lead { 
   margin-bottom: 15px;
   font-size: 16px;
   font-weight: 200;
   line-height: 1.4;
}
.page-header { 
   margin-bottom: 30px;
   color: inherit;
   margin: 0 0 25px 10px;  
}
.impt-danger  { background-color: #f2dede; border-color: #d9534f; margin: 2px 5px 3px 25px; padding: 7px; }
.impt-success { background-color: #dff0d8; border-color: #3C7A23; margin: 2px 5px 3px 25px; padding: 7px; }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class='page-header'> 
    <h1><?php print $home ?> <small><?php print $header_title ?></small></h1>
    <?php if($failed_tests > 0): ?>  
        <h3 class='impt-danger'>failure <?php print " there were $failed_tests failed tests."?></h3>
    <?php else: ?> 
        <h3 class='impt-success'>success</h3>
    <?php endif; ?>

</div> 
<div class="test-container">
<ul> 
