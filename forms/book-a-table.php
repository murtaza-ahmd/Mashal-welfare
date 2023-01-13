<?php
                                if (isset($_POST['done'])) {
                                    $name = $_POST['name'];
                                    $email = $_POST['email'];
                                    $phone = $_POST['phone'];
                                    $mess = $_POST['message'];

                                    mysqli_query($connect, "insert into member values('','$name','$email','$phone','$mess')");
                                    echo "Record added...";
                                    // $result = mysqli_query($connect, "select * from member where name='$name'");
                                    // $count = mysqli_num_rows($result);


                                    // if ($count > 0) {
                                    //     echo "name Already Exists...";
                                    // } 
                                    // else
                                    //  {
                                       
                                    //         mysqli_query($connect, "insert into member values('','$name','$email','$phone','$mess')");
                                    //         echo "Record added...";
                                            

                                        
                                       
                                    // }
                                   
                                }
                           ?>