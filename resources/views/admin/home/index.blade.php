@extends('layouts.main')

{{-- CSS --}}
@section('extracss')
@stop
{{-- Content --}}
@section('content')

@section('title') Inicio @stop
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card position-relative card-data">
                        <div class="card-body p-3">
                            <h5 class="top-right">56%</h5>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <div class="icon icon-shape bg-primary shadow text-center border-radius-2xl">
                                        <i class="bi bi-calendar2-x text-white text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                    <h5 class="text-black font-weight-bolder mt-2">
                                        1600
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-primary text-center">
                            <span class="text-white font-weight-bolder">Vencidos</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card position-relative card-data">
                        <div class="card-body p-3">
                            <h5 class="top-right">56%</h5>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <div class="icon icon-shape bg-primary shadow text-center border-radius-2xl">
                                        <i class="bi bi-calendar-check text-white text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                    <h5 class="text-black font-weight-bolder mt-2">
                                        1600
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-primary text-center">
                            <span class="text-white font-weight-bolder">A tiempo</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card position-relative card-data">
                        <div class="card-body p-3">
                            <h5 class="top-right">56%</h5>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <div class="icon icon-shape bg-primary shadow text-center border-radius-2xl">
                                        <i class="bi bi-check-circle text-white text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                    <h5 class="text-black font-weight-bolder mt-2">
                                        1600
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-primary text-center">
                            <span class="text-white font-weight-bolder">Tramitados a tiempo</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card position-relative card-data">
                        <div class="card-body p-3">
                            <h5 class="top-right">56%</h5>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <div class="icon icon-shape bg-primary shadow text-center border-radius-2xl">
                                        <i class="bi bi-calendar-minus text-white text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                    <h5 class="text-black font-weight-bolder mt-2">
                                        1600
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-primary text-center">
                            <span class="text-white font-weight-bolder">Tramitados fuera de tiempo</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card position-relative card-data">
                        <div class="card-body p-3">
                            <h5 class="top-right">56%</h5>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <div class="icon icon-shape bg-primary shadow text-center border-radius-2xl">
                                        <i class="bi bi-stars text-white text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                    <h5 class="text-black font-weight-bolder mt-2">
                                        1600
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-primary text-center">
                            <span class="text-white font-weight-bolder">Total entradas</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card position-relative card-data">
                        <div class="card-body p-3">
                            <h5 class="top-right">56%</h5>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <div class="icon icon-shape bg-primary shadow text-center border-radius-2xl">
                                        <i class="bi bi-escape text-white text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                    <h5 class="text-black font-weight-bolder mt-2">
                                        1600
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-primary text-center">
                            <span class="text-white font-weight-bolder">Total salidas</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="row justify-content-md-center">
                <div class="col-md-auto">
                    <!-- Ícono -->
                    <div
                        class="icon icon-shape bg-primary shadow-lg text-center border-radius-2xl"
                        data-bs-toggle="modal"
                        data-bs-target="#dateRangeModal"
                    >
                        <i class="bi bi-funnel text-white text-lg opacity-10" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="col-md-auto">
                    <button type="button" class="btn btn-default text-primary bg-white range-btn" data-range="1-mes">
                        1 Mes
                    </button>
                </div>
                <div class="col-md-auto">
                    <button type="button" class="btn btn-default text-primary bg-white range-btn" data-range="3-meses">
                        3 Meses
                    </button>
                </div>
                <div class="col-md-auto">
                    <button type="button" class="btn btn-default text-primary bg-white range-btn" data-range="4-meses">
                        4 Meses
                    </button>
                </div>
            </div>
            
            <div class="card shadow h-100">
                <div class="card-header pb-0 p-3">
                    <h6 class="mb-0 text-primary">Notificaciones</h6>
                </div>
                <div class="card-body pb-0 p-3">
                    
                </div>
            </div>
        </div>
    </div>
    <div class="row my-4">
        <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
        <div class="card">
            <div class="card-header pb-0">
                <div class="row">
                <div class="col-lg-6 col-7">
                    <h6>Projects</h6>
                    <p class="text-sm mb-0">
                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                    <span class="font-weight-bold ms-1">30 done</span> this month
                    </p>
                </div>
                <div class="col-lg-6 col-5 my-auto text-end">
                    <div class="dropdown float-lg-end pe-4">
                    <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-ellipsis-v text-secondary"></i>
                    </a>
                    <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
                    </ul>
                    </div>
                </div>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive">
                <table class="table align-items-center mb-0">
                    <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Companies</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Members</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Budget</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Completion</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                        <div class="d-flex px-2 py-1">
                            <div>
                            <img src="../assets/img/small-logos/logo-xd.svg" class="avatar avatar-sm me-3" alt="xd">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Soft UI XD Version</h6>
                            </div>
                        </div>
                        </td>
                        <td>
                        <div class="avatar-group mt-2">
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Tompson">
                            <img src="../assets/img/team-1.jpg" alt="team1">
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Romina Hadid">
                            <img src="../assets/img/team-2.jpg" alt="team2">
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Alexander Smith">
                            <img src="../assets/img/team-3.jpg" alt="team3">
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Jessica Doe">
                            <img src="../assets/img/team-4.jpg" alt="team4">
                            </a>
                        </div>
                        </td>
                        <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"> $14,000 </span>
                        </td>
                        <td class="align-middle">
                        <div class="progress-wrapper w-75 mx-auto">
                            <div class="progress-info">
                            <div class="progress-percentage">
                                <span class="text-xs font-weight-bold">60%</span>
                            </div>
                            </div>
                            <div class="progress">
                            <div class="progress-bar bg-gradient-info w-60" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <div class="d-flex px-2 py-1">
                            <div>
                            <img src="../assets/img/small-logos/logo-atlassian.svg" class="avatar avatar-sm me-3" alt="atlassian">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Add Progress Track</h6>
                            </div>
                        </div>
                        </td>
                        <td>
                        <div class="avatar-group mt-2">
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Romina Hadid">
                            <img src="../assets/img/team-2.jpg" alt="team5">
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Jessica Doe">
                            <img src="../assets/img/team-4.jpg" alt="team6">
                            </a>
                        </div>
                        </td>
                        <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"> $3,000 </span>
                        </td>
                        <td class="align-middle">
                        <div class="progress-wrapper w-75 mx-auto">
                            <div class="progress-info">
                            <div class="progress-percentage">
                                <span class="text-xs font-weight-bold">10%</span>
                            </div>
                            </div>
                            <div class="progress">
                            <div class="progress-bar bg-gradient-info w-10" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <div class="d-flex px-2 py-1">
                            <div>
                            <img src="../assets/img/small-logos/logo-slack.svg" class="avatar avatar-sm me-3" alt="team7">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Fix Platform Errors</h6>
                            </div>
                        </div>
                        </td>
                        <td>
                        <div class="avatar-group mt-2">
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Romina Hadid">
                            <img src="../assets/img/team-3.jpg" alt="team8">
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Jessica Doe">
                            <img src="../assets/img/team-1.jpg" alt="team9">
                            </a>
                        </div>
                        </td>
                        <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"> Not set </span>
                        </td>
                        <td class="align-middle">
                        <div class="progress-wrapper w-75 mx-auto">
                            <div class="progress-info">
                            <div class="progress-percentage">
                                <span class="text-xs font-weight-bold">100%</span>
                            </div>
                            </div>
                            <div class="progress">
                            <div class="progress-bar bg-gradient-success w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <div class="d-flex px-2 py-1">
                            <div>
                            <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm me-3" alt="spotify">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Launch our Mobile App</h6>
                            </div>
                        </div>
                        </td>
                        <td>
                        <div class="avatar-group mt-2">
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Tompson">
                            <img src="../assets/img/team-4.jpg" alt="user1">
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Romina Hadid">
                            <img src="../assets/img/team-3.jpg" alt="user2">
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Alexander Smith">
                            <img src="../assets/img/team-4.jpg" alt="user3">
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Jessica Doe">
                            <img src="../assets/img/team-1.jpg" alt="user4">
                            </a>
                        </div>
                        </td>
                        <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"> $20,500 </span>
                        </td>
                        <td class="align-middle">
                        <div class="progress-wrapper w-75 mx-auto">
                            <div class="progress-info">
                            <div class="progress-percentage">
                                <span class="text-xs font-weight-bold">100%</span>
                            </div>
                            </div>
                            <div class="progress">
                            <div class="progress-bar bg-gradient-success w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <div class="d-flex px-2 py-1">
                            <div>
                            <img src="../assets/img/small-logos/logo-jira.svg" class="avatar avatar-sm me-3" alt="jira">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Add the New Pricing Page</h6>
                            </div>
                        </div>
                        </td>
                        <td>
                        <div class="avatar-group mt-2">
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Tompson">
                            <img src="../assets/img/team-4.jpg" alt="user5">
                            </a>
                        </div>
                        </td>
                        <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"> $500 </span>
                        </td>
                        <td class="align-middle">
                        <div class="progress-wrapper w-75 mx-auto">
                            <div class="progress-info">
                            <div class="progress-percentage">
                                <span class="text-xs font-weight-bold">25%</span>
                            </div>
                            </div>
                            <div class="progress">
                            <div class="progress-bar bg-gradient-info w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="25"></div>
                            </div>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <div class="d-flex px-2 py-1">
                            <div>
                            <img src="../assets/img/small-logos/logo-invision.svg" class="avatar avatar-sm me-3" alt="invision">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Redesign New Online Shop</h6>
                            </div>
                        </div>
                        </td>
                        <td>
                        <div class="avatar-group mt-2">
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Tompson">
                            <img src="../assets/img/team-1.jpg" alt="user6">
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Jessica Doe">
                            <img src="../assets/img/team-4.jpg" alt="user7">
                            </a>
                        </div>
                        </td>
                        <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"> $2,000 </span>
                        </td>
                        <td class="align-middle">
                        <div class="progress-wrapper w-75 mx-auto">
                            <div class="progress-info">
                            <div class="progress-percentage">
                                <span class="text-xs font-weight-bold">40%</span>
                            </div>
                            </div>
                            <div class="progress">
                            <div class="progress-bar bg-gradient-info w-40" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="40"></div>
                            </div>
                        </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Modal Filter Date --}}
<div class="modal fade" id="dateRangeModal" tabindex="-1" aria-labelledby="dateRangeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="dateRangeModalLabel">Seleccionar rango de fechas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <!-- Campo de selección de fecha inicio -->
                <label for="startDate">Fecha de inicio:</label>
                <input type="date" id="startDate" class="form-control mb-3" placeholder="Selecciona la fecha de inicio" required />
                
                <!-- Campo de selección de fecha fin -->
                <label for="endDate">Fecha de fin:</label>
                <input type="date" id="endDate" class="form-control" placeholder="Selecciona la fecha de fin" required />
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" id="applyDateRange">Aplicar</button>
            </div>
        </div>
    </div>
</div>

@stop
{{-- Scripts --}}
@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Inicializa el selector de fecha para el inicio
    flatpickr("#startDate", {
        dateFormat: "Y-m-d", // Formato de la fecha
        locale: "es", // Idioma en español
    });

    // Inicializa el selector de fecha para el fin
    flatpickr("#endDate", {
        dateFormat: "Y-m-d", // Formato de la fecha
        locale: "es", // Idioma en español
    });

    // Manejar la acción del botón "Aplicar"
    document.getElementById("applyDateRange").addEventListener("click", function () {
        const startDate = document.getElementById("startDate").value;
        const endDate = document.getElementById("endDate").value;

        if (!startDate || !endDate) {
            alert("Por favor, selecciona ambas fechas: inicio y fin.");
            return;
        }

        // Aquí puedes agregar la lógica para procesar las fechas seleccionadas
        console.log("Fecha de inicio:", startDate);
        console.log("Fecha de fin:", endDate);
        
        // Cierra el modal (opcional)
        const modal = bootstrap.Modal.getInstance(document.getElementById("dateRangeModal"));
        modal.hide();
    });
    const rangeButtons = document.querySelectorAll('.range-btn');

    // Agrega evento click a cada botón
    rangeButtons.forEach((button) => {
        button.addEventListener('click', function () {
            // Elimina la clase 'active' de todos los botones
            rangeButtons.forEach((btn) => btn.classList.remove('active'));

            // Agrega la clase 'active' al botón seleccionado
            this.classList.add('active');

            // Obtener el rango seleccionado (puedes usarlo como referencia)
            const selectedRange = this.getAttribute('data-range');
            console.log('Rango seleccionado:', selectedRange);
        });
    });
});

</script>
@stop
