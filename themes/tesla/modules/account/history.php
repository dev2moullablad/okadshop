	<?php  
		goConnected();
		$user_orders = getOrderList($_SESSION['user']);
	?>
	<!-- Main content start here -->
	<ol class="breadcrumb">
	  <li><a href="#" title="Accueil"><?= l("Accueil", "artiza");?></a></li>
	  <li><a href="#" title="acount"><?= l("Mon compte", "artiza");?></a></li>
	  <li class="active"><?= l("Historique de vos commandes", "artiza");?></li>
	</ol>



	 <div class="block-center" id="block-history">
		<h1><?= l("Historique de vos commandes", "artiza");?></h1>

	<?php  if ($user_orders): ?>
		<table>
			<thead>
				<tr>
					<th><?= l("Commande", "artiza");?></th>
					<th><?= l("Date", "artiza");?></th>
					<th><?= l("Prix total", "artiza");?></th>
					<th><?= l("Paiement", "artiza");?></th>
					<th><?= l("État", "artiza");?></th>
					<th><?= l("Télécharger", "artiza");?></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($user_orders as $key => $order): ?>
					<tr>
						<td><strong>N° <?= $order['id'] ?></strong></td>
						<td><strong><?= $order['cdate'] ?></strong></td>
						<?php 
							global $hooks; 
							$order_detail = $hooks->get_order($order['id'],$_SESSION['user']); 
						?>
						<td><?= $order_detail['total']['ttc'].' '.$order_detail['order']['currency_sign'] ?></td>
						<td><?= $order["payment_method"] ?></td>
						<td><strong><?= $order['current_state'] ?></strong></td>
						<td><strong><a download="download" href="<?= WebSite.'pdf/order.php?id_order='.$order['id']; ?>"><i class="fa fa-download" aria-hidden="true"></i></a></strong></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	<?php else: ?>	
		<p class="warning"><?= l("Vous n'avez pas encore passé de commande.", "artiza");?></p>
	<?php endif ?>	
	</div>

	<div class="order-detail" id="order-detail">
		<div class="panel panel-default">
		  <div class="">
		    <h3 class="order-detail-title"></h3>
		    <p>
		    	<strong><?= l("Méthode de paiement :", "artiza");?></strong> <span class="payment-methode"></span>
		    </p>
		    <h4><?= l("Suivre votre commande pas à pas :", "artiza");?></h4>
		    <table>
					<thead>
						<tr>
							<th><?= l("Date", "artiza");?></th>
							<th><?= l("État", "artiza");?></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><strong class="order-date"></strong></td>
							<td class="order-status"></td>
						</tr>
					</tbody>
				</table>
			 <div class="row">
	    	<div class="col-sm-6">
	    		<ul class="address item" id="address_fact">
		        <li class="address_title"><?= l("Facturation", "artiza");?></li>
		        <li class="address_firstname lastname"></li>
		        <li class="address_address1"></li>
		        <li class="address_postcode"></li>
		        <li class="address_Country"></li>
		        <li class="address_phone"></li>
		        <li class="address_mobile"></li>
	      </ul>
	    	</div>
	    	<div class="col-sm-6">
	    		<ul class="address item" id="address_liv">
		        <li class="address_title"><?= l("Livraison", "artiza");?></li>
		        <li class="address_firstname lastname"></li>
		        <li class="address_address1"></li>
		        <li class="address_postcode"></li>
		        <li class="address_Country:"></li>
		        <li class="address_phone"></li>
		        <li class="address_mobile"></li>
	      </ul>
	    	</div>
	    </div>
	    <table id="product-order-list">
					<thead>
						<tr>
							<th><?= l("Produit", "artiza");?></th>
							<th><?= l("Qté", "artiza");?></th>
							<th><?= l("Prix unitaire", "artiza");?></th>
							<th><?= l("Prix total", "artiza");?></th>
						</tr>
					</thead>
					<tbody>
						
					</tbody>
					<tfoot>
						<tr class="totalprice item">
							<td colspan="4"> <?= l("Total TTC :", "artiza");?> <span class="price"></span></td>
						</tr>
					</tfoot>
				</table>
		  </div>
		</div>
	</div>



	<ul class="footer_links">
		<li><a href="<?= WebSite;?>account/" title="Retour à votre compte"><?= l("Retour à votre compte", "artiza");?></a></li>
		<li><a href="<?= WebSite;?>" title="Accueil"><?= l("Accueil", "artiza");?></a></li>
	</ul>