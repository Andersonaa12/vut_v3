<div class="position-fixed bottom-1 end-1 z-index-2" style="z-index: 1050;">
    {{-- Notificación de Éxito --}}
    @if(session('success'))
        <div class="toast fade show p-2 bg-white" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="5000">
            <div class="toast-header border-0">
                <i class="bi bi-check-circle-fill text-success me-2"></i>
                <span class="me-auto font-weight-bold">Éxito</span>
                <small class="text-body">Ahora</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Cerrar"></button>
            </div>
            <hr class="horizontal dark m-0">
            <div class="toast-body">
                {{ session('success') }}
            </div>
        </div>
    @endif

    {{-- Notificación de Error --}}
    @if(session('error'))
        <div class="toast fade show p-2 bg-white mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="5000">
            <div class="toast-header border-0">
                <i class="bi bi-exclamation-circle text-danger me-2"></i>
                <span class="me-auto text-danger font-weight-bold">Error</span>
                <small class="text-body">Ahora</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Cerrar"></button>
            </div>
            <hr class="horizontal dark m-0">
            <div class="toast-body">
                {{ session('error') }}
            </div>
        </div>
    @endif

    {{-- Notificación de Advertencia --}}
    @if(session('warning'))
        <div class="toast fade show p-2 bg-white mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="5000">
            <div class="toast-header border-0">
                <i class="bi bi-dash-circle-fill text-warning me-2"></i>
                <span class="me-auto font-weight-bold">Advertencia</span>
                <small class="text-body">Ahora</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Cerrar"></button>
            </div>
            <hr class="horizontal dark m-0">
            <div class="toast-body">
                {{ session('warning') }}
            </div>
        </div>
    @endif

    {{-- Notificación de Información --}}
    @if(session('info'))
        <div class="toast fade show p-2 bg-gradient-info mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="5000">
            <div class="toast-header bg-transparent border-0">
                <i class="bi bi-info-circle-fill text-white me-2"></i>
                <span class="me-auto text-white font-weight-bold">Información</span>
                <small class="text-white">Ahora</small>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Cerrar"></button>
            </div>
            <hr class="horizontal light m-0">
            <div class="toast-body text-white">
                {{ session('info') }}
            </div>
        </div>
    @endif

    {{-- Errores de Validación --}}
    @if($errors->any())
        <div class="toast fade show p-2 bg-white mt-2" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="5000">
            <div class="toast-header border-0">
                <i class="bi bi-bug-fill text-danger me-2"></i>
                <span class="me-auto text-danger font-weight-bold">Errores de Validación</span>
                <small class="text-body">Ahora</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Cerrar"></button>
            </div>
            <hr class="horizontal dark m-0">
            <div class="toast-body">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz5p...==" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+...==" crossorigin="anonymous"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var toastElList = [].slice.call(document.querySelectorAll('.toast'))
        toastElList.forEach(function (toastEl) {
            var toast = new bootstrap.Toast(toastEl, { delay: 5000 })
            toast.show()
        })
    });
</script>
