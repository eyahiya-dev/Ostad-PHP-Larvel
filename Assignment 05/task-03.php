<!-- 

Task 3: Superglobal Variables in PHP

Create a PHP script that retrieves the user's name and email from the HTML form in Task 1 using the $_POST superglobal variable. Create a new instance of the Person class and use the setName() and setEmail() methods to set the name and email properties based on the form data. Use the getName() and getEmail() methods to display the properties on the webpage.

-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Info - Module 5</title>

    <style>
        .card {
            width: 50%;
            background-color: darkcyan;
            text-align: center;
        }

        .formElement {
            margin: 20px;
            padding: 10px;
        }

        .formHead h1 {
            color: white;
        }

        .formBody {
            margin-top: 30px !important;
        }

        .formBody input {
            width: 40%;
            height: 40px;
            border: 0;
            font-size: 20px;
            color: black;
            /* padding-left: 15px; */
            text-align: center;
        }

        .formBody input:last-child {
            margin-left: 10px;
        }

        .formBody form button {
            margin-top: 30px;
            padding: 8px 15px;
            background-color: white;
            border: 0;
            font-size: 15px;
            font-weight: 700;
            color: black;
            border-radius: 10px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <center>
        <div class="card">
            <div class="formElement">
                <div class="formHead">
                    <h1>User Info</h1>
                </div>
                <div class="formBody">
                    <form action="task-03.php" method="POST">
                        <div class="inputGroup">
                            <input type="text" placeholder="Enter Your Name" name="name">
                            <input type="email" placeholder="Enter Your Email" name="email">
                        </div>
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </center>

    <center>
        <h2><?php

            $name = $_POST['name'];
            $email = $_POST['email'];

            class Person
            {
                private $name;
                private $email;

                function setName($name)
                {
                    $this->name = $name;
                }
                function setEmail($email)
                {
                    $this->email = $email;
                }
                function getName()
                {
                    return $this->name;
                }
                function getEmail()
                {
                    return $this->email;
                }
            }

            $personInfo = new Person();
            $personInfo->setName($name);
            $personInfo->setEmail($email);

            echo "Name: " . $personInfo->getName() . "<br>";
            echo "Email: " . $personInfo->getEmail();


            ?>
        </h2>
    </center>
</body>

</html>