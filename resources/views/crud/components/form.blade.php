<div class="col-xl-12 col-lg-12 bst-seller">
    <div class="card h-auto">
        <div class="card-body">
            <form id="form-store-edit" method="POST" action="{{ route('crud.store') }}">
                @csrf
                <input type="hidden" id="hidden_method" name="_method" value="POST">
                <div class="row">
                    <div class="col-sm-6 m-b30">
                        <label for="description" class="form-label required">Descrição</label>
                        <input type="text" class="form-control" name="description" id="description" required>
                    </div>
                    <div class="col-sm-6 m-b30">
                        <label for="type" class="form-label required">Tipo</label>
                        <select class="form-control selectpicker" name="type" id="type" data-live-search="true"
                            required>
                            <option value="">Selecione</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </div>
                    <div class="col-sm-12 m-b30">
                        <label for="observations" class="form-label">Observações</label>
                        <input type="text" class="form-control" name="observations" id="observations">
                    </div>
                </div>
                <div class="row" style="margin-top: 30px;">
                    <div id="button-container" class="col-sm-12">
                        <button id="btn-submit" class="btn btn-success btn-block" type="submit">
                            <i class="bi bi-floppy"></i> Salvar
                        </button>
                    </div>
                    <div id="edit-button-container" class="col-sm-6" style="display: none;">
                        <button id="btn-submit-edit" class="btn btn-primary btn-block" type="submit">
                            <i class="bi bi-floppy"></i> Editar
                        </button>
                    </div>
                    <div id="delete-button-container" class="col-sm-3" style="display: none;">
                        <form></form>
                        <form id="form-delete" action="#" method="POST">
                            @csrf
                            @method('DELETE')
                            <button id="btn-delete" class="btn btn-danger btn-block" onclick="onDelete(event)"
                                type="submit">
                                <i class="bi bi-trash3"></i> Excluir
                            </button>
                        </form>
                    </div>
                    <div id="return-button-container" class="col-sm-3" style="display: none;">
                        <form></form>
                        <button id="btn-return" class="btn btn-primary btn-block" type="button" onclick="resetToDefaultData()">
                            <i class="bi bi-arrow-return-left"></i> Voltar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
