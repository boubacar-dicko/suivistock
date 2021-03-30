<?php
          include_once 'header.php';
          require_once 'src/entities/produit.php';
          require_once 'src/model/produitDb.php';



          if (isset($_GET['Sup'])) {

            if (deleteProduit($_GET['Sup']) == 1) {
                header("location:/suivistock/listeProduit.php");
            }
        }
          ?>

<div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                DataTable Example
                            </div>
                            
                            <div class="card-body">
                            <div class="row offset-11">
                             </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Libelle</th>
                                                <th>Nom</th>
                                                <th>Quantité en Stock</th>
                                                
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
                                               
                                                <!--th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th-->
                                            </tr>
                                        </tfoot>
                                        <tbody>