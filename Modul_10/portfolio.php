<?php include 'includes/header.php'; ?>
<div class="container my-5">
    <h2>My Portfolio</h2>
    <div class="btn-group mb-3" role="group" aria-label="Filter Projects">
        <button class="btn btn-primary" onclick="filterProjects('all')">All</button>
        <button class="btn btn-secondary" onclick="filterProjects('web')">Web Development</button>
        <button class="btn btn-secondary" onclick="filterProjects('design')">Graphic Design</button>
    </div>

    <div id="portfolio-gallery" class="row">
        <!-- Example Project -->
        <div class="col-md-4 portfolio-item" data-category="web">
            <div class="card">
                <img src="assets/img/projek1.png" class="card-img-top" alt="Project 1">
                <div class="card-body">
                    <h5 class="card-title">Front End Web Develover</h5>
                    <p class="card-text">"Berhasil menyelesaikan pelatihan Front-End Web Developer sebagai bagian dari upaya pengembangan diri. Pelatihan ini memperkuat pemahaman dalam HTML, CSS, dan JavaScript, serta framework modern, yang mendukung kemampuan untuk membangun antarmuka web yang responsif dan user-friendly. Langkah ini menjadi pondasi penting dalam perjalanan profesional di bidang pengembangan web."</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 portfolio-item" data-category="design">
            <div class="card">
                <img src="assets/img/Projek2.jpg" class="card-img-top" alt="Project 2">
                <div class="card-body">
                    <h5 class="card-title">UI/UX Design</h5>
                    <p class="card-text">"Menjuarai kompetisi UI/UX Design di Lomba Sisfo 2023 merupakan langkah besar dalam mengembangkan keterampilan desain digital. Pengalaman ini menjadi peluang untuk menggali lebih dalam tentang kebutuhan pengguna, memperluas wawasan teknologi, dan meningkatkan kemampuan kolaborasi dalam tim untuk menciptakan solusi yang inovatif dan bermanfaat."</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function filterProjects(category) {
        const items = document.querySelectorAll('.portfolio-item');
        items.forEach(item => {
            item.style.display = category === 'all' || item.getAttribute('data-category') === category ? 'block' : 'none';
        });
    }
</script>
<?php include 'includes/footer.php'; ?>
