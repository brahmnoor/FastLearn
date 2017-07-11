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
                <div class="intro-lead-in">Step 2 of 3 to awesome quizzes</div>

                <?php 
                echo form_open('quiz/teacherFinalStep'); 
                ?>
                    <div class="row">

                        <div class="col-xs-3">
                        </div>

                        <div class="form-group col-md-4 col-xs-12">
                            <?php $data = array(
                                    'name' => 'nameOfTeacher',
                                    'placeholder' => 'Name of Teacher',
                                    'class' => 'form-control text-input'
                            );
                            echo form_input($data);
                            $data1 = array(
                                    'name' => 'nameOfQuiz',
                                    'placeholder' => 'Name of Quiz',
                                    'class' => 'form-control text-input'
                            );
                            echo form_input($data1);
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