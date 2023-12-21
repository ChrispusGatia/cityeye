<?php
    session_start();
    include('assets/include/config.php'); // get configuration file
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Page Needs ================================================== -->
    <meta charset="utf-8" />
    <title>CityEye - Careers</title>

    <!-- Mobile Specific Metas ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="CityEye Careers Page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0" />
    <meta name="author" content="Themefisher" />
    <meta name="generator" content="Themefisher CityEye HTML Template v1.0" />

    <!-- theme meta -->
    <meta name="theme-name" content="CityEye" />

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png" />

    <!-- Essential stylesheets =====================================-->
    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="plugins/icofont/icofont.min.css" />
    <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css" />
    <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css" />

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css" />
</head>

<body id="top">

    <!-- Header Start -->
    <?php include("assets/include/header.php"); // get header file ?>
    <!-- Header End -->

    <section class="page-title bg-1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="text-white">Careers</span>
                        <h1 class="text-capitalize mb-5 text-lg">Join Our Team</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section job-application-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h2 class="title-color mb-4 text-center">Job Application Form</h2>
                        <form action="submit_application.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="email">Email<sup style="color: red;">*</sup></label>
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="position">Position Applying For<sup style="color: red;">*</sup></label>
                                <select name="position" id="position" class="form-control" required>
                                    <option value="senior_web_developer">Senior Web Developer</option>
                                    <option value="ophthalmology_consultant_retina">Ophthalmology Consultant (Retina)</option>
                                    <option value="business_development_manager">Business Development Manager</option>
                                    <option value="ophthalmic_assistant_trainee_2024">Ophthalmic Assistant Trainee-2024</option>
                                    <!-- Add other positions as needed -->
                                </select>
                            </div>


                            <div class="form-group">
                                <label for="name">Name<sup style="color: red;">*</sup></label>
                                <input type="text" name="name" id="name" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="nationality">Nationality<sup style="color: red;">*</sup></label>
                                <input type="text" name="nationality" id="nationality" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>Gender<sup style="color: red;">*</sup></label>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="gender" id="male" class="form-check-input" value="Male" required>
                                    <label for="male" class="form-check-label">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="gender" id="female" class="form-check-input" value="Female" required>
                                    <label for="female" class="form-check-label">Female</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="address">Address/Location<sup style="color: red;">*</sup></label>
                                <textarea name="address" id="address" class="form-control" rows="3" required></textarea>
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone number<sup style="color: red;">*</sup></label>
                                <input type="tel" name="phone" id="phone" class="form-control" required>
                            </div>

                            <!-- Additional fields aligned side by side -->
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="highest_qualification">Highest academic qualifications<sup style="color: red;">*</sup></label>
                                    <select name="highest_qualification" id="highest_qualification" class="form-control" required>
                                        <option value="PhD">PhD</option>
                                        <option value="Masters">Master's Degree</option>
                                        <option value="Bachelor">Bachelor's Degree</option>
                                        <option value="Higher">Higher Diploma</option>
                                        <option value="Diploma">Diploma</option>
                                        <option value="Certificate">Certificate Course</option>
                                        <!-- Add other options as needed -->
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="major">Major field of academic Study<sup style="color: red;">*</sup></label>
                                    <input type="text" name="major" id="major" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="graduation_date">Graduation Date<sup style="color: red;">*</sup></label>
                                    <input type="date" name="graduation_date" id="graduation_date" class="form-control" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="professional_qualification">Professional Qualification/Certification<sup style="color: red;">*</sup></label>
                                    <input type="text" name="professional_qualification" id="professional_qualification" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Are you currently employed?<sup style="color: red;">*</sup></label>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="currently_employed" id="yes" class="form-check-input" value="Yes" required>
                                    <label for="yes" class="form-check-label">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="currently_employed" id="no" class="form-check-input" value="No" required>
                                    <label for="no" class="form-check-label">No</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="current_role">Current Role<sup style="color: red;">*</sup></label>
                                <input type="text" name="current_role" id="current_role" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="current_employer">Name of Current Employer<sup style="color: red;">*</sup></label>
                                <input type="text" name="current_employer" id="current_employer" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="experience_years">Years of Experience<sup style="color: red;">*</sup></label>
                                <input type="number" name="experience_years" id="experience_years" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="current_gross_pay">Current Gross Monthly Pay (KES)</label>
                                <input type="number" name="current_gross_pay" id="current_gross_pay" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="expected_gross_pay">Expected Gross Monthly Pay (KES)</label>
                                <input type="number" name="expected_gross_pay" id="expected_gross_pay" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="notice_period">Notice Period</label>
                                <input type="text" name="notice_period" id="notice_period" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="resume">Attach Your Resume</label>
                                <input type="file" name="resume" id="resume" class="form-control-file" accept=".pdf,.doc,.docx" required>
                            </div>

                            <div class="form-group">
                                <label for="academic_certificate">Attach Your Academic Certificates</label>
                                <input type="file" name="academic_certificate" id="academic_certificate" class="form-control-file" accept=".pdf,.doc,.docx" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit Application</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- Footer Start -->
    <?php include("assets/include/footer.php"); // get footer file ?>
    <!-- Footer End -->

    <!-- Essential Scripts =====================================-->
    <script src="plugins/jquery/jquery.js"></script>
    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <script src="plugins/shuffle/shuffle.min.js"></script>

    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY"></script>
    <script src="plugins/google-map/gmap.js"></script>

    <script src="js/script.js"></script>

</body>
</html>
