<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywors" content="joshua garia web-development design build">
    <meta name="development" content="Personal site of joshua garcia.Display skills of web development.">
    <meta name="author" content="Joshua Garcia">
    <!-- <link rel="stylesheet" href="./styles/reset-style.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./styles/lighting-slider.css">
    <link rel="stylesheet" href="./styles/style-breaks.css"> -->
    <link rel="stylesheet" href="./styles/style-collective.css">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <title>Joshua Garcia</title>
</head>
<body>
    <div class="header-name-display">
        <header>Joshua Garcia</header>
        <span>WEB DEVELOPER</span>
        <div class="slider-bin">
            <p>dark-mode</p>
            <label class="switch">
            <input type="checkbox" id="dark-mode">
            <span class="slider round"></span>
            </label>
        </div>
    </div>
    <main>

        <div class="box-flex" id="info-skills">
        <div class="about-me-container">
            <div>
            <h1>I'm self taught allways learning, this is a great passion I have and will continue to progress.</h1>
            <div class="links-container">
                <a href="#form-bin">Contact me</a>
                <a href="https://github.com/rivveneyes" target="_blank" rel="noopener noreferrer">Github</a>
                <a href="https://www.linkedin.com/in/joshua-garica" target="_blank" rel="noopener noreferrer">Linkedin</a>
            </div>
        </div>
        <img src="imgs/joshua-protrate.jpg" alt="joshua portrate" id="portrate">           
    </div>
    <div class="skill-sett-container">
        <span>SKILLS</span>
        <ul class="skills-list">
            <li>&#60;HTML&#47;&#62; </li>
            <li>&#60;CSS.scss&#47;&#62;
            <li>&#60;JAVASCRIPT.jquery&#47;&#62;</li>
            <li>&#60;PHP&#47;&#62;</li>
        </ul>
    </div>
</div>
        <div class="work-display-box">
            <h2>My Work</h2>
            <ol class="work-display-container">
                <li>
                    <span>Social site</span>
                    <a href="https://rivveneyes.github.io/social-media/" target="_blank" rel="noopener noreferrer">   
                    <img src="imgs/social-site.png" alt="sample website"> </a>
                    <p>One page site with web responsive and interactive compontents.More about it at <a href="https://github.com/rivveneyes/social-media" target="_blank" rel="noopener noreferrer">github</a>. </p>
                </li>
                <li>
                    <span>News site</span>
                    <a href="https://rivveneyes.github.io/news-page/" target="_blank" rel="noopener noreferrer">
                    <img src="imgs/mail-site.png"  alt="sample website"></a>
                    <p> This is a dummy news site with multiple pages.More about it <a href="https://github.com/rivveneyes/news-page" target="_blank" rel="noopener noreferrer">github</a>.</p>
                </li>
            </ol>
         </div>
</main>
<footer>
    <h3>Contact</h3>

    <div class="form-bin" id="form-bin">
    <span class="form-notification">Message Me</span>
    <form id='form' method='POST'> 
        <div class="form-input-container">
     <label for="first-name">First Name</label>
     <input type="text" name="first-name" id="first-name" placeholder="first name">
    </div>
    <div class="form-input-container">
     <label for="last-name">Last Name</label>
     <input type="text" name="last-name" id="last-name" placeholder="last name">
    </div>
    <div class="form-input-container">
     <label for="email">Email</label>
     <input type="email" name="email" id="email" placeholder="email"> 
    </div>
    <div class="form-input-container">
        <label for="message">Message</label>
        <input type="text" name="message" id="message" placeholder="message">
    </div>
    <button type="submit">Send</button>
</form>

</div>

</footer>
<script src="./scripts/scripts.js"></script>
<script src="./scripts/jquery_form.js"></script>
</body>
</html>