<section id="projects" class="section projects">
    <div class="container">
        <h2 class="section-title">Projetos Destacados</h2>
        
        <div class="projects-grid" style="display: flex; gap: 32px; flex-wrap: wrap;">
            <?php
            $projects = [
                [
                    'image' => 'project1.jpg',
                    'title' => 'Site de apresentação versão React.js',
                    'description' => 'Site de apresentação desenvolvido na linguagem React',
                    'link' => 'https://react.satochi.com.br/'
                ],
                [
                    'image' => 'project2.jpg',
                    'title' => 'Site de apresentação versão Vue.js',
                    'description' => 'Site de apresentação desenvolvido na linguagem Vue3',
                    'link' => 'https://vue.satochi.com.br/'
                ],
                [
                    'image' => 'whats.jpg',
                    'title' => 'API Automação Whatsapp',
                    'description' => 'API de Automação de mensagens do Whatsapp',
                    'link' => '#'
                ]
            ];
            
            foreach ($projects as $project): ?>
                <div class="project-item" style="flex: 1 1 300px; min-width: 280px; max-width: 350px;">
                    <img src="assets/images/projects/<?php echo $project['image']; ?>" alt="<?php echo $project['title']; ?>">
                    <div class="project-overlay">
                        <h3><?php echo $project['title']; ?></h3>
                        <p><?php echo $project['description']; ?></p>
                        <a href="<?php echo $project['link']; ?>" class="btn btn-outline">Ver Detalhes</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
