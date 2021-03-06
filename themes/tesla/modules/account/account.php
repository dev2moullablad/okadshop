

<!-- Main content start here -->
	<ol class="breadcrumb">
	  <li><a href="#" title="Accueil"><?=l("Accueil", "tesla");?></a></li>
	  <li class="active"><?=l("Mon compte", "tesla");?></li>
	</ol>

	<h1><?=l("Mon compte", "tesla");?></h1>

	 <div class="my-account">
    <p class="bold"><?=l("Bienvenue sur votre page d'accueil. Vous pouvez gérer vos informations personnelles, vos commandes ainsi que vos adresses.", "tesla");?></p>
    <ul class="myaccount_lnk_list">
      <!-- <li>
        <a href="<?= WebSite;?>account/quotation" title="Historique de votre devis"><?=l("Historique de votre devis", "tesla");?></a>
      </li> -->
      <li>
        <a href="<?= WebSite;?>account/history" title="Historique et détails de mes commandes"><?=l("Historique et détails de mes commandes", "tesla");?></a>
      </li>
      <li>
        <a href="<?= WebSite;?>account/invoices" title="Historique et détails de mes factures"><?=l("Historique et détails de mes factures", "tesla");?></a>
      </li>
     <!--  <li>
        <a href="<?= WebSite;?>account/order-follow" title="Mes retours produit">Mes retours produit</a>
      </li> -->
     <!--  <li>
        <a href="<?= WebSite;?>account/order-slip" title="Mes avoirs">Mes avoirs</a>
      </li> -->
      <li>
        <a href="<?= WebSite;?>account/addresses" title="Mes adresses"><?=l("Mes adresses", "tesla");?></a>
      </li>
      <li>
        <a href="<?= WebSite;?>account/identity" title="Mes informations personnelles"><?=l("Mes informations personnelles", "tesla");?></a>
      </li>
      <li>
        <a href="<?= WebSite;?>account/discount" title="Mes bons de réductions"><?=l("Mes bons de réductions", "tesla");?></a>
      </li>
      <li>
        <a href="<?= WebSite;?>account/loyalty-program" title="Mes points de fidélité"><?=l("Mes points de fidélité", "tesla");?></a>
      </li>
      <!-- <li>
        <a href="<?= WebSite;?>account/referralprogram-program" title="Parrainage">Parrainage</a>
      </li> 
      <li>
        <a href="<?= WebSite;?>account/myalerts" title="Mes alertes">Mes alertes</a>
      </li>-->
      <li class="logout">
        <a href="<?= WebSite;?>account/logout" title="Déconnexion"><?=l("Déconnexion", "tesla");?></a>
      </li>
    </ul>
  </div>
  <ul class="footer_links"><li><a href="<?= WebSite;?>" title="Accueil"><?=l("Accueil", "tesla");?></a></li></ul>