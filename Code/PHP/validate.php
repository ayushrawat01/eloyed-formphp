<?php

    if (isset($_POST['submit']))
    {

        require 'main.php';

        
        $fName = mysqli_real_escape_string($conn, $_POST['f_name']);
        $mName = mysqli_real_escape_string($conn, $_POST['m_name']);
        $lName = mysqli_real_escape_string($conn, $_POST['l_name']);
        $dob = $_POST['dob'];
        $gen = $_POST['gender'];
        $_add = mysqli_real_escape_string($conn, $_POST['add']);
        $cit = mysqli_real_escape_string($conn, $_POST['city']);
        $state = mysqli_real_escape_string($conn, $_POST['state']);
        $p_code = mysqli_real_escape_string($conn, $_POST['p_code']);
        $email = mysqli_real_escape_string($conn, $_POST['e_mail']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);

        if(!preg_match("/^[a-z]+$/i", $fName)){
            #check for valid name
            header("Location: ../../form.php?error=invalidFname&f_name=$fName&m_name=$mName&l_name=lName&dob=$dob&gender=$gen&add=$_add&city=$cit&state=$state&p_code=$p_code&e_mail=$email&phone=$phone");
            exit();

        }

        else
        {

            if(!empty($mName)){
                #check if the user has entered the mName
                if(!preg_match("/^[a-z]+$/i", $mName)){
                    #check for valid name
                    header("Location: ../../form.php?error=invalidMname&f_name=$fName&m_name=$mName&l_name=lName&dob=$dob&gender=$gen&add=$_add&city=$cit&state=$state&p_code=$p_code&e_mail=$email&phone=$phone");
                    exit();

                }

            }

            if(!preg_match("/^[a-z]+$/i", $lName)){
                #check for valid name
                header("Location: ../../form.php?error=invalidLname&f_name=$fName&m_name=$mName&l_name=lName&dob=$dob&gender=$gen&add=$_add&city=$cit&state=$state&p_code=$p_code&e_mail=$email&phone=$phone");
                exit();

            }

            else{

                
                // if (!preg_match('/^([0-9]{2})-([0-9]{2})-([0-9]{4})$/', $dob)){

                //     # Check the format
                //     header("Location: ../../form.php?error=invalidDate");
                //     exit();

                // }
                // elseif (!checkdate($parts[1],$parts[2],$parts[3])){

                //     header("Location: ../../form.php?error=invalidDate");
                //     exit();

                // }
                
                {

                    # Convert date of birth to DateTime object
                    $cdob =  new DateTime($dob);

                    $minInterval = DateInterval::createFromDateString('16 years');
                    $maxInterval = DateInterval::createFromDateString('65 years');
                

                    $minDobLimit = ( new DateTime() )->sub($minInterval);
                    $maxDobLimit = ( new DateTime() )->sub($maxInterval);
                
                    if ($cdob <= $maxDobLimit){

                        # Make sure that the user has a reasonable birth year
                        header("Location: ../../form.php?error=maxAge&f_name=$fName&m_name=$mName&l_name=lName&dob=$dob&gender=$gen&add=$_add&city=$cit&state=$state&p_code=$p_code&e_mail=$email&phone=$phone");
                        exit();

                    }
                    # Check whether the user is 18 years old.
                    elseif ($cdob >= $minDobLimit) {

                        header("Location: ../../form.php?error=minAge&f_name=$fName&m_name=$mName&l_name=lName&dob=$dob&gender=$gen&add=$_add&city=$cit&state=$state&p_code=$p_code&e_mail=$email&phone=$phone");
                        exit();

                    }
                    else{

                        if(!preg_match("/^[a-zA-Z0-9\/\s #,.-]+$/i", $_add)){

                            header("Location: ../../form.php?error=invalidAdd&f_name=$fName&m_name=$mName&l_name=lName&dob=$dob&gender=$gen&add=$_add&city=$cit&state=$state&p_code=$p_code&e_mail=$email&phone=$phone");
                            exit();

                        }
                        else{

                            if(!preg_match("/^[a-z]+$/i", $cit)){

                                header("Location: ../../form.php?error=invalidCity&f_name=$fName&m_name=$mName&l_name=lName&dob=$dob&gender=$gen&add=$_add&city=$cit&state=$state&p_code=$p_code&e_mail=$email&phone=$phone");
                                exit();
                            
                            }

                            else
                            {

                                if(!preg_match("/^[a-z]+$/i", $state)){

                                    header("Location: ../../form.php?error=invalidState&f_name=$fName&m_name=$mName&l_name=lName&dob=$dob&gender=$gen&add=$_add&city=$cit&state=$state&p_code=$p_code&e_mail=$email&phone=$phone");
                                    exit();

                                }

                                else{

                                    if(!preg_match("/^[0-9]{6}+$/", $p_code)){

                                        header("Location: ../../form.php?error=invalidPcode&f_name=$fName&m_name=$mName&l_name=lName&dob=$dob&gender=$gen&add=$_add&city=$cit&state=$state&p_code=$p_code&e_mail=$email&phone=$phone");
                                        exit();
                                        
                                    }
                                    else{

                                        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

                                            header("Location: ../../form.php?error=invalidmail&f_name=$fName&m_name=$mName&l_name=lName&dob=$dob&gender=$gen&add=$_add&city=$cit&state=$state&p_code=$p_code&e_mail=$email&phone=$phone");
                                            exit();

                                        }

                                        else{

                                            if(!preg_match("/^[0-9]{10}+$/", $phone)){

                                                header("Location: ../../form.php?error=invalidPhone&f_name=$fName&m_name=$mName&l_name=lName&dob=$dob&gender=$gen&add=$_add&city=$cit&state=$state&p_code=$p_code&e_mail=$email&phone=$phone");
                                                exit();

                                            }

                                            else{

                                                $sql = "SELECT phone FROM primary_data where phone=?";
                                                $stmt = mysqli_stmt_init($conn);

                                                if(!mysqli_stmt_prepare($stmt, $sql)){

                                                    header("Location: ../../form.php?error=sqlerror&f_name=$fName&m_name=$mName&l_name=lName&dob=$dob&gender=$gen&add=$_add&city=$cit&state=$state&p_code=$p_code&e_mail=$email&phone=$phone");
                                                    exit();

                                                }

                                                else{

                                                    mysqli_stmt_bind_param($stmt, "s", $phone);
                                                    mysqli_stmt_execute($stmt);
                                                    mysqli_stmt_store_result($stmt);
                                                    $result = mysqli_stmt_num_rows($stmt);

                                                    if($result > 0){

                                                        header("Location: ../../form.php?error=phoneExists&f_name=$fName&m_name=$mName&l_name=lName&dob=$dob&gender=$gen&add=$_add&city=$cit&state=$state&p_code=$p_code&e_mail=$email&phone=$phone");
                                                        exit();

                                                    }

                                                    else{

                                                        $sql = "INSERT INTO primary_data (fName, mName, lName, dob, gender, email, phone) values (?, ?, ?, ?, ?, ?, ?)";
                                                        $stmt = mysqli_stmt_init($conn);
                                                        if(!mysqli_stmt_prepare($stmt, $sql)){

                                                            header("Location: ../../form.php?error=sqlerror&f_name=$fName&m_name=$mName&l_name=lName&dob=$dob&gender=$gen&add=$_add&city=$cit&state=$state&p_code=$p_code&e_mail=$email&phone=$phone");
                                                            exit();

                                                        }

                                                        else{

                                                            mysqli_stmt_bind_param($stmt, 'sssdssi', $fName, $mName, $lName, $dob, $gen, $email, $phone);
                                                            
                                                            mysqli_stmt_execute($stmt);

                                                            header("Location: ../../section2.php?success&phone=$phone");

                                                        }

                                                    }

                                                }

                                            }

                                        }

                                    }

                                }

                            }

                        }

                    }

                }

            }

        }

    }

?>