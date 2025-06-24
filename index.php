<?php
require_once 'includes/config.php';
require_once 'includes/header.php';
require_once 'includes/navigation.php';
?>

<main>
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Alexandre Satochi Yamamoto</h1>
                <h2>Coordenador de Desenvolvimento de Software e TI,</h2>
                <p>+25 anos de atuação na área de TI dos quais 12 anos dedicado a liderança de equipes em projetos de TI e de Desenvolvimento de Softwares</p>
                <div class="hero-cta">
                    <a href="#contact" class="btn btn-primary">Entre em Contato</a>
                    <a href="#experience" class="btn btn-outline">Ver Experiência</a>
                </div>
            </div>
            <div class="hero-image">
                <img src="assets/images/avatar.jpg" alt="Alexandre Satochi Yamamoto">
            </div>
        </div>
    </section>

    <?php
    // Incluir todas as seções
    require_once 'includes/sections/about.php';
    require_once 'includes/sections/experience.php';
    require_once 'includes/sections/education.php';
    require_once 'includes/sections/skills.php';
    require_once 'includes/sections/projects.php';
    require_once 'includes/sections/volunteer.php';
    require_once 'includes/sections/contact.php';
    ?>
</main>

<?php
require_once 'includes/footer.php';
?>
