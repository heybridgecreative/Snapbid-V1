<div class="container about">
    <div class="row">
		<div class="col-xs-12 col-sm-3">
<p class="title">Information</p>
				<p><a href="customer-service.php?faqs">Frequently Asked Questions</a></p>
				<p><a href="customer-service.php?help">Hows does SnapBid work?</a></p>
				<p><a href="customer-service.php?recruit">Recruitment</a></p>
				<p><a href="customer-service.php?joining">Joining SnapBid</a></p>
<p>&nbsp;</p>
                <p class="title">Customer Service</p>

                 <p><a href="customer-service.php?terms">Terms &amp; Conditions</a></p>
				<p><a href="customer-service.php?privacy">Privacy Policy</a></p>
<p>&nbsp;</p>

        </div>

        <div class="col-xs-12 col-sm-9">
              <?php if(isset($_GET['terms'])) : ?>
    				<?php include 'inc/customer-service/terms.php'; ?>
			<?php endif; ?>

              <?php if(isset($_GET['faqs'])) : ?>
    				<?php include 'inc/customer-service/faqs.php'; ?>
			<?php endif; ?>

			<?php if(isset($_GET['privacy'])) : ?>
    				<?php include 'inc/customer-service/privacy.php'; ?>
			<?php endif; ?>

			<?php if(isset($_GET['copyright'])) : ?>
    				<?php include 'inc/customer-service/copyright.php'; ?>
			<?php endif; ?>

			<?php if(isset($_GET['help'])) : ?>
    				<?php include 'inc/customer-service/help.php'; ?>
			<?php endif; ?>

			<?php if(isset($_GET['joining'])) : ?>
    				<?php include 'inc/customer-service/join.php'; ?>
			<?php endif; ?>

			<?php if(isset($_GET['press'])) : ?>
    				<?php include 'inc/customer-service/press.php'; ?>
			<?php endif; ?>

			<?php if(isset($_GET['recruit'])) : ?>
    				<?php include 'inc/customer-service/recruit.php'; ?>
			<?php endif; ?>

        </div>
    </div>
</div>