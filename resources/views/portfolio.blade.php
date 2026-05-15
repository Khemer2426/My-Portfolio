<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            scroll-behavior: smooth;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f8f9fa;
            overflow-x: hidden;
        }
        .navbar {
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%) !important;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            color: #00d4ff !important;
        }
        .nav-link {
            transition: all 0.3s ease !important;
            color: #e0e0e0 !important;
            margin: 0 8px;
        }
        .nav-link:hover {
            color: #00d4ff !important;
            transform: translateY(-2px);
        }
        .hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 120px 0;
            position: relative;
            overflow: hidden;
        }
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            right: -50%;
            width: 600px;
            height: 600px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(20px); }
        }
        .hero h1 {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 15px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
            animation: slideInDown 0.8s ease;
        }
        @keyframes slideInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .hero p {
            font-size: 1.4rem;
            margin-bottom: 30px;
            opacity: 0.95;
            animation: slideInUp 0.8s ease 0.2s forwards;
            opacity: 0;
        }
        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .btn-light {
            background: white !important;
            border: none;
            padding: 12px 40px;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }
        .btn-light:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        }
        .section {
            padding: 40px 0;
        }
        .section h2 {
            font-weight: 800;
            font-size: 2.5rem;
            margin-bottom: 50px;
            position: relative;
            display: inline-block;
            width: 100%;
            text-align: center;
        }
        .section h2::after {
            content: '';
            display: block;
            width: 60px;
            height: 4px;
            background: linear-gradient(90deg, #667eea, #764ba2);
            margin: 15px auto 0;
            border-radius: 2px;
        }
        .profile-img {
            width: 250px;
            height: 250px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid #667eea;
            box-shadow: 0 10px 40px rgba(102, 126, 234, 0.3);
            transition: all 0.3s ease;
        }
        .profile-img:hover {
            transform: scale(1.05) rotateY(5deg);
            box-shadow: 0 15px 50px rgba(102, 126, 234, 0.5);
        }
        .workspace-img {
            width: 100%;
            max-height: 100%;
            object-fit: cover;
            border-radius: 12px;
            box-shadow: 0 10px 35px rgba(0, 0, 0, 0.12);
            margin-top: 24px;
        }
        .skill-bar {
            background: #e0e0e0;
            border-radius: 10px;
            height: 25px;
            margin-bottom: 15px;
            overflow: hidden;
            position: relative;
        }
        .skill-fill {
            background: linear-gradient(90deg, #667eea, #764ba2);
            height: 100%;
            border-radius: 10px;
            animation: fillBar 1.5s ease forwards;
            box-shadow: 0 2px 10px rgba(102, 126, 234, 0.3);
        }
        @keyframes fillBar {
            from {
                width: 0 !important;
            }
        }
        .skill-label {
            display: flex;
            justify-content: space-between;
            margin-bottom: 5px;
        }
        .skill-label strong {
            color: #333;
            font-weight: 600;
        }
        .skill-percentage {
            color: #667eea;
            font-weight: 600;
        }
        .experience-card {
            border-left: 5px solid #667eea;
            padding: 25px;
            margin-bottom: 25px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }
        .experience-card:hover {
            transform: translateX(10px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.2);
        }
        .experience-card h5 {
            color: #667eea;
            margin-bottom: 8px;
            font-weight: 700;
        }
        .experience-card .job-title {
            font-weight: 700;
            font-size: 1.1rem;
            color: #333;
            margin-bottom: 8px;
        }
        .experience-card .job-dates {
            color: #999;
            font-size: 0.95rem;
            margin-bottom: 15px;
        }
        .experience-card p {
            color: #555;
            line-height: 1.7;
        }
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            height: 100%;
            overflow: hidden;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 35px rgba(102, 126, 234, 0.25);
        }
        .card-img-top {
            height: 200px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        .card:hover .card-img-top {
            transform: scale(1.05);
        }
        .card-body {
            padding: 20px;
        }
        .card-title {
            font-weight: 700;
            color: #333;
            margin-bottom: 12px;
        }
        .card-text {
            color: #666;
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 15px;
        }
        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            padding: 8px 20px;
            border-radius: 25px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
        }
        .expertise-item {
            padding: 10px 0;
            color: #555;
            font-size: 1.05rem;
            transition: all 0.3s ease;
        }
        .expertise-item:hover {
            color: #667eea;
            padding-left: 10px;
        }
        .contact-info {
            text-align: center;
            padding: 25px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }
        .contact-info:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.2);
        }
        .contact-info h5 {
            color: #667eea;
            font-weight: 700;
            margin-bottom: 12px;
        }
        .contact-info p {
            margin: 0;
            color: #555;
        }
        .contact-info a {
            color: #667eea;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .contact-info a:hover {
            color: #764ba2;
        }
        .form-control {
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            padding: 12px 15px;
            transition: all 0.3s ease;
        }
        .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        }
        .form-label {
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
        }
        footer {
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
            padding: 30px 0 !important;
        }
        footer p {
            margin: 0;
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">My Portfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link" href="#experience">Experience</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#education">Education</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero text-center">
        <div class="container">
            <h1 class="display-4">Hi, I'm Khemer Jay Deguinion</h1>
            <p class="lead">WordPress Developer & Laravel Specialist</p>
            <a href="#contact" class="btn btn-light btn-lg">Get In Touch</a>
        </div>
    </section>

    <section id="about" class="section bg-light">
        <div class="container">
            <h2 class="text-center mb-5">About Me</h2>
            <div class="row align-items-center">
                {{-- <div class="col-md-5 text-center mb-4 mb-md-0">
                    <img src="/media/my-portfolio/KHEMER JAY DEGUINION.jpeg" alt="Profile Picture" class="profile-img">
                </div> --}}
                <div class="col-md-12">
                    <p style="font-size: 1.1rem; color: #555; line-height: 1.8; margin-bottom: 20px;">
                        I am a passionate WordPress and Laravel Developer with experience in building clean, responsive, and user-friendly websites and web applications. I enjoy creating modern digital solutions that are both visually appealing and functional, ensuring smooth performance and a great user experience across all devices. I am dedicated to writing organized and maintainable code while continuously improving my skills in web development and learning new technologies.
                    </p>

                    <p style="font-size: 1.1rem; color: #555; line-height: 1.8; margin-bottom: 20px;">
                        I have experience working with custom WordPress themes, plugin integration, Laravel-based systems, real estate websites, e-commerce platforms, and government projects. My background includes both front-end and back-end development, allowing me to handle website design, functionality, database management, API integration, and system customization. I am also experienced in maintaining and optimizing websites to improve speed, security, and overall performance.
                    </p>

                    <p style="font-size: 1.1rem; color: #555; line-height: 1.8;">
                        Throughout my projects, I have collaborated with teams using tools such as Git, SourceTree, Slack, and Visual Studio Code to ensure efficient development workflows and successful project delivery. I am passionate about transforming ideas into practical and reliable web solutions that meet client and user needs. I always aim to deliver high-quality work, pay attention to detail, and stay updated with the latest trends and best practices in WordPress, Laravel, and modern web development.
                    </p>
                </div>
            </div>
        </div>
    </section>
{{-- 
    <section id="workspace" class="section">
        <div class="container">
            <h2 class="text-center mb-5">Workspace Setup</h2>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <img src="/media/my-portfolio/workspace-setup.jpg" alt="Developer workspace setup" class="workspace-img">
                </div>
            </div>
        </div>
    </section> --}}

    <section id="skills" class="section">
        <div class="container">
            <h2 class="text-center mb-5">Skills & Expertise</h2>
            <div class="row">
                <div class="col-md-6">
                    <h4 style="font-weight: 700; color: #333; margin-bottom: 30px;"><i class="fas fa-code" style="color: #667eea; margin-right: 10px;"></i>Technical Skills</h4>
                    <div class="mb-4">
                        <div class="skill-label">
                            <strong>WordPress</strong>
                            <span class="skill-percentage">95%</span>
                        </div>
                        <div class="skill-bar"><div class="skill-fill" style="width: 95%;"></div></div>
                    </div>
                    <div class="mb-4">
                        <div class="skill-label">
                            <strong>PHP</strong>
                            <span class="skill-percentage">94%</span>
                        </div>
                        <div class="skill-bar"><div class="skill-fill" style="width: 94%;"></div></div>
                    </div>
                    <div class="mb-4">
                        <div class="skill-label">
                            <strong>HTML/CSS</strong>
                            <span class="skill-percentage">97%</span>
                        </div>
                        <div class="skill-bar"><div class="skill-fill" style="width: 97%;"></div></div>
                    </div>
                    <div class="mb-4">
                        <div class="skill-label">
                            <strong>JavaScript/jQuery</strong>
                            <span class="skill-percentage">88%</span>
                        </div>
                        <div class="skill-bar"><div class="skill-fill" style="width: 88%;"></div></div>
                    </div>
                    <div class="mb-4">
                        <div class="skill-label">
                            <strong>Laravel</strong>
                            <span class="skill-percentage">94%</span>
                        </div>
                        <div class="skill-bar"><div class="skill-fill" style="width: 94%;"></div></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4 style="font-weight: 700; color: #333; margin-bottom: 30px;"><i class="fas fa-star" style="color: #667eea; margin-right: 10px;"></i>Expertise</h4>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="expertise-item"><i class="fas fa-check-circle" style="color: #667eea; margin-right: 10px;"></i>Cloud AI & Codex</div>
                                <div class="expertise-item"><i class="fas fa-check-circle" style="color: #667eea; margin-right: 10px;"></i>WordPress Development</div>
                                <div class="expertise-item"><i class="fas fa-check-circle" style="color: #667eea; margin-right: 10px;"></i>Laravel Framework</div>
                                <div class="expertise-item"><i class="fas fa-check-circle" style="color: #667eea; margin-right: 10px;"></i>Git-based workflow</div>
                                <div class="expertise-item"><i class="fas fa-check-circle" style="color: #667eea; margin-right: 10px;"></i>REST API Integration</div>
                                <div class="expertise-item"><i class="fas fa-check-circle" style="color: #667eea; margin-right: 10px;"></i>Github</div>
                                <div class="expertise-item"><i class="fas fa-check-circle" style="color: #667eea; margin-right: 10px;"></i>Plugins Setup</div>
                                <div class="expertise-item"><i class="fas fa-check-circle" style="color: #667eea; margin-right: 10px;"></i>Custom Theme Development</div>
                            </div>
                            <div class="col-sm-6">
                                <div class="expertise-item"><i class="fas fa-check-circle" style="color: #667eea; margin-right: 10px;"></i>ACF</div>
                                <div class="expertise-item"><i class="fas fa-check-circle" style="color: #667eea; margin-right: 10px;"></i>Elementor Builder</div>
                                <div class="expertise-item"><i class="fas fa-check-circle" style="color: #667eea; margin-right: 10px;"></i>Gutenberg Block Editor</div>
                                <div class="expertise-item"><i class="fas fa-check-circle" style="color: #667eea; margin-right: 10px;"></i>Shortcodes</div>
                                <div class="expertise-item"><i class="fas fa-check-circle" style="color: #667eea; margin-right: 10px;"></i>Responsive Design</div>
                                <div class="expertise-item"><i class="fas fa-check-circle" style="color: #667eea; margin-right: 10px;"></i>Asure</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="experience" class="section bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Work Experience</h2>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="experience-card">
                        <div style="display: flex; align-items: start;">
                            <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #667eea, #764ba2); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: white; margin-right: 15px; flex-shrink: 0;">
                                <i class="fas fa-graduation-cap" style="font-size: 1.5rem;"></i>
                            </div>
                            <div style="flex: 1;">
                                <h5>WSAP</h5>
                                <div class="job-title">WordPress Developer Intern</div>
                                <div class="job-dates"><i class="fas fa-calendar" style="margin-right: 8px; color: #667eea;"></i>February 2022 - May 2022</div>
                                <p>Contributed to the development and customization of WordPress websites, plugins, and themes. Implemented front-end designs using HTML, CSS, and JavaScript, ensuring responsive and user-friendly interfaces. Collaborated with senior developers to address technical challenges, optimize website performance, and stay abreast of WordPress trends and best practices.</p>
                            </div>
                        </div>
                    </div>
                    <div class="experience-card">
                        <div style="display: flex; align-items: start;">
                            <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #667eea, #764ba2); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: white; margin-right: 15px; flex-shrink: 0;">
                                <i class="fas fa-code" style="font-size: 1.5rem;"></i>
                            </div>
                            <div style="flex: 1;">
                                <h5>Webee Labs</h5>
                                <div class="job-title">WordPress Developer</div>
                                <div class="job-dates"><i class="fas fa-calendar" style="margin-right: 8px; color: #667eea;"></i>June 2022 - Present</div>
                                <p>Specialized in WordPress development, focusing on creating responsive websites adaptable to various screen sizes. Explored Gutenberg for intuitive content creation and utilized shortcodes to efficiently add dynamic elements. Worked extensively with templates and custom themes, tailoring designs to meet client needs and enhance user experience. Contributed in team meetings to improve development processes.</p>
                            </div>
                        </div>
                    </div>
                    <div class="experience-card">
                        <div style="display: flex; align-items: start;">
                            <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #667eea, #764ba2); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: white; margin-right: 15px; flex-shrink: 0;">
                                <i class="fas fa-code" style="font-size: 1.5rem;"></i>
                            </div>
                            <div style="flex: 1;">
                                <h5>Born Digital</h5>
                                <div class="job-title">Laravel Developer</div>
                                <div class="job-dates"><i class="fas fa-calendar" style="margin-right: 8px; color: #667eea;"></i>June 2022 - Present</div>
                                <p>Specialized in Laravel development, focusing on creating robust and scalable web applications. Explored the latest features of the Laravel framework and utilized its powerful tools to build efficient and maintainable code. Collaborated with cross-functional teams to deliver high-quality software solutions that meet client requirements and enhance user experience.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="section bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Featured Projects</h2>
            <div class="row g-4">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        {{-- <img src="/media/my-portfolio/projects/nicheave.png" class="card-img-top" alt="NicheAve"> --}}
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-home" style="margin-right: 8px; color: #667eea;"></i>NicheAve</h5>
                            <p class="card-text">Real Estate Website - Custom WordPress theme with advanced property listings and search functionality.</p>
                            <a href="https://nicheave.com/" class="btn btn-primary" target="_blank"><i class="fas fa-external-link-alt" style="margin-right: 5px;"></i>View Project</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        {{-- <img src="/media/my-portfolio/projects/excel-homes.png" class="card-img-top" alt="Excel Homes"> --}}
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-building" style="margin-right: 8px; color: #667eea;"></i>Excel Homes</h5>
                            <p class="card-text">Real Estate Website - Responsive design with property showcase and lead generation features.</p>
                            <a href="https://www.excel.com.mt/" class="btn btn-primary" target="_blank"><i class="fas fa-external-link-alt" style="margin-right: 5px;"></i>View Project</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        {{-- <img src="/media/my-portfolio/projects/memo.png" class="card-img-top" alt="Memo"> --}}
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-shopping-cart" style="margin-right: 8px; color: #667eea;"></i>Memo</h5>
                            <p class="card-text">E-commerce Website - Full-featured online store with product catalog and shopping cart.</p>
                            <a href="https://memolocks.com/" class="btn btn-primary" target="_blank"><i class="fas fa-external-link-alt" style="margin-right: 5px;"></i>View Project</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        {{-- <img src="/media/my-portfolio/projects/ben-estates.png" class="card-img-top" alt="Ben Estates"> --}}
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-landmark" style="margin-right: 8px; color: #667eea;"></i>Ben Estates</h5>
                            <p class="card-text">Real Estate Website - Premium listing platform with advanced filtering and property details.</p>
                            <a href="https://benestates.com/" class="btn btn-primary" target="_blank"><i class="fas fa-external-link-alt" style="margin-right: 5px;"></i>View Project</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        {{-- <img src="/media/my-portfolio/projects/fit-fuel.png" class="card-img-top" alt="Fit Fuel"> --}}
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-dumbbell" style="margin-right: 8px; color: #667eea;"></i>Fit Fuel</h5>
                            <p class="card-text">E-commerce Website - Health and fitness products store with subscription options.</p>
                            <a href="https://fitfuelmalta.com/" class="btn btn-primary" target="_blank"><i class="fas fa-external-link-alt" style="margin-right: 5px;"></i>View Project</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        {{-- <img src="/media/my-portfolio/projects/agriculture-gov.png" class="card-img-top" alt="Agriculture Gov"> --}}
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-leaf" style="margin-right: 8px; color: #667eea;"></i>Agriculture Gov</h5>
                            <p class="card-text">Government Website - Custom theme for Government of Malta with advanced functionality.</p>
                            <a href="https://agriculture.gov.mt/" class="btn btn-primary" target="_blank"><i class="fas fa-external-link-alt" style="margin-right: 5px;"></i>View Project</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        {{-- <img src="/media/my-portfolio/projects/curriculum.png" class="card-img-top" alt="Curriculum"> --}}
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-book-open" style="margin-right: 8px; color: #667eea;"></i>Curriculum</h5>
                            <p class="card-text">Government education website focused on curriculum resources and public information.</p>
                            <a href="https://curriculum.gov.mt/" class="btn btn-primary" target="_blank"><i class="fas fa-external-link-alt" style="margin-right: 5px;"></i>View Project</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        {{-- <img src="/media/my-portfolio/projects/pixel-for-the-soul.png" class="card-img-top" alt="Pixel for the Soul"> --}}
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-palette" style="margin-right: 8px; color: #667eea;"></i>Pixel for the Soul</h5>
                            <p class="card-text">Creative website showcasing visual content with a polished, responsive user experience.</p>
                            <a href="https://pixelsforthesoul.com/" class="btn btn-primary" target="_blank"><i class="fas fa-external-link-alt" style="margin-right: 5px;"></i>View Project</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        {{-- <img src="/media/my-portfolio/projects/bason-aluminium.png" class="card-img-top" alt="Bason Aluminium"> --}}
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-industry" style="margin-right: 8px; color: #667eea;"></i>Bason Aluminium</h5>
                            <p class="card-text">Business website for aluminium services, built to present products and company details clearly.</p>
                            <a href="https://basonaluminium.com/" class="btn btn-primary" target="_blank"><i class="fas fa-external-link-alt" style="margin-right: 5px;"></i>View Project</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        {{-- <img src="/media/my-portfolio/projects/opm.png" class="card-img-top" alt="OPM"> --}}
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-landmark" style="margin-right: 8px; color: #667eea;"></i>OPM</h5>
                            <p class="card-text">Government website for official public updates, institutional information, and services.</p>
                            <a href="https://opm.gov.mt/" class="btn btn-primary" target="_blank"><i class="fas fa-external-link-alt" style="margin-right: 5px;"></i>View Project</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        {{-- <img src="/media/my-portfolio/projects/public-service.png" class="card-img-top" alt="Public Service"> --}}
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-users" style="margin-right: 8px; color: #667eea;"></i>Public Service</h5>
                            <p class="card-text">Government service portal designed for accessible information and public-sector communication.</p>
                            <a href="https://publicservice.gov.mt/" class="btn btn-primary" target="_blank"><i class="fas fa-external-link-alt" style="margin-right: 5px;"></i>View Project</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        {{-- <img src="/media/my-portfolio/projects/lifelong-learning.png" class="card-img-top" alt="Lifelong Learning"> --}}
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-graduation-cap" style="margin-right: 8px; color: #667eea;"></i>Lifelong Learning</h5>
                            <p class="card-text">Education website supporting learning programs, course information, and public resources.</p>
                            <a href="https://lifelonglearning.gov.mt/" class="btn btn-primary" target="_blank"><i class="fas fa-external-link-alt" style="margin-right: 5px;"></i>View Project</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        {{-- <img src="/media/my-portfolio/projects/ntg.png" class="card-img-top" alt="NTG"> --}}
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-network-wired" style="margin-right: 8px; color: #667eea;"></i>NTG</h5>
                            <p class="card-text">Government platform built to organize key information and make public content easier to access.</p>
                            <a href="https://ntg.gov.mt/" class="btn btn-primary" target="_blank"><i class="fas fa-external-link-alt" style="margin-right: 5px;"></i>View Project</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        {{-- <img src="/media/my-portfolio/projects/non-state-school.png" class="card-img-top" alt="Non State School"> --}}
                        <div class="card-body">
                            <h5 class="card-title"><i class="fab fa-laravel" style="margin-right: 8px; color: #667eea;"></i>Non State School</h5>
                            <p class="card-text">Laravel project for education services and non-state school information management.</p>
                            <a href="https://education-ips.gov.mt/" class="btn btn-primary" target="_blank"><i class="fas fa-external-link-alt" style="margin-right: 5px;"></i>View Project</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="education" class="section bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Education</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="experience-card">
                        <div style="display: flex; align-items: start;">
                            <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #667eea, #764ba2); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: white; margin-right: 15px; flex-shrink: 0;">
                                <i class="fas fa-university" style="font-size: 1.5rem;"></i>
                            </div>
                            <div style="flex: 1;">
                                <h5>Davao del Norte State College</h5>
                                <div class="job-title">Bachelor of Science in Information Technology (BSIT)</div>
                                <div class="job-dates"><i class="fas fa-calendar" style="margin-right: 8px; color: #667eea;"></i>August 2018 - June 2023</div>
                            </div>
                        </div>
                    </div>
                    <div class="experience-card">
                        <div style="display: flex; align-items: start;">
                            <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #667eea, #764ba2); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: white; margin-right: 15px; flex-shrink: 0;">
                                <i class="fas fa-book" style="font-size: 1.5rem;"></i>
                            </div>
                            <div style="flex: 1;">
                                <h5>La Paz National High School</h5>
                                <div class="job-title">Secondary Education</div>
                                <div class="job-dates"><i class="fas fa-calendar" style="margin-right: 8px; color: #667eea;"></i>2012 - 2018</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="section">
        <div class="container">
            <h2 class="text-center mb-5">Get In Touch</h2>
            <div class="row mb-4">
                <div class="col-md-4 mb-4">
                    <div class="contact-info">
                        <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #667eea, #764ba2); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: white; margin: 0 auto 15px;">
                            <i class="fas fa-phone" style="font-size: 1.5rem;"></i>
                        </div>
                        <h5><i class="fas fa-phone" style="margin-right: 8px;"></i>Phone</h5>
                        <p><a href="tel:09665631269">09665631269</a></p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="contact-info">
                        <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #667eea, #764ba2); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: white; margin: 0 auto 15px;">
                            <i class="fas fa-envelope" style="font-size: 1.5rem;"></i>
                        </div>
                        <h5><i class="fas fa-envelope" style="margin-right: 8px;"></i>Email</h5>
                        <p><a href="mailto:jaykhemer24@gmail.com">jaykhemer24@gmail.com</a></p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="contact-info">
                        <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #667eea, #764ba2); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: white; margin: 0 auto 15px;">
                            <i class="fas fa-map-marker-alt" style="font-size: 1.5rem;"></i>
                        </div>
                        <h5><i class="fas fa-map-marker-alt" style="margin-right: 8px;"></i>Location</h5>
                        <p>Carmen, Davao del Norte, Philippines</p>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-4 mb-4">
                    <div class="contact-info">
                        <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #0077b5, #0077b5); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: white; margin: 0 auto 15px;">
                            <i class="fab fa-linkedin-in" style="font-size: 1.5rem;"></i>
                        </div>
                        <h5><i class="fab fa-linkedin-in" style="margin-right: 8px;"></i>LinkedIn</h5>
                        <p><a href="https://www.linkedin.com/in/khemer-jay-deguinion-a73a55227/" target="_blank">Connect with me</a></p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="contact-info">
                        <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #1877f2, #42a5f5); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: white; margin: 0 auto 15px;">
                            <i class="fab fa-facebook-f" style="font-size: 1.5rem;"></i>
                        </div>
                        <h5><i class="fab fa-facebook-f" style="margin-right: 8px;"></i>Facebook</h5>
                        <p><a href="https://www.facebook.com/khemerjay" target="_blank">Follow me</a></p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="contact-info">
                        <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #1877f2, #42a5f5); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: white; margin: 0 auto 15px;">
                            <i class="fab fa-instagram" style="font-size: 1.5rem;"></i>
                        </div>
                        <h5><i class="fab fa-instagram" style="margin-right: 8px;"></i>Instagram</h5>
                        <p><a href="https://www.instagram.com/khemer24/" target="_blank">Follow me</a></p>
                    </div>
                </div>
            </div>
            <hr style="margin: 40px 0;">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h5 class="text-center mb-4" style="font-weight: 700; color: #333;"><i class="fas fa-paper-plane" style="margin-right: 10px; color: #667eea;"></i>Send Me a Message</h5>
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label"><i class="fas fa-user" style="margin-right: 8px; color: #667eea;"></i>Name</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label"><i class="fas fa-envelope" style="margin-right: 8px; color: #667eea;"></i>Email</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label"><i class="fas fa-comment" style="margin-right: 8px; color: #667eea;"></i>Message</label>
                            <textarea class="form-control" id="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100" style="padding: 12px; font-size: 1rem; font-weight: 600;"><i class="fas fa-send" style="margin-right: 8px;"></i>Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
            <p>&copy; 2026 Khemer Jay Deguinion. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
