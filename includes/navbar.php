<?php

//Aca se muestran los menus dependiendo del usuario
$listadoItems = [
    ["url" => "explorar_mascotas.php", "title" => "Explorar Mascotas", "icon" => "bi-search"],
    ["url" => "recursos_educativos.php", "title" => "Recursos", "icon" => "bi-book"],
    ["url" => "acerca_nosotros.php", "title" => "Acerca de nosotros", "icon" => "bi-info-circle"],
    ["url" => "contacto.php", "title" => "Contacto", "icon" => "bi-envelope"],
    ["url" => "refugios_hogares.php", "title" => "Refugios", "icon" => "bi bi-building"],
];

if (!empty($_SESSION['inicio_Sesion'])) {
    $listadoItems = [
        ["url" => "explorar_mascotas.php", "title" => "Explorar Mascotas", "icon" => "bi-search"],
        ["url" => "recursos_educativos.php", "title" => "Recursos", "icon" => "bi-book"],
        ["url" => "acerca_nosotros.php", "title" => "Acerca de nosotros", "icon" => "bi-info-circle"],
        ["url" => "contacto.php", "title" => "Contacto", "icon" => "bi-envelope"],
        ["url" => "refugios_hogares.php", "title" => "Refugios", "icon" => "bi bi-building"],
        ["url" => "perfil_usuario.php", "title" => "Mi perfil", "icon" => "bi bi-person"],
    ];

    if ($_SESSION['inicio_Sesion']['rol'] === "Admin") {
        $listadoItems = [
            ["url" => "explorar_mascotas.php", "title" => "Explorar Mascotas", "icon" => "bi-search"],
            ["url" => "recursos_educativos.php", "title" => "Recursos", "icon" => "bi-book"],
            ["url" => "acerca_nosotros.php", "title" => "Acerca de nosotros", "icon" => "bi-info-circle"],
            ["url" => "contacto.php", "title" => "Contacto", "icon" => "bi-envelope"],
            ["url" => "refugios_hogares.php", "title" => "Refugios", "icon" => "bi bi-building"],
            ["url" => "panel_admin/gestion_usuarios.php", "title" => "Gestion", "icon" => "bi bi-person"],
        ];
    }else{
        $listadoItems = [
            ["url" => "index_refugio.php", "title" => "Animales en Adopción", "icon" => "bi-search"],
            ["url" => "recursos_educativos.php", "title" => "Recursos", "icon" => "bi-book"],
        ];
    }
}
?>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <?php foreach ($listadoItems as $item): ?>
                        <li class="nav-item mx-3">
                            <a class="nav-link text-primary" href="<?= $item['url'] ?>">
                                <i class="<?= $item['icon'] ?>"></i> <?= $item['title'] ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </nav>
</header>