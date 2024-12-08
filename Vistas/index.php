<?php 
$title = "Inicio";
ob_start(); 
?>
<body>
<main class="main-content">
        <section class="module-card" id="mascotas">
            <h2>Gestión de Mascotas</h2>
            <div class="card-content">
                <button class="action-button">Crear Mascota</button>
                <div class="pet-gallery">
                    <div class="pet-card">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQGV2eT6hK046EbobNQML2uHqCXbtmhn-jNNg&s"
                            alt="Perrito 1" class="pet-image">
                        <h3>Luna</h3>
                        <p>Disponible para adopción</p>
                    </div>
                    <div class="pet-card">
                        <img src="data:image/jpeg;base64,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"
                            alt="Gatito 1" class="pet-image">
                        <h3>Michi</h3>
                        <p>En proceso de adopción</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="module-card" id="usuarios">
            <h2>Gestión de Usuarios</h2>
            <div class="card-content">

                <form id="form-cuestionario">

                    <label for="userName">Nombre del Usuario:</label>
                    <input type="text" id="userName" name="userName" required>

                    <label for="userEmail">Correo Electrónico:</label>
                    <input type="email" id="userEmail" name="userEmail" required>

                    <label for="userRole">Rol:</label>
                    <select id="userRole" name="userRole" required>
                        <option value="">Seleccione un rol</option>
                        <option value="admin">Administrador</option>
                        <option value="editor">Editor</option>
                        <option value="viewer">Visor</option>
                    </select>
                    <button class="action-button">Crear Usuario</button>
            </div>
                  
        </section>

        <section class="module-card" id="cuestionarios">
            <h2>Cuestionarios de Evaluación</h2>
            <div class="card-content">
                <label for="adopterName">Nombre del Adoptante:</label>
                <input type="text" id="adopterName" name="adopterName" required>

                <label for="adopterEmail">Correo Electrónico:</label>
                <input type="email" id="adopterEmail" name="adopterEmail" required>

                <label for="petName">Nombre de la Mascota:</label>
                <input type="text" id="petName" name="petName" required>

                <label for="commitment">¿Está comprometido a cuidar a la mascota a largo plazo?</label>
                <select id="commitment" name="commitment" required>
                    <option value="">Seleccione una opción</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                </select>

                <label for="timeAvailable">¿Cuánto tiempo puede dedicarle a su mascota diariamente?</label>
                <input type="text" id="timeAvailable" name="timeAvailable" placeholder="Ej: 2 horas" required>

                <label for="priorExperience">¿Tiene experiencia previa con el cuidado de mascotas?</label>
                <select id="priorExperience" name="priorExperience" required>
                    <option value="">Seleccione una opción</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                </select>

                <button class="action-button">Crear Cuestionario</button>
            </div>
                  
        </section>
    </main>

    <script src="C:\Users\camim\Documents\proyecto_adopcion\script.js"></script>
    </body>
<?php
$content = ob_get_clean();
include 'layout.php';
?>