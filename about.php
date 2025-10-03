<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Codespaces</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Host+Grotesk:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/assets/style.css" media="all" />
        <script src="/assets/script.js"></script>
    </head>
    <body class="about">
        <div id="main" class="about">
            <a href="/"><img src="/assets/codespaces.png" /></a>
            <div class="about__container">
                <div class="about__left">
                    <img src="/assets/LumenPFP.png" />
                </div>
                <div class="about__right">
                    <h1>About Me</h1>
                    <h3 class="about-names style="color: red;">LumenAE 
                    </h3>
                    <p>Welcome to my about page! Here you can find more information about my background, skills, and interests.</p>
                    <p>Hi, I'm an After Effects Editor. That what the AE stands for in my name. I edit movies and sometimes games to add some flare to the Youtube algoritim. 
                    <p>I'm sure you've heard of a movie edit before, or atleast seen one. A movie edit consists of three sections, the hook, the intro, and finally the edit. The hook is the first three seconds of the video, and it's the most important part. The hook is what grabs the viewers attention and keeps them from swiping. Next is the intro, which is often funny, scary, or just serious. The intro leads up to the edit and is most of the time a movie scene that is well known. Last but certainly not least is the edit. it is the main part of the full movie edit and often consists of clips from different parts of the movie weaved together in a unique and satisfying fashion, often using music in the background to give the edit beats to cut to. Under this I left an edit to watch so you can better understand what a movie edit is.
</p>    <iframe width="774" height="849" src="https://www.youtube.com/embed/iWKlKx6DPxU" title="&quot;No One Can Touch Me&quot; | F1 The Movie Edit | Blinding Lights - The Weekend (slowed reverb) #bradpitt" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <div class="about__socials"><?php

                        // Set socials.
                        $socials = [

                        ];

                        // Loop.
                        foreach( $socials as $social_id => $social_url ) {

                            // Output. ?>
                            <a href="<?php echo $social_url; ?>" class="about-social" target="_blank">
                                <img src="/assets/<?php echo $social_id; ?>.svg" />
                            </a><?php

                        } ?>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>