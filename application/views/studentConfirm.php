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
                <div class="intro-lead-in">Begin Playing (and learning)</div>
                <?php
                   $hidden = array(
                    'nameOfQuiz' => $slugInfo['nameOfQuiz'], 
                    'nameOfTeacher' => $slugInfo['nameOfTeacher'], 
                    'slug' => $slug, 
                    'usernameOfStudent' => $usernameOfStudent,
                    'numberOfQuestionsLeft' => $slugInfo['numberOfQuestions'],
                    'currentQno' => $slugInfo['startingQno']
                    );
                    echo form_open('quiz/studentQuizSession', '', $hidden); 
                ?>

                    <div class="row">

                        <div class="col-xs-3">
                        </div>

                        <div class="col-md-4 col-xs-12 box-white">
                            <p><strong>Slug:</strong> <?php echo $slug ?> </p>
                            <p><strong> Your Username:</strong> <?php echo $usernameOfStudent ?>  </p>
                            <p><strong> Name of Quiz:</strong> <?php echo $slugInfo['nameOfQuiz'] ?> </p>
                            <p><strong> Name of Teacher:</strong> <?php echo $slugInfo['nameOfTeacher'] ?> </p>
                            <p><strong> Number of Questions:</strong> <?php echo $slugInfo['numberOfQuestions'] ?> </p>
                        </div>

                        <div class="col-md-2 col-xs-12">
                          <button type="submit" class="btn blue-btn btn-xl" style="margin-top: 4rem;" onclick="setCorrectCount()">
                          Start Quiz
                          </button>
                        </div>

                        <div class="col-xs-3">
                        </div>
                    </div>
                <?php echo form_close() ?>
            </div>
        </div>
    </header>
<script>
function setCorrectCount() {
    var count = 0;
    localStorage.setItem("correctResponses", count);
}
</script>