<?php
          include_once 'header.php';
          require_once 'src/entities/produit.php';
          require_once 'src/model/produitDb.php';
          require_once 'src/controller/ajout.php';
          require_once 'src/controller/supprimer.php';
         // require_once 'src/controller/modifier.php';
          //require_once 'src/model/bd.php';


    //extract($_POST['modif']);
    //$p = new Produit();  
    $d =  recupererIdModif($_GET['Modif']);
    if (isset($_POST['modif'])) {
        extract($_POST);
      $prod = new Produit();
      if(empty($nomM) || empty($libelleM) || empty($qtM))
      {
          echo 'Please Remplissez tous les champs';
      }else
      {
      $prod->setNom($nomM);
      $prod->setRef($libelleM);
      $prod->setQtStock($qtM);
      updateProduit($prod);
      }
    }

    
        
        ?>

<form action="" method="post">
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card mb-2">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area mr-1"></i>
                                        Libelle du Produit
                                    </div>
                                    <div class="card-body"><input type="text" value="<?=$d['ref']?>" name="libelleM"></div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card mb-2">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar mr-1"></i>
                                        Nom du Produit
                                    </div>
                                    <div class="card-body"><input type="text" name="nomM" value="<?=$d['nom']?>"></div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card mb-2">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar mr-1"></i>
                                        Quantite en Stock
                                    </div>
                                    <div class="card-body"><input placeholder="Quantite" type="number" value="<?=$d['qtStock']?>" name="qtM"></div>
                                </div>
                            </div>
                        </div>
                        <div  class="row offset-5  text-white"><button class="btn btn-lg bg-primary font-weight-bold btn-md t" name="modif">Modifier</button></div>
                        </form>