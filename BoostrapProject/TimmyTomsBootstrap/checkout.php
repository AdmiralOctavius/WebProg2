<!DOCTYPE html>
<html lang="en">
  <title>Checkout</title>
  <? require_once("newPhp/headFile.php"); ?>
	<link rel="stylesheet" href="css/checkout.css">
  <link rel="stylesheet" href="css/cart.css">
<body data-spy="scroll" data-target="#template-navbar">

  <? require_once("newPhp/navBar.php");?>
  <div id="padder">
  </div>



  <div class="container">
  	<div class="row">
  		<div class="col-xs-12 col-sm-10 col-md-10">
  			<div class="panel panel-info">
  				<div class="panel-heading">
  					<div class="panel-title">
  						<div class="row">
  							<div class="col-xs-6 col-md-4">

  								<h5></span> Shopping Cart</h5>
  							</div>
  							<div class="col-xs-6 col-md-8">
  								<button type="button" class="btn btn-primary btn-sm btn-block" id="continueShop">
  									</span> Continue shopping
  								</button>
  							</div>
  						</div>
  					</div>
  				</div>
  				<div class="panel-body">
  					<div class="row">
  						<div class="col-xs-2"><img class="img-responsive" src="http://placehold.it/100x70">
  						</div>
  						<div class="col-xs-4">
  							<h4 class="product-name"><strong>This is an example product</strong></h4><h4><small>Addons: Lettuce, Cheese, Money dressing</small></h4>
  						</div>
  						<div class="col-xs-6">
  							<div class="col-xs-6 text-right">
  								<h6><strong>25.00 <span class="text-muted">x</span></strong></h6>
  							</div>
  							<div class="col-xs-4">
  								<input type="text" class="form-control input-sm" value="2">
  							</div>
  							<div class="col-xs-2">
  								<button type="button" class="btn btn-link btn-xs">
                    <image src="fonts/glyphicons/png/glyphicons-17-bin.png" alt="remove item">
  									 </span>
  								</button>
  							</div>
  						</div>
  					</div>
  					<hr>
  					<div class="row">
  						<div class="col-xs-2"><img class="img-responsive" src="http://placehold.it/100x70">
  						</div>
  						<div class="col-xs-4">
  							<h4 class="product-name"><strong>Sandwich #5</strong></h4><h4><small>Addons: Extra Fire</small></h4>
  						</div>
  						<div class="col-xs-6">
  							<div class="col-xs-6 text-right">
  								<h6><strong>15.00 <span class="text-muted">x</span></strong></h6>
  							</div>
  							<div class="col-xs-4">
  								<input type="text" class="form-control input-sm" value="1">
  							</div>
  							<div class="col-xs-2">
  								<button type="button" class="btn btn-link btn-xs">
                    <image src="fonts/glyphicons/png/glyphicons-17-bin.png" alt="remove item">
  									 </span>
  								</button>
  							</div>
  						</div>
  					</div>
            <hr>
  					<div class="row">
  						<div class="col-xs-2"><img class="img-responsive" src="http://placehold.it/100x70">
  						</div>
  						<div class="col-xs-4">
  							<h4 class="product-name"><strong>Timmy #7</strong></h4><h4><small>Addons: Extra Tommy</small></h4>
  						</div>
  						<div class="col-xs-6">
  							<div class="col-xs-6 text-right">
  								<h6><strong>10.00 <span class="text-muted">x</span></strong></h6>
  							</div>
  							<div class="col-xs-4">
  								<input type="text" class="form-control input-sm" value="5">
  							</div>
  							<div class="col-xs-2">
  								<button type="button" class="btn btn-link btn-xs">
                    <image src="fonts/glyphicons/png/glyphicons-17-bin.png" alt="remove item">
  									 </span>
  								</button>
  							</div>
  						</div>
  					</div>
            <hr>
  					<div class="row">
  						<div class="col-xs-2"><img class="img-responsive" src="http://placehold.it/100x70">
  						</div>
  						<div class="col-xs-4">
  							<h4 class="product-name"><strong>Tom's Ten</strong></h4><h4><small>Addons: None</small></h4>
  						</div>
  						<div class="col-xs-6">
  							<div class="col-xs-6 text-right">
  								<h6><strong>25.00 <span class="text-muted">x</span></strong></h6>
  							</div>
  							<div class="col-xs-4">
  								<input type="text" class="form-control input-sm" value="3">
  							</div>
  							<div class="col-xs-2">
  								<button type="button" class="btn btn-link btn-xs">
                    <image src="fonts/glyphicons/png/glyphicons-17-bin.png" alt="remove item">
  									 </span>
  								</button>
  							</div>
  						</div>
  					</div>
            <hr>
  					<div class="row">
  						<div class="col-xs-2"><img class="img-responsive" src="http://placehold.it/100x70">
  						</div>
  						<div class="col-xs-4">
  							<h4 class="product-name"><strong>Temmie's Tamped Sandwich</strong></h4><h4><small>Addons: Temmie Dressing</small></h4>
  						</div>
  						<div class="col-xs-6">
  							<div class="col-xs-6 text-right">
  								<h6><strong>20.00 <span class="text-muted">x</span></strong></h6>
  							</div>
  							<div class="col-xs-4">
  								<input type="text" class="form-control input-sm" value="2">
  							</div>
  							<div class="col-xs-2">
  								<button type="button" class="btn btn-link btn-xs">
                    <image src="fonts/glyphicons/png/glyphicons-17-bin.png" alt="remove item">
  									 </span>
  								</button>
  							</div>
  						</div>
  					</div>
            <hr>
  					<div class="row">
  						<div class="col-xs-2"><img class="img-responsive" src="http://placehold.it/100x70">
  						</div>
  						<div class="col-xs-4">
  							<h4 class="product-name"><strong>Boneless #6</strong></h4><h4><small>Addons: Boneless Pizza Bread</small></h4>
  						</div>
  						<div class="col-xs-6">
  							<div class="col-xs-6 text-right">
  								<h6><strong>50.00 <span class="text-muted">x</span></strong></h6>
  							</div>
  							<div class="col-xs-4">
  								<input type="text" class="form-control input-sm" value="5">
  							</div>
  							<div class="col-xs-2">
  								<button type="button" class="btn btn-link btn-xs">
                    <image src="fonts/glyphicons/png/glyphicons-17-bin.png" alt="remove item">
  									 </span>
  								</button>
  							</div>
  						</div>
  					</div>
            <hr>
  					<div class="row">
  						<div class="col-xs-2"><img class="img-responsive" src="http://placehold.it/100x70">
  						</div>
  						<div class="col-xs-4">
  							<h4 class="product-name"><strong>Sans' Salty Chips #2</strong></h4><h4><small>Addons: None</small></h4>
  						</div>
  						<div class="col-xs-6">
  							<div class="col-xs-6 text-right">
  								<h6><strong>2.00 <span class="text-muted">x</span></strong></h6>
  							</div>
  							<div class="col-xs-4">
  								<input type="text" class="form-control input-sm" value="2">
  							</div>
  							<div class="col-xs-2">
  								<button type="button" class="btn btn-link btn-xs">
                    <image src="fonts/glyphicons/png/glyphicons-17-bin.png" alt="remove item">
  									 </span>
  								</button>
  							</div>
  						</div>
  					</div>
  					<hr>
  					<div class="row">
  						<div class="text-center">
  							<div class="col-xs-4 col-sm-7 col-md-5">
  								<h6 class="text-right">Added items?</h6>
  							</div>
  							<div class="col-xs-3 col-sm-7 col-md-5">
  								<button type="button" class="btn btn-default btn-sm btn-block" id="updateBtn">
  									Update cart
  								</button>
  							</div>
  						</div>
  					</div>
  				</div>
  				<div class="panel-footer">
  					<div class="row text-center">
  						<div class="col-xs-9">
  							<h4 class="text-right">Total <strong>$50.00</strong></h4>
  						</div>
  						<div class="col-xs-6">
  							<button type="button" class="btn btn-success btn-block" >
  								Checkout
  							</button>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  </div>


  <? require_once("newPhp/footer.php"); ?>
  <script src="newJs/employeeOrderCheck.js"></script>
</body>
</html>
