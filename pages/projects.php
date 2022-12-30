<!doctype html>
<html lang="fr">
    <?php include($_SERVER['DOCUMENT_ROOT'].'/private/php/header.php');?>
    <body>
        <div id="filter"></div>
        <div id="banner"></div>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/private/php/navbar.php');?>
        <main class="container">
            <div class="projects">
                <h1>My projects</h1>
                <p>Here are some of my projects, you can find more on my <span class="highlight">
                <a class="left" href="https://github.com/Isnubi/" target="_blank">Github</a></span>!</p>
                <fieldset id="portfolio">
                    <legend>Portfolio</legend>
                    <div class="project">
                        <p>This website is my portfolio, it's a website that I made to show my projects and my skills.</p>
                        <p>It's made with HTML, CSS, PHP and Javascript.</p>
                        <p>It's hosted on a web server that I rent.</p>
                        <p>It's open source, you can find it on <span class="highlight">
                        <a class="left" href="https://github.com/Isnubi/Portfolio" target="_blank">Github</a></span>.</p>
                    </div>
                    <a href="https://github.com/Isnubi/Portfolio/" target="_blank">
                        <img src="/public/img/portfolio.png" alt="Portfolio">
                    </a>
                </fieldset>
                <fieldset id="feurbot">
                    <legend>FeurBot</legend>
                    <div class="project">
                        <p>This is a Discord bot that I made for my friends.</p>
                        <p>It's made with Python and the Discord.py library.</p>
                        <p>It's hosted on a VPS that I rent.</p>
                        <p>It's open source, you can find it on <span class="highlight">
                        <a class="left" href="https://github.com/Isnubi/FeurBot" target="_blank">Github</a></span>.</p>
                    </div>
                    <a href="https://github.com/Isnubi/FeurBot/" target="_blank">
                        <img src="/public/img/feurbot.png" alt="FeurBot Logo">
                    </a>
                </fieldset>
                <fieldset id="twt">
                    <legend>Technology watch tool</legend>
                    <div class="project">
                        <p>This is a tool that I made for my school. It's a tool that allows you to follow the evolution of a technology.</p>
                        <p>It's made with HTML, CSS, PHP and Python.</p>
                        <p>It's hosted on a web server that I rent.</p>
                        <p>It's open source, you can find it on <span class="highlight">
                        <a class="left" href="https://github.com/Isnubi/Technology_watch_tool" target="_blank">Github</a></span>.</p>
                    </div>
                    <a href="https://github.com/Isnubi/Technology_watch_tool/" target="_blank">
                        <img src="/public/img/technology_watch_tool.png" alt="Technology watch tool">
                    </a>
                </fieldset>
            </div>
        </main>
    </body>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/private/php/footer.php');?>
</html>