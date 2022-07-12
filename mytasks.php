<?php

session_start();




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
</head>
<body>
<?php include("header.php"); ?>
    <main class="mt-5 pt-3">
        <div class="container-fluid">
            <div class="d-block d-sm-flex justify-content-between align-items-center">
                <div>
                   Mes taches/ Listes des taches / Taches de John Doe 

                </div>
                <div class="d-flex align-items-center justify-content-around">
                    <span>Filtrage:</span>
                    <div class="m-1">
                        <select class="form-control bg-dark text-light">
                            <option value="">Année</option>
                            <option value="">2022</option>
                            <option value="">2021</option>
                            <option value="">2020</option>

                        </select>

                    </div>
                    <div class="m-1">
                        <select class="form-control bg-dark text-light">
                            <option value="">Mois</option>
                            <option value="">Janvier</option>
                            <option value="">Février</option>
                            <option value="">Avril</option>
                            <option value="">Mai</option>
                            <option value="">Juin</option>
                            <option value="">juillet</option>
                            <option value="">Aout</option>
                            <option value="">Septembre</option>
                            <option value="">Octobre</option>
                            <option value="">Novembre</option>
                            <option value="">Décembre</option>

                        </select>

                    </div>
                    <div class="m-1">
                        <select class="form-control bg-dark text-light">
                            <option value="">Jours</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                            <option value="">5</option>
                            <option value="">6</option>
                            <option value="">7</option>
                            <option value="">8</option>
                            <option value="">9</option>
                            <option value="">10</option>
                            <option value="">11</option>
                            <option value="">12</option>
                            <option value="">13</option>
                            <option value="">14</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="text-center">En attentes</div>
                    <div class="bg-light p-2 vh-100">
                        <div style="background-color: silver;" class="rounded-2 p-2 mb-2">
                             <p>
                               <?php
                              echo("$description");
                               ?>

                             </p>
                             <small style="font-size: 12px">Date limite:<?php 
                             echo("$date1");
                             
                             ?></small>
                       </div> 
                       <div style="background-color: silver;" class="rounded-2 p-2 mb-2">
                        <p>
                           Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                           In voluptate, iure itaque commodi ipsum,
                            animi, quo facere corrupti nam omnis dolorum non exercitationem 
                            reiciendis excepturi voluptatem sed! Temporibus, necessitatibus provident!
                        </p>
                        <small style="font-size: 12px">Date limite:2022-05-02</small>
                  </div> 
                  <div style="background-color: silver;" class="rounded-2 p-2 mb-2">
                    <p>
                       Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                       In voluptate, iure itaque commodi ipsum,
                        animi, quo facere corrupti nam omnis dolorum non exercitationem 
                        reiciendis excepturi voluptatem sed! Temporibus, necessitatibus provident!
                    </p>
                    <small style="font-size: 12px">Date limite:2022-05-02</small>
                   </div> 
                    </div>

                </div>
                <div class="col">
                    <div class="text-center">En cours</div>
                    <div class="bg-light p-2 vh-100"></div>

                </div>
                <div class="col">
                    <div class="text-center">Terminées</div>
                    <div class="bg-light p-2 vh-100">
                      <div style="background-color: silver;" class="rounded-2 p-2 mb-2">
                        <p>
                           Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                           In voluptate, iure itaque commodi ipsum,
                            animi, quo facere corrupti nam omnis dolorum non exercitationem 
                            reiciendis excepturi voluptatem sed! Temporibus, necessitatibus provident!
                        </p>
                        <small style="font-size: 12px">Date limite:2022-05-02</small>
                      </div> 
                    </div> 

                </div>
                <div class="col">
                    <div class="text-center">Reportées</div>
                    <div class="bg-light p-2 vh-100"></div>

                </div>
                <div class="col">
                    <div class="text-center">Annulées</div>
                    <div class="bg-light p-2 vh-100">
                       <div style="background-color: silver;" class="rounded-2 p-2 mb-2">
                        <p>
                           Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                           In voluptate, iure itaque commodi ipsum,
                            animi, quo facere corrupti nam omnis dolorum non exercitationem 
                            reiciendis excepturi voluptatem sed! Temporibus, necessitatibus provident!
                        </p>
                        <small style="font-size: 12px">Date limite:2022-05-02</small>
                       </div>
                    </div> 

                </div>

            </div>

        </div>
        <?php include("footer.php"); ?>       
</body>
</html>