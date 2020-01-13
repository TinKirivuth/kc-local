<div class="container-fluid" id="top-bar" style="">
	<div class="top-menu" style="">
		<ul>
			<li class="logo">
				<a title="About Me"><img src="images/logo1.png" style=""></a>
			</li>
			<li class="btn-menu">
				<a title="Menu"><img src="images/menu-btn.png" style=""></a>
			</li>
		</ul>
		<div class="welcome-user" style="">
			<div style="" class="welcome-user-bar">
				<i class="fas fas fa-caret-down" style=""></i>
			</div>
			<div class="welcome-text" style="">
				<p style=""><?php echo $userName; ?>&nbsp;&nbsp;</p>
				<div class="welcome-image" style=""></div>
			</div>
		    <div class="logout" style="">
			      <ul>
			        	<li style=""><a href="login.php">Log Out</a></li>
			        	<li style=""><a href="#">Profile</a></li>
			        	<?php if ($userRole==1){?>
			        	<li><a href="#">History</a></li>
			        	<li class="multipleUpload"><a href="#">Multiple Upload</a></li>
			        	<?php } ?>	
			        	
			      </ul>
		    </div>
		</div>
	</div>
</div>
