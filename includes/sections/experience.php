<section id="experience" class="section experience">
    <div class="container">
        <h2 class="section-title">Experiência Profissional</h2>
        
        <div class="timeline">
            <?php
            $experiences = [
                [
                    'period' => '2025 - Presente',
                    'company' => 'Adelco Sistema de Energia',
                    'position' => 'Coodenador de TI',
                    'description' => 'Liderança de equipes multidisciplinares no desenvolvimento do ERP Protheus da TOTVS.'
                ],
                [
                    'period' => '2024 - 2025',
                    'company' => 'Terra Nova Logistica',
                    'position' => 'Coordenador de TI',
                    'description' => 'Gestão da área de TI, responsavel pela equipe de Infraestrutura, Desenvolvimento e BI'
                ],
                // Adicione outras experiências conforme necessário
            ];
            
            foreach ($experiences as $exp): ?>
                <div class="timeline-item">
                    <div class="timeline-date"><?php echo $exp['period']; ?></div>
                    <div class="timeline-content">
                        <h3><?php echo $exp['company']; ?></h3>
                        <h4><?php echo $exp['position']; ?></h4>
                        <p><?php echo $exp['description']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
