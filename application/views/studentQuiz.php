<!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="/"> 
                    FastLearn
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a href="/">Home</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <?php
                if ($numberOfQuestionsLeft == 0) {
                ?>
                <?php
                   $hidden = array(
                    'nameOfQuiz' => $nameOfQuiz, 
                    'nameOfTeacher' => $nameOfTeacher, 
                    'slug' => $slug, 
                    'usernameOfStudent' => $usernameOfStudent,
                    'numberOfQuestionsLeft' => $numberOfQuestionsLeft - 1,
                    'currentQno' => $currentQno + 1
                    );
                    echo form_open('quiz/finalResult', '', $hidden); 
                ?>
                <div class="intro-lead-in">You got <span id="correctResponseCount"></span> answer(s) right!</div>
                <div class="row">
                    <div class="col-md-3">
                    </div>
                    <input type="hidden" name="correctResponses" value="" id="cR">
                    <div class="col-md-4">
                        <p style="font-size: 2rem;">Thanks a lot, <?php echo $usernameOfStudent ?> for giving this quiz. We have noted your responses. You were faster than Sample_Data % of students. It was a commendable effort!</p>
                    </div>
                    <div class="col-md-2 col-xs-12">
                          <button type="submit" class="btn blue-btn btn-xl" style="margin-top: 0.5rem;">
                          End Quiz
                          </button>
                    </div>
                    <div class="col-md-3">
                    </div>
                    <?php echo form_close() ?>
                </div>

                <script>
                    var count = localStorage.getItem("correctResponses");
                    document.getElementById("correctResponseCount").innerHTML = count;
                    $(document).ready(function() {
                        document.getElementById("cR").value = count;
                    });
                </script>

                <?php
                }
                else {
                ?>
                <p><?php echo $numberOfQuestionsLeft ?> Questions to go!</p>
                <p><span id="timer">30</span> secs to go!</p>
                <?php
                   $attributes = array('id' => 'questionForm');
                   $hidden = array(
                    'nameOfQuiz' => $nameOfQuiz, 
                    'nameOfTeacher' => $nameOfTeacher, 
                    'slug' => $slug, 
                    'usernameOfStudent' => $usernameOfStudent,
                    'numberOfQuestionsLeft' => $numberOfQuestionsLeft - 1,
                    'currentQno' => $currentQno + 1
                    );
                    echo form_open('quiz/studentQuizSession', $attributes, $hidden); 
                ?>
                    <div class="intro-lead-in"><?php echo $questionText['qtext'] ?></div>

                    <?php for ($i = 1; $i < 5; $i++) {
                        $numberInString = (string)$i;
                     ?>
                        <div class="row">
                            <div class="col-xs-4">
                            </div>

                            <button type="submit" class="col-md-4 col-xs-12 box-white mouse-pointer" id="<?php echo $i ?>" onclick="clickEvent(this)">
                                <?php echo $questionOptions['choice'.$numberInString] ?>
                            </button>

                            <div class="col-xs-4">
                            </div>
                        </div>
                    <?php } ?>

                <?php echo form_close() ?>
                <script>
                window.onload = function() {
                    // Onload event of Javascript
                    // Initializing timer variable
                    var x = 30;
                    var y = document.getElementById("timer");
                    // Display count down for 20s
                    setInterval(function() {
                        if (x <= 31 && x >= 1) {
                            x--;
                            y.innerHTML = '' + x + '';
                            if (x == 1) {
                                x = 31;
                            }
                        }
                        }, 
                        1000);
                    // Form Submitting after 30s
                    var auto_refresh = setInterval(function() {
                    submitform();
                    }, 30000);
                    // Form submit function
                    function submitform() {
                        document.getElementById("questionForm").submit();
                    }
                }
                function clickEvent(element) {
                    if (element.id != <?php echo $questionText['rightchoice'] ?> ) {
                        element.style.background = "#a93a3a";
                        document.getElementById("<?php echo $questionText['rightchoice'] ?>").style.background = "#38c346";
                    }
                    else {
                        element.style.background = "#38c346";
                        var count = localStorage.getItem("correctResponses");
                        localStorage.setItem("correctResponses", parseFloat(count) + parseFloat(1));
                    }
                }
                </script>
                <?php
                } // else end
                ?>
            </div>
        </div>
    </header>