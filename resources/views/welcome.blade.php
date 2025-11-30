@extends('layouts.app')

@section('title', 'Kuliah Luar Negeri - Study Abroad')

@section('content')
<!-- Hero Section with Integrated Search -->
<section class="hero-section">
  <div class="container position-relative">
    <div class="row align-items-center">
      <div class="col-lg-6 col-md-12">
        <!-- Trust Badge -->
        <div class="trust-badge">
          Trusted by 10,000+ Students Worldwide
        </div>
        
        <!-- Hero Title -->
        <h1 class="hero-title">
          Start Your Study<br>
          Abroad Journey<br>
          With Confidence
        </h1>
        
        <!-- Hero Subtitle -->
        <p class="hero-subtitle">
          Personalized guidance from self-discovery until you arrive abroad safely. Your dream education is just one step away.
        </p>
        
        <!-- Hero Buttons -->
        <div class="hero-buttons">
          <a href="#consultation" class="btn btn-consultation">
            Book Consultation Now
          </a>
          <a href="#programs" class="btn btn-explore">
            Explore Programs
          </a>
        </div>
        
        <!-- Carousel Dots (Mobile Only) -->
        <div class="carousel-dots d-md-none">
          <div class="carousel-dot active"></div>
          <div class="carousel-dot"></div>
        </div>
        
        <!-- Statistics -->
        <div class="stats-section">
          <div class="row align-items-center g-4">
            <div class="col-auto">
              <div class="stat-item">
                <span class="stat-number">50+</span>
                <span class="stat-label">Partner Universities</span>
              </div>
            </div>
            <div class="col-auto d-none d-md-block">
              <div class="stat-divider"></div>
            </div>
            <div class="col-auto">
              <div class="stat-item">
                <span class="stat-number">95%</span>
                <span class="stat-label">Success Rate</span>
              </div>
            </div>
            <div class="col-auto d-none d-md-block">
              <div class="stat-divider"></div>
            </div>
            <div class="col-auto">
              <div class="stat-item">
                <span class="stat-number">30+</span>
                <span class="stat-label">Countries</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-lg-6 col-md-12 mt-5 mt-lg-0">
        <!-- Hero Image -->
        <div class="hero-image">
          <img src="{{ asset('images/hero-students.png') }}" alt="Students studying abroad" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Overlapping Search/Planning Section -->
<section class="planning-search-section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="planning-search-box">
          <form action="#" method="GET">
            <!-- Single Row with All Form Elements -->
            <div class="search-row mb-3">
              <div class="search-input-wrapper">
                <svg class="search-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9 17A8 8 0 1 0 9 1a8 8 0 0 0 0 16zM18.5 18.5l-4-4" stroke="#999" stroke-width="2" stroke-linecap="round"/>
                </svg>
                <input type="text" class="search-input" placeholder="Masukkan bidang jurusan, contoh: Bisnis">
              </div>
              
              <div class="search-select-wrapper">
                <svg class="select-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M10 2L4 8h12l-6-6zm0 16l6-6H4l6 6z" fill="#999"/>
                </svg>
                <select class="search-select">
                  <option value="">Pilih jenjang studi</option>
                  <option value="bachelor">S1 - Bachelor</option>
                  <option value="master">S2 - Master</option>
                  <option value="phd">S3 - PhD</option>
                  <option value="diploma">Diploma</option>
                </select>
              </div>
              
              <div class="search-select-wrapper">
                <svg class="select-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="10" cy="10" r="8" stroke="#999" stroke-width="2" fill="none"/>
                  <path d="M10 2a8 8 0 0 0 0 16M2 10h16" stroke="#999" stroke-width="2"/>
                </svg>
                <select class="search-select">
                  <option value="">Pilih negara tujuan studi</option>
                  <option value="usa">United States</option>
                  <option value="uk">United Kingdom</option>
                  <option value="australia">Australia</option>
                  <option value="canada">Canada</option>
                  <option value="germany">Germany</option>
                  <option value="japan">Japan</option>
                </select>
              </div>
              
              <button type="submit" class="btn btn-search-inline">Cari</button>
            </div>
            
            <!-- Trending Tags Row -->
            <div class="trending-row">
              <span class="trending-label">Trending:</span>
              <a href="#" class="trending-tag">Psychology</a>
              <a href="#" class="trending-tag">Law</a>
              <a href="#" class="trending-tag">Teaching and Education</a>
              <a href="#" class="trending-tag">MBA</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Services Section -->
<section class="services-section">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-3 col-md-6">
        <div class="service-card">
          <div class="service-icon blue">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
          </div>
          <h5 class="service-title">Konsultasi Personal</h5>
          <p class="service-description">Dengan pakar pendidikan luar negeri</p>
        </div>
      </div>
      
      <div class="col-lg-3 col-md-6">
        <div class="service-card">
          <div class="service-icon purple">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M14 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z"/></svg>
          </div>
          <h5 class="service-title">Bantuan Dokumen</h5>
          <p class="service-description">Dan aplikasi kampus lengkap</p>
        </div>
      </div>
      
      <div class="col-lg-3 col-md-6">
        <div class="service-card">
          <div class="service-icon green">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"/></svg>
          </div>
          <h5 class="service-title">Akses Beasiswa</h5>
          <p class="service-description">Tips part-time & funding</p>
        </div>
      </div>
      
      <div class="col-lg-3 col-md-6">
        <div class="service-card">
          <div class="service-icon orange">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1s-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm2 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg>
          </div>
          <h5 class="service-title">Pendampingan Visa</h5>
          <p class="service-description">Dan akomodasi lengkap</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Journey Steps Section -->
<section class="journey-section">
  <div class="container">
    <!-- Section Header -->
    <div class="journey-header">
      <span class="journey-badge">YOUR JOURNEY</span>
      <h2 class="journey-title">10 Steps to Your Dream University</h2>
      <p class="journey-subtitle">From self-discovery to post-arrival support, we guide you every step of the way</p>
    </div>

    <!-- Steps Grid -->
    <div class="row g-4">
      <!-- Step 01 -->
      <div class="col-lg-custom-5 col-md-4 col-6">
        <div class="step-card">
          <div class="step-icon-wrapper blue-gradient">
            <div class="step-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" viewBox="0 0 24 24"><path d="M12 2L4.5 20.29l.71.71L12 18l6.79 3 .71-.71z"/></svg></div>
          </div>
          <div class="step-number">STEP 01</div>
          <h5 class="step-title">Self-Discovery</h5>
          <p class="step-description">Analyse minat & career exploration</p>
        </div>
      </div>

      <!-- Step 02 -->
      <div class="col-lg-custom-5 col-md-4 col-6">
        <div class="step-card">
          <div class="step-icon-wrapper purple-gradient">
            <div class="step-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" viewBox="0 0 24 24"><path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z"/></svg></div>
          </div>
          <div class="step-number">STEP 02</div>
          <h5 class="step-title">Course Selection</h5>
          <p class="step-description">Find the perfect major for you</p>
        </div>
      </div>

      <!-- Step 03 -->
      <div class="col-lg-custom-5 col-md-4 col-6">
        <div class="step-card">
          <div class="step-icon-wrapper green-gradient">
            <div class="step-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" viewBox="0 0 24 24"><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm0 2.5l6 5.5v7.5h-2v-6H8v6H6V11l6-5.5z"/></svg></div>
          </div>
          <div class="step-number">STEP 03</div>
          <h5 class="step-title">University Matching</h5>
          <p class="step-description">Country & campus selection</p>
        </div>
      </div>

      <!-- Step 04 -->
      <div class="col-lg-custom-5 col-md-4 col-6">
        <div class="step-card">
          <div class="step-icon-wrapper orange-gradient">
            <div class="step-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" viewBox="0 0 24 24"><path d="M14 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11zM8 15h8v2H8zm0-4h8v2H8zm0-4h5v2H8z"/></svg></div>
          </div>
          <div class="step-number">STEP 04</div>
          <h5 class="step-title">English Prep</h5>
          <p class="step-description">IELTS/TOEFL/SAT Guidance</p>
        </div>
      </div>

      <!-- Step 05 -->
      <div class="col-lg-custom-5 col-md-4 col-6">
        <div class="step-card">
          <div class="step-icon-wrapper red-gradient">
            <div class="step-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" viewBox="0 0 24 24"><path d="M14 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V8l-6-6zm-2 16H8v-2h4v2zm4-4H8v-2h8v2zm0-4H8V8h8v2z"/></svg></div>
          </div>
          <div class="step-number">STEP 05</div>
          <h5 class="step-title">Document Prep</h5>
          <p class="step-description">Application & essay support</p>
        </div>
      </div>

      <!-- Step 06 -->
      <div class="col-lg-custom-5 col-md-4 col-6">
        <div class="step-card">
          <div class="step-icon-wrapper indigo-gradient">
            <div class="step-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" viewBox="0 0 24 24"><path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1s-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm0 4c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm6 12H6v-1.4c0-2 4-3.1 6-3.1s6 1.1 6 3.1V19z"/></svg></div>
          </div>
          <div class="step-number">STEP 06</div>
          <h5 class="step-title">Visa Guidance</h5>
          <p class="step-description">Complete admission support</p>
        </div>
      </div>

      <!-- Step 07 -->
      <div class="col-lg-custom-5 col-md-4 col-6">
        <div class="step-card">
          <div class="step-icon-wrapper pink-gradient">
            <div class="step-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" viewBox="0 0 24 24"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg></div>
          </div>
          <div class="step-number">STEP 07</div>
          <h5 class="step-title">Accommodation</h5>
          <p class="step-description">Living preparation assistance</p>
        </div>
      </div>

      <!-- Step 08 -->
      <div class="col-lg-custom-5 col-md-4 col-6">
        <div class="step-card">
          <div class="step-icon-wrapper teal-gradient">
            <div class="step-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" viewBox="0 0 24 24"><path d="M11.8 10.9c-2.27-.59-3-1.2-3-2.15 0-1.09 1.01-1.85 2.7-1.85 1.78 0 2.44.85 2.5 2.1h2.21c-.07-1.72-1.12-3.3-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.61 0 2.31 1.91 3.46 4.7 4.13 2.5.6 3 1.48 3 2.41 0 .69-.49 1.79-2.7 1.79-2.06 0-2.87-.92-2.98-2.1h-2.2c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55 0-2.84-2.43-3.81-4.7-4.4z"/></svg></div>
          </div>
          <div class="step-number">STEP 08</div>
          <h5 class="step-title">Financial Planning</h5>
          <p class="step-description">Budget & part-time strategies</p>
        </div>
      </div>

      <!-- Step 09 -->
      <div class="col-lg-custom-5 col-md-4 col-6">
        <div class="step-card">
          <div class="step-icon-wrapper amber-gradient">
            <div class="step-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" viewBox="0 0 24 24"><path d="M21 16v-2l-8-5V3.5c0-.83-.67-1.5-1.5-1.5S10 2.67 10 3.5V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1 3.5 1v-1.5L13 19v-5.5l8 2.5z"/></svg></div>
          </div>
          <div class="step-number">STEP 09</div>
          <h5 class="step-title">Pre-Departure</h5>
          <p class="step-description">Onboarding abroad readiness</p>
        </div>
      </div>

      <!-- Step 10 -->
      <div class="col-lg-custom-5 col-md-4 col-6">
        <div class="step-card">
          <div class="step-icon-wrapper cyan-gradient">
            <div class="step-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" viewBox="0 0 24 24"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5s-3 1.34-3 3 1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg></div>
          </div>
          <div class="step-number">STEP 10</div>
          <h5 class="step-title">Post-Arrival</h5>
          <p class="step-description">Support & community access</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Countries Section -->
<section class="countries-section">
  <div class="container">
    <!-- Section Header -->
    <div class="countries-header">
      <h2 class="countries-title">Negara tujuan studi impian Anda menanti</h2>
      <p class="countries-subtitle">Mulai perjalanan akademik Anda yang inspiratif di negara yang penuh warna berikut ini</p>
    </div>

    <!-- Countries Grid -->
    <div class="row g-4">
      <!-- Australia -->
      <div class="col-lg-4 col-md-6">
        <div class="country-card">
          <div class="country-image" style="background-image: url('{{ asset('images/countries/australia.png') }}');">
            <div class="country-overlay">
              <h3 class="country-name">Australia</h3>
            </div>
            <div class="country-hover-content">
              <h4 class="country-hover-title">Australia: Perjalanan Anda menuju kesuksesan</h4>
              <p class="country-hover-description">Jadilah bagian dari komunitas yang beragam dengan pendidikan kelas dunia di lingkungan yang aman dan mendukung.</p>
              <a href="#" class="btn btn-country">Studi di Australia</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Canada -->
      <div class="col-lg-4 col-md-6">
        <div class="country-card">
          <div class="country-image" style="background-image: url('{{ asset('images/countries/canada.png') }}');">
            <div class="country-overlay">
              <h3 class="country-name">Kanada</h3>
            </div>
            <div class="country-hover-content">
              <h4 class="country-hover-title">Kanada: Perjalanan Anda menuju kesuksesan</h4>
              <p class="country-hover-description">Jadilah bagian dari komunitas yang beragam dengan pendidikan kelas dunia di lingkungan yang aman dan mendukung.</p>
              <a href="#" class="btn btn-country">Studi di Kanada</a>
            </div>
          </div>
        </div>
      </div>

      <!-- New Zealand -->
      <div class="col-lg-4 col-md-6">
        <div class="country-card">
          <div class="country-image" style="background-image: url('{{ asset('images/countries/selandia_baru.png') }}');">
            <div class="country-overlay">
              <h3 class="country-name">Selandia Baru</h3>
            </div>
            <div class="country-hover-content">
              <h4 class="country-hover-title">Selandia Baru: Perjalanan Anda menuju kesuksesan</h4>
              <p class="country-hover-description">Jadilah bagian dari komunitas yang beragam dengan pendidikan kelas dunia di lingkungan yang aman dan mendukung.</p>
              <a href="#" class="btn btn-country">Studi di Selandia Baru</a>
            </div>
          </div>
        </div>
      </div>

      <!-- United Kingdom -->
      <div class="col-lg-4 col-md-6">
        <div class="country-card">
          <div class="country-image" style="background-image: url('{{ asset('images/countries/inggris.png') }}');">
            <div class="country-overlay">
              <h3 class="country-name">Inggris</h3>
            </div>
            <div class="country-hover-content">
              <h4 class="country-hover-title">Inggris: Perjalanan Anda menuju kesuksesan</h4>
              <p class="country-hover-description">Jadilah bagian dari komunitas yang beragam dengan pendidikan kelas dunia di lingkungan yang aman dan mendukung.</p>
              <a href="#" class="btn btn-country">Studi di Inggris</a>
            </div>
          </div>
        </div>
      </div>

      <!-- United States -->
      <div class="col-lg-4 col-md-6">
        <div class="country-card">
          <div class="country-image" style="background-image: url('{{ asset('images/countries/amerika_serikat.png') }}');">
            <div class="country-overlay">
              <h3 class="country-name">Amerika Serikat</h3>
            </div>
            <div class="country-hover-content">
              <h4 class="country-hover-title">Amerika Serikat: Perjalanan Anda menuju kesuksesan</h4>
              <p class="country-hover-description">Jadilah bagian dari komunitas yang beragam dengan pendidikan kelas dunia di lingkungan yang aman dan mendukung.</p>
              <a href="#" class="btn btn-country">Studi di Amerika Serikat</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Ireland -->
      <div class="col-lg-4 col-md-6">
        <div class="country-card">
          <div class="country-image" style="background-image: url('{{ asset('images/countries/irlandia.png') }}');">
            <div class="country-overlay">
              <h3 class="country-name">Irlandia</h3>
            </div>
            <div class="country-hover-content">
              <h4 class="country-hover-title">Irlandia: Perjalanan Anda menuju kesuksesan</h4>
              <p class="country-hover-description">Jadilah bagian dari komunitas yang beragam dengan pendidikan kelas dunia di lingkungan yang aman dan mendukung.</p>
              <a href="#" class="btn btn-country">Studi di Irlandia</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
