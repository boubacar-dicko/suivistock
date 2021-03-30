<?php
          session_start();
          include_once 'header.php';
          require_once 'src/entities/produit.php';
          require_once 'src/model/produitDb.php';
          require_once 'src/controller/ajout.php';
          require_once 'src/controller/supprimer.php';
          //require_once 'src/model/bd.php';
        
        ?>
            
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Page d'Ajout de Produit</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <!---div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Primary Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Warning Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Success Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Danger Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div-->
                        <form action="" method="post">
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card mb-2">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area mr-1"></i>
                                        Libelle du Produit
                                    </div>
                                    <div class="card-body"><input type="text" name="libelle"></div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card mb-2">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar mr-1"></i>
                                        Nom du Produit
                                    </div>
                                    <div class="card-body"><input type="text" name="nom"></div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card mb-2">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar mr-1"></i>
                                        Quantite en Stock
                                    </div>
                                    <div class="card-body"><input placeholder="Quantite" type="number" name="qt"></div>
                                </div>
                            </div>
                        </div>
                        <div  class="row offset-5  text-white"><button class="btn btn-lg bg-primary font-weight-bold btn-md t" name="btnSAveP">Enregistrer</button></div>
                        </form>

    <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>

    <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Table De Données
                            </div>
                            
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Libelle</th>
                                                <th>Nom</th>
                                                <th>Quantité en Stock</th>
                                                <th>Supprimer</th>
                                                <th>Modifier</th>
                                                <!--th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th-->
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                       $produits= listProduit();
                                       foreach ($produits as $p) { 
                                        ?>
                                            <tr>
                                            <td><?=$p['ref']?></td>
                                            <td><?=$p['nom']?></td>
                                            <td><?=$p['qtStock']?></td>
                                            <td><a href="ajoutProduit.php?Del=<?php echo $p['id']?>" class="btn btn-lg bg-danger font-weight-bold btn-md t">Delete</a></td>
                                            <td><a href="modifierProduit.php?Modif=<?php echo $p['id']?>" class="btn btn-lg bg-primary font-weight-bold btn-md t">Modifier</a></td>
                                            </tr>
                                       <?php 
                                       }
                                        ?>
                                       </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Libelle</th>
                                                <th>Nom</th>
                                                <th>Quantité en Stock</th>
                                                <th>Supprimer</th>
                                                <th>Modifier</th>
                                                <!--th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th-->
                                            </tr>
                                        </tfoot>
                                        <tbody>