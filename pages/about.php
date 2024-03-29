<!doctype html>
<html lang="fr">
    <?php include($_SERVER['DOCUMENT_ROOT'].'/private/php/header.php');?>
    <body>
        <div id="filter"></div>
        <div id="banner"></div>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/private/php/navbar.php');?>
        <main class="container">
            <div class="about">
                <h1>About me</h1>
                <div class="row">
                    <div class="column">
                        <fieldset>
                            <legend>Educational background</legend>
                            <div class="education-item">
                                <h3>ESIEE PARIS</h3>
                                <p>Computer sciences engineering, speciality: networks and cybersecurity</p>
                                <p class="date">2022-2025</p>
                            </div>
                            <div class="line"></div>
                            <div class="education-item">
                                <h3>Lycée Turgot</h3>
                                <p><span class="highlight"><a class="modal-trigger left" href="#btsModal">BTS SIO</a></span> diploma
                                    (Computer Services for Organizations), <span class="highlight"><a class="modal-trigger left" href="#sisrModal">SISR</a></span> option</p>
                                <p class="date">2020-2022</p>
                            </div>
                            <div class="line"></div>
                            <div class="education-item">
                                <h3>Lycée Gaston Bachelard</h3>
                                <p><span class="highlight"><a class="modal-trigger left" href="#sti2dModal">STI2D</a></span>
                                    high-school diploma (Science and Technology of Industry and Sustainable Development),
                                    <span class="highlight"><a class="modal-trigger left" href="#sinModal">SIN</a></span> option
                                </p>
                                <p class="date">2017-2020</p>
                            </div>
                        </fieldset>
                    </div>
                    <div class="column">
                        <fieldset>
                            <legend>Professional background</legend>
                            <div class="education-item">
                                <h3>Engie Home Services</h3>
                                <p>Apprenticeship in the IT infrastructure department, as a network engineer</p>
                                <p class="date">September 2022 - Today</p>
                            </div>
                            <div class="line"></div>
                            <div class="education-item">
                                <h3>Engie Home Services</h3>
                                <p>Internship, during 8 weeks, in the IT infrastructure department</p>
                                <p class="date">November 2021 - January 2022</p>
                            </div>
                            <div class="line"></div>
                            <div class="education-item">
                                <h3>Timetonic</h3>
                                <p>Intership, during 6 weeks, in the IT department, espcially in a cybersecurity scope</p>
                                <p class="date">May 2021 - June 2021</p>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </main>
        <div id="btsModal" class="modal">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="modal-close">&times;</span>
                    <h2>BTS SIO presentation</h2>
                </div>
                <div class="modal-body">
                    <p>The BTS Computer Services for Organizations is a diploma recognized by the state of high-school+2 level.</p>
                    <p>It replaces since September 2011, the former BTS IG (Computer Management).</p>
                    <p>Indeed, this new formula meets the expectations of the profession in terms of qualification.</p>
                    <p>The program has evolved according to the place and role of ICT (Information Technology and Communication)
                        and offers two distinct specialties: The BTS SIO option SISR and the BTS SIO option SLAM.</p>
                </div>
            </div>
        </div>
        <div id="sisrModal" class="modal">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="modal-close">&times;</span>
                    <h2>SISR option</h2>
                </div>
                <div class="modal-body">
                    <p>Option A: SISR (Infrastructure Solutions, Systems and Networks)
                        The SISR specialization of the BTS SIO allows students to learn a profession that consists of
                        installing, configuring and managing computer equipment and networks.</p>
                    <p>This means intervening in the design, implementation, deployment and maintenance of programs
                        intended for management within an organization.</p>
                </div>
            </div>
        </div>
        <div id="sti2dModal" class="modal">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="modal-close">&times;</span>
                    <h2>STI2D high school diploma</h2>
                </div>
                <div class="modal-body">
                    <p>The STI2D technological high school diploma allows students to acquire skills in industrial
                        fields through four options: technological innovation and eco-design (ITEC), information and
                        digital systems (SIN), energy and environment (EE), and architecture and construction (AC).</p>
                    <p>In addition to the core curriculum for the technological high school diploma, students take
                        specialization courses: three in the first year (technological innovation; engineering and
                        sustainable development; physics-chemistry and mathematics) and two in the last year
                        (physics-chemistry and mathematics; engineering, innovation and sustainable development).
                </div>
            </div>
        </div>
        <div id="sinModal" class="modal">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="modal-close">&times;</span>
                    <h2>SIN option</h2>
                </div>
                <div class="modal-body">
                    <p>In this specialty, students learn the methods used to transmit information using digital
                        technology, particularly in electronics.</p>
                    <p>Using projects, they explore the entire information chain and propose improvements in data
                        acquisition, processing, and reproduction in the form of sound, images, etc.</p>
                </div>
            </div>
        </div>
    </body>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/private/php/footer.php');?>
    <script src="/private/js/modal.js"></script>
</html>