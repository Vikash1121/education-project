 @extends('frontend_layout.master')

 @section('content')
 
 
 <section class="home animated">
        <div class="home-detail">
            <h1>Hi, I'm Vikash Kumar</h1><br>
            <h2>Frontend Developer &</h2>
            <h2>Wordpress Developer</h2><br>
            <p>I am continuously learning new tools and frameworks to improve my skills and stay updated with industry trends. My goal is to grow as a developer and contribute to building impactful and high-quality web applications..</p>
            <div class="download-social">
                <a href="{{asset('frontend/VIKASH.pdf')}}" class="btn"> Download CV</a>
                <div class="social-icons">
                    <a href="https://wa.me/917392957078"><i class="ri-whatsapp-line"></i>
                    <a href="https://www.linkedin.com/in/vikash-kumar014"><i class="ri-linkedin-fill"></i></a>
                    <a href="tel:+917392957078"><i class="ri-phone-line"></i>
                    <a href="mailto:vikashk57387@gmail.com"><i class="ri-mail-line"></i>
                </div>
            </div>
        </div>
        <div class="home-img">
            <div class="img-box">
                <img src="{{asset('frontend/Home.png.jpeg')}}">
            </div>
        </div>       
    </section>
    <section id="about" class="about-section">
    <div class="section-heading">
        <h2>About Me</h2>
        <span>Who I Am</span>
    </div>

    <div class="about-wrapper">

        <div class="about-image">
            <img src="{{asset('frontend/Home.png.jpeg')}}" alt="Vikash Kumar">
        </div>

        <div class="about-text">
            <h3>Web Developer</h3>

            <p>
                I'm Vikash Kumar, a passionate Web Developer with knowledge of
                HTML, CSS, JavaScript, Bootstrap, WordPress, MySQL, PHP, and
                basic backend technologies. I enjoy creating responsive and
                user-friendly websites that deliver excellent user experiences.
            </p>

            <p>
                I completed a professional Web Development course from
                CAD/CAM Computer Solution, Meerut, and worked on real-world
                projects including Nuaav.com and Bluerays Films Production.
                I am always eager to learn new technologies and improve my skills.
            </p>

            <div class="about-info">
                <div><strong>Name:</strong> Vikash Kumar</div>
                <div><strong>Phone:</strong> +91 7392957078</div>
                <div><strong>Email:</strong> vikashk57387@gmail.com</div>
                <div><strong>Experience:</strong> 3+ Months</div>
                <div><strong>Location:</strong> Noida, Uttar Pradesh</div>
                <div><strong>Qualification:</strong> BCA</div>
            </div>

            <a href="{{asset('frontend/VIKASH.pdf')}}" class="btn">
                Download Resume
            </a>

        </div>

    </div>
</section>

<section id="skills" class="skills-section">

    <div class="section-heading">
        <h2>My Skills</h2>
        <span>Technical Expertise</span>
    </div>

    <div class="skills-grid">

        <div class="skill-card">
            <i class="ri-html5-fill"></i>
            <h4>HTML5</h4>
        </div>

        <div class="skill-card">
            <i class="ri-css3-fill"></i>
            <h4>CSS3</h4>
        </div>

        <div class="skill-card">
            <i class="ri-javascript-fill"></i>
            <h4>JavaScript</h4>
        </div>

        <div class="skill-card">
            <i class="ri-bootstrap-fill"></i>
            <h4>Bootstrap</h4>
        </div>

        <div class="skill-card">
            <i class="ri-wordpress-fill"></i>
            <h4>WordPress</h4>
        </div>

        <div class="skill-card">
            <i class="ri-database-2-fill"></i>
            <h4>MySQL</h4>
        </div>

        <div class="skill-card">
            <i class="ri-code-box-fill"></i>
            <h4>PHP</h4>
        </div>

        <div class="skill-card">
            <i class="ri-server-fill"></i>
            <h4>Backend Basics</h4>
        </div>

    </div>

</section>
<section id="experience" class="experience-section">

    <div class="section-heading">
        <h2>Experience</h2>
        <span>Professional Journey</span>
    </div>

    <div class="experience-card">

        <h3>Kaeera Infotechnology Pvt. Ltd.</h3>

        <h4>Web Developer Intern</h4>

        <span>3 Months Experience</span>

        <p>
            Worked on live projects and gained practical experience in
            website development, WordPress customization, frontend
            development, responsive design, and website maintenance.
        </p>

    </div>

</section>
<section id="projects" class="projects-section">

    <div class="section-heading">
        <h2>Projects</h2>
        <span>My Recent Work</span>
    </div>

    <div class="project-grid">

        <div class="project-card">
            <h3>Nuaav.com</h3>
            <p>
                Worked on a live website project focusing on design,
                responsiveness, content updates and user experience.
            </p>
            <a href="https://nuaav.com" target="_blank">
                View Website
            </a>
        </div>

        <div class="project-card">
            <h3>Bluerays Films Production</h3>
            <p>
                Developed and maintained website pages with responsive
                layouts and optimized performance.
            </p>
            <a href="https://blueraysfilmsproduction.com" target="_blank">
                View Website
            </a>
        </div>

        <div class="project-card">
            <h3>Personal Portfolio</h3>
            <p>
                Designed and developed a modern responsive portfolio
                website using HTML, CSS and JavaScript.
            </p>
            <a href="#">
                View Project
            </a>
        </div>

    </div>

</section>
<section id="contact" class="contact-section">

    <div class="section-heading">
        <h2>Contact Me</h2>
        <span>Get In Touch</span>
    </div>

    <div class="contact-box">

        <div class="contact-item">
            <i class="ri-phone-fill"></i>
            <span>+91 7392957078</span>
        </div>

        <div class="contact-item">
            <i class="ri-mail-fill"></i>
            <span>vikashk57387@gmail.com</span>
        </div>

        <div class="contact-item">
            <i class="ri-map-pin-fill"></i>
            <span>Noida, Uttar Pradesh</span>
        </div>

        <div class="contact-item">
            <i class="ri-linkedin-fill"></i>
            <span>linkedin.com/in/vikash-kumar</span>
        </div>

    </div>

</section>

@endsection