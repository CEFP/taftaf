<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <script src="./bootstrap.js"></script>
</head>
<body>
<?php include("header.php"); ?>
    
    <main class="container mt-5 pt-3">
        <div class="row">
            <div class="col-md-8">
                <div class="d-flex">
                    <div>
                        <a class="btn btn-dark" title="Retour au précédent">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                                <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
                              </svg>   
                        </a>
                    </div>
                    <div class="flex-grow-1 ms-4">
                        <p>
                            #8585NJEINJUV
                            <br>
                            Depuis 2h heures
                        </p>
                    </div>
                    <div>
                        <button class="btn btn-dark ms-2" title="Ajouter des collaborateurs" data-bs-toggle="modal"
                            data-bs-target="#asign">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                              </svg>
                            
                        </button>
                    </div>
                    <div>
                        <button class="btn btn-dark ms-2" title="Modifier cette tâche" data-bs-toggle="modal"
                            data-bs-target="#edittask">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                              </svg> 
                        </button>
                    </div>
                    <div>
                        <button class="btn btn-dark ms-2" title="Supprimer cette tâche">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                              </svg>  
                        </button>
                    </div>
                </div>
                <div>
                    <p>
                        Date limite: 2022-05-05 13:00:00
                    </p>
                    <p>
                        Description:
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi ad corrupti blanditiis
                        exercitationem praesentium velit commodi consequuntur quo quae, assumenda repellendus cumque
                        dolores ex, esse tempore? Quidem sequi unde nobis.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero voluptates dignissimos
                        accusantium assumenda, corrupti numquam commodi omnis deleniti! Iste temporibus exercitationem
                        distinctio necessitatibus soluta quisquam delectus non laboriosam sed ratione!
                    </p>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <a class="btn btn-dark">
                        Marquer en cours
                    </a>
                    <a class="btn btn-dark">
                        Marquer fait
                    </a>
                    <a class="btn btn-dark">
                        Marquer annulée
                    </a>
                    <a class="btn btn-dark">
                        Marquer reportée
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div>
                    <div>
                        Statut:
                    </div>
                    <div class="badge bg-dark bg-opacity-50 rounded-pill">
                        <h4>
                            EN ATTENTE
                        </h4>
                    </div>
                </div>
                <div class="mt-5">
                    <div>
                        Créée par:
                    </div>
                    <span class="badge bg-dark">
                        John Doe
                    </span>
                </div>
                <div class="mt-5">
                    <div>
                        Collaborateurs:
                    </div>
                    <span class="badge rounded-pill bg-dark">
                        John Doe <i class="mdi mdi-close-circle" title="Retirer de cette tâche"></i>
                    </span>
                    <span class="badge rounded-pill bg-dark">
                        John Doe <i class="mdi mdi-close-circle" title="Retirer de cette tâche"></i>
                    </span>
                    <span class="badge rounded-pill bg-dark">
                        John Doe <i class="mdi mdi-close-circle" title="Retirer de cette tâche"></i>
                    </span>
                    <span class="badge rounded-pill bg-dark">
                        John Doe <i class="mdi mdi-close-circle" title="Retirer de cette tâche"></i>
                    </span>
                </div>
            </div>
        </div>
    </main>
    
    <div class="modal fade" id="edittask" tabindex="-1" aria-labelledby="edittaskLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="edittaskLabel">
                        Modifier tâche à faire
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="mb-3">
                            <textarea class="form-control mb-3" placeholder="Description"
                                rows="5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, hic eaque. Minima sint modi, harum ipsa aspernatur labore autem odit illum fuga esse facilis saepe incidunt, fugiat ea repudiandae ratione?</textarea>
                        </div>
                        <div>
                            <div class="col-12">
                                <input type="datetime-local" class="form-control" value="2022-04-29T15:19">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer border-0 justify-content-center">
                        <button type="submit" class="btn btn-dark">
                            Enregistrer
                        </button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Annuler
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="asign" tabindex="-1" aria-labelledby="asignLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="asignLabel">
                        Ajouter un collaborateur
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row container text-align">
                        <div class="col-md-3 bg-light rounded-3 m-2">
                            <a>
                                <div class="d-flex justify-content-end">
                                    <span class="rounded-pill badge bg-dark">
                                        33
                                    </span>
                                </div>
                                <div>
                                    <img class="bg-dark rounded-circle" width="60px" height="60px">
                                    <p>
                                        John Doe
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 bg-light rounded-3 m-2">
                            <a>
                                <div class="d-flex justify-content-end">
                                    <span class="rounded-pill badge bg-dark">
                                        33
                                    </span>
                                </div>
                                <div>
                                    <img class="bg-dark rounded-circle" width="60px" height="60px">
                                    <p>
                                        John Doe
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 bg-light rounded-3 m-2">
                            <a>
                                <div class="d-flex justify-content-end">
                                    <span class="rounded-pill badge bg-dark">
                                        33
                                    </span>
                                </div>
                                <div>
                                    <img class="bg-dark rounded-circle" width="60px" height="60px">
                                    <p>
                                        John Doe
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 bg-light rounded-3 m-2">
                            <a>
                                <div class="d-flex justify-content-end">
                                    <span class="rounded-pill badge bg-dark">
                                        33
                                    </span>
                                </div>
                                <div>
                                    <img class="bg-dark rounded-circle" width="60px" height="60px">
                                    <p>
                                        John Doe
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 bg-light rounded-3 m-2">
                            <a>
                                <div class="d-flex justify-content-end">
                                    <span class="rounded-pill badge bg-dark">
                                        33
                                    </span>
                                </div>
                                <div>
                                    <img class="bg-dark rounded-circle" width="60px" height="60px">
                                    <p>
                                        John Doe
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <?php include("footer.php"); ?>     
</body>
</html>