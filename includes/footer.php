<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-logo">
                <a href="#">Alexandre Satochi Yamamoto</a>
            </div>
            <div class="footer-links">
                <ul>
                    <li><a href="#about">Sobre</a></li>
                    <li><a href="#experience">Experiência</a></li>
                    <li><a href="#projects">Projetos</a></li>
                    <li><a href="#contact">Contato</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-copyright">
            <p>&copy; <?php echo date('Y'); ?> Alexandre Satochi Yamamoto. Todos os direitos reservados.</p>
        </div>
    </div>
</footer>

<script src="<?php echo ASSETS_URL; ?>js/script.js"></script>
<script>
// Verifica se o usuário já fez uma escolha
if (!localStorage.getItem('privacyAccepted')) {
  // Mostra o pop-up após 2 segundos
  setTimeout(() => {
    document.getElementById('privacyModal').style.display = 'block';
  }, 2000);
}

// Configura os botões
document.getElementById('acceptPrivacy').addEventListener('click', function() {
  localStorage.setItem('privacyAccepted', 'true');
  document.getElementById('privacyModal').style.display = 'none';
  // Aqui você pode carregar cookies/tracking se necessário
});

document.getElementById('rejectPrivacy').addEventListener('click', function() {
  localStorage.setItem('privacyAccepted', 'false');
  document.getElementById('privacyModal').style.display = 'none';
  // Aqui você pode bloquear cookies/tracking se necessário
});

// Opcional: Link para página de política completa
document.querySelectorAll('.show-privacy').forEach(link => {
  link.addEventListener('click', function(e) {
    e.preventDefault();
    document.getElementById('privacyModal').style.display = 'block';
  });
});
</script>
</body>
</html>
