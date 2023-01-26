<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/consultation.css" />
    <link rel="stylesheet" href="./css/homeStyle.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <script defer src="./js/consultation.js"></script>
    <title>Consultation</title>
</head>

<body>
    <?php
    include('./connection/connexion.php');
    include('./assets/header.php');
    ?>
    <div class="container">
        <h1>Consultation <i class="fa-solid fa-handshake"></i></h1>
        <div class="consultation-sections">
            <div class="left-section">
                <form action="" class="form">
                    <h1 class="text-center">Form <i class="fa-solid fa-pen"></i></h1>
                    <!-- Progress bar -->
                    <div class="progressbar">
                        <div class="progress" id="progress"></div>

                        <div class="progress-step progress-step-active" data-title="Case"></div>
                        <div class="progress-step" data-title="Details"></div>
                        <div class="progress-step" data-title="Appointment"></div>
                    </div>

                    <!-- Step 1 -->
                    <div class="form-step form-step-active">

                        <div class="input-group">
                            <label for="phone">Case Type:</label>
                            <select name="" id="">
                                <option value="">---</option>
                                <?php
                                $sql = 'SELECT * FROM `consultation`';
                                $res = $conn->query($sql);
                                while ($row = $res->fetch_assoc()) {
                                ?>
                                <option value=<?php echo $row['idC']; ?>><?php echo $row['type']; ?></option>
                                <?php
                                    $_SESSION['idConsultation'] = $row['idC'];
                                }
                                ?>
                            </select>
                        </div>
                        <div class="input-group">
                            <label for="court">Price</label>
                            <select name="" id="">
                                <?php
                                $sql = 'SELECT * FROM `consultation` where idC=' . $_SESSION['idConsultation'];
                                $result = $conn->query($sql);
                                $res = $result->fetch_assoc();
                                if ($result->num_rows > 0) {
                                ?>
                                <option value=<?php echo $res['idC']; ?>><?php echo $res['prix']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>

                        <div class="btns-group">
                            <a href="#" class="btn btn-prev">Previous</a>
                            <a href="#" class="btn btn-next">Next</a>
                        </div>
                    </div>
                    <!-- Step 2 -->
                    <div class="form-step">
                        <div class="input-group">
                            <label for="detail">Details About The Case:</label>
                            <textarea name="detail" id="detail" rows="15"></textarea>
                        </div>

                        <div class="btns-group">
                            <a href="#" class="btn btn-prev">Previous</a>
                            <a href="#" class="btn btn-next">Next</a>
                        </div>
                    </div>
                    <!-- Step 3 -->
                    <div class="form-step">
                        <div class="input-group">
                            <label for="date">Date of Appointment:</label>
                            <input type="date" name="date" id="date" />
                        </div>
                        <div class="input-group">
                            <label for="time">Time of Appointment:</label>
                            <input type="time" id="time" name="time" min="09:00" max="18:00" required />
                        </div>
                        <div class="price-duration">
                            <div class="price">
                                <i class="fa-solid fa-sack-dollar"></i>
                                <span>250</span>
                                <span>DH</span>
                            </div>
                            <div class="duration">
                                <i class="fa-solid fa-clock"></i>
                                <span>2 hours</span>
                            </div>
                        </div>
                        <div class="btns-group">
                            <a href="#" class="btn btn-prev">Previous</a>
                            <input type="submit" value="Submit" class="btn" />
                        </div>
                    </div>
                </form>
            </div>
            <!-- 
            ?right
        -->
            <div class="right-section">
                <div class="faq">
                    <h2>
                        FAQ
                        <i class="fa-solid fa-question"></i>
                    </h2>
                    <!--faq1-->
                    <div class="accordion">
                        <div class="accordion-header">
                            Faq-1
                            <div class="close">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class="accordion-body">
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy text ever since .
                            </p>
                        </div>
                    </div>

                    <!--faq2-->
                    <div class="accordion">
                        <div class="accordion-header">
                            Faq-2
                            <div class="close">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class="accordion-body">
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy text ever since .
                            </p>
                        </div>
                    </div>

                    <!--faq3-->
                    <div class="accordion">
                        <div class="accordion-header">
                            Faq-3
                            <div class="close">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class="accordion-body">
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy text ever since .
                            </p>
                        </div>
                    </div>

                    <!--faq4-->
                    <div class="accordion">
                        <div class="accordion-header">
                            Faq-4
                            <div class="close">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class="accordion-body">
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy text ever since .
                            </p>
                        </div>
                    </div>
                    <!--faq end-->
                </div>
            </div>
        </div>
    </div>

    <?php
    include('./assets/footer.php');
    ?>

</body>

</html>