<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME; ?></title>
    <meta name="description" content="<?php echo SITE_DESCRIPTION; ?>">
    <link rel="stylesheet" href="<?php echo ASSETS_URL; ?>css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container header-flex">
            <nav class="navbar">
                <?php include 'navigation.php'; ?>
            </nav>
            <div class="header-icons" style="gap: 20px; display: flex; align-items: center;">
                <?php foreach ($social_links as $platform => $url): ?>
                    <a href="<?php echo $url; ?>" target="_blank" rel="noopener noreferrer" title="<?php echo ucfirst($platform); ?>">
                        <i class="fa-brands fa-<?php echo $platform; ?>" aria-hidden="true" style="color: <?php echo getSocialColor($platform); ?>; font-size: 1.5rem;"></i>
                    </a>
                <?php endforeach; ?>
                <style>
                    .header .navbar ul li a {
                        font-size: 1.2rem;
                        font-weight: 500;
                    }
                </style>
            </div>
            <div class="mobile-menu">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

<?php
// Função auxiliar para cores das redes sociais
function getSocialColor($platform) {
    $colors = [
        'github' => '#181717',
        'linkedin' => '#0077b5',
        'discord' => '#5865F2'
    ];
    return $colors[$platform] ?? '#000000';
}
?>
