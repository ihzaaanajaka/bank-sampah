<?php
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bank Sampah Digital</title>

  <!-- AOS Animation -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <!-- SwiperJS Carousel -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

  <style>
    body { margin: 0; font-family: Arial, sans-serif; background: #f4f4f4; color: #333; }
    header { background: #2e8b57; padding: 1rem 2rem; color: white; display: flex; justify-content: space-between; align-items: center; position: sticky; top: 0; z-index: 1000; }
    nav a { color: white; margin: 0 1rem; text-decoration: none; font-weight: bold; transition: 0.3s; }
    nav a:hover { text-decoration: underline; }
    .hero { background: #dff0d8; padding: 4rem 2rem; text-align: center; }
    .hero h1 { font-size: 3rem; color: #2e8b57; animation: float 3s ease-in-out infinite; }
    .hero p { font-size: 1.2rem; }
    .btn { padding: 0.8rem 1.5rem; background: #2e8b57; color: white; border: none; border-radius: 5px; font-size: 1rem; text-decoration: none; transition: background 0.3s; position: relative; overflow: hidden; }
    .btn:hover { background: #246b45; }
    .btn::after {
      content: '';
      position: absolute;
      background: rgba(255, 255, 255, 0.3);
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      transform: skewX(-45deg);
      transition: left 0.5s;
    }
    .btn:hover::after {
      left: 100%;
    }
    .section { padding: 3rem 2rem; background: white; margin: 1rem 0; }
    .section h2 { color: #2e8b57; margin-bottom: 1rem; }
    .section ul li {
      position: relative;
      margin: 0.5rem 0;
      padding-left: 1.5rem;
      transition: transform 0.3s;
    }
    .section ul li:hover {
      transform: scale(1.03);
      color: #246b45;
    }
    footer { background: #2e8b57; color: white; text-align: center; padding: 1rem; margin-top: 2rem; }

    /* Swiper Carousel */
    .swiper { width: 100%; max-width: 600px; margin: auto; }
    .swiper-slide { background: #e0ffe0; padding: 2rem; border-radius: 10px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }

    /* Floating Animation */
    @keyframes float {
      0% { transform: translateY(0px); }
      50% { transform: translateY(-10px); }
      100% { transform: translateY(0px); }
    }
  </style>
</head>
<body>
  <header>
    <div><strong>Bank Sampah Digital</strong></div>
    <nav>
      <a href="index.php">Home</a>
      <a href="edukasi/index.php">Edukasi</a>
      <a href="kontak.php">Kontak</a>
      <a href="login.php">Login</a>
    </nav>
  </header>

  <div class="hero" data-aos="fade-up">
    <h1>Ubah Sampah Jadi Berkah!</h1>
    <p>Gabung sekarang dan kelola sampahmu secara digital sambil mendapatkan poin dan manfaat!</p>
    <a href="daftar.php" class="btn">Gabung Sekarang</a>
  </div>

  <div class="section" data-aos="fade-right">
    <h2>Mengapa Bergabung?</h2>
    <ul>
      <li>Mendapatkan poin dari sampah yang disetorkan</li>
      <li>Melihat riwayat dan jadwal penjemputan secara online</li>
      <li>Mendukung lingkungan bersih dan berkelanjutan</li>
    </ul>
  </div>

  <div class="section" data-aos="fade-left">
    <h2>Edukasi Singkat</h2>
    <div class="swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">♻️ <strong>Organik:</strong> Sampah sisa makanan & daun – bisa dijadikan kompos!</div>
        <div class="swiper-slide">🧴 <strong>Plastik:</strong> Botol, kantong kresek, dan lainnya – bisa didaur ulang!</div>
        <div class="swiper-slide">📄 <strong>Kertas:</strong> Buku bekas, kardus – pisahkan untuk didaur ulang.</div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>

  <footer>
    &copy; 2025 Bank Sampah Digital. All rights reserved.
  </footer>

  <!-- JS Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script>
    AOS.init();
    const swiper = new Swiper('.swiper', {
      loop: true,
      autoplay: { delay: 3000 },
      pagination: { el: '.swiper-pagination', clickable: true },
    });
  </script>
</body>
</html>
