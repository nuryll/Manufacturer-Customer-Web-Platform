<?php 
//session_start();

?>

<div class="top-bar animate-dropdown">
	<div class="container">
		<div class="header-top-inner">
			<div class="cnt-account">
				<ul class="list-unstyled">

<?php if(strlen($_SESSION['login']))
    {   ?>
				<li><a href="#"><i class="icon fa fa-user"></i>My Info: <?php echo htmlentities($_SESSION['username']);?></a></li>
					<li><a href="#"><i class="icon fa fa-user"></i>My Credit: </a></li>

					<?php 
$sql="SELECT usersCredit FROM cusers where id='".$_SESSION['id']."'";
$sorgu=mysqli_query($con,$sql);
while( $sonuc=mysqli_fetch_assoc($sorgu) ){
    echo $sonuc["usersCredit"];     // ogrID kolonu
  

}
?>
				<?php } ?>

					<li><a href="my-account.php"><i class="icon fa fa-user"></i>My Account</a></li>
					<li><a href="category.php"><i class=""></i>Product</a></li>
					
					<?php if(strlen($_SESSION['login'])==0)
    {   ?>
<li><a href="login.php"><i class="icon fa fa-sign-in"></i>Login</a></li>
<?php }
else{ ?>
	
				<li><a href="logout.php"><i class="icon fa fa-sign-out"></i>Logout</a></li>
				<?php } ?>	
				</ul>
			</div><!-- /.cnt-account -->


			
			<div class="clearfix"></div>
		</div><!-- /.header-top-inner -->
	</div><!-- /.container -->
</div><!-- /.header-top -->