<x-layout>
    @include('crud.components.toasts')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 bst-seller">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h4 class="heading mb-0">Cadastro</h4>
                    </div>
                </div>
                @include('crud.components.form')
                @include('crud.components.table')
            </div>
        </div>
    </div>
</x-layout>

<script>
    const descriptionField = document.getElementById("description");
    const typeField = document.getElementById("type");
    const observationField = document.getElementById("observations");
    const hiddenInputMethod = document.getElementById("hidden_method");
    const formStoreUpdate = document.getElementById('form-store-edit');

    if ("{{ session()->has('success') }}") {
        const toastSuccess = document.getElementById('toastSuccess');
        const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastSuccess);
        toastBootstrap.show();
    }

    if ("{{ session()->has('error') }}") {
        const toastError = document.getElementById('toastError');
        const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastError);
        toastBootstrap.show();
    }

    window.onload = () => {
        resetToDefaultData();
    }

    const editRegister = (register) => {
        const btnSubmit = document.getElementById('button-container');
        const btnSubmitEdit = document.getElementById('edit-button-container');
        const btnDelete = document.getElementById('delete-button-container');

        btnSubmit.style.display = 'none';
        btnSubmitEdit.style.display = 'block';
        btnDelete.style.display = 'block';

        setEditDeleteRoutes(register)
        fillEditFields(register);
    }

    const setEditDeleteRoutes = (register) => {
        const baseUrlDelete = "{{ route('crud.delete', ['id' => '_id_']) }}";
        const deleteUrl = baseUrlDelete.replace('_id_', register.id);

        const baseUrlEdit = "{{ route('crud.edit', ['id' => '_id_']) }}"
        const editUrl = baseUrlEdit.replace('_id_', register.id);

        const formDelete = document.getElementById('form-delete');

        formDelete.action = deleteUrl;
        formStoreUpdate.action = editUrl;
        hiddenInputMethod.value = "PUT";
    }

    const fillEditFields = ({
        description,
        type,
        observations
    }) => {
        descriptionField.value = description;
        typeField.value = type;
        observationField.value = observations;
    }

    const onDelete = (e) => {
        const btnDelete = document.getElementById('btn-delete');
        e.preventDefault();

        alert('Deseja mesmo excluir esse registro?')
        btnDelete.form.submit();
    }

    const resetToDefaultData = () => {
        descriptionField.value = "";
        typeField.value = "";
        observationField.value = "";

        formStoreUpdate.action = "{{ route('crud.store') }}";
        hiddenInputMethod.value = "";
    }
</script>
