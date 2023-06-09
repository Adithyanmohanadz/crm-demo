<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <section>
        <h1 class="m-5 text-primary fw-bold text-decoration-underline">User Role Assigning</h1>

     
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <?php 
                    if($this->session->flashdata('reg')){

                        echo '<h3 class= "text-start text-success fw-bold">Customer Registered</h3>';
                    }
                    ?>
                    <form method="POST" action="<?= base_url() ?>main/user_role_as">

                        <div class="mb-3">
                             <label for="exampleInputEmail1" class="form-label">User Type</label>

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" class="form-control"
                             name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
       
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>    
                </div>                
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>