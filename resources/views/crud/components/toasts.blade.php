<div class="toast-container position-fixed top-0 end-0 p-3">
    <div id="toastSuccess" class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive"
        aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                <i class="bi bi-check-lg"></i> {{ session()->get('success') }}
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                aria-label="Close"></button>
        </div>
    </div>
</div>

<div class="toast-container position-fixed top-0 end-0 p-3">
    <div id="toastError" class="toast align-items-center text-bg-danger border-0" role="alert" aria-live="assertive"
        aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                <i class="bi bi-exclamation-circle"></i> {{ session()->get('error') }}
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                aria-label="Close"></button>
        </div>
    </div>
</div>
