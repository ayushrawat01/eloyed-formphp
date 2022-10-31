<?php



?>


<html>

    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>eLoyed- Recruitment form</title>

        <!--favicon-->
        <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
        <link rel="manifest" href="favicon/site.webmanifest">
        
        <!--Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        
        <!--google fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        
        <!--stylesheet-->
        <link rel="stylesheet" href="css/stylesheet.css">

        <style>

            .err{
                color: red;
            }

        </style>
        

    </head>

    <body>

        <section>

            <div class="cover-container d-flex w-100% h-45% p-3 mx-auto flex-column" class="mb-auto">

                <img class="h_image" src="images/2344crop.jpg" alt="eLoyed.img">

            </div>

            <div class="p_details">
                                
                <div class="descript">
                    
                    <div class="divbar"></div>
                    
                    <H1>eLoyed application form</H1>

                    <h5>eLoyed recruitment form is for job seekers in both private and public sectors.</h5>
                    <h5>eLoyed is giving an opportunity to job seekers to get recruited in reputed private and public institutions.</h5>
                    <h5 style="font-weight: 900;">Apply now.</h5>
                    <h5 style="font-weight: 900;">Don't miss the opportunity.</h5>
                    <p class="err">* field is required</p>

                </div>

                <form action="code/php/validate.php" method="POST">

                    <div class="q_container">

                        <label for="f_name">First Name<span class="err">*</span></label>
                        <div class="form-floating">

                            <input name="f_name" type="text" class="form-control" id="f_name" placeholder="John">
                            <label for="f_name">Enter your first name</label>


                        </div>

                    </div>

                    <div class="q_container">

                        <label for="m_name">Middle Name</label>
                        <div class="form-floating">

                            <input name="m_name" type="text" class="form-control" id="m_name" placeholder="Tim">
                            <label for="m_name">Enter your middle name</label>


                        </div>

                    </div>

                    <div class="q_container">

                        <label for="l_name">Last Name<span class="err">*</span></label>
                        <div class="form-floating">

                            <input name="l_name" type="text" class="form-control" id="l_name" placeholder="Doe">
                            <label for="l_name">Enter your last name</label>


                        </div>

                    </div>

                    <div class="q_container">

                        <label for="dob">Date Of Birth<span class="err">*</span></label>
                        <div class="form-floating">

                            <input name="dob" type="date" class="form-control" id="dob" placeholder="dd/mm/yyyy">
                            <label for="dob">Enter your date of birth</label>


                        </div>

                    </div>


                    <div class="q_container">

                        <label for="gender">Gender<span class="err">*</span></label>
                        <div class="form-floating">

                            <select name="gender" class="form-select" id="gender">

                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>

                            </select>

                            <label for="gender">Select Gender</label>

                        </div>

                    </div>

                    <div class="q_container">

                        <label for="add">Address<span class="err">*</span></label>
                        <div class="form-floating">

                            <input name="add" type="text" class="form-control" id="add" placeholder="Street name, Area">
                            <label for="add">Enter your street address</label>


                        </div>

                    </div>

                    <div class="q_container">

                        <label for="city">City<span class="err">*</span></label>
                        <div class="form-floating">

                            <input name="city" type="text" class="form-control" id="city" placeholder="City">
                            <label for="city">Enter your City</label>


                        </div>

                    </div>

                    <div class="q_container">

                        <label for="state">State<span class="err">*</span></label>
                        <div class="form-floating">

                            <input name="state" type="text" class="form-control" id="state" placeholder="State">
                            <label for="state">Enter your State name</label>


                        </div>

                    </div>

                    <div class="q_container">

                        <label for="p_code">Pin code<span class="err">*</span></label>
                        <div class="form-floating">

                            <input name="p_code" type="text" class="form-control" id="p_code" placeholder="111 111">
                            <label for="p_code">Enter your Pin code</label>


                        </div>

                    </div>

                    <div class="q_container">

                        <label for="e_mail">Email<span class="err">*</span></label>
                        <div class="form-floating">

                            <input name="e_mail" type="email" class="form-control" id="e_mail" placeholder="name@example.com">
                            <label for="e_mail">Enter your Email id</label>


                        </div>

                    </div>

                    <div class="q_container">

                        <label for="phone">Phone<span class="err">*</span></label>
                        <div class="form-floating">

                            <input name="phone" type="tel" class="form-control" id="phone" placeholder="9999999999">
                            <label for="phone">Enter your phone number</label>


                        </div>

                    </div>

                    <div class="navigation">
        
                        <div class="container">
        
                            <div class="nxt_btn">
        
                                <a href="section2.php">
                                
                                    <button type="submit" name="submit" value="submit" class="btn btn-soid btn-light nxt"> Next</button>
        
                                </a>
        
                            </div>
        
                            <div class="pbar_c">
            
                                <div class="pbar">
            
                                    <div class="progress"></div>
            
                                </div>
            
                                <div class="page" aria-hidden="true">Page 1 of 4</div>
            
                            </div>
                            
                        </div>
        
                    </div>

                </form>
                
            </div>

            <br>


        </section>

        <footer>

            <div class="footer">

                <div class="disclaimer">The data will be used to create a professional profile.</div>

                <img class="logo" src="images/eLoyed-tp-shrink.png" alt="eLoyed logo">

            </div>

        </footer>

        
        <!--Bootstrap-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

        <script src="code/code.js" charset="utf-8"></script>

    </body>


</html>