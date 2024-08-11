<div class="row">
    <div class="col-xl-12 bst-seller">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h4 class="heading mb-0">Visualização</h4>
        </div>
        <div class="card h-auto">
            <div class="card-body p-0">
                <div class="table-responsive active-projects style-1 dt-filter exports">
                    <div class="tbl-caption"></div>
                    <table id="customer-tbl" class="table shorting">
                        <thead>
                            <tr>
                                <th>Editar</th>
                                <th>Descrição</th>
                                <th>Observações</th>
                                <th>Tipo</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cruds as $crud)
                                <tr>
                                    <td>
                                        <button title="Editar" class="btn btn-sm btn-outline-info"
                                            onclick="editRegister({{ $crud }})">
                                            <i class="bi-pencil"></i>
                                        </button>
                                    </td>
                                    <td><span>{{ $crud->description }}</span></td>
                                    <td><span>{{ $crud->observations }}</span></td>
                                    <td>
                                        <span @class([
                                            'badge',
                                            'badge-success' => $crud->type === 1,
                                            'badge-danger' => $crud->type === 2,
                                            'light',
                                            'border-0',
                                        ])>
                                            Tipo {{ $crud->type }}
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $cruds->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
