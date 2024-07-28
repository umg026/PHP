<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .errors {
            color: red;
        }
    </style>
</head>

<body>

    <?php
    $nameErr = $emailErr = $skillsErr = $genderErr = $cityErr = "";
    $name = $email = $gender = $city = "";
    $skills = [];

    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        // Name validation
        if (empty($_POST['name'])) {
            $nameErr = 'Name is required';
        } else {
            $name = test_input($_POST['name']);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameErr = "Only letters and white space allowed";
            }
        }

        // Email validation
        if (empty($_POST['email'])) {
            $emailErr = 'Email is required';
        } else {
            $email = test_input($_POST['email']);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }

        // Validate skills
        if (empty($_POST["skills"])) {
            $skillsErr = "At least one skill is required";
        } else {
            $skills = $_POST["skills"];
        }

        // Validate gender
        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }

        // Validate city
        if (empty($_POST["city"])) {
            $cityErr = "City selection is required";
        } else {
            $city = test_input($_POST["city"]);
        }
    }

    // Function to sanitize user input
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="text" name="name" placeholder="Enter name" value="<?php echo htmlspecialchars($name); ?>">
        <span class="errors"><?php echo $nameErr; ?></span>
        <br><br>

        <input type="email" placeholder="Enter email" name="email" value="<?php echo htmlspecialchars($email); ?>">
        <span class="errors"><?php echo $emailErr; ?></span>
        <br><br>

        <input type="checkbox" name="skills[]" value="php" <?php if (in_array("php", $skills))
            echo "checked"; ?>><span>PHP</span>
        <br><br>
        <input type="checkbox" name="skills[]" value="js" <?php if (in_array("js", $skills))
            echo "checked"; ?>><span>JS</span>
        <br><br>
        <input type="checkbox" name="skills[]" value="react" <?php if (in_array("react", $skills))
            echo "checked"; ?>><span>React</span>
        <br><br>
        <input type="checkbox" name="skills[]" value="next" <?php if (in_array("next", $skills))
            echo "checked"; ?>><span>Next Js</span>
        <span class="errors"><?php echo $skillsErr; ?></span>
        <br><br>

        <label for="">Select Gender :</label>
        <br>
        <input type="radio" name="gender" value="male" <?php if ($gender == "male")
            echo "checked"; ?>><span>Male</span>
        <br><br>
        <input type="radio" name="gender" value="female" <?php if ($gender == "female")
            echo "checked"; ?>><span>Female</span>
        <span class="errors"><?php echo $genderErr; ?></span>
        <br><br>

        <select name="city" id="">
            <option value="">Select city</option>
            <option value="ahmd" <?php if ($city == "ahmd")
                echo "selected"; ?>>AHMD</option>
            <option value="plan" <?php if ($city == "plan")
                echo "selected"; ?>>PLN</option>
            <option value="meh" <?php if ($city == "meh")
                echo "selected"; ?>>MEH</option>
            <option value="gan" <?php if ($city == "gan")
                echo "selected"; ?>>GANDHINAGAR</option>
        </select>
        <span class="errors"><?php echo $cityErr; ?></span>
        <br><br>

        <button type="submit">Submit</button>
    </form>

    <?php
    if (empty($cityErr) && empty($genderErr) && empty($nameErr) && empty($emailErr) && empty($skillsErr) && !empty($name)) {
        echo "<h2>Your Input:</h2>";
        echo "User name is " . $name . "<br>";
        echo "User email is " . $email . "<br>";
        echo "User skills are " . implode(',', $skills) . "<br>";
        echo "User gender is " . $gender . "<br>";
        echo "User city is " . $city . "<br>";
    }
    ?>

</body>

</html>