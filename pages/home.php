27


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home page</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
</head>
<body>
<h1 class="text-success">Hello World</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti doloribus facilis fugiat id necessitatibus sunt temporibus ullam veritatis voluptas. Aliquid, culpa deserunt odit recusandae repudiandae vel voluptate. Consequuntur impedit, tempora.</p>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Students</h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Personal Number</th>
                                <th>Parent Number</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($students as $student) { ?>
                                <tr>
                                    <td><?php echo $student['name'] ?></td>
                                    <td><?php echo $student['email'] ?></td>
                                    <td>
                                        <?php
                                        if (is_array($student))
                                        {
                                            foreach ($student['mobile'] as $item)
                                            {
                                                if(is_array($item))
                                                {
                                                    foreach ($item as $value)
                                                    {
                                                        echo $value .' &nbsp &nbsp &nbsp';
                                                    }
                                                }
                                                else
                                                {
                                                    echo $item;
                                                }
                                            }
                                        }
                                        ?>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>