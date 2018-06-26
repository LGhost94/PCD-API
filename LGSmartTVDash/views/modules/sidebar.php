<aside class="main-sidebar">
	<section class="sidebar">
		<ul class="sidebar-menu">
			<li <?php if($_GET["page"]=="rooms") echo 'class="active"'; ?>>
				<a href="rooms">
					<i class="fa fa-bookmark-o"></i>
					<span>Rooms</span>
				</a>
			</li>
			<li <?php if($_GET["page"]=="groups") echo 'class="active"'; ?>>
				<a href="groups">
					<i class="fa fa-users"></i>
					<span>Groups</span>
				</a>
			</li>
			<li class="treeview">
				<a href="#">
					<i class="fa fa-users"></i>
					<span>User</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li <?php if($_GET["page"]=="bookings") echo 'class="active"'; ?>>
						<a href="bookings">
							<i class="fa fa-circle-o-notch"></i>
							<span>Bookings</span>
						</a>
					</li>
					<li <?php if($_GET["page"]=="notice") echo 'class="active"'; ?>>
						<a href="notice">
							<i class="fa fa-circle-o-notch"></i>
							<span>Notice</span>
						</a>
					</li>
					<li <?php if($_GET["page"]=="ticker") echo 'class="active"'; ?>>
						<a href="ticker">
							<i class="fa fa-circle-o-notch"></i>
							<span>Ticker</span>
						</a>
					</li>
				</ul>
			</li>
		</ul>
	</section>
</aside>