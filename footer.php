<div class="modal fade" id="newtask" tabindex="-1" aria-labelledby="newtaskLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="newtaskLabel">
                        Nouvelle tâche à faire
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="mb-3">
                            <textarea class="form-control mb-3" placeholder="Description" rows="5"></textarea>
                        </div>
                        <div>
                            <div class="col-12">
                                <input type="datetime-local" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div id="submiter" class="modal-footer border-0 justify-content-center">
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