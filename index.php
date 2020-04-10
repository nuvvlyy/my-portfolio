<!DOCTYPE html>
<html>

<head>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" > -->

    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    </header>

<body>
    <div class="container m-auto ">
        <div class="row mt-3">
            <div class="col-6">
                <img class="img-fluid" src="img/o542abb210ade8a199b91c20f9d25619c_34445472_200316_0113.jpg">
            </div>
            <div class="col-6 d-flex align-items-center">
                <ul class="list-unstyled">
                    <?php include 'profile.php'; ?>
                </ul>
            </div>
       
        </div>
    </div>
    <div class="container">
        <div class="centered">
            <div class="row m-auto d-flex flex-row">
                <div class="col-6 text-right">
                    <h1>
                        EDUCATION
                    </h1>
                </div>
                <div class="col-6">
                    <ul class="list-group list-group-flush">
                        <?php include 'education.php'; ?>

                    </ul>
                </div>

            </div>
        </div>

    </div>
    <div class="container">
    <div class="centered">
            <div class="row ">
                <div class="col-6  text-right">
                    <h1>
                        EXPERIENCES
                    </h1>
                </div>
                <div class="col-6">
                    <ul class="list-group list-group-flush">
                        <?php include 'Experience.php'; ?>
                    </ul>
                </div>

            </div>
    </div>

    </div>
    <div class="container">
    <div class="centered">
            <div class="row">
                <div class="col-6">
                    <h1 class="text-uppercase text-right">
                        workshop EXPERIENCES
                    </h1>
                </div>
                <div class="col-6 text-md-left">
                    <ul class="list-group list-group-flush ">
                        <?php include 'workshop_experiences.php'; ?>
                    </ul>
                </div>

            </div>
    </div>
    </div>
    <div class="container">
    <div class="centered">
            <div class="row m-auto">
                <div class="col-6  text-right">
                    <h1 class="text-uppercase">
                        skill
                    </h1>
                </div>
                <div class="col-6">
                    <ul class="list-group list-group-flush">
                        <?php include 'skill.php'; ?>
                    </ul>
                </div>

            </div>
    </div>
    </div>
    <div class="container">
        <div class="centered">
            <h2 class="text-uppercase">contact me</h2>
            <form class="mt-4">
                <div class="form-group row">
                    <label class="col-auto col-form-label">Email address</label>
                    <div class="col p-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-auto col-form-label">Name</label>
                    <div class="col p-0">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-auto col-form-label">Company</label>
                    <div class="col p-0">
                        <input type="text" class="form-control" name="id" id="company" placeholder="Company">
                    </div>

                </div>
                <div class="form-group row">

                    <label class="col-auto col-form-label">Position</label>
                    <div class="col p-0">
                        <input type="text" class="form-control" name="position" id="position" aria-describedby="nameHelp" placeholder="Position">
                    </div>

                </div>
                <div class="form-group row">
                    <label class="col-auto col-form-label">Tel</label>
                    <div class="col p-0">
                        <input type="text" class="form-control" name="tel" id="tel" aria-describedby="nameHelp" placeholder="Tel">
                    </div>
                </div>
                <button type="submit" class="btn btn-dark">Submit</button>
            </form>

        </div>

    </div>
    <div class="d-flex justify-content-center p-5 bg-light text-dark">
       
            <?php include 'footer.php'; ?>
       
    </div>
    </div>
    <script>
        $(function() {

            $('form').on('submit', function(e) {

                e.preventDefault();

                $.ajax({
                    type: 'post',
                    url: 'server.php',
                    data: $('form').serialize(),
                    success: function() {
                        alert('form was submitted');
                    }
                });

            });

        });
    </script>
</body>


</html>