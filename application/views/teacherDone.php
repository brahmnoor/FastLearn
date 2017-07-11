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
                <div class="intro-lead-in">You are done, the quiz is live!</div>

                    <div class="row">

                        <div class="col-xs-3">
                        </div>

                        <div class="col-md-6 col-xs-12 box-white">
                            <p><strong>Slug:</strong> <?php echo $slug ?> (Share this with students) </p>
                            <p><strong> Name of Teacher:</strong>  <?php echo $nameOfTeacher ?> </p>
                            <p><strong> Name of Quiz:</strong>  <?php echo $nameOfQuiz ?> </p>
                            <p><strong> Secret Key:</strong>  <?php echo $secretKey ?> (Please note the key for results of the quiz) </p>
                        </div>

                        <div class="col-xs-3">
                        </div>
                    </div>
            </div>
        </div>
    </header>