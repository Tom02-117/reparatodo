<?php 
$page_title = "Planes y Suscripciones";
include '../templates/header.php'; 
?>

<section class="section" style="padding-top: 150px;">
    <div class="container">
        <h1 style="text-align:center; font-size: 3.5rem;">Elige tu Plan</h1>
        <p style="text-align:center; max-width: 600px; margin: 0 auto 4rem auto;">Acceso ilimitado al conocimiento. Selecciona el plan que mejor se adapte a tu ritmo de aprendizaje y objetivos.</p>
        
        <div class="pricing-grid">
            <div class="pricing-card">
                <h3>Básico</h3>
                <div class="price">$15<span>/mes</span></div>
                <ul>
                    <li>Acceso a 5 cursos básicos</li>
                    <li>Soporte por comunidad</li>
                    <li>Material descargable</li>
                    <li>Certificado por curso</li>
                </ul>
                <a href="#" class="btn btn-primary">Empezar Ahora</a>
            </div>
            
            <div class="pricing-card highlight">
                <h3>Pro</h3>
                <div class="price">$29<span>/mes</span></div>
                 <ul>
                    <li>Acceso a todo el catálogo</li>
                    <li>Soporte prioritario 24/7</li>
                    <li>Proyectos prácticos calificados</li>
                    <li>Certificados profesionales</li>
                </ul>
                <a href="#" class="btn btn-primary">Elegir Pro</a>
            </div>

            <div class="pricing-card">
                <h3>Empresas</h3>
                <div class="price">Custom<span>/año</span></div>
                 <ul>
                    <li>Capacitación para equipos</li>
                    <li>Panel de seguimiento</li>
                    <li>Cursos personalizados</li>
                    <li>Facturación centralizada</li>
                </ul>
                <a href="#" class="btn btn-primary">Contactar Ventas</a>
            </div>
        </div>
    </div>
</section>

<?php include '../templates/footer.php'; ?>