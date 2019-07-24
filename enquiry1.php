<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="keywords" content="jQuery Window, Window Widget, Window" />
    <meta name="description" content="The jqxWindow is a floating window which have two main parts - title and content. In the title you can have any html content and close button.
                                      In the content you could put any html content." />
    <title id='Description'>You can use the jqxWindow to direct a user’s attention to a particular activity in your application, such as entering data or viewing information. Consider using a jqxWindow when you want greater customization, you want to block the user interface outside the window, or when you want to retrieve a DialogResult and other data from the popup window. jqxWindow can be displayed as a modal dialog window that blocks user interaction with the underlying user interface or as a standard window without blocking the web page's user interface.</title>
    <link rel="stylesheet" href="../../jqwidgets/styles/jqx.base.css" type="text/css" />
    <script type="text/javascript" src="../../scripts/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxwindow.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxscrollbar.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxpanel.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxtabs.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxcheckbox.js"></script>
    <script type="text/javascript" src="../../scripts/demos.js"></script>
    <script type="text/javascript">
        var basicDemo = (function () {
            //Adding event listeners
            function _addEventListeners() {
                $('#resizeCheckBox').on('change', function (event) {
                    if (event.args.checked) {
                        $('#window').jqxWindow('resizable', true);
                    } else {
                        $('#window').jqxWindow('resizable', false);
                    }
                });
                $('#dragCheckBox').on('change', function (event) {
                    if (event.args.checked) {
                        $('#window').jqxWindow('draggable', true);
                    } else {
                        $('#window').jqxWindow('draggable', false);
                    }
                });
                $('#showWindowButton').click(function () {
                    $('#window').jqxWindow('open');
                });
                $('#hideWindowButton').click(function () {
                    $('#window').jqxWindow('close');
                });
            };
            //Creating all page elements which are jqxWidgets
            function _createElements() {
                $('#showWindowButton').jqxButton({ width: '70px' });
                $('#hideWindowButton').jqxButton({ width: '65px' });
                $('#resizeCheckBox').jqxCheckBox({ width: '185px', checked: true });
                $('#dragCheckBox').jqxCheckBox({ width: '185px', checked: true });
            };
            //Creating the demo window
            function _createWindow() {
                $('#window').jqxWindow({
                    showCollapseButton: true, maxHeight: 400, maxWidth: 700, minHeight: 200, minWidth: 200, height: 300, width: 500,
                    initContent: function () {
                        $('#tab').jqxTabs({ height: '100%', width:  '100%' });
                        $('#window').jqxWindow('focus');
                    }
                });
            };
            return {
                config: {
                    dragArea: null
                },
                init: function () {
                    //Creating all jqxWindgets except the window
                    _createElements();
                    //Attaching event listeners
                    _addEventListeners();
                    //Adding jqxWindow
                    _createWindow();
                }
            };
        } ());
        $(document).ready(function () {  
            //Initializing the demo
            basicDemo.init();
        });
    </script>
</head>
<body class='default'>
    <div id="jqxWidget">
        <div style="float: left;">
            <div>
                <input type="button" value="Open" id="showWindowButton" />
                <input type="button" value="Close" id="hideWindowButton" style="margin-left: 5px" />
            </div>
            <div style="margin-top: 10px;">
                <div id="resizeCheckBox">
                    Resizable
                </div>
                <div id="dragCheckBox">
                    Enable drag
                </div>
            </div>
        </div>
        <div style="width: 100%; height: 650px; margin-top: 50px;" id="mainDemoContainer">
            <div id="window">
                <div id="windowHeader">
                    <span>
                        <img src="../../images/movie.png" alt="" style="margin-right: 15px" />Movies
                    </span>
                </div>
                <div style="overflow: hidden;" id="windowContent">
                    <div id="tab">
                        <ul style="margin-left: 30px;">
                            <li>Avatar</li>
                            <li>End Game</li>
                            <li>Twilight</li>
                            <li>Unstoppable</li>
                            <li>Priest</li>
                        </ul>
                        <div>
                            <img src="../../images/avatar.png" style="float: left; margin: 10px;" alt="" />
                            Avatar is a 2009 American[6][7] epic science fiction film written and directed by
                            James Cameron, and starring Sam Worthington, Zoe Saldana, Stephen Lang, Michelle
                            Rodriguez, Joel David Moore, Giovanni Ribisi and Sigourney Weaver. The film is set
                            in the mid-22nd century, when humans are mining a precious mineral called unobtanium
                            on Pandora , a lush habitable moon of a gas giant in the Alpha Centauri star system.
                            The expansion of the mining colony threatens the continued existence of a local
                            tribe of Na'vi—a humanoid species indigenous to Pandora. The film's title refers
                            to the genetically engineered Na'vi-human hybrid bodies used by a team of researchers
                            to interact with the natives of Pandora.
                     </div>   <div>
                            <img src="../../images/endgame.png" style="float: left; margin: 10px;" alt="" />
                            End Game is a 2006 action/thriller film, written and directed by Andy Cheng. The
                            film stars Cuba Gooding, Jr. as Secret Service agent Alex Thomas, who is shot in
                            the hand, while unsuccessfully trying to protect the President (played by Jack Scalia)
                            from an assassin's bullet. Later, with the help of a persistent newspaper reporter
                            named Kate Crawford (played by Angie Harmon), he uncovers a vast conspiracy behind
                            what initially appeared to be a lone gunman. James Woods, Burt Reynolds, and Anne
                            Archer co–star in this film that was originally set to be shown in cinemas by MGM
                            in 2005, but was delayed by the takeover from Sony and eventually sent direct to
                            DVD.
                        </div>
                        <div>
                            <img src="../../images/twilight.png" style="float: left; margin: 10px;" alt="" />
                            The project was in development for approximately three years at Paramount Pictures,
                            during which time a screen adaptation that differed significantly from the novel
                            was written. Summit Entertainment acquired the rights to the novel after three years
                            of the project's stagnant development. Melissa Rosenberg wrote a new adaptation
                            of the novel shortly before the 2007–2008 Writers Guild of America strike and sought
                            to be faithful to the novel's storyline. Principal photography took 44 days, and
                            completed on May 2, 2008; the film was primarily shot in Oregon
                        </div>
                        <div>
                            <img src="../../images/unstoppable.png" style="float: left; margin: 10px;" alt="" />
                            Meanwhile, in a rail yard within the northern town of Fuller, two AWVR hostlers,
                            Dewey (Ethan Suplee) and Gilleece (T.J. Miller), are ordered by Fuller operations
                            dispatcher Bunny (Kevin Chapman) to move a freight train led by locomotive #777
                            (nicknamed "Triple Seven") off its current track to clear the track for an excursion
                            train carrying schoolchildren. Dewey attempts to take shortcuts, instructing Gilleece
                            to leave the hoses for the air brakes disconnected for the short trip. Dewey later
                            leaves the moving cab to throw a misaligned rail switch along the train's path,
                            but is unable to climb back on, as the train's throttle jumps from idle, to full
                            power. He is forced to report the train as a "coaster" to Fuller yardmaster Connie
                            Hooper (Rosario Dawson)...
                        </div>
                        <div>
                            <img src="../../images/priest.png" style="float: left; margin: 10px;" alt="" />
                            Priest is a 2011 American post-apocalyptic sci-fi western and supernatural action
                            film starring Paul Bettany as the title character. The film, directed by Scott Stewart,
                            is based on the Korean comic of the same name. In an alternate world, humanity and
                            vampires have warred for centuries. After the last Vampire War, the veteran Warrior
                            Priest (Bettany) lives in obscurity with other humans inside one of the Church's
                            walled cities. When the Priest's niece (Lily Collins) is kidnapped by vampires,
                            the Priest breaks his vows to hunt them down. He is accompanied by the niece's boyfriend
                            (Cam Gigandet), who is a wasteland sheriff, and a former Warrior Priestess (Maggie
                            Q).
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>