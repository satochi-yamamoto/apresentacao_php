<section id="skills" class="section skills">
    <div class="container">
        <h2 class="section-title">Habilidades</h2>
        
        <div class="skills-grid">
            <?php
            $skills = [
                ['name' => 'Gestão de Projetos', 'level' => 90],
                ['name' => 'AWS', 'level' => 90],
                ['name' => 'Microsoft Azure', 'level' => 100],
                ['name' => 'Oracle Cloud', 'level' => 90],
                ['name' => 'ISO 9001 / ISO 27001', 'level' => 90],
                ['name' => 'Docker', 'level' => 100],
                ['name' => 'Metodologia Agil', 'level' => 100],
                ['name' => 'CI / CD', 'level' => 100],
                ['name' => 'SQL-Server', 'level' => 100],
                ['name' => 'MYSQL', 'level' => 100],
                ['name' => 'PostgreSQL', 'level' => 100],
                ['name' => 'Python / Django', 'level' => 100],
                ['name' => 'PHP / Laravel', 'level' => 100],
                ['name' => 'Node-js', 'level' => 100],
                ['name' => 'Java Script', 'level' => 100],
                ['name' => 'Power BI', 'level' => 100]
            ];
            
            foreach ($skills as $skill): ?>
                <div class="skill-item">
                    <h3><?php echo $skill['name']; ?></h3>
                    <div class="skill-bar">
                        <div class="skill-level" style="width: <?php echo $skill['level']; ?>%"></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
