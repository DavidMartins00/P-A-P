<div class="modal fade" id="modalCalendar" tabindex="-1" role="dialog" aria-labelledby="titleModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="titleModal">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="message"></div>
                <form id="formEvent">

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="title">Titulo</label>
                            <input type="text" name="title" class="form-control" id="title">
                            <input type="hidden" name="id">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="funcid">Id Funcionario</label>
                            <input type="number" name="funcid" min="1" class="form-control" id="funcid">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="start">Data Inicio</label>
                            <input type="text" name="start" class="form-control date-time" id="start">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="end">Data Fim</label>
                            <input type="text" name="end" class="form-control date-time" id="end">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="color">Cor</label>
                            <input type="color" name="color" class="form-control" id="color">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="description">Descrição</label>
                            <textarea name="description" id="description" cols="40" rows="4"></textarea>
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger deleteEvent">Apagar</button>
                <button type="button" class="btn btn-success saveEvent">Salvar</button>
            </div>
        </div>
    </div>
</div>
