<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ace in the Hole Multisport Events is proud to offer running and triathlon events to athletes of all shapes and sizes, national origins, gender identifications and cultural backgrounds">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&family=Open+Sans&display=swap" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/cf72e27b3d.js" crossorigin="anonymous"></script>
    <script src="scripts.js"></script>
    <title>Ace in the Hole Multisports Events</title>
</head>

<body>

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0">
    </script>

    <?php require_once("includes/header.html.php"); ?>

    <main>

        <div id="wrapper">

            <div id="grid-items">

                <div id="block1">

                <?php require_once("includes/slideshow.html.php"); ?>

                    <div id="text">
                        <h2>Welcome to Ace in the Hole Multisport Events!</h2>
                        <p> Ace in the Hole Multisport Events is proud to
                            offer running and triathlon events to athletes of all shapes and sizes, national origins,
                            gender identifications and cultural backgrounds. We offer Events for Every Body.</p>

                        <p><span class="important">(The events will be held on June 20th and 21st, 2020.)</span></p>

                        <p>The Annual Ace in the Hole Multisport Weekend is a legendary event in the Oregon triathlon
                            and running community. It has become a traditional destination race for athletes from across
                            the nation. There is something for every level of athletic ability. The weekend includes a
                            first timer triathlon, a sprint, Olympic, and Half-Iron triathlons and 10K and Half marathon
                            runs. Come to experience your first race or come to compete to win, but make sure you come
                            to have fun!</p>
                    </div>

                </div>

                <div id="block2">

                    <div id="socialmedia-feed">
                        <div class="fb-page" data-href="https://www.facebook.com/Cas222Aceinthehole-110661963841617/"
                            data-tabs="timeline, events" data-small-header="false" data-adapt-container-width="true"
                            data-hide-cover="false" data-show-facepile="true">
                            <blockquote cite="https://www.facebook.com/Cas222Aceinthehole-110661963841617/"
                                class="fb-xfbml-parse-ignore"><a
                                    href="https://www.facebook.com/Cas222Aceinthehole-110661963841617/">Cas222Aceinthehole</a>
                            </blockquote>
                        </div>
                    </div>
                    <br>
                    <div id="weather-feed">
                        <a class="weatherwidget-io" href="https://forecast7.com/en/45d52n122d68/portland/?unit=us"
                            data-label_1="PORTLAND" data-label_2="WEATHER" data-theme="original">PORTLAND WEATHER</a>
                    </div>
                    <br>
                    <div id="twitter-feed">
                        <a class="twitter-timeline" data-width="340" data-height="500"
                            href="https://twitter.com/pcccas222?ref_src=twsrc%5Etfw">Tweets by pcccas222</a>
                        <script async src="https://platform.twitter.com/widgets.js"></script>
                    </div>


                </div>

            </div>

        </div>

        <button onclick="topFunction()" id="up-button" title="Go to top">Top</button>

    </main>

    <?php require_once("includes/footer.html.php"); ?>

</body>

</html>