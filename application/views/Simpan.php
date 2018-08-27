<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
    </div>
    <!--End-breadcrumbs-->
    <!--Action boxes-->
    <div class="container-fluid">
        <div class="jumbotron text-xs-center">
            <?php echo $output;?>
            <p class="lead">
                <?php echo $button?>

            </p>
<?php $this->load->view('template/Footer');?>