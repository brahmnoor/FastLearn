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
                <div class="intro-lead-in">Step 3 of 3 to awesome quizzes</div>

                <?php 

                function generateRandomString($length = 10) {
                    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                    $charactersLength = strlen($characters);
                    $randomString = '';
                    for ($i = 0; $i < $length; $i++) {
                        $randomString .= $characters[rand(0, $charactersLength - 1)];
                    }
                    return $randomString;
                }
                $hidden = array(
                    'nameOfQuiz' => $nameOfQuiz, 
                    'nameOfTeacher' => $nameOfTeacher, 
                    'slug' => generateRandomString(5), 
                    'secretKey' => generateRandomString(4)
                    );
                echo form_open('quiz/teacherDoneInfo', '', $hidden); 
                ?>
                    <div class="row">

                        <div class="col-xs-3">
                        </div>

                        <div class="form-group col-md-4 col-xs-12">
                            <?php
                            $dataTextarea = array(
                                    'name' => 'textToConvert',
                                    'rows' => '3',
                                    'class' => 'form-control',
                                    'placeholder' => 'Enter the text to be converted to questions.'
                                );
                            echo form_textarea($dataTextarea);
                            ?>
                        </div>


                        <div class="col-md-2 col-xs-12">
                            <button type="submit" class="btn blue-btn btn-xl" style="margin-top: 0.5rem;">
                              Submit
                            </button>
                        </div>

                        <div class="col-xs-3">
                        </div>
                    </div>
                <?php echo form_close() ?>
            </div>
        </div>
    </header>