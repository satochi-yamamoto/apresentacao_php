<section id="education" class="section education" style="margin-top: 60px; margin-bottom: 60px;">
    <div class="container">
        <h2 class="section-title">Formação Acadêmica</h2>
        <div class="education-grid" style="display: flex; flex-direction: column; gap: 40px;">
            <?php
            $education = [
                [
                    'institution' => 'FMU',
                    'course' => 'Engenharia de Software',
                    'status' => 'Pos Graduação em Curso'
                ],
                [
                    'institution' => 'UNISA - Universidade Santo Amaro',
                    'course' => 'Gestão da Tecnologia da Informação',
                    'status' => 'Graduação completa'
                ],
                [
                    'institution' => 'FESP - Faculdade de engenharia São Paulo',
                    'course' => 'Engenharia Eletrica',
                    'status' => 'Graduação incompleta'
                ]
            ];
            
            foreach ($education as $edu): ?>
                <div class="education-item" style="display: flex; align-items: flex-start; gap: 20px; padding-bottom: 24px; border-bottom: 1px solid #eee;">
                    <div class="education-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div>
                        <h3><?php echo $edu['institution']; ?></h3>
                        <h4><?php echo $edu['course']; ?></h4>
                        <p><?php echo $edu['status']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
