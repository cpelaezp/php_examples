<!-- Sidebar -->
<nav id="sidebar">
        <div class="sidebar-header">
            <h3>Sistema de Información</h3>
        </div>

        <ul class="list-unstyled components">
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Productividad</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="#">Proyectos</a>
                    </li>
                    <li>
                        <a href="#">Presupuesto</a>
                    </li>
                    <li>
                        <a href="#">Actuaciones</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Paramentros</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="#">Personas</a>
                    </li>
                    <li>
                        <a href="#">Poblaciones</a>
                    </li>
                    <li>
                        <a href="#">Sedes</a>
                    </li>
                    <li>
                        <a href="#">Ciudades</a>
                    </li>
                    <li>
                        <a href="#">Paises</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Ayuda</a>
            </li>
        </ul>

    </nav>

<script>
    $(document).ready(function () {

        $("#sidebar").mCustomScrollbar({
            theme: "minimal"
        });

        $('#sidebarCollapse').on('click', function () {
            // open or close navbar
            $('#sidebar').toggleClass('active');
            // close dropdowns
            $('.collapse.in').toggleClass('in');
            // and also adjust aria-expanded attributes we use for the open/closed arrows
            // in our CSS
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });

    });    
</script>
