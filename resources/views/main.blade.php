<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cristiano Budi</title>
    {{-- @vite(['public/assets/css/app.css']) --}}
    <link rel="stylesheet" href="{{ secure_asset("assets/css/app.css") }}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Handjet:wght@100..900&display=swap');
    </style>
</head>

<body>

    <div class="headerContainer">
        <div class="linksContainer"> <!-- Updated class name -->
            <div class="github">
                <a class="github" href="https://github.com/guitiorr" target="_blank" rel="noopener noreferrer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                        class="bi bi-github" viewBox="0 0 16 16">
                        <path
                            d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8" />
                    </svg>
                </a>
            </div>
            <div class="linkedin">
                <a class="linkedin" href="https://www.linkedin.com/in/benedictus-cristiano-budi-472a08225/"
                    target="_blank" rel="noopener noreferrer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                        class="bi bi-linkedin" viewBox="0 0 16 16">
                        <path
                            d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z" />
                    </svg>
                </a>
            </div>
        </div>

        <div class="projectScroll">
            <div class="portoClick">
                <a href="#portfolioContainer">
                    <!-- Normal SVG (default) -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-lightbulb normal-bulb" viewBox="0 0 16 16">
                        <path d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13a.5.5 0 0 1 0 1 .5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1 0-1 .5.5 0 0 1 0-1 .5.5 0 0 1-.46-.302l-.761-1.77a2 2 0 0 0-.453-.618A5.98 5.98 0 0 1 2 6m6-5a5 5 0 0 0-3.479 8.592c.263.254.514.564.676.941L5.83 12h4.342l.632-1.467c.162-.377.413-.687.676-.941A5 5 0 0 0 8 1"/>
                    </svg>
                    <!-- Filled SVG (visible on hover) -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-lightbulb-fill filled-bulb" viewBox="0 0 16 16">
                        <path d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13h-5a.5.5 0 0 1-.46-.302l-.761-1.77a2 2 0 0 0-.453-.618A5.98 5.98 0 0 1 2 6m3 8.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1-.5-.5"/>
                    </svg>
                </a>
            </div>
            <div class="aboutClick">
                <a href="#aboutContainer">
                    <!-- Normal SVG (default) -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-person normal-person" viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                    </svg>
                    <!-- Filled SVG (visible on hover) -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-person-fill filled-person" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    {{-- OPENER --}}

    <div class="openContainer">
        <div class=nameContainer>
            <div class="bracketTop">
                <p class="" style="color: yellow">
                    [
                </p>
            </div>
            <div class="myname">
                <p class=""><span class="tickspan">"</span>CRISTIANO<span class="tickspan">"</span>,</p>
                <div class="namebottom">
                    <p class=""><span class="tickspan">"</span>BUDI<span class="tickspan">"</span></p>
                </div>
            </div>
            <div class="bracketBottom">
                <p class="" style="color: yellow">
                    ]<span>;</span><span class="dot">_</span>
                </p>
            </div>
        </div>
    </div>

    {{-- ABOUT ME --}}
<div class="aboutContainer" id="aboutContainer">
    <div class="aboutme">
        <span class="dot">_</span>
        <h1>About me</h1>
    </div>
    <div class="aboutmeimgbody">
        <div class="aboutmebody">
            <p>Hello! You can call me Tio :)</p>
            <p>I'm a passionate <span style="color: yellow">Computer Science</span> student, deeply interested in
                Web Development, especially <span style="color: yellow">backend</span>. I thrive on <span
                    style="color: yellow">problem-solving</span> and have a sharp eye for <span
                    style="color: yellow">detail</span>. I’m versatile in both independent projects and team
                collaborations. Whether working solo or in a group, I adapt quickly and manage tasks efficiently to
                deliver results.</p>
        </div>
        <div class="cv-button">
            <a href="https://www.canva.com/design/DAGPVS8mvTA/ZTdQqSNPQpMoNOIVGgGDTQ/view?utm_content=DAGPVS8mvTA&utm_campaign=designshare&utm_medium=link&utm_source=editor" download="Tio_CV" class="download-btn">View My CV</a>
        </div>
    </div>
</div>


    {{-- TECH STACK --}}

    <div class="techStackContainer">
        <div></div>
    </div>

    {{-- PROJECTS --}}

    <div class="portfolioContainer" id="portfolioContainer">
        <div class="myproject">
            <h1>My projects</h1><span class="dot">_</span>
        </div>
        <div class="projectsContainer">
            <div class="project1">
                <div class="projectHeader">
                    <div class="projectTitle">
                        <h1>Bot Budi</h1>
                    </div>
                    <div class="projectTags">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                            class="bi bi-discord" viewBox="0 0 16 16">
                            <path
                                d="M13.545 2.907a13.2 13.2 0 0 0-3.257-1.011.05.05 0 0 0-.052.025c-.141.25-.297.577-.406.833a12.2 12.2 0 0 0-3.658 0 8 8 0 0 0-.412-.833.05.05 0 0 0-.052-.025c-1.125.194-2.22.534-3.257 1.011a.04.04 0 0 0-.021.018C.356 6.024-.213 9.047.066 12.032q.003.022.021.037a13.3 13.3 0 0 0 3.995 2.02.05.05 0 0 0 .056-.019q.463-.63.818-1.329a.05.05 0 0 0-.01-.059l-.018-.011a9 9 0 0 1-1.248-.595.05.05 0 0 1-.02-.066l.015-.019q.127-.095.248-.195a.05.05 0 0 1 .051-.007c2.619 1.196 5.454 1.196 8.041 0a.05.05 0 0 1 .053.007q.121.1.248.195a.05.05 0 0 1-.004.085 8 8 0 0 1-1.249.594.05.05 0 0 0-.03.03.05.05 0 0 0 .003.041c.24.465.515.909.817 1.329a.05.05 0 0 0 .056.019 13.2 13.2 0 0 0 4.001-2.02.05.05 0 0 0 .021-.037c.334-3.451-.559-6.449-2.366-9.106a.03.03 0 0 0-.02-.019m-8.198 7.307c-.789 0-1.438-.724-1.438-1.612s.637-1.613 1.438-1.613c.807 0 1.45.73 1.438 1.613 0 .888-.637 1.612-1.438 1.612m5.316 0c-.788 0-1.438-.724-1.438-1.612s.637-1.613 1.438-1.613c.807 0 1.451.73 1.438 1.613 0 .888-.631 1.612-1.438 1.612" />
                        </svg>
                        <img width="25" height="25"
                            src="https://s3.dualstack.us-east-2.amazonaws.com/pythondotorg-assets/media/files/python-logo-only.svg"
                            alt="">
                    </div>
                </div>
                <div class="projectBody">
                    Discord Music Bot i made back in senior high school.
                </div>
                <img class="pyimg" src="{{ asset("assets/images/botbudi.png") }}" alt="Bot Budi">
                <div class="projectLink">
                    <a href="https://github.com/guitiorr/bot-budi" class="">
                        View Project
                    </a>
                </div>
            </div>
            <div class="project1">
                <div class="projectHeader">
                    <div class="projectTitle">
                        <h1>AI Disease Prediction</h1>
                    </div>
                    <div class="projectTags">
                        <img src="https://cdn4.iconfinder.com/data/icons/logos-and-brands/512/189_Kaggle_logo_logos-512.png"
                            alt="">
                        <img src="https://seeklogo.com/images/S/streamlit-logo-1A3B208AE4-seeklogo.com.png"
                            alt="">
                        <img src="https://s3.dualstack.us-east-2.amazonaws.com/pythondotorg-assets/media/files/python-logo-only.svg"
                            alt="">
                    </div>
                </div>
                <div class="projectBody">
                    Final project for 3rd semester Artificial Intelligence course using Python, Streamlit and Kaggle
                    dataset.
                </div>
                <img class="pyimg" src="{{ asset("assets/images/ai.png") }}" alt="AI">
                <div class="projectLink">
                    <a href="https://github.com/guitiorr/Prototype-AI-Sem-3" class="">
                        View Project
                    </a>
                </div>
            </div>

            <div class="project1">
                <div class="projectHeader">
                    <div class="projectTitle">
                        <h1>PerfoFit</h1>
                    </div>
                    <div class="projectTags">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ee/.NET_Core_Logo.svg/2048px-.NET_Core_Logo.svg.png"
                            alt="">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bd/Logo_C_sharp.svg/1200px-Logo_C_sharp.svg.png"
                            alt="">
                    </div>
                </div>
                <div class="projectBody">
                    Fitness website made using ASP.NET framework - 4th semester project. I did most of the backend work.
                </div>
                <img class="pyimg" src="{{ asset("assets/images/perfofit.png") }}" alt="Perfofit">
                <div class="projectLink">
                    <a href="https://github.com/guitiorr/FitnessApp" class="">
                        View Project
                    </a>
                </div>
            </div>

            <div class="project1">
                <div class="projectHeader">
                    <div class="projectTitle">
                        <h1>Second Chance</h1>
                    </div>
                    <div class="projectTags">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-bootstrap-fill" viewBox="0 0 16 16">
                            <path
                                d="M6.375 7.125V4.658h1.78c.973 0 1.542.457 1.542 1.237 0 .802-.604 1.23-1.764 1.23zm0 3.762h1.898c1.184 0 1.81-.48 1.81-1.377 0-.885-.65-1.348-1.886-1.348H6.375z" />
                            <path
                                d="M4.002 0a4 4 0 0 0-4 4v8a4 4 0 0 0 4 4h8a4 4 0 0 0 4-4V4a4 4 0 0 0-4-4zm1.06 12V3.545h3.399c1.587 0 2.543.809 2.543 2.11 0 .884-.65 1.675-1.483 1.816v.1c1.143.117 1.904.931 1.904 2.033 0 1.488-1.084 2.396-2.888 2.396z" />
                        </svg>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/62/CSS3_logo.svg/800px-CSS3_logo.svg.png"
                            alt="">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/38/HTML5_Badge.svg/2048px-HTML5_Badge.svg.png"
                            alt="">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpcY0MEsC-KK86cNWulub7GLHSZ9PMWuCqgA&s"
                            alt="">
                    </div>
                </div>
                <div class="projectBody">
                    My first Hackathon Project! (Garuda Hacks 5.0) i mostly did some frontend work, this event opened my
                    mind to learn more!
                </div>
                <img class="pyimg" src="{{ asset("assets/images/second chance.png") }}" alt="Second Chance">
                <div class="projectLink">
                    <a href="https://github.com/jamesalv/GH5" class="">
                        View Project
                    </a>
                </div>
            </div>

            <div class="project1">
                <div class="projectHeader">
                    <div class="projectTitle">
                        <h1>Hospital Database Design</h1>
                    </div>
                    <div class="projectTags">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-database" viewBox="0 0 16 16">
                            <path d="M4.318 2.687C5.234 2.271 6.536 2 8 2s2.766.27 3.682.687C12.644 3.125 13 3.627 13 4c0 .374-.356.875-1.318 1.313C10.766 5.729 9.464 6 8 6s-2.766-.27-3.682-.687C3.356 4.875 3 4.373 3 4c0-.374.356-.875 1.318-1.313M13 5.698V7c0 .374-.356.875-1.318 1.313C10.766 8.729 9.464 9 8 9s-2.766-.27-3.682-.687C3.356 7.875 3 7.373 3 7V5.698c.271.202.58.378.904.525C4.978 6.711 6.427 7 8 7s3.022-.289 4.096-.777A5 5 0 0 0 13 5.698M14 4c0-1.007-.875-1.755-1.904-2.223C11.022 1.289 9.573 1 8 1s-3.022.289-4.096.777C2.875 2.245 2 2.993 2 4v9c0 1.007.875 1.755 1.904 2.223C4.978 15.71 6.427 16 8 16s3.022-.289 4.096-.777C13.125 14.755 14 14.007 14 13zm-1 4.698V10c0 .374-.356.875-1.318 1.313C10.766 11.729 9.464 12 8 12s-2.766-.27-3.682-.687C3.356 10.875 3 10.373 3 10V8.698c.271.202.58.378.904.525C4.978 9.71 6.427 10 8 10s3.022-.289 4.096-.777A5 5 0 0 0 13 8.698m0 3V13c0 .374-.356.875-1.318 1.313C10.766 14.729 9.464 15 8 15s-2.766-.27-3.682-.687C3.356 13.875 3 13.373 3 13v-1.302c.271.202.58.378.904.525C4.978 12.71 6.427 13 8 13s3.022-.289 4.096-.777c.324-.147.633-.323.904-.525"/>
                          </svg>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Database-mysql.svg/1200px-Database-mysql.svg.png"
                            alt="">
                    </div>
                </div>
                <div class="projectBody">
                    Designed a relational database for a hospital, complete with UNF to 3NF Normalization.
                </div>
                <img class="pyimg" src="{{ asset("assets/images/db.jpg") }}" alt="database">
                <div class="projectLink">
                    <a href="https://github.com/guitiorr/AOL-DB-Sem-3" class="">
                        View Project
                    </a>
                </div>
            </div>

        </div>


    </div>

    {{-- CONTACT ME --}}

    <div class="contactContainer">
        <div class="contactHead">
            <h3>Let's Connect !</h3>

        </div>
        <div class="contactLinks">
            <div class="phone">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                  </svg>
                <h3>+62 88216563198</h3>
            </div>
            <div class="email">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                  </svg>
                <h3>cristiano.budi123@gmail.com</h3>
            </div>
        </div>
    </div>

    {{-- <script src="{{ asset('assets/js/app.js')}}"></script> --}}


</body>

</html>
